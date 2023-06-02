<?php
include("connection.php");
session_start();
if(!isset($_SESSION['usuario']))
    header("location: login.php");
include("connection.php");
$con = connection();

$id = null;

$nombre_producto = $_POST['nombre_producto'];
$tamaño = $_POST['tamaño'];
$precio = $_POST['precio'];


$sql = "INSERT INTO producto VALUES('$id','$nombre_producto','$tamaño','$precio')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index_producto.php");

}else{


}

?>