function iniciarCadastro() {
    const botao = document.getElementById("");
}

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
const icone = document.getElementById("icone-mostrar-senha");

botaoMostrarSenha.addEventListener('click', () => {
    if (senhaCampo.type === "password") {
        senhaCampo.type = "text";
        icone.textContent = "visibility";
    } else {
        senhaCampo.type = "password";
        icone.textContent = "visibility_off";
    }
});
