<?php

include("connection.php");
$con = connection();

$id=$_POST["id_producto"];
$nombre_producto = $_POST['nombre_producto'];
$tamaño = $_POST['tamaño'];
$precio = $_POST['precio'];


$sql="UPDATE producto SET id_producto='$id', nombre_producto='$nombre_producto', tamaño='$tamaño',precio='$precio' WHERE id_producto='$id'";

$query = mysqli_query($con, $sql);


if($query){
    Header("Location: index_producto.php");
}else{

}

?>