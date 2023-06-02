<?php
session_start();
if(!isset($_SESSION['usuario']))
    header("location: login.php");
include("connection.php");
$con = connection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <link href="css/style1.css?2.00" rel="stylesheet">
  
    <link rel="stylesheet" href="css/style.css">
    
    <title>Agregar Usuarios</title>
    
    
    
</head>

<body>


    <div class="users-form">
    
        <h1>Crear Nuevo Usuario</h1>
        
        <form action="insert_usuario.php" method="POST">
        
            <input type="text" name="nombre" placeholder="Nombre del usuario">
            <input type="email" name="usuario" placeholder="Correo">
            <input type="text" name="contraseña" placeholder="Contraseña">
            <input type="text" name="id_cargo" placeholder="id_rol">
            

            <input type="submit" value="Agregar" onclick="alerta()">
            <a href="Menu_admin.php" class="orange-button">Pagina principal</a>
           <a href="reporte_usuarios.php" class="yellow-button">Generar PDF</a>
           <a href="excel_usuarios.php" class="blue-button">Generar Excel</a>
           

          
           
        </form>
    </div>

    <div class="users-table">
        <h2>Usuarios Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Id_Usuario</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>id_cargo</th>
                    <th>Modificar</th>
                    <th>Borrar</th>
                  
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['usuario'] ?></th>
                        <th><?= $row['contraseña'] ?></th>
                        <th><?= $row['id_cargo'] ?></th>

                        <th><a href="update_usuario.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_usuario.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                        
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
<script>
    function alerta(){
        alert("USUARIO REGISTRADO CORRECTAMENTE")
    }
    
    </script>
     <footer>
  <nav>
    <ul>
      <li><a href="index_pedido.php">Pedidos</a></li>
      <li><a href="index_producto.php">Producto</a></li>
      <li><a href="index_repartidor.php">Repartidor</a></li>
      <li><a href="index_cliente.php">Cliente</a></li>
      <li><a href="index_venta.php">Venta</a></li>
      
    </ul>
    <form action="auth.php" method="GET" class="logout-form">
    <input type="hidden" name="logout">
    <button type="submit" class="logout-button">Cerrar sesión</button>
</form>
  </nav>
</footer>
</html>