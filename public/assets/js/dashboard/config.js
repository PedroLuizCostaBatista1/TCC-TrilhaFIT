document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('click', function(evento) {
        const botao = evento.target.closest('[texto-carregando]');

        if (botao) {
            const formulario = botao.closest('form');

            if (formulario && !formulario.checkValidity()) {
                formulario.reportValidity();
                return;
            }

            if (formulario && botao.type === "submit" && typeof formulario.onsubmit === 'function') {
                if (formulario.onsubmit() === false) {
                    evento.preventDefault();
                    return;
                }

                formulario.onsubmit = null;
            }

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