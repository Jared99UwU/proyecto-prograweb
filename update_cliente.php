<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET["id"];

    $sql="SELECT * FROM cliente WHERE id_Cliente='$id'";
  
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
        <title>Editar Clientes</title>
        
    </head>
    <h1>Moddificar Cliente</h1>
    
    <body>
        <div class="users-form">
            <form action="edit_cliente.php" method="POST">
                <input type="hidden" name="id_Cliente" value="<?= $row['id_Cliente']?>">
                <input type="text" placeholder="Nombre del Cliente" name="nombre_cliente" value="<?= $row['nombre_cliente'] ?>">
                <input type="text" placeholder="Direccion del Cliente" name="direccion" value="<?= $row['direccion'] ?>">
                <input type="text" placeholder="Telefono" name="telefono" value="<?= $row['telefono'] ?>">
                <input type="date" placeholder="Fecha de Nacimiento" name="fecha_nacimiento" value="<?= $row['fecha_nacimiento'] ?>">
                <input type="text" placeholder="Correo Electronico" name="correo" value="<?= $row['correo'] ?>">
                <input type="submit" value="Actualizar">
                <a href="index_repartidor.php" class="red-button">Cancelar</a>
                <a href="index.php" class="orange-button">Volver a la pagina principal</a>
            </form>
        </div>
        
    </body>
</html>