<?php
    namespace App\Http\Controllers;

    use App\Models\Usuario;
    use App\Models\Estatisticas;
    use Illuminate\Http\Request;
    use Illuminate\Validation\Rule;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\DB;
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
                'cpf' => 'required|string|digits:11|unique:usuarios',
                'academia' => 'nullable|string|max:255'
            ], [
                'email.unique' => 'Este e-mail já existe',
                'senha.min' => 'Senha abaixo de 8 caracteres',
                'cpf.digits' => 'CPF invalido',
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

            return redirect()->route('perfil');
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
            ]);

            if ($request->filled('senha')) {
                $validated['senha'] = Hash::make($request->senha);
            } else {
                unset($validated['senha']);
            }

            $usuario->update($validated);

            return redirect()->route('perfil')->with('success', 'Perfil atualizado com sucesso!');
        }

        public function deletar(Request $request) {
            $usuario = Auth::user();
            $usuario->delete();

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/')->with('status', 'Conta excluída com sucesso.');
        }
    }
?>