document.addEventListener('DOMContentLoaded', function () {
    var matTimeCtx = document.getElementById('matTimeChart').getContext('2d');

    // Assuming matTimeData is an array of objects with 'month' and 'hours'
    var labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var chartData = new Array(12).fill(null);  // Initialize an array for all months with null

    // Fill the chart data with hours where available
    matTimeData.forEach(data => {
        if(data.hours > 0) {
            chartData[data.month - 1] = data.hours;  // Adjust index since months are 1-based
        }
    });

    var matTimeChart = new Chart(matTimeCtx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Total Mat Time (hours)',
                data: chartData,
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
