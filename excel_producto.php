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
header("Content-Disposition: attachment; filename=Producto.xls");

require("connection.php");
$sql = "SELECT * FROM producto";
$host = "localhost";
$user = "tacos";
$pass = "123";
$bd = "tacos";
$connect = mysqli_connect($host, $user, $pass, $bd);
$query = mysqli_query($connect, $sql);
?>

<div class="container">




<h2>Productos Registrados</h2>

<table class="table">
        <table>
            <thead>
                <tr>
                    <th>id_Producto</th>
                    <th>Nombre del Producto</th>
                    <th>Tamaño</th>
                    <th>Precio</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_producto'] ?></th>
                        <th><?= $row['nombre_producto'] ?></th>
                        <th><?= $row['tamaño'] ?></th>
                        <th><?= "$".$row['precio'] ?></th>
                        

                       
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
</html>



