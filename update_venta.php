<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET["id"];

    $sql="SELECT * FROM venta WHERE id_venta='$id'";
  
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
        <title>Editar Venta</title>
        
    </head>
    <h1>Modificar la Venta</h1>
    
    <body>
        <div class="users-form">
            <form action="edit_venta.php" method="POST">
                <input type="hidden" name="id_venta" value="<?= $row['id_venta']?>">
                <input type="text" placeholder="Detalle de la Venta" name="detalle_venta" value="<?= $row['detalle_venta'] ?>">
                <input type="text" placeholder="Total de la Venta" name="precio_venta" value="<?= $row['precio_venta'] ?>">
                <input type="date" placeholder="Fecha de la Venta" name="fecha_venta" value="<?= $row['fecha_venta'] ?>">
               
                <input type="submit" value="Actualizar">
                <a href="index_venta.php" class="red-button">Cancelar</a>
                <a href="index.php" class="orange-button">Volver a la pagina principal</a>
            </form>
        </div>
        
    </body>
</html>