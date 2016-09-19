google.charts.load('current', {'packages':['corechart', 'bar']});
google.charts.setOnLoadCallback(loadCharts);

function loadCharts() {
    drawChart();
    drawStuff();
}
// ----------------------------------------------------- 1
// Gráfica de pay
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Efectividad',     70],
    ['Sku´s por Catalogar',      25]
  ]);

  var options = {
    colors: ['#F2C11E', '#C1C1C1']
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart_f3'));

  chart.draw(data, options);
};

// Gráfica de barras
function drawStuff() {
  var data = google.visualization.arrayToDataTable([
    ['', 'Catalogados', 'Por catalogar'],
    ["Pinol el Original", 90, 25],
    ["Pinol Poder", 100, 59],
    ["Cloralex Baños", 50, 100],
    ["Pinol Aromas", 100, 62],
    ['Flash', 140, 60],
    ['Cloralex 99', 120, 30]
  ]);

  var options = {
    colors: ['#0099A2', '#e4e4e4'],
    legend: { position: 'none', maxLines: 3 },
    bars: 'horizontal', // Required for Material Bar Charts.
    bar: { groupWidth: "75%" },
    isStacked: 'percent',
    hAxis: {
            minValue: 0
          }
  };

  var chart = new google.visualization.BarChart(document.getElementById('top_x_div_f3'));
  chart.draw(data, options);
}