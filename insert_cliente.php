<?php
session_start();
if(!isset($_SESSION['usuario']))
    header("location: login.php");
include("connection.php");
include("connection.php");
$con = connection();

$id = null;

$nombre_cliente = $_POST['nombre_cliente'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$correo = $_POST['correo'];

$sql = "INSERT INTO cliente VALUES('$id','$nombre_cliente','$direccion','$telefono','$fecha_nacimiento','$correo')";
$query = mysqli_query($con, $sql);


if($query){
    Header("Location: index_cliente.php");

}else{


}

?>