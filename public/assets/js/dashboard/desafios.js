document.addEventListener("DOMContentLoaded", function() {
    const timer = document.getElementById('timer');
    
    if (!timer) {
        return;
    }

    const tempoMilisegundos = parseInt(timer.getAttribute('data-tempoMilisegundos'));

    function atualizarTempo() {
        const agora = new Date().getTime();
        const restante = tempoMilisegundos - agora;

        if (restante < 0) {
            timer.innerHTML = "0d 00h 00m";
            clearInterval(intervalo);
            return;
        }

        const dias = Math.floor(restante / (1000 * 60 * 60 * 24));
        const horas = Math.floor((restante % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutos = Math.floor((restante % (1000 * 60 * 60)) / (1000 * 60));
        const segundos = Math.floor((restante % (1000 * 60)) / 1000);

        timer.innerHTML = `${dias}d ${horas}h ${minutos}m ${segundos}s`;
    }

    atualizarTempo();

    const intervalo = setInterval(atualizarTempo, 1000); 
});