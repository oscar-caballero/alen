google.charts.load('current', {'packages':['corechart', 'bar']});
google.charts.setOnLoadCallback(loadCharts);

function loadCharts() {
    drawChartF1();
    drawStuffF1();
    drawStuffMdpF1();
}

// Gráfica de pay-filter1
function drawChartF1() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Efectividad',     70],
    ['Sku´s por Catalogar',      25]
  ]);

  var options = {
    colors: ['#F2C11E', '#C1C1C1']
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart_f1'));

  chart.draw(data, options);
};

// Gráfica de barras-f1
function drawStuffF1() {
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

  var chart = new google.visualization.BarChart(document.getElementById('top_x_div_f1'));
  chart.draw(data, options);
}

// Gráfica de barras-mdp-f1
function drawStuffMdpF1() {
  var data = google.visualization.arrayToDataTable([
    ['', ''],
    ['Inmediata', 14700000],
    ['Mediano Plazo (12 Meses)', 17700000],
    ['Largo Plazo (24 Meses)', 21900000]
  ]);

  var options = {
    colors: ['#ffce32'],
    legend: { position: 'none' },
    bar: { groupWidth: "90%" },
    vAxis: {format: 'decimal'}
  };

  var chart = new google.charts.Bar(document.getElementById('top_x_div_mdp_f1'));
  // Convert the Classic options to Material options.
  chart.draw(data, google.charts.Bar.convertOptions(options));
};


//New
function drawChartf11() {
      var data = google.visualization.arrayToDataTable([
        ['', '', { role: "style" } ],
        ['Inmediata', 14700000, "#00828a"],
        ['Mediano Plazo (12 Meses)', 17700000, '#0199a2'],
        ['Largo Plazo (24 Meses)', 21900000, "#01a7b8"]
      ]);

      var view = new google.visualization.DataView(data);


      var options = {
        bar: {groupWidth: "90%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("top_x_div_mdp_f2"));
      chart.draw(view, options);
  }