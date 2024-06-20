document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('beltProgressChart').getContext('2d');
    var backgroundColors = labels.map(label => beltColors[label] ? beltColors[label].background : '#DDDDDD');
    var borderColors = labels.map(label => beltColors[label] ? beltColors[label].border : '#CCCCCC');

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
                y: { beginAtZero: true },
            },
            tooltips: {
                enabled: true,
                mode: 'index',
                intersect: false
            }
        }
    });
});
