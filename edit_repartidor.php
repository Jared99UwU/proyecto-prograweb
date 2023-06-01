<?php

include("connection.php");
$con = connection();

$id=$_POST["id_repartidor"];
$nombre_repartidor = $_POST['nombre_repartidor'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$Direccion = $_POST['Direccion'];
$Telefono = $_POST['Telefono'];
$correo_electronico = $_POST['correo_electronico'];

$sql="UPDATE repartidor SET id_repartidor='$id', nombre_repartidor='$nombre_repartidor', apellido_paterno='$apellido_paterno',apellido_materno='$apellido_materno',Direccion='$Direccion',Telefono='$Telefono',correo_electronico='$correo_electronico' WHERE id_repartidor='$id'";

$query = mysqli_query($con, $sql);


if($query){
    Header("Location: index_repartidor.php");
}else{

}

?>