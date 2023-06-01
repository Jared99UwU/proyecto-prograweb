<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET["id"];

    $sql="SELECT * FROM pedido WHERE id_pedido='$id'";
  
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
        <title>Editar Pedidos</title>
        
    </head>
    <h1>Editar el pedido</h1>
    
    <body>
        <div class="users-form">
            <form action="edit_pedido.php" method="POST">
                <input type="hidden" name="id_pedido" value="<?= $row['id_pedido']?>">
                <input type="text" placeholder="Numero de pedido" name="No_pedido" value="<?= $row['No_pedido'] ?>">
                <input type="text" placeholder="Descripcion del pedido" name="descripcion" value="<?= $row['descripcion'] ?>">
                <input type="date" placeholder="Fecha de Inicio" name="fechainicio" value="<?= $row['fechainicio'] ?>">
                <input type="date" placeholder="Fecha Final" name="fechafinal" value="<?= $row['fechafinal'] ?>">
                <input type="submit" value="Actualizar">
                <a href="index_repartidor.php" class="red-button">Cancelar</a>
                <a href="index.php" class="orange-button">Volver a la pagina principal</a>
            </form>
        </div>
        
    </body>
</html>