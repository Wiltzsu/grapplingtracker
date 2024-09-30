document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('techniquesLearnedChart').getContext('2d');
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var data = new Array(12).fill(null); // Fill array with nulls for months without data

    // Convert data from PHP to be fit for charting
    techniquesLearnedData.forEach(entry => {
        if (entry.count > 0) {
            // Ensure we're placing integers and month indices match the data indices
            data[entry.month - 1] = parseInt(entry.count, 10); // Parse counts as integers
        }
    });

    var techniquesLearnedChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: months,
            datasets: [{
                label: 'Total Techniques Studied',
                data: data,
                fill: false,
                borderColor: 'rgb(75, 70, 192)',
                tension: 0.1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        // Ensure ticks are shown as full integers
                        stepSize: 1, // This sets the step between each tick to 1
                        callback: function(value) {
                            if (value % 1 === 0) { // Only display integers
                                return value;
                            }
                        }
                    }
                }
            }
        }
    });

    // Resize Observer to handle canvas resizing properly
    var resizeObserver = new ResizeObserver(entries => {
        for (let entry of entries) {
            if (entry.target === canvas) {
                techniquesLearnedChart.resize();
            }
        }
    });

    resizeObserver.observe(canvas);
});