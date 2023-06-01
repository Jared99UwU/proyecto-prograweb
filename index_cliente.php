<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM cliente";
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
    <title>Agregar Cliente</title>
    
    
</head>

<body>


    <div class="users-form">
        <h1>Registrar Cliente</h1>
        
        <form action="insert_cliente.php" method="POST">
            
            <input type="text" name="nombre_cliente" placeholder="Nombre del cliente">
            <input type="text" name="direccion" placeholder="Direccion del cliente">
            <input type="text" name="telefono" placeholder="Telefono">
            <input type="date" name="fecha_nacimiento" placeholder="Fecha_nacimiento">
            <input type="email" id="email" name="correo" placeholder="Correo Electronico">
            

            <input type="submit" value="Agregar" onclick="alerta()">
            <a href="Menu_admin.php" class="orange-button">Pagina principal</a>
            <a href="reportes_cliente.php" class="yellow-button">Generar PDF</a>
            <a href="excel_cliente.php" class="blue-button">Generar Excel</a>

        </form>
    </div>

    <div class="users-table">
        <h2>Clientes Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>id_Cliente</th>
                    <th>Nombre Cliente</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Correo</th>
                    <th>Modificar</th>
                    <th>Borrar</th>
                  
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_Cliente'] ?></th>
                        <th><?= $row['nombre_cliente'] ?></th>
                        <th><?= $row['direccion'] ?></th>
                        <th><?= $row['telefono'] ?></th>
                        <th><?= $row['fecha_nacimiento'] ?></th>
                        <th><?= $row['correo'] ?></th>

                        <th><a href="update_cliente.php?id=<?= $row['id_Cliente'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_cliente.php?id=<?= $row['id_Cliente'] ?>" class="users-table--delete" >Eliminar</a></th>
                        
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
<script>
    function alerta(){
        alert("CLIENTE REGISTRADO CORRECTAMENTE")
    }
    
    </script>
     <footer>
  <nav>
    <ul>
      <li><a href="index_producto.php">Producto</a></li>
      <li><a href="index_repartidor.php">Repartidor</a></li>
      <li><a href="index_pedido.php">Pedido</a></li>
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