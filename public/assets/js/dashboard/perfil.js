document.addEventListener('DOMContentLoaded', () => {
    const botaoCompartilhar = document.getElementById("botao1");
    
    if (botaoCompartilhar) {
        const data = JSON.parse(botaoCompartilhar.dataset.user);

        botaoCompartilhar.addEventListener('click', async() => {
            const distancia = data.distancia;
            const corridas = data.corridas;
            const calorias = data.calorias;
            const mes = botaoCompartilhar.dataset.mes;
            const ano = botaoCompartilhar.dataset.ano;

            const texto = "Minha evolução no TrilhaFIT (" + mes + " - " + ano + ")\n\n" +
                          "Corridas realizadas: " + corridas + "\n" +
                          "Distância total: " + distancia + " km\n" +
                          "Calorias queimadas: " + calorias + " kcal\n\n" +
                          "Bora treinar?";

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
    }
});