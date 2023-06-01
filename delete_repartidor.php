<?php

include("connection.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM repartidor WHERE id_repartidor='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index_repartidor.php");
}else{

}

?>