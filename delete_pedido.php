<?php

include("connection.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM pedido WHERE id_pedido='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index_pedido.php");
}else{

}

?>