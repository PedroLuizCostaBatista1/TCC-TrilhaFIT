document.addEventListener('DOMContentLoaded', () => {
    const botaoCompartilhar = document.getElementById("botao1");
    
    if (botaoCompartilhar) {
        const data = JSON.parse(botaoCompartilhar.dataset.user);
        console.log(data);
    }
});