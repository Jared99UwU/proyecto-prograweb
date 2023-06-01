<?php

include("connection.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM producto WHERE id_producto='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index_producto.php");
}else{

}

?>