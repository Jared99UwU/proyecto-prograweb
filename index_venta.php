<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM venta";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <link href="css/style1.css?1.00" rel="stylesheet">
  
    <link rel="stylesheet" href="css/style.css">
    <title>Agregar Venta</title>
    
    
    
</head>

<body>

    <div class="users-form">
        <h1>Registrar Nueva Venta</h1>
        
        <form action="insert_venta.php" method="POST">
            
            <input type="text" name="detalle_venta" placeholder="Detalle de la venta">
            <input type="text" name="precio_venta" placeholder="Precio">
            <input type="date" name="fecha_venta" placeholder="Fecha de la venta">
            

            <input type="submit" value="Agregar" onclick="alerta()">
           <a href="Menu_admin.php" class="orange-button">Pagina principal</a>
           <a href="reportes_venta.php" class="yellow-button">Generar PDF</a>
           <a href="excel_venta.php" class="blue-button">Generar Excel</a>
        </form>
    </div>

    <div class="users-table">
        <h2>Ventas Registradas</h2>
        <table>
            <thead>
                <tr>
                    <th>Id_Venta</th>
                    <th>Detalle Venta</th>
                    <th>Total de la Venta</th>
                    <th>Fecha de Venta</th>
                    <th>Modificar</th>
                    <th>Borrar</th>
                  
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_venta'] ?></th>
                        <th><?= $row['detalle_venta'] ?></th>
                        <th><?="$".$row['precio_venta'] ?></th>
                        <th><?= $row['fecha_venta'] ?></th>
                 

                        <th><a href="update_venta.php?id=<?= $row['id_venta'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_venta.php?id=<?= $row['id_venta'] ?>" class="users-table--delete" >Eliminar</a></th>
                        
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
<script>
    function alerta(){
        alert("PEDIDO REGISTRADO CORRECTAMENTE")
    }
    
    </script>
     <footer>
  <nav>
    <ul>
      <li><a href="index_producto.php">Producto</a></li>
      <li><a href="index_repartidor.php">Repartidor</a></li>
      <li><a href="index_cliente.php">Cliente</a></li>
      <li><a href="index_pedido.php">Pedido</a></li>
      <li><a href="index_usuario.php">Usuarios</a></li>
    </ul>
    <form action="auth.php" method="GET" class="logout-form">
    <input type="hidden" name="logout">
    <button type="submit" class="logout-button">Cerrar sesión</button>
  </nav>
</footer>
</html>