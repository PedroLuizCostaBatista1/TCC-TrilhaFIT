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

        public function editar($id) {
            $aviso = Aviso::findOrFail($id);

            if ($aviso->turma->instrutor_id !== Auth::id()) {
                abort(403, 'Apenas o instrutor deste mural pode postar avisos.');
            }

            return view('dashboard.turma.aviso.editar', compact('aviso'));
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

        public function atualizar(Request $request, $id) {
            $request->validate([
                'titulo' => 'required|string|max:150',
                'conteudo' => 'required|string|max:1000',
                'tipo' => 'required|in:desafio,anuncio,informacao,lembrete'
            ]);

            $aviso = Aviso::findOrFail($id);

            if ($aviso->turma->instrutor_id !== Auth::id()) {
                abort(403, 'Apenas o instrutor deste mural pode postar avisos.');
            }

            $aviso->update([
                'titulo' => $request->titulo,
                'conteudo' => $request->conteudo,
                'tipo' => $request->tipo,
            ]);

            return redirect()->route('turma.exibir', $aviso->turma_id)->with('success', 'Aviso publicado com sucesso!');
        }

        public function deletar($id) {
            $aviso = Aviso::findOrFail($id);

            if ($aviso->turma->instrutor_id !== Auth::id()) {
                abort(403, 'Apenas o instrutor deste mural pode postar avisos.');
            }

            $aviso->delete();

            return redirect()->back()->with('success', 'Aviso removido do mural.');
        }
    }
?>