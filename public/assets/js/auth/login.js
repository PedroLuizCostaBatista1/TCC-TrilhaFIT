function mostrarSenha() {
    const senhaCampo = document.getElementById("senha-campo");
    const botaoMostrarSenha = document.getElementById("botao-mostrar-senha");
    const iconeMostrarSenha = document.getElementById("icone-mostrar-senha");

    if (senhaCampo.type === "password") {
        senhaCampo.type = "text";
        iconeMostrarSenha.textContent = "visibility";
    } else {
        senhaCampo.type = "password";
        iconeMostrarSenha.textContent = "visibility_off";
    }
}