<?php

include("connection.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM venta WHERE id_venta='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index_venta.php");
}else{

}

?>