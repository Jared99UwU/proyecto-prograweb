<?php
include("connection.php");
$con = connection();

$id = null;

$detalle_venta = $_POST['detalle_venta'];
$precio_venta = $_POST['precio_venta'];
$fecha_venta = $_POST['fecha_venta'];


$sql = "INSERT INTO venta VALUES('$id','$detalle_venta','$precio_venta','$fecha_venta')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index_venta.php");

}else{


}

?>