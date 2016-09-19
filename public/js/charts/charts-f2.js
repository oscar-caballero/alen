google.charts.load('current', {'packages':['corechart', 'bar']});
google.charts.setOnLoadCallback(loadCharts);

function loadCharts() {
    drawChart();
    drawStuff();
    drawChart2();
    drawStuff2();
    drawChart3();
    drawStuff3();
    drawChart4();
    drawStuff4();
    drawChart5();
    drawStuff5();
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

  var chart = new google.visualization.PieChart(document.getElementById('piechart_f2'));

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

  var chart = new google.visualization.BarChart(document.getElementById('top_x_div_f2'));
  chart.draw(data, options);
}

// ----------------------------------------------------- 2
// Gráfica de pay
function drawChart2() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Efectividad',     70],
    ['Sku´s por Catalogar',      25]
  ]);

  var options = {
    colors: ['#F2C11E', '#C1C1C1']
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart_f2_2'));

  chart.draw(data, options);
};

// Gráfica de barras
function drawStuff2() {
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

  var chart = new google.visualization.BarChart(document.getElementById('top_x_div_f2_2'));
  chart.draw(data, options);
}


// ----------------------------------------------------- 3
// Gráfica de pay
function drawChart3() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Efectividad',     70],
    ['Sku´s por Catalogar',      25]
  ]);

  var options = {
    colors: ['#F2C11E', '#C1C1C1']
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart_f2_3'));

  chart.draw(data, options);
};

// Gráfica de barras
function drawStuff3() {
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
  var chart = new google.visualization.BarChart(document.getElementById('top_x_div_f2_3'));
  chart.draw(data, options);
}

// ----------------------------------------------------- 4
// Gráfica de pay
function drawChart4() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Efectividad',     70],
    ['Sku´s por Catalogar',      25]
  ]);

  var options = {
    colors: ['#F2C11E', '#C1C1C1']
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart_f2_4'));

  chart.draw(data, options);
};

// Gráfica de barras
function drawStuff4() {
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

  var chart = new google.visualization.BarChart(document.getElementById('top_x_div_f2_4'));
  chart.draw(data, options);
}

// ----------------------------------------------------- 5
// Gráfica de pay
function drawChart5() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Efectividad',     70],
    ['Sku´s por Catalogar',      25]
  ]);

  var options = {
    colors: ['#F2C11E', '#C1C1C1']
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart_f2_5'));

  chart.draw(data, options);
};

// Gráfica de barras
function drawStuff5() {
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

  var chart = new google.visualization.BarChart(document.getElementById('top_x_div_f2_5'));
  chart.draw(data, options);
}