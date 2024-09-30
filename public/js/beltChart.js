document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('beltProgressChart').getContext('2d');
    var labels = JSON.parse(document.getElementById('beltChartData').getAttribute('data-labels'));
    var data = JSON.parse(document.getElementById('beltChartData').getAttribute('data-values'));
    var beltColors = {
        'White': { background: '#E3E3E3', border: '#BFBFBF' },
        'Blue': { background: '#337AB7', border: '#2E6DA4' },
        'Purple': { background: '#800080', border: '#6A0DAD' },
        'Brown': { background: '#8A6D3B', border: '#795548' },
        'Black': { background: '#000000', border: '#333333' }
    };
    var backgroundColors = [];
    var borderColors = [];

    labels.forEach(function(beltID) {
        if (beltColors[beltID]) {
            backgroundColors.push(beltColors[beltID].background);
            borderColors.push(beltColors[beltID].border);
        } else {
            backgroundColors.push('#DDDDDD');
            borderColors.push('#CCCCCC');
        }
    });

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Days on Belt Level',
                data: data,
                backgroundColor: backgroundColors,
                borderColor: borderColors,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            tooltips: {
                enabled: true,
                mode: 'index',
                intersect: false
            }
        }
    });
});
