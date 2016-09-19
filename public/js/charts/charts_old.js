$(function () {
    // Gráfica de dona azul
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart3);
      function drawChart3() {

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
          colors: ['#00828a', '#0199a2', '#01a7b8', '#01c2d2', '#01d5e0'],
        };

        var chart = new google.visualization.PieChart(document.getElementById('donut_single_blue'));
        chart.draw(data, options);
      }

    // Gráfica de dona amarilla
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart2);
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
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Efectividad',     70],
          ['Sku´s por Catalogar',      25]
        ]);

        var options = {
            title: 'Efectividad General',
          colors: ['#F2C11E', '#C1C1C1']
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      };

    // Gráfica de barras
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Opening Move', 'Efectividad Por Categoría'],
          ["Limpiadores", 94],
          ["Suavizantes", 71],
          ["Blanqueadores", 50],
          ["Resto de línea", 38],
          ['Detergentes', 40]
        ]);

        var options = {
          title: 'Chess opening moves',
          colors: ['#0099A2'],
          width: 700,
          legend: { position: 'none' },
          chart: { title: '',
                   subtitle: '' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Efectividad Por Categoría'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      }
});
