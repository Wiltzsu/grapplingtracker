// Initializes and renders the pie chart for techniques per position.
document.addEventListener(
    'DOMContentLoaded', function () {
        // Obtain the canvas context.
        var ctx = document.getElementById('techniquesPerPosition').getContext('2d');
        // Retrieve the data container element.
        var chartDataContainer = document.getElementById('techniquePositionChartData');
        // Parse the labels and data from the data container's attributes.
        var labels = JSON.parse(chartDataContainer.getAttribute('data-labels'));
        var data = JSON.parse(chartDataContainer.getAttribute('data-values'));

        // Set colors for each position
        var backgroundColors = ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#F7464A', '#FDB45C', '#949FB1', '#4D5360'];
    
        // Create and configure the pie chart.
        new Chart(
            ctx, {
                type: 'pie', // Specifies the chart type.
                data: { // Data for the chart.
                    labels: labels,
                    datasets: [{
                        label: 'Techniques Per Position',
                        data: data,
                        backgroundColor: backgroundColors,
                        hoverOffset: 4
                    }]
                },
                options: { // Configuration options for the chart.
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top', // Position of the chart legend.
                        }
                    }
                }
            }
        );
    }
);
