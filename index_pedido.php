<?php
session_start();
if(!isset($_SESSION['usuario']))
    header("location: login.php");
include("connection.php");
$con = connection();

$sql = "SELECT * FROM pedido";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <link href="css/style1.css?4.00" rel="stylesheet">
  
    <link rel="stylesheet" href="css/style.css">
    
    <title>Agregar pedido</title>
    
    
    
</head>

<body>


    <div class="users-form">
    
        <h1>Crear Nuevo Pedido</h1>
        
        <form action="insert_pedido.php" method="POST">
        
            <input type="text" name="No_pedido" placeholder="Referencia">
            <input type="text" name="descripcion" placeholder="Descripcion del pedido">
            <input type="date" name="fechainicio" placeholder="Fecha de inicio">
            <input type="date" name="fechafinal" placeholder="Fecha final">
            

            <input type="submit" value="Agregar" onclick="alerta()">
            <a href="Menu_admin.php" class="orange-button">Pagina principal</a>
           <a href="reportes.php" class="yellow-button">Generar PDF</a>
           <a href="excel_pedidos.php" class="blue-button">Generar Excel</a>
           <a href="grafica_pedidos.php" class="purple-button">Graficas</a>
           

          
           
        </form>
    </div>

    <div class="users-table">
        <h2>Pedidos Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID_Pedido</th>
                    <th>Referencia</th>
                    <th>Descripcion</th>
                    <th>Fecha inicio</th>
                    <th>Fecha final</th>
                    <th>Modificar</th>
                    <th>Borrar</th>
                  
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_pedido'] ?></th>
                        <th><?= $row['No_pedido'] ?></th>
                        <th><?= $row['descripcion'] ?></th>
                        <th><?= $row['fechainicio'] ?></th>
                        <th><?= $row['fechafinal'] ?></th>

                        <th><a href="update_pedido.php?id=<?= $row['id_pedido'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_pedido.php?id=<?= $row['id_pedido'] ?>" class="users-table--delete" >Eliminar</a></th>
                        
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
      <li><a href="index_venta.php">Venta</a></li>
      <li><a href="index_usuario.php">Usuario</a></li>
    </ul>
    <form action="auth.php" method="GET" class="logout-form">
    <input type="hidden" name="logout">
    <button type="submit" class="logout-button">Cerrar sesión</button>
</form>
  </nav>
</footer>
</html>