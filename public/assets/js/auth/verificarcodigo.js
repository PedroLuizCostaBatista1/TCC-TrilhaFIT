function reenviarCodigo() {
    const reenviar = document.getElementById('reenviar');
    let tempoEspera = parseInt(reenviar.dataset.tempoEspera) || 0;
}

document.addEventListener('DOMContentLoaded', () => {
    const reenviar = document.getElementById('reenviar');
    let tempoEspera = parseInt(reenviar.dataset.tempoEspera) || 0;

    function atualizarContador() {
        const tempoAgora = Math.floor(Date.now() / 1000);
        const tempoRestante = tempoEspera - tempoAgora;
        const icone = `<span class="material-symbols-outlined">sync</span>`

        if (tempoRestante > 0) {
            reenviar.disabled = true;
            reenviar.innerHTML = `${icone} Aguarde ${tempoRestante}s para reenviar novamente`;
            setTimeout(atualizarContador, 1000);
        } else {
            reenviar.disabled = false;
            reenviar.innerHTML = `${icone} Reenviar código`;
        }
    }

    if (tempoEspera > 0) {
        atualizarContador();
    }
});