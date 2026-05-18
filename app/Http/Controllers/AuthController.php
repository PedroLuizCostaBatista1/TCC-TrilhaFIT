<?php
    namespace App\Http\Controllers;

    use App\Models\Usuario;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Auth;

    class AuthController extends Controller {
        public function telaLogin() {
            return view('auth.login');
        }

        public function telaEsqueciSenha() {
            return view('auth.trocarsenha');
        }

        public function verificarEmail(Request $request) {

        }

        public function telaRedefinirSenha($email) {

        }

        public function atualizarSenha(Request $request) {
            
        }

        public function login(Request $request) {
            $request->validate([
                'email' => ['required', 'email'],
                'senha' => ['required']
            ]);

            $usuario = Usuario::where('email', $request->email)->first();

            if (!$usuario or !Hash::check($request->senha, $usuario->senha)) {
                return back()->withErrors([
                    'credenciais' => 'E-mail ou senha estão invalidos. Tente novamente'
                ])->onlyInput('email');
            }

            Auth::login($usuario);

            $request->session()->regenerate();
            return redirect()->intended('perfil');
        }

        public function logout(Request $request) {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/login');
        }
    }
?>