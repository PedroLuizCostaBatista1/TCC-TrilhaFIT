const campos = document.querySelectorAll("input");
const mensagem = document.getElementById("mensagem");

if (mensagem) {
    campos.forEach((campo) => {
        campo.addEventListener("input", (evento) => {
            mensagem.style.display = "none";
        });
    });
}

const senhaCampo = document.getElementById("senha-campo");
const botaoMostrarSenha = document.getElementById("botao-mostrar-senha");
const iconeMostrarSenha = document.getElementById("icone-mostrar-senha");

if (botaoMostrarSenha) {
    botaoMostrarSenha.addEventListener('click', () => {
        if (senhaCampo.type === "password") {
            senhaCampo.type = "text";
            iconeMostrarSenha.textContent = "visibility";
        } else {
            senhaCampo.type = "password";
            iconeMostrarSenha.textContent = "visibility_off";
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('click', function(evento) {
        const botao = evento.target.closest('[texto-carregando]');

        if (botao) {
            const formulario = botao.closest('form');

            if (formulario && !formulario.checkValidity()) {
                form.reportValidity();
                return;
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