const campos = document.querySelectorAll("input");
const mensagem = document.getElementById("mensagem");

if (mensagem) {
    campos.forEach((campo) => {
        campo.addEventListener("input", (evento) => {
            mensagem.style.display = "none";
        });
    });
}