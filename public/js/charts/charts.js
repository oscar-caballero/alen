// Gráfica de dona azul
google.charts.load('current', {'packages':['corechart', 'bar']});
google.charts.setOnLoadCallback(loadCharts);

function loadCharts() {
    drawStacked();
    drawChart3();
    drawChart2();
    drawChart();
    drawStuff();
    drawChartF1();
    drawStuffF1();
    drawStuffMdpF1();
}

function drawChart3() {
  var data = google.visualization.arrayToDataTable([
    ['Effort', 'Amount given'],
    ['Lavatrastes',     9.6],
    ['Detergentes',      8],
    ['Blanqueadores',  6.3],
    ['Suavizantes', 6],
    ['JDL',    5.1]
  ]);

  var options = {
    pieHole: 0.4,
    colors: ['#00828a', '#0199a2', '#01a7b8', '#01c2d2', '#01d5e0'],
  };

  var chart = new google.visualization.PieChart(document.getElementById('donut_single_blue'));
  chart.draw(data, options);
}

// Gráfica de dona amarilla
function drawChart2() {
  var data = google.visualization.arrayToDataTable([
    ['Effort', 'Amount given'],
    ['Bodega Aurrera',     11],
    ['Supercenter',      8],
    ['Bodega Chedaui',  7],
    ['Superama', 5],
    ['San Francisco',    2]
  ]);

  var options = {
    pieHole: 0.4,
    colors: ['#f2c11d', '#f2b11d', '#f29c18', '#f28911', '#f28109'],
  };

  var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
  chart.draw(data, options);
}

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

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));

  chart.draw(data, options);
};

// Gráfica de barras
function drawStacked() {
  var data = google.visualization.arrayToDataTable([
    ['', 'Catalogados', 'Por catalogar'],
    ["Limpiadores", 90, 25],
    ["Suavizantes", 100, 59],
    ["Blanqueadores", 50, 100],
    ["Resto de línea", 100, 62],
    ['Detergentes', 140, 60]
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
  var chart = new google.visualization.BarChart(document.getElementById('top_x_div'));
  chart.draw(data, options);
  //var chart = new google.charts.Bar(document.getElementById('top_x_div'));
  //chart.draw(data, google.charts.Bar.convertOptions(options));
}
