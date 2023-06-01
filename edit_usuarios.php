<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$nombre = $_POST["nombre"];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$id_cargo = $_POST['id_cargo'];

$sql="UPDATE usuarios SET id='$id', nombre='$nombre', usuario='$usuario',contraseña='$contraseña',id_cargo='$id_cargo' WHERE id='$id'";

$query = mysqli_query($con, $sql);


if($query){
    Header("Location: index_usuario.php");
}else{

}

?>