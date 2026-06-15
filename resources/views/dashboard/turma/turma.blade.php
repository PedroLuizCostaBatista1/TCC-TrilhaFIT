@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/turma/turma.css">
@endpush
<header id="turma-header">
    <h1>{{ $turma->nome }}</h1>
    @if(Auth::user()->tipo === 'instrutor')
        <p>Codigo da turma: <strong>{{ $turma->codigo }}</strong></p>
    @endif
    <div id="tags">
        <div class="tag">
            <span class="material-symbols-outlined">group</span>
            <p>{{ $turma->alunos->count() + 1 }} membros</p>
        </div>
        @if(Auth::user()->tipo === 'instrutor' && $turma->instrutor_id === Auth::id())
            <a href="{{ route('turma.editar', $turma->id) }}" class="tag2">
                <span class="material-symbols-outlined">edit</span>
                <p>Editar turma</p>
            </a>
        @else
            <form method="POST" action="{{ route('turma.sair') }}" onsubmit="return confirm('Tem certeza que deseja sair deste mural?');">
                @csrf
                <button type="submit" class="tag2" texto-carregando="Saindo..."><span class="material-symbols-outlined">logout</span>Sair do mural</button>
            </form>
        @endif
    </div>
</header>
<main>
    @if(!blank($turma->descricao))
        <section id="descricao">
            <h2><span class="material-symbols-outlined">description</span>Descrição</h2>
            <p>{{ $turma->descricao }}</p>
        </section>
    @endif
    <!--<section id="status">
        <div class="status-card">
            <div class="status-valor">18</div>
            <div class="status-titulo">Treinos de Turma</div>
        </div>
        <div class="status-card">
            <div class="status-valor">4</div>
            <div class="status-titulo">Desafios Ativos</div>
        </div>
    </section>-->
    @if(Auth::user()->tipo === 'instrutor' && $turma->instrutor_id === Auth::id())
        <a href="{{ route('turma.aviso', $turma->id) }}" id="botao-criar"><span class="material-symbols-outlined">add_alert</span></a>
    @endif
    <section id="mural">
        <h2 id="mural-titulo"><span id="mural-icone" class="material-symbols-outlined">campaign</span>Mural de Avisos</h2>
        <div id="mural-wrap">
            @if($turma->avisos->isEmpty())
                <p id="texto-sem-aviso">Sem aviso no mural</p>
            @else
                @foreach ($turma->avisos as $aviso)
                    <div class="mural-card">
                        <div class="mural-card-titulo titulo-desafio">
                            <p id="desafio-nome">Instrutor {{ $turma->instrutor->nome }}</p>
                            <p class="horario">Hoje às 14:30</p>
                        </div>
                        <h3 class="aviso-titulo">Novo Desafio: Maratona do Mês!</h3>
                        <p class="aviso">{{ nl2br(e($aviso->conteudo)) }}</p>
                    </div>
                @endforeach
            @endif
            <!--<div class="mural-card">
                <div class="mural-card-titulo titulo-anuncio">
                    <p id="anuncio-nome">Anúncio</p>
                    <p class="horario">Ontem às 10:15</p>
                </div>
                <h3 class="aviso-titlo">Treino em Grupo Confirmado!</h3>
                <p class="aviso">Amanhã às 07:00 saída do Parque Ibirapuera. Todos estão convidados para o treino matinal!</p>
            </div>
            <div class="mural-card">
                <div class="mural-card-titulo titulo-informacao">
                    <p id="informacao-nome">Instrutor Martado</p>
                    <p class="horario">há 2 dias</p>
                </div>
                <h3 class="aviso-titlo">Atualização do Calendário de Treinos</h3>
                <p class="aviso">Confira a agenda de treinos na seção "Turma". Novos horários disponíveis para segunda-feira!</p>
            </div>
            <div class="mural-card">
                <div class="mural-card-titulo titulo-lembrete">
                    <p id="lembrete-nome">Lembrete</p>
                    <p class="horario">há 3 dias</p>
                </div>
                <h3 class="aviso-titlo">Manutenção de Equipamento</h3>
                <p class="aviso">Lembrete: Verifique seus pneus e freios antes de cada treino. Segurança em primeiro lugar!</p>
            </div>-->
        </div>
    </section>
</main>
@endsection