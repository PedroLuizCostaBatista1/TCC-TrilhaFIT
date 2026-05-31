const campos = document.querySelectorAll("input");
const mensagem = document.getElementById("mensagem");

if (mensagem) {
    campos.forEach((campo) => {
        campo.addEventListener("input", (evento) => {
            mensagem.style.display = "none";
        });
    });
}

/*document.addEventListener('DOMContentLoaded', () => {
    const botaoDeletar = document.getElementById('botao-deletar');
    const formDeletar = document.getElementById('form-deletar');

    if (botaoDeletar) {
        botaoDeletar.addEventListener('click', (e) => {
            if (confirm('Tem certeza? Esta ação não pode ser desfeita.')) {
                form.submit();
            }
        });
    }
});*/