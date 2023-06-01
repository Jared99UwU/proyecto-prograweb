<?php

include("connection.php");
$con = connection();

$id=$_POST["id_venta"];
$detalle_venta = $_POST['detalle_venta'];
$precio_venta = $_POST['precio_venta'];
$fecha_venta = $_POST['fecha_venta'];



$sql="UPDATE venta SET id_venta='$id', detalle_venta='$detalle_venta', precio_venta='$precio_venta',fecha_venta='$fecha_venta' WHERE id_venta='$id'";

$query = mysqli_query($con, $sql);


if($query){
    Header("Location: index_venta.php");
}else{

}

?>