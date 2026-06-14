<?php
    namespace App\Http\Controllers;

    use App\Models\Usuario;
    use App\Mail\RecuperarSenhaMail;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;
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
                'email' => 'required|email'
            ]);

            $usuario = Usuario::where('email', $request->email)->first();

            if (!$usuario) {
                return back()->withErrors(['email' => 'E-mail invalido. Tente novamente'])->onlyInput('email');
            }

            $codigo = rand(100000, 999999);

            session(['codigo_recuperacao' => $codigo, 'email_recuperacao' => $request->email]);

            Mail::to($request->email)->send(new RecuperarSenhaMail($codigo));

            return redirect()->route('verificar-codigo');
        }

        public function telaVerificarCodigo() {
            return view('auth.verificarcodigo');
        }

        public function validarCodigo(Request $request) {
            $request->validate([
                'codigo' => 'required|numeric|digits:6'
            ], [
                'codigo.digits' => 'O código ter que ser exatamente 6 digitos.'
            ]);

            if ($request->codigo == session('codigo_recuperacao')) {
                $email = session('email_recuperacao');
                return redirect()->route('redefinir-senha');
            }

            return back()->withErrors([
                'codigo' => 'O código informado é invalido ou expirou.'
            ]);
        }

        public function reenviarCodigo(Request $request) {
            $tempoEspera = (int) session('tempo_espera', 0);
            $tempoAgora = now()->timestamp;

            if ($tempoEspera > $tempoAgora) {
                $tempoRestante = $tempoEspera - $tempoAgora;
                return back()->withErrors([
                    'tempo' => "Aguarde {$tempoRestante} segundos para reenviar."
                ]);
            }

            $codigo = rand(100000, 999999);
            $email = session('email_recuperacao');
            $novoTempoEspera = $tempoAgora + 30;

            session([
                'codigo_recuperacao' => $codigo,
                'tempo_espera' => $novoTempoEspera
            ]);

            Mail::to($email)->send(new RecuperarSenhaMail($codigo));

            return back()->with('sucesso', 'Código reenviado!');
        }

        public function telaRedefinirSenha() {
            return view('auth.redefinirsenha');
        }

        public function atualizarSenha(Request $request) {
            $request->validate([
                'senha' => 'required|min:8|confirmed'
            ], [
                'senha.min' => 'Senha abaixo de 8 caracteres',
                'senha.confirmed' => 'As senhas não coincidem. Tente novamente'
            ]);

            $email = session('email_recuperacao');
            $usuario = Usuario::where('email', $email)->first();

            if (!$usuario) {
                return redirect()->route('trocar-senha')->withErrors(['email' => 'Sessão expirada.']);
            }

            $usuario->senha = Hash::make($request->senha);
            $usuario->save();

            session()->forget(['codigo_recuperacao', 'email_recuperacao']);

            return redirect()->route('login')->with('sucesso', 'Senha alterada com sucesso!');
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