<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=Cliente.xls");

require("connection.php");
$sql = "SELECT * FROM cliente";
$host = "localhost";
$user = "tacos";
$pass = "123";
$bd = "tacos";
$connect = mysqli_connect($host, $user, $pass, $bd);
$query = mysqli_query($connect, $sql);
?>

<div class="container">




        <h2>Clientes Registrados</h2>

        <table class="table">
      
            <thead>
                <tr>
                    <th>id_Cliente</th>
                    <th>Nombre Cliente</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Correo</th>
                    
                  
                    
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

                      
                        
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
    
</body>
</html>


