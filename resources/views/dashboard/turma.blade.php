@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/turma.css">
@endpush
<header>
    <h1>Grupo Bike Masters</h1>
    <div id="tags">
        <div class="tag">
            <span class="material-symbols-outlined">group</span>
            <p>24 membros</p>
        </div>
        <div class="tag">
            <p>Turma avançada</p>
        </div>
    </div>
</header>
<main>
    <section id="detalhes-descricao">
        <p>Uma turma dedicada ao ciclismo profissional com foco em resistência e velocidade. Participe dos desafios e compita com seus colegas!</p>
    </section>
    <section id="status">
        <div class="status-card">
            <div class="status-valor">18</div>
            <div class="status-titulo">Treinos de Turma</div>
        </div>
        <div class="status-card">
            <div class="status-valor">4</div>
            <div class="status-titulo">Desafios Ativos</div>
        </div>
    </section>
    <section id="mural">
        <h2 id="mural-titulo"><span class="material-symbols-outlined">campaign</span>Mural de Avisos</h2>
        <div id="mural-wrap">
            <div id="mural-card-vermelho">
                <div class="mural-card-titulo">
                    <p class="nome-instrutor">Instrutor Martado</p>
                    <p class="horario">Hoje às 14:30</p>
                </div>
                <p class="aviso-titlo">🏆 Novo Desafio: Maratona do Mês!</p>
                <p class="aviso">Participe da Maratona de Agosto! Pedal 100km este mês e ganhe um bônus de 500 XP. Boa sorte! 💪</p>
            </div>
            <div id="mural-card-verde">
                <div class="mural-card-titulo">
                    <p class="anuncio-confirmacao">Anúncio</p>
                    <p class="horario">Ontem às 10:15</p>
                </div>
                <p class="aviso-titlo">✅ Treino em Grupo Confirmado!</p>
                <p class="aviso">Amanhã às 07:00 saída do Parque Ibirapuera. Todos estão convidados para o treino matinal!</p>
            </div>
            <div id="mural-card-azul">
                <div class="mural-card-titulo">
                    <p class="anuncio-informacao">Instrutor Martado</p>
                    <p class="horario">há 2 dias</p>
                </div>
                <p class="aviso-titlo">📅 Atualização do Calendário de Treinos</p>
                <p class="aviso">Confira a agenda de treinos na seção "Turma". Novos horários disponíveis para segunda-feira!</p>
            </div>
            <div id="mural-card-amarelo">
                <div class="mural-card-titulo">
                    <p class="anuncio-lembrete">Lembrete</p>
                    <p class="horario">há 3 dias</p>
                </div>
                <p class="aviso-titlo">⚠️ Manutenção de Equipamento</p>
                <p class="aviso">Lembrete: Verifique seus pneus e freios antes de cada treino. Segurança em primeiro lugar!</p>
            </div>
        </div>
    </section>
</main>
@endsection