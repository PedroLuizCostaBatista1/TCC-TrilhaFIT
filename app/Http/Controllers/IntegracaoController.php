<?php
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
  
    class IntegracaoController extends Controller {
        public function index() {
            return view('auth.integracao');
        }

        public function salvar(Request $request) {
            $request->validate([
                'ambiente_treino' => 'required|in:domestico,academia',
                'nivel_fisico' => 'required|in:iniciante,intermediario,avancado',
                'peso' => 'required|numeric|min:30|max:250',
                'altura' => 'required|numeric|min:1.00|max:2.50',
            ]);

            $usuario = Auth::user();
        
            $usuario->update([
                'ambiente_treino' => $request->ambiente_treino,
                'nivel_fisico' => $request->nivel_fisico,
                'peso' => $request->peso,
                'altura' => $request->altura,
            ]);

            return response()->json(['redirecionar' => route('perfil')], 200);
        }
    }
?>