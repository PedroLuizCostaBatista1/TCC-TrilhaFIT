<?php
    use Carbon\Carbon;
    use App\Models\Estatisticas;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    public function exibirEstatisticas(Request $request) {
        $mes = $request->get('mes', now()->month);
        $ano = $request->get('ano', now()->year);

        $dataSelecionada = Carbon::createFromDate($ano, $mes, 1);

        $mesAnterior = $dataSelecionada->copy()->subMonth();
        $proximoMes = $dataSelecionada->copy()->addMonth();

        $estatistica = Estatisticas::where('usuarios_id', Auth::id())
            ->whereMonth('created_at', $mes)
            ->whereYear('created_at', $ano)
            ->first();

        $nomeMes = ucfirst($dataSelecionada->translatedFormat('F'));

        return view('perfil.estatisticas', compact(
            'estatistica', 
            'nomeMes', 
            'ano', 
            'mesAnterior', 
            'proximoMes'
        ));
    }
?>