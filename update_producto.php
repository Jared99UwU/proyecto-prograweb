<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET["id"];

    $sql="SELECT * FROM producto WHERE id_producto='$id'";
  
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
        <title>Editar Producto</title>
        
    </head>
    <h1>Editar el Producto</h1>
    
    <body>
        <div class="users-form">
            <form action="edit_producto.php" method="POST">
                <input type="hidden" name="id_producto" value="<?= $row['id_producto']?>">
                <input type="text" placeholder="Nombre del producto" name="nombre_producto" value="<?= $row['nombre_producto'] ?>">
                <input type="text" placeholder="Tamaño del producto" name="tamaño" value="<?= $row['tamaño'] ?>">
                <select name="tamaño" id="tamaño">
                    <option value="Chico" <?= (($row['tamaño']=="Chico")?"selected":"")?>>Chico</option>
                    <option value="Mediano" <?= (($row['tamaño']=="Mediano")?"selected":"")?>>Mediano</option>
                    <option value="Grande" <?= (($row['tamaño']=="Grande")?"selected":"")?>>Grande</option>
                </select>
              
                <input type="text" placeholder="Precio del producto" name="precio" value="<?= $row['precio'] ?>">
                <input type="submit" value="Actualizar">
                <a href="index_repartidor.php" class="red-button">Cancelar</a>
                <a href="index.php" class="orange-button">Volver a la pagina principal</a>
            </form>
        </div>
        
    </body>
</html>