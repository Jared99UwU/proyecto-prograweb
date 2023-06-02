<?php

include("connection.php");
session_start();
if(!isset($_SESSION['usuario']))
    header("location: login.php");
include("connection.php");
$con = connection();

$id = null;

$No_pedido = $_POST['No_pedido'];
$descripcion = $_POST['descripcion'];
$fechainicio = $_POST['fechainicio'];
$fechafinal = $_POST['fechafinal'];

$sql = "INSERT INTO pedido VALUES('$id','$No_pedido','$descripcion','$fechainicio','$fechafinal')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index_pedido.php");

}else{


}

?>
