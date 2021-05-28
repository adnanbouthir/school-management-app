<?php require APPROOT .'/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/nav.php'; ?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 6],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'School stats',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>

      <div class="container">
      <div id="donutchart" style="width: 900px; height: 500px;"></div>
      </div>
    
  </body>
</html>

<?php require APPROOT .'/views/inc/footer.php'; ?>
