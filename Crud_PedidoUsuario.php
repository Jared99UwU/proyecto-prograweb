<?php
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
    <link href="css/style1.css?2.00" rel="stylesheet">
  
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
           <a href="index.php" class="orange-button">Pagina Principal</a>
          
           

          
           
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

    <form action="auth.php" method="GET" class="logout-form">
    <input type="hidden" name="logout">
    <button type="submit" class="logout-button">Cerrar sesión</button>
</form>
  </nav>
</footer>
</html>