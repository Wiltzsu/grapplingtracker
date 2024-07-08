document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('combinedChart').getContext('2d');
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    // Initialize the data arrays
    var matTimeData = new Array(12).fill(0);
    var techniquesData = new Array(12).fill(0);

    // Fill matTimeData from your data source
    totalMatTimeData.forEach(entry => {
        if (entry.hours > 0) {
            matTimeData[entry.month - 1] = parseFloat(entry.hours);
        }
    });

    // Fill techniquesData from your data source
    techniquesLearnedData.forEach(entry => {
        if (entry.count > 0) {
            techniquesData[entry.month - 1] = parseInt(entry.count, 10);
        }
    });

    // Creating the Chart
    var combinedChart = new Chart(ctx, {
        type: 'line', // You can use 'bar' type if you prefer
        data: {
            labels: months,
            datasets: [{
                label: 'Total Mat Time (hours)',
                data: matTimeData,
                borderColor: 'rgb(75, 192, 192)',
                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                fill: false,
                tension: 0.1,
                yAxisID: 'y',
            }, {
                label: 'Total Techniques Studied',
                data: techniquesData,
                borderColor: 'rgb(75, 70, 192)',
                backgroundColor: 'rgba(75, 70, 192, 0.5)',
                fill: false,
                tension: 0.1,
                yAxisID: 'y1',
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            interaction: {
                mode: 'index',
                intersect: false,
            },
            scales: {
                y: {
                    type: 'linear',
                    display: true,
                    position: 'left',
                },
                y1: {
                    type: 'linear',
                    display: true,
                    position: 'right',
                    grid: {
                        drawOnChartArea: false, // only want the grid lines for one axis to show up
                    },
                }
            }
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    var canvas = document.getElementById('combinedChart');
    var ctx = canvas.getContext('2d');

    // Define the Resize Observer
    var resizeObserver = new ResizeObserver(entries => {
        for (let entry of entries) {
            if (entry.target === canvas) {
                combinedChart.resize(); // Redraw or reinitialize your chart based on new size
            }
        }
    });

    // Observe the canvas element
    resizeObserver.observe(canvas);

    // Initialize your chart as usual
    var combinedChart = new Chart(ctx, {
        // your chart configuration
    });
});
