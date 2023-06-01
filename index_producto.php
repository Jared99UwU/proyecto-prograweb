<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM producto";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <link href="css/style1.css?3.00" rel="stylesheet">
  
    <link rel="stylesheet" href="css/style.css">
    <title>Agregar Producto</title>
    
    
</head>

<body>


    <div class="users-form">
        <h1>Registrar Producto</h1>
        
        <form action="insert_producto.php" method="POST">
            
            <input type="text" name="nombre_producto" placeholder="Nombre del producto">
            <input type="text" name="tamaño" placeholder="Tamaño del producto">
            <input type="text" name="precio" placeholder="Precio">
            
            

            <input type="submit" value="Agregar" onclick="alerta()">
            <a href="Menu_admin.php" class="orange-button">Pagina principal</a>
            <a href="reporte_producto.php" class="yellow-button">Generar PDF</a>
            <a href="excel_producto.php" class="blue-button">Generar Excel</a>
        </form>
    </div>

    <div class="users-table">
        <h2>Productos Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>id_Producto</th>
                    <th>Nombre del Producto</th>
                    <th>Tamaño</th>
                    <th>Precio</th>
                    <th>Modificar</th>
                    <th>Borrar</th>
                  
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_producto'] ?></th>
                        <th><?= $row['nombre_producto'] ?></th>
                        <th><?= $row['tamaño'] ?></th>
                        <th><?= "$".$row['precio'] ?></th>
                        

                        <th><a href="update_producto.php?id=<?= $row['id_producto'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_producto.php?id=<?= $row['id_producto'] ?>" class="users-table--delete" >Eliminar</a></th>
                        
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
<script>
    function alerta(){
        alert("PRODUCTO REGISTRADO CORRECTAMENTE")
    }
    
    </script>
     <footer>
  <nav>
    <ul>
      <li><a href="index_pedido.php">Pedido</a></li>
      <li><a href="index_repartidor.php">Repartidor</a></li>
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