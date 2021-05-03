
var ctx = document.getElementById('tradeRoomChart').getContext('2d');

// Global defaults
Chart.defaults.global.defaultFontSize = 11;
Chart.defaults.global.defaultFontColor = '#ccc';
Chart.defaults.global.animation.duration = 2000;

// Generate random prices
function randomPrices(n, min, max) {

    var priceArray = [];

    for(var i=0; i < n; i++) {
        var x = Math.random() * (max - min) + min;
        priceArray.push(x);
    }

    return priceArray;
}

var ticks = 80;
var minPrice = 480;
var maxPrice = 700;
var ticksoffSet = Math.round(ticks/4);

var myChart = new Chart(ctx, {
    type: 'line', // bar, pie, line, doughnut, radar, polarArea & horizontalBar
    data: {
        labels: Array.from({length: ticks + ticksoffSet}, (x, i) => i),
        datasets: [{

            label: 'Price',

            data: randomPrices(ticks, minPrice, maxPrice),

            backgroundColor: 'rgba(255, 193, 7, 0.1)',

            borderColor: 'rgba(255,255,255, 0.5)',
            borderWidth: 1,
            hoverBorderColor: '#ffc107',
            hoverBorderWidth: 1,

            fill: true,

            pointBorderColor: '#ffc107',
            pointBackgroundColor: '#ffc107',
            pointRadius: 4,
            pointHitRadius: 5,
            pointHoverRadius: 6,

            showLine: true,
            lineTension: 0,
            steppedLine: false,
        }]
    },
    options: {
        title:{
            display: false,
            text: 'Gildcoins Historical Price',
            fontSize: 20
        },
        legend:{
            display: false
        },
        tooltips: {
            enabled: true
        },
        layout:{
            padding:{
                left: 0,
                top: 55,
                right: 0,
                bottom: 0
            }
        },
        scales: {
            yAxes: [{
                display: true,
                gridLines: {
                    display: true,
                    color: 'rgba(255,255,255, 0.2)'
                },
                ticks: {
                    beginAtZero: false,

                    // Include a KSh sign in the ticks
                    callback: function(value, index, values) {
                        return 'USD ' + value;
                    }
                }
            }],
            xAxes: [{
                display: false,
                gridLines: {
                    display: true,
                    color: 'rgba(255,255,255, 0.05)',
                    drawDashedLine:
                        [20, 5]
                }
            }]
        }
    }
});
