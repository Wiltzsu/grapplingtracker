document.addEventListener('DOMContentLoaded', function ()
{
    var ctx = document.getElementById('matTimeChart').getContext('2d');
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var data = new Array(12).fill(null); // Fill array with nulls for months without data

    // Convert data from PHP to be fit for charting
    totalMatTimeData.forEach(entry => {
        if (entry.hours > 0) {
            // Ensure hours are correctly placed based on month
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
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
