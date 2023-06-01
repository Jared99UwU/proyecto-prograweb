<?php
include("connection.php");
$con = connection();

$id = null;

$nombre_repartidor = $_POST['nombre_repartidor'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$Direccion = $_POST['Direccion'];
$Telefono = $_POST['Telefono'];
$correo_electronico = $_POST['correo_electronico'];

$sql = "INSERT INTO repartidor VALUES('$id','$nombre_repartidor','$apellido_paterno','$apellido_materno','$Direccion','$Telefono','$correo_electronico')";
$query = mysqli_query($con, $sql);


if($query){
    Header("Location: index_repartidor.php");

}else{


}

?>