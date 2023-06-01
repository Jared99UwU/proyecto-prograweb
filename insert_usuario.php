<?php
include("connection.php");
$con = connection();

$id = null;

$nombre = $_POST["nombre"];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$id_cargo = $_POST['id_cargo'];

$sql = "INSERT INTO usuarios VALUES('$id','$nombre','$usuario','$contraseña','$id_cargo')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index_usuario.php");

}else{


}

?>