async function compartilhar(distancia, corridas, calorias, mes, ano) {
    const botaoCompartilhar = document.getElementById("botao1");
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
}

function mudarMes(direcao) {
    const container = document.getElementById("estatisticas-data");
    let mes = parseInt(container.getAttribute('data-mes'));
    let ano = parseInt(container.getAttribute('data-ano'));

    mes += direcao;
    if (mes < 1) { mes = 12; ano--; }
    if (mes > 12) { mes = 1; ano++; }

    container.setAttribute('data-mes', mes);
    container.setAttribute('data-ano', ano);

    console.log(mes);
}