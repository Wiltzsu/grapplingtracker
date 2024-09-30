document.addEventListener('DOMContentLoaded', function () {
    var canvas = document.getElementById('combinedChart');
    canvas.style.height = '400px'; // Optional: Direct height setup if needed

    var ctx = canvas.getContext('2d');
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var matTimeData = new Array(12).fill(0);
    var techniquesData = new Array(12).fill(0);

    // Populate data from your data sources
    totalMatTimeData.forEach(entry => {
        if (entry.hours > 0) {
            matTimeData[entry.month - 1] = parseFloat(entry.hours);
        }
    });

    techniquesLearnedData.forEach(entry => {
        if (entry.count > 0) {
            techniquesData[entry.month - 1] = parseInt(entry.count, 10);
        }
    });

    var combinedChart = new Chart(ctx, {
        type: 'line',
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
                        drawOnChartArea: false,
                    },
                }
            }
        }
    });

    // Resize Observer to handle canvas resizing properly
    var resizeObserver = new ResizeObserver(entries => {
        for (let entry of entries) {
            if (entry.target === canvas) {
                combinedChart.resize();
            }
        }
    });

    resizeObserver.observe(canvas);
});
