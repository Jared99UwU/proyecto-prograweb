<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM cliente";
$query = mysqli_query($con, $sql);

?>



<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],

          <?php
          $con = connection();

          $sql = "SELECT * FROM pedido";
          $query = mysqli_query($con, $sql);
          while($resultado=mysqli_fetch_assoc($query)){
            echo"['".$resultado['id_cliente']."'," .$resultado[]."],";
          }
          ?>
        
        ]);

        var options = {
          title: 'Clientes'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
