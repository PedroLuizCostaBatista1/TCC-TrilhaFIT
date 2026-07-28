let passoAtual = 1;
const totalPassos = 3;

function verificarValidacaoEtapa() {
    const avancar = document.getElementById('botaoAvancar');
    const etapaAtiva = document.querySelector('.etapa.ativa');

    if (!etapaAtiva) return;

    // 1. Procura se a etapa atual tem botões radio
    const radios = etapaAtiva.querySelectorAll('input[type="radio"]');
    
    // 2. Procura se a etapa atual tem inputs do tipo number/text
    const inputsGerais = etapaAtiva.querySelectorAll('input[type="number"], input[type="text"]');

    if (radios.length > 0) {
        // Se a etapa usa radios: habilita se pelo menos um estiver marcado
        const opcaoMarcada = etapaAtiva.querySelector('input[type="radio"]:checked');
        avancar.disabled = !opcaoMarcada;
    } 
    else if (inputsGerais.length > 0) {
        // Se a etapa usa inputs de número/texto: habilita se TODOS estiverem preenchidos
        const todosPreenchidos = Array.from(inputsGerais).every(input => input.value.trim() !== '');
        avancar.disabled = !todosPreenchidos;
    } 
    else {
        // Se a etapa não tiver inputs (só texto informativo por exemplo), deixa o botão ativo
        avancar.disabled = false;
    }
}

document.addEventListener('change', function(event) {
    if (event.target.type === 'radio') {
        verificarValidacaoEtapa();
    }
});

document.addEventListener('input', function(event) {
    if (event.target.type === 'number' || event.target.type === 'text') {
        verificarValidacaoEtapa();
    }
});

document.addEventListener('DOMContentLoaded', () => {
    verificarValidacaoEtapa();
});

function navegarEtapa(direcao) {
    const etapas = document.querySelectorAll('.etapa');
    const progresso = document.querySelectorAll('.progresso');
    const voltar = document.getElementById('botaoVoltar');
    const avancar = document.getElementById('botaoAvancar');
    const avancarTexto = document.querySelector('.botao-texto');
    const icone = document.getElementById('botao-icone');

    if (passoAtual === totalPassos && direcao === 1) {
        if (avancar.disabled) return; 

        avancar.type = "submit"; 
        return; 
    }

    passoAtual += direcao;

    etapas.forEach(etapa => {
        const etapaNumero = parseInt(etapa.getAttribute('etapa'));
        
        if (etapaNumero === passoAtual) {
            etapa.classList.add('ativa');
        } else {
            etapa.classList.remove('ativa');
        }
    });

    progresso.forEach((indicador, index) => {
        if (index < passoAtual) {
            indicador.classList.add('ativo');
        } else {
            indicador.classList.remove('ativo');
        }
    });

    if (passoAtual <= 1) {
        voltar.style.display = 'none';
    } else {
        voltar.style.display = 'flex';
    }

    if (passoAtual === totalPassos) {
        avancar.type = "button";
        avancarTexto.textContent = "Concluir";
        icone.textContent = "check_circle";
    } else {
        avancar.type = "button";
        avancarTexto.textContent = "Avançar";
        icone.textContent = "chevron_right";
    }

    verificarValidacaoEtapa();
}