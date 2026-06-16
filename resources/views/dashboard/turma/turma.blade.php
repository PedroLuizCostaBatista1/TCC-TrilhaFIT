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
        <a href="#" class="tag">
            <span class="material-symbols-outlined">group</span>
            <p>{{ $turma->alunos->count() + 1 }} membros</p>
        </a>
        @if(Auth::user()->tipo === 'instrutor' && $turma->instrutor_id === Auth::id())
            <a href="{{ route('turma.editar', $turma->id) }}" class="tag2">
                <span class="material-symbols-outlined">edit</span>
                <p>Editar turma</p>
            </a>
        @else
            <form method="POST" id="form-sair" action="{{ route('turma.sair') }}" onsubmit="return confirm('Tem certeza que deseja sair deste mural?');">
                @csrf
                <button type="submit" class="tag2" id="botao-sair" texto-carregando="Saindo..."><span class="material-symbols-outlined">logout</span>Sair do mural</button>
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
    @if(Auth::user()->tipo === 'instrutor' && $turma->instrutor_id === Auth::id())
        <a href="{{ route('turma.aviso', $turma->id) }}" id="botao-criar"><span class="material-symbols-outlined">add_alert</span></a>
    @endif
    <section id="mural">
        <h2 id="mural-titulo"><span id="mural-icone" class="material-symbols-outlined">campaign</span>Mural de Avisos</h2>
        <div id="mural-wrap">
            @if($turma->avisos->isEmpty())
                <p id="texto-sem-aviso">Sem aviso no mural</p>
            @else
                @foreach ($avisos_paginados as $aviso)
                    <div class="mural-card">
                        <div class="mural-card-titulo titulo-{{ $aviso->tipo }}">
                            <p id="{{ $aviso->tipo }}-nome">{{ ucfirst($aviso->tipo) }}</p>
                            <p class="horario">{{ $aviso->created_at->calendar() }}</p>
                        </div>
                        <h3 class="aviso-titulo">{{ $aviso->titulo }}</h3>
                        <p class="aviso">{{ nl2br(e($aviso->conteudo)) }}</p>
                        <div class="instrutor">
                            <p id="instrutor-nome"><span id="instrutor-icone" class="material-symbols-outlined">badge</span>Instrutor: {{ $turma->instrutor->nome }}</p>
                            @if(Auth::user()->tipo === 'instrutor' && $turma->instrutor_id === Auth::id())
                                <div id="acoes-instrutor">
                                    <form action="{{ route('aviso.editar', $aviso->id) }}" method="get">
                                        <button type="submit" id="botao-editar"><span class="material-symbols-outlined">edit</span></button>
                                    </form>
                                    <form action="{{ route('aviso.deletar', $aviso->id) }}" method="post" onsubmit="return confirm('Excluir este aviso definitivamente?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" id="botao-deletar"><span class="material-symbols-outlined">delete</span></button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
                <div id="avisos-paginacao">
                    {{ $avisos_paginados->links('pagination::bootstrap-4') }}
                </div>
            @endif
        </div>
    </section>
</main>
@endsection