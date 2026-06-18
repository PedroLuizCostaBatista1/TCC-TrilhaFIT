@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/turma/turma.css">
@endpush
<header class="turma-header">
    <a href="{{ route('turma') }}" id="icone-voltar">
        <span class="material-symbols-outlined">chevron_left</span>
    </a>
    <h1>Lista de membros</h1>
</header>
<main>
    <section id="lista-membros">
        <div class="membro-card">
            <div class="membro-card-lado-esquerdo">
                <div class="avatar">{{ $turma->instrutor->iniciais }}</div>
                <div class="membro-informacoes">
                    <p class="membro-nome">{{ $turma->instrutor->nome }} @if($turma->instrutor_id === Auth::id()) (Você) @endif</p>
                    <p class="membro-tipo">{{ ucfirst($turma->instrutor->tipo) }}</p>
                </div>
            </div>
        </div>
        @foreach ($membros as $membro)
            <div class="membro-card">
                <div class="membro-card-lado-esquerdo">
                    <div class="avatar">{{ $membro->iniciais }}</div>
                    <div class="membro-informacoes">
                        <p class="membro-nome">{{ $membro->nome }} @if($membro->id === Auth::id()) (Você) @endif</p>
                        <p class="membro-tipo">{{ ucfirst($membro->tipo) }}</p>
                    </div>
                </div>
                @if(Auth::user()->tipo === 'instrutor' && $turma->instrutor_id === Auth::id())
                    <div class="membro-card-lado-direito">
                        <form action="{{ route('turma.remover', [$turma->id, $membro->id]) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja remover {{ $membro->nome }} deste mural? O usuário perderá acesso aos avisos.')">
                            @csrf
                            @method('PUT')
                            <button type="submit" id="botao-expulsar">Remover?</button>
                        </form>
                    </div>
                @endif
            </div>
        @endforeach
    </section>
</main>
@endsection