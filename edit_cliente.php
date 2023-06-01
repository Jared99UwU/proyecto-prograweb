<?php

include("connection.php");
$con = connection();

$id=$_POST["id_Cliente"];
$nombre_cliente = $_POST['nombre_cliente'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$fechanacimiento = $_POST['fecha_nacimiento'];
$correo = $_POST['correo'];

$sql="UPDATE cliente SET id_Cliente='$id', nombre_cliente='$nombre_cliente', direccion='$direccion',telefono='$telefono',fecha_nacimiento='$fechanacimiento',correo='$correo' WHERE id_Cliente='$id'";

$query = mysqli_query($con, $sql);


if($query){
    Header("Location: index_cliente.php");
}else{

}

?>