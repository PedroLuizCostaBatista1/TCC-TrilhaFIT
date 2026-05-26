<?php
    namespace App\Http\Controllers;

    use App\Models\Usuario;
    use App\Models\Estatisticas;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\DB;

    class UsuarioController extends Controller {
        
        public function telaCadastro() {
            return view('auth.cadastro');
        }

        public function store(Request $request) {
            $validated = $request->validate([
                'nome' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:usuarios',
                'senha' => 'required|string|min:8',
                'cpf' => 'required|string|digits:11|unique:usuarios',
                'academia' => 'string|max:255'
            ]);

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
    }
?>