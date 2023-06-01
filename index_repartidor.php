<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM repartidor";
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
    <title>Agregar Repartidor</title>
    
    
</head>

<body>


    <div class="users-form">
        <h1>Registrar Repartidor</h1>
        
        <form action="insert_repartidor.php" method="POST">
            
            <input type="text" name="nombre_repartidor" placeholder="Nombre del Repartidor">
            <input type="text" name="apellido_paterno" placeholder="Apellido Paterno">
            <input type="text" name="apellido_materno" placeholder="Apellido Materno">
            <input type="text" name="Direccion" placeholder="Direccion">
            <input type="text" name="Telefono" placeholder="Telefono">
            <input type="text" name="correo_electronico" placeholder="Correo Electronico">
            

            <input type="submit" value="Agregar" onclick="alerta()">
            <a href="Menu_admin.php" class="orange-button">Pagina principal</a>
           <a href="reportes_repartidor.php" class="yellow-button">Generar PDF</a>
           <a href="excel_repartidor.php" class="blue-button">Generar Excel</a>
        </form>
    </div>

    <div class="users-table">
        <h2>Repartidores Registrados</h2>
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
                    <th>Modififcar</th>
                    <th>Borrar</th>
                    
                  
                    
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

                        <th><a href="update_repartidor.php?id=<?= $row['id_repartidor'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_repartidor.php?id=<?= $row['id_repartidor'] ?>" class="users-table--delete" >Eliminar</a></th>
                        
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
<script>
    function alerta(){
        alert("REPARTIDOR REGISTRADO CORRECTAMENTE")
    }
    
    </script>
     <footer>
  <nav>
    <ul>
      <li><a href="index_producto.php">Producto</a></li>
      <li><a href="index_pedido.php">Pedido</a></li>
      <li><a href="index_cliente.php">Cliente</a></li>
      <li><a href="index_venta.php">Venta</a></li>
      <li><a href="index_usuario.php">Usuarios</a></li>
    </ul>
    <form action="auth.php" method="GET" class="logout-form">
    <input type="hidden" name="logout">
    <button type="submit" class="logout-button">Cerrar sesión</button>
</form>
  </nav>
</footer>
</html>