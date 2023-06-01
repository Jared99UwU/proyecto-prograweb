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
$sql = "SELECT * FROM pedido";
$host = "localhost";
    $user = "tacos";
    $pass = "123";
    $bd = "tacos";
    $connect=mysqli_connect($host, $user, $pass, $bd);
$query = mysqli_query($connect, $sql);
?>

<div class="container">

<!--<img src="images/logo.png">-->
    <h2>Pedidos Registrados</h2>
  

    
    <table class="table">
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
                    <td><?= $row['id_pedido'] ?></td>
                    <td><?= $row['No_pedido'] ?></td>
                    <td><?= $row['descripcion'] ?></td>
                    <td><?= $row['fechainicio'] ?></td>
                    <td><?= $row['fechafinal'] ?></td>
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