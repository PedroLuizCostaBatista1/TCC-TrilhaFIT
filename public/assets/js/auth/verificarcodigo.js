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

document.addEventListener('formularioSucesso', (event) => {
    const { formulario, data } = event.detail;
    const botaoReenviar = formulario.querySelector('#reenviar');
    
    if (botaoReenviar) {
        const valorRecebido = parseInt(data.tempo_espera) || 60;
        const tempoAgora = Math.floor(Date.now() / 1000);
        let tempoFinal = 0;
        
        if (valorRecebido > 100000) {
            tempoFinal = valorRecebido;
        } else {
            tempoFinal = tempoAgora + valorRecebido;
        }
        
        iniciarContadorReenvio(tempoFinal);
        mostrarPopup("Codigo reenviado com sucesso!");
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