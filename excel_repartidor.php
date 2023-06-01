<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
</head>


<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=Repartidor.xls");

require("connection.php");
$sql = "SELECT * FROM repartidor";
$host = "localhost";
$user = "tacos";
$pass = "123";
$bd = "tacos";
$connect = mysqli_connect($host, $user, $pass, $bd);
$query = mysqli_query($connect, $sql);
?>

<div class="container">



<h2>Repartidores Registrados</h2>

<table class="table">
        <table>
            <thead>
                <tr>
                    <th>id_Repartidor</th>
                    <th>Nombre del Repartidor</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Correo Electronico</th>

                    
                  
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_repartidor'] ?></th>
                        <th><?= $row['nombre_repartidor'] ?></th>
                        <th><?= $row['apellido_paterno'] ?></th>
                        <th><?= $row['apellido_materno'] ?></th>
                        <th><?= $row['Direccion'] ?></th>
                        <th><?= $row['Telefono'] ?></th>
                        <th><?= $row['correo_electronico'] ?></th>

                       
                        
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
</html>