document.addEventListener('DOMContentLoaded', () => {
    const botao = document.getElementById('reenviar');
    if (!botao) return;

    const valorAtributo = parseInt(botao.dataset.tempoEspera) || 0;
    if (valorAtributo <= 0) return;

    const tempoAgora = Math.floor(Date.now() / 1000);
    let tempoFinal = 0;

    if (valorAtributo > 100000) {
        tempoFinal = valorAtributo;
    } else {
        tempoFinal = tempoAgora + valorAtributo;
    }

    iniciarContadorReenvio(tempoFinal);
});

// 🔥 NOVO: Escuta o evento global de sucesso
// Escuta o evento global de sucesso
document.addEventListener('formularioSucesso', (event) => {
    const { formulario, data } = event.detail;
    
    // Verifica se o formulário que teve sucesso é o dono do botão #reenviar
    const botaoReenviar = formulario.querySelector('#reenviar');
    
    if (botaoReenviar) {
        // Pega o valor enviado pelo Laravel ou assume 60 segundos de padrão
        const valorRecebido = parseInt(data.tempo_espera) || 60;
        const tempoAgora = Math.floor(Date.now() / 1000);
        let tempoFinal = 0;
        
        // Se o Laravel enviou um Timestamp completo (ex: 1783682546)
        if (valorRecebido > 100000) {
            tempoFinal = valorRecebido;
        } else {
            // Se o Laravel enviou apenas a quantidade de segundos (ex: 60)
            tempoFinal = tempoAgora + valorRecebido;
        }
        
        // Inicia o contador com o tempo final correto
        iniciarContadorReenvio(tempoFinal);
    }
});

let intervaloContador = null;

function iniciarContadorReenvio(tempoFinal) {
    const botao = document.getElementById('reenviar');
    if (!botao) return;

    const spanTexto = botao.querySelector('.botao-texto');
    if (intervaloContador) clearInterval(intervaloContador);

    function atualizar() {
        const agora = Math.floor(Date.now() / 1000);
        const restante = tempoFinal - agora;

        if (restante > 0) {
            botao.disabled = true;
            if (spanTexto) {
                spanTexto.textContent = `Aguarde ${restante}s para reenviar novamente`;
            }
        } else {
            botao.disabled = false;
            if (spanTexto) {
                spanTexto.textContent = "Reenviar código";
            }
            clearInterval(intervaloContador);
        }
    }

    atualizar();
    intervaloContador = setInterval(atualizar, 1000);
}