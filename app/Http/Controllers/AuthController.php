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
            $request -> validate([
                'email' => ['required', 'email']
            ]);

            $usuario = Usuario::where('email', $request->email)->first();

            if (!$usuario) {
                return back()->withErrors([
                    'email' => 'E-mail invalido. Tente novamente'
                ])->onlyInput('email');
            }

            $codigo = rand(100000, 999999);

            session(['codigo_recuperacao']);

            return redirect()->route('redefinir-senha', ['email' => $request->email]);
        }

        public function telaRedefinirSenha($email) {
            return view('auth.redefinirsenha', ['email' => $email]);
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