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
          ['females',     <?php echo $data[1]; ?>],
          ['males',      <?php echo $data[0]; ?>]
        ]);

        var options = {
          title: 'students  genders:',
          pieHole: 0.5,
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
