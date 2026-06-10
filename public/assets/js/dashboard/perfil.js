document.addEventListener('DOMContentLoaded', () => {
    const botaoCompartilhar = document.getElementById("botao1");
    
    if (botaoCompartilhar) {
        const data = JSON.parse(botaoCompartilhar.dataset.user);

        botaoCompartilhar.addEventListener('click', async() => {
            const nome = data.nome;
            const distancia = data.estatistica.distancia;
            const corridas = data.estatistica.corridas;
            const calorias = data.estatistica.calorias;

            const texto = "teste";

            if (navigator.share) {
                try {
                    await navigator.share({
                        title: "Minhas estatísticas",
                        text: texto
                    });
                } catch (erro) {
                    console.log(erro)
                }
            } else {
                const url = "https://api.whatsapp.com/send?text=" + encodeURIComponent(texto);
                window.open(url, '_blank');
            }
        });
        
        console.log(data);
    }
});