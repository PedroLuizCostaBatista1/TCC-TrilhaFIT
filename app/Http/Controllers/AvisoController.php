<?php
    namespace App\Http\Controllers;

    use App\Models\Aviso;
    use App\Models\Turma;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class AvisoController extends Controller {
        public function publicar(Request $request, $turmaId) {
            $request->validate([
                'conteudo' => 'required|string|max:1000'
            ]);

            $turma = Turma::findOrFail($turmaId);

            if ($turma->instrutor_id !== Auth::id()) {
                abort(403, 'Apenas o instrutor deste mural pode postar avisos.');
            }

            Aviso::create([
                'conteudo' => $request->conteudo,
                'mural_id' => $turma->id
            ]);

            return redirect()->back()->with('success', 'Aviso publicado no mural!');
        }
    }
?>