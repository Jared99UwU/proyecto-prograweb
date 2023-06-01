<?php

include("connection.php");
$con = connection();

$id=$_POST["id_pedido"];
$No_pedido = $_POST["No_pedido"];
$descripcion = $_POST['descripcion'];
$fechainicio = $_POST['fechainicio'];
$fechafinal = $_POST['fechafinal'];

$sql="UPDATE pedido SET id_pedido='$id', descripcion='$descripcion', No_pedido='$No_pedido',fechainicio='$fechainicio',fechafinal='$fechafinal' WHERE id_pedido='$id'";

$query = mysqli_query($con, $sql);


if($query){
    Header("Location: index_pedido.php");
}else{

}

?>