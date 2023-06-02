<?php 
session_start();
if(!isset($_SESSION['usuario']))
    header("location: login.php");
    include("connection.php");
    $con=connection();

    $id=$_GET["id"];

    $sql="SELECT * FROM usuarios WHERE id='$id'";
  
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
        <title>Editar Usuarios</title>
        
    </head>
    <h1>Editar el Usuario</h1>
    
    <body>
        <div class="users-form">
            <form action="edit_usuarios.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" placeholder="Nombre" name="nombre" value="<?= $row['nombre'] ?>">
                <input type="email" placeholder="Correo Electronico" name="usuario" value="<?= $row['usuario'] ?>">
                <input type="text" placeholder="Contraseña" name="contraseña" value="<?= $row['contraseña'] ?>">
                <input type="text" placeholder="Id_cargo" name="id_cargo" value="<?= $row['id_cargo'] ?>">
                <input type="submit" value="Actualizar">
                <a href="index_usuario.php" class="red-button">Cancelar</a>
                <a href="index.php" class="orange-button">Pagina Principal</a>
            </form>
        </div>
        
    </body>
</html>