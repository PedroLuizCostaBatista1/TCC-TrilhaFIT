document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('click', function(evento) {
        const botao = evento.target.closest('[texto-carregando]');

        if (botao) {
            const icone = botao.querySelector('.material-symbols-outlined');
            const textoCarregando = botao.getAttribute('texto-carregando');

            setTimeout(() => {
                botao.disabled = true;
            }, 1);

            if (icone) {
                botao.innerHTML = icone.outerHTML + ' ' + textoCarregando;
            } else {
                botao.innerHTML = textoCarregando;
            }
        }
    });
});