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

        public function login(Request $request) {
            $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required']
            ]);

            $usuario = Usuario::where('email', $request->email)->first();
    
            if (!$usuario) {
                dd("Erro de Login: O e-mail '{$request->email}' não foi encontrado no banco de dados.");
            }

            if (!Hash::check($request->email, $request->password)) {
        
                dd('Nao');
            }else{
                dd('Login');
            }

            if (Auth::login($usuario)) {
                $request->session()->regenerate();
                return redirect()->intended('dashboard.perfil');
            }

            dd("Erro desconhecido: O usuário e a senha estão certos, mas o Laravel não conseguiu criar a sessão local.");
        }

        public function logout(Request $request) {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/login');
        }
    }
?>