<?php
    namespace App\Http\Controllers;

    use App\Models\Aviso;
    use App\Models\Turma;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class AvisoController extends Controller {
        public function criar($turmaId) {
            $turma = Turma::findOrFail($turmaId);

            if ($turma->instrutor_id !== Auth::id()) {
                abort(403, 'Apenas o instrutor deste mural pode postar avisos.');
            }

            return view('dashboard.turma.aviso.criar', compact('turma'));
        }

        public function publicar(Request $request, $turmaId) {
            $request->validate([
                'titulo' => 'required|string|max:150',
                'conteudo' => 'required|string|max:1000',
                'tipo' => 'required|in:desafio,anuncio,informacao,lembrete'
            ]);

            $turma = Turma::findOrFail($turmaId);

            if ($turma->instrutor_id !== Auth::id()) {
                abort(403, 'Apenas o instrutor deste mural pode postar avisos.');
            }

            Aviso::create([
                'titulo' => $request->titulo,
                'conteudo' => $request->conteudo,
                'tipo' => $request->tipo,
                'turma_id' => $turma->id
            ]);

            return redirect()->route('turma.exibir', $turma->id)->with('success', 'Aviso publicado com sucesso!');
        }
    }
?>