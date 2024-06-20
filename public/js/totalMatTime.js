document.addEventListener('DOMContentLoaded', function () {
    var matTimeCtx = document.getElementById('matTimeChart').getContext('2d');
    var matTimeChart = new Chart(matTimeCtx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Total Mat Time (hours)',
                data: [10, 20, 30, 40, 50, 60],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
