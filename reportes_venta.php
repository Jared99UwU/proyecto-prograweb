<?php
ob_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?2.00">
</head>
<body>
<?php
require("connection.php");
$sql = "SELECT * FROM venta";
$host = "localhost";
    $user = "tacos";
    $pass = "123";
    $bd = "tacos";
    $connect=mysqli_connect($host, $user, $pass, $bd);
$query = mysqli_query($connect, $sql);
?>

<div class="container">
<h2>Ventas Registradas</h2>

<table class="table">
       
        <table>
            <thead>
                <tr>
                    <th>Id_Venta</th>
                    <th>Detalle Venta</th>
                    <th>Total de la Venta</th>
                    <th>Fecha de Venta</th>
                   
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_venta'] ?></th>
                        <th><?= $row['detalle_venta'] ?></th>
                        <th><?="$".$row['precio_venta'] ?></th>
                        <th><?= $row['fecha_venta'] ?></th>
                 

                        
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
</html>

<?php
$html=ob_get_clean();

require_once('../proyecto-prograweb/administrador/libreria/dompdf/autoload.inc.php');
use Dompdf\Dompdf;
$dompdf= new Dompdf();

$options =$dompdf->getOptions();
$options->set(array('isRemoteEnabled' =>true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);
$dompdf->setPaper('letter');

$dompdf->render();

$dompdf->stream("archivo_pdf",array("Attachment"=>false));
?>