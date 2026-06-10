<?php
    namespace App\Http\Controllers;

    use Carbon\Carbon;
    use App\Models\Estatisticas;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class PerfilController extends Controller {
        public function exibirEstatisticas(Request $request) {
            $mes = $request->get('mes', now()->month);
            $ano = $request->get('ano', now()->year);
    
            $dataSelecionada = Carbon::createFromDate($ano, $mes, 1);
    
            $mesAnterior = $dataSelecionada->copy()->subMonth();
            $proximoMes = $dataSelecionada->copy()->addMonth();
    
            $estatistica = Estatisticas::where('usuarios_id', Auth::id())
                ->whereMonth('created_at', $mes)
                ->whereYear('created_at', $ano)
                ->selectRaw('
                    SUM(distancia) as distancia,
                    SUM(corridas) as corridas,
                    SUM(calorias) as calorias,
                    AVG(velocidade) as velocidade
                ')
                ->first();
    
            $nomeMes = ucfirst($dataSelecionada->translatedFormat('F'));
    
            return view('dashboard.perfil', compact(
                'estatistica', 
                'nomeMes', 
                'ano', 
                'mesAnterior', 
                'proximoMes'
            ));
        }
    }
?>