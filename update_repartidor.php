<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET["id"];

    $sql="SELECT * FROM repartidor WHERE id_repartidor='$id'";
  
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-=1">
        <link rel="icon" href="images/logo.png">
        <link href="css/style1.css?2.00" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>Editar Repartidores</title>
        
    </head>
    <h1>Modificar Repartidor</h1>
    
    <body>
        <div class="users-form">
            <form action="edit_repartidor.php" method="POST">
                <input type="hidden" name="id_repartidor" value="<?= $row['id_repartidor']?>">
                <input type="text" placeholder="Nombre del Repartidor" name="nombre_repartidor" value="<?= $row['nombre_repartidor'] ?>">
                <input type="text" placeholder="Apellido Paterno" name="apellido_paterno" value="<?= $row['apellido_paterno'] ?>">
                <input type="text" placeholder="Apellido Materno" name="apellido_materno" value="<?= $row['apellido_materno'] ?>">
                <input type="text" placeholder="Direccion Repartidor" name="Direccion" value="<?= $row['Direccion'] ?>">
                <input type="text" placeholder="Telefono" name="Telefono" value="<?= $row['Telefono'] ?>">
                <input type="text" placeholder="Correo Electronico" name="correo_electronico" value="<?= $row['correo_electronico'] ?>">
                <input type="submit" value="Actualizar">
                <a href="index_repartidor.php" class="red-button">Cancelar</a>
                <a href="index.php" class="orange-button">Volver a la pagina principal</a>
            </form>
        </div>
        
    </body>
</html>