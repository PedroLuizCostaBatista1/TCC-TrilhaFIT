const ctxVelocidade = document.getElementById('chartVelocidade').getContext('2d');

new Chart(ctxVelocidade, {
    type: 'line',
    data: {
        labels: ['0m', '10m', '20m', '30m', '45m'],
        datasets: [{
            label: 'RPM',
            data: [9, 21, 25, 23, 26],
            borderColor: '#FF6B35',
            backgroundColor: 'rgba(255, 107, 53, 0.1)',
            fill: true,
            tension: 0.4,
            borderWidth: 3
        }]
    },
    options: {
        plugins: { legend: { display: false } },
        scales: { y: { display: true }, x: { grid: { display: false } } }
    }
});