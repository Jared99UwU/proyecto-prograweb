<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
</head>
<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=Usuarios.xls");

require("connection.php");
$sql = "SELECT * FROM usuarios";
$host = "localhost";
$user = "tacos";
$pass = "123";
$bd = "tacos";
$connect = mysqli_connect($host, $user, $pass, $bd);
$query = mysqli_query($connect, $sql);
?>
<div class="container">

<!--<img src="images/logo.png">-->
    <h2>Pedidos Registrados</h2>
  

    
    <table class="table">
        <thead>
            <tr>
                <th>Id_usuario</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>id_cargo</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nombre'] ?></td>
                    <td><?= $row['usuario'] ?></td>
                    <td><?= $row['contraseña'] ?></td>
                    <td><?= $row['id_cargo'] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>