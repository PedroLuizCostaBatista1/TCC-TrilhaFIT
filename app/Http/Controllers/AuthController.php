<?php
    namespace App\Http\Controllers;

    use App\Models\Usuario;
    use App\Mail\RecuperarSenhaMail;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Validation\ValidationException;

    use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

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
                return response()->json([
                    'errors' => [
                        'email' => ['E-mail inválido. Tente novamente']
                    ]
                ], 422);
            }

            $codigo = rand(100000, 999999);
            session(['codigo_recuperacao' => $codigo, 'email_recuperacao' => $request->email]);

            try {
                Mail::to($request->email)->send(new RecuperarSenhaMail($codigo));
            } catch (TransportExceptionInterface $e) {
                return response()->json([
                    'errors' => [
                        'email' => ['Ocorreu um erro ao enviar codigo pelo e-mail']
                    ]
                ], 500);
            }

            return response()->json(['redirecionar' => route('verificar-codigo')], 200);
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
                return response()->json(['redirecionar' => route('redefinir-senha')], 200);
            }

            return response()->json([
                'errors' => [
                    'codigo' => ['O código informado é invalido ou expirou']
                ]
            ], 422);
        }

        public function reenviarCodigo(Request $request) {
            $tempoEspera = (int) session('tempo_espera', 0);
            $tempoAgora = now()->timestamp;

            if ($tempoEspera > $tempoAgora) {
                $tempoRestante = $tempoEspera - $tempoAgora;
                
                return response()->json([
                    'mensagem' => "Aguarde {$tempoRestante} segundos para reenviar.",
                    'tempo_espera' => $tempoEspera
                ], 422);
            }

            $codigo = rand(100000, 999999);
            $email = session('email_recuperacao');
            $novoTempoEspera = $tempoAgora + 30;

            session([
                'codigo_recuperacao' => $codigo,
                'tempo_espera' => $novoTempoEspera
            ]);

            try {
                Mail::to($email)->send(new RecuperarSenhaMail($codigo));
            } catch (TransportExceptionInterface $e) {
                return response()->json([
                    'errors' => [
                        'email' => ['Ocorreu um erro ao enviar codigo pelo e-mail']
                    ]
                ], 500);
            }

            return response()->json(['tempo_espera' => $novoTempoEspera]); 
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
                return response()->json([
                    'errors' => [
                        'senha' => ['Sessão expirada']
                    ]
                ], 422);
            }

            $usuario->senha = Hash::make($request->senha);
            $usuario->save();

            session()->forget(['codigo_recuperacao', 'email_recuperacao']);
            session()->flash('sucesso', 'Senha redefinida com sucesso!');

            return response()->json(['redirecionar' => route('login')], 200);
        }

        public function login(Request $request) {
            $request->validate([
                'email' => ['required', 'email'],
                'senha' => ['required']
            ]);

            $usuario = Usuario::where('email', $request->email)->first();

            if (!$usuario or !Hash::check($request->senha, $usuario->senha)) {
                return response()->json([
                    'errors' => [
                        'geral' => ['E-mail ou senha é inválido. Tente novamente']
                    ]
                ], 422);
            }

            Auth::login($usuario);
            $request->session()->regenerate();

            return response()->json(['redirecionar' => route('perfil')], 200);
        }

        public function logout(Request $request) {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();
            session()->flash('sucesso', 'Perfil deslogado com sucesso!');

            return response()->json(['redirecionar' => route('login')], 200);
        }
    }
?>