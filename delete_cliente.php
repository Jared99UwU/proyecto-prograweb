<?php

include("connection.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM cliente WHERE id_Cliente='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index_cliente.php");
}else{

}

?>