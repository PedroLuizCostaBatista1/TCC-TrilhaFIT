<?php
    namespace App\Http\Controllers;

    use App\Models\Turma;
    use App\Models\Usuario;
    use App\Models\Aviso;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Str;

    class TurmaController extends Controller {
        public function index() {
            $usuario = Auth::user();
            $turmas = ($usuario->tipo === 'instrutor') 
                ? Turma::where('instrutor_id', $usuario->id)->get()
                : $usuario->turmas;

            return view('dashboard.turma.index', compact('turmas'));
        }

        public function criar() {
            return view('dashboard.turma.criar');
        }

        public function salvar(Request $request) {
            $validated = $request->validate([
                'nome' => 'required|string|max:255',
                'descricao' => 'nullable|string'
            ]);

            $validated['instrutor_id'] = Auth::id();
            $validated['codigo'] = Str::of(Str::random(6))->upper();

            Turma::create($validated);
            return redirect()->route('turma');
        }

        public function exibir($id) {
            $turma = Turma::with(['alunos', 'avisos', 'instrutor'])->findOrFail($id);
            return view('dashboard.turma.turma', compact('turma'));
        }

        public function editar($id) {
            $turma = Turma::findOrFail($id);

            if ($turma->instrutor_id !== Auth::id()) {
                abort(403, 'Você não tem permissão para editar esta turma.');
            }

            return view('dashboard.turma.editar', compact('turma'));
        }

        public function atualizar(Request $request, $id) {
            $turma = Turma::findOrFail($id);

            if ($turma->instrutor_id !== Auth::id()) {
                abort(403, 'Você não tem permissão para editar esta turma.');
            }

            $validated = $request->validate([
                'nome' => 'required|string|max:255',
                'descricao' => 'nullable|string'
            ]);

            $turma->update($validated);

            return redirect()->route('turma.exibir', $turma->id)->with('success', 'Turma atualizada com sucesso!');
        }

        public function deletar($id) {
            $turma = Turma::findOrFail($id);

            if ($turma->instrutor_id !== Auth::id()) {
                abort(403, 'Você não tem permissão para editar esta turma.');
            }

            $turma->delete();

            return redirect()->route('turma')->with('success', 'Turma excluída permanentemente.');
        }

        public function entrar() {
            return view('dashboard.turma.entrar');
        }

        public function entrarComCodigo(Request $request) {
            $request->validate([
                'codigo' => 'required|string|max:6'
            ]);

            $codigoFormatado = strtoupper($request->codigo);
            $turma = Turma::where('codigo', $codigoFormatado)->first();
            
            if (!$turma) {
                return back()->withErrors(['codigo_erro' => 'Código inválido. Tente novamente']);
            }

            $turma->alunos()->syncWithoutDetaching([Auth::id()]);

            return redirect()->route('turma');
        }

        public function postarAviso() {

        }
    }
?>