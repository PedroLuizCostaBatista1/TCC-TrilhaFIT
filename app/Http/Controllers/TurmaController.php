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

            if ($usuario->tipo === 'instrutor') {
                $turma = Turma::where('instrutor_id', $usuario->id)->first();
            } else {
                $turma = $usuario->turmas()->first();
            }

            if (!$turma) {
                return view('dashboard.turma.index');
            }

            return view('dashboard.turma.turma', compact('turma'));
        }

        public function criar() {
            return view('dashboard.turma.criar');
        }

        public function salvar(Request $request) {
            if (Turma::where('instrutor_id', Auth::id())->exists()) {
                return redirect()->back()->with('error', 'Você já possui um mural criado');
            }

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
            $turma = Turma::with(['avisos', 'instrutor'])
                    ->withCount('alunos')
                    ->findOrFail($id);
                    
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
                'codigo' => 'required|string|min:6|max:6'
            ], [
                'codigo.max' => 'O código ter que ser exatamente 6 caracteres.',
                'codigo.min' => 'O código ter que ser exatamente 6 caracteres.'
            ]);

            $codigoFormatado = strtoupper($request->codigo);
            $turma = Turma::where('codigo', $codigoFormatado)->first();
            
            if (!$turma) {
                return back()->withErrors(['codigo' => 'Código inválido. Tente novamente']);
            }

            $turma->alunos()->save(Auth::user());

            return redirect()->route('turma'); 
        }

        public function sair() {
            $usuario = Auth::user();
            $usuario->turma_id = null;
            $usuario->save();

            return redirect()->route('turma')->with('success', 'Você saiu do mural com sucesso!');
        }

        public function postarAviso() {

        }
    }
?>