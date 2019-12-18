
(function () {
  'use strict'

  feather.replace()
   
  // Graphs
  var ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: 'line',
    
    data: {
      labels: [
        'Septiembre',
        'Octubre',
        'Noviembre',
        'Diciembre  '
      ],
      datasets: [{
        data: [
          4,
          8,
          3,
          4
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })
}())