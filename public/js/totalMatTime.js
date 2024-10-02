document.addEventListener('DOMContentLoaded', function () {
    var canvas = document.getElementById('matTimeChart');
    canvas.style.height = '400px'; // Set the height directly

    var ctx = canvas.getContext('2d');
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var data = new Array(12).fill(null); // Fill array with nulls for months without data

    totalMatTimeData.forEach(entry => {
        if (entry.hours > 0) {
            data[entry.month - 1] = parseFloat(entry.hours);
        }
    });

    var matTimeChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: months,
            datasets: [{
                label: 'Total Mat Time (hours)',
                data: data,
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, // This ensures the canvas height is respected
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
