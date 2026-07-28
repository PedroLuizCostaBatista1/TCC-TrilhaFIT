<?php
    namespace App\Http\Controllers;

    use App\Models\Usuario;
    use App\Models\Estatisticas;

    use Illuminate\Http\Request;
    use Illuminate\Validation\Rule;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Validation\ValidationException; 
    use Illuminate\Support\Str;

    class UsuarioController extends Controller {
        
        public function telaCadastro() {
            return view('auth.cadastro');
        }

        public function cadastrar(Request $request) {
            $validated = $request->validate([
                'nome' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:usuarios',
                'senha' => 'required|string|min:8',
                'cpf' => 'required|string|size:14|unique:usuarios',
                'academia' => 'nullable|string|max:255'
            ], [
                'email.unique' => 'Este e-mail já existe',
                'senha.min' => 'Senha abaixo de 8 caracteres',
                'cpf.size' => 'CPF tem que ser exatamente 11 digitos',
                'cpf.unique' => 'Este CPF já existe'
            ]);

            if (Str::endsWith($request->email, 'instrutor.com')) {
                $validated['tipo'] = 'instrutor';
            }

            $validated['senha'] = Hash::make($validated['senha']);
            $usuario = DB::transaction(function() use ($validated) {
                $usuarioCriado = Usuario::create($validated);

                Estatisticas::create([
                    'usuarios_id' => $usuarioCriado->id
                ]);

                return $usuarioCriado;
            });

            Auth::login($usuario);

            return response()->json(['redirecionar' => route('integracao.index')], 200);
        }

        public function editar() {
            $usuario = Auth::user();
            return view('auth.editarperfil', compact('usuario'));
        }

        public function atualizar(Request $request) {
            $usuario = Auth::user();
            $validated = $request->validate([
                'nome' => 'required|string|max:255',
                'email' => ['required', 'string', 'email', 'max:255', Rule::unique('usuarios')->ignore($usuario->id)],
                'senha' => 'nullable|string|min:8|confirmed',
                'academia' => 'nullable|string|max:255'
            ], [
                'senha.min' => 'Senha abaixo de 8 caracteres',
                'senha.confirmed' => 'As senhas não concidem',
            ]);

            if ($request->filled('senha')) {
                $validated['senha'] = Hash::make($request->senha);
            } else {
                unset($validated['senha']);
            }

            $usuario->update($validated);
            session()->flash('perfil-editado', 'Perfil atualizado com sucesso!');

            return response()->json(['redirecionar' => route('perfil')], 200);
        }

        public function deletar(Request $request) {
            $usuario = Auth::user();
            $usuario->delete();

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            session()->flash('sucesso', 'Conta deletada com sucesso!');

            return response()->json(['redirecionar' => route('login')], 200);
        }
    }
?>