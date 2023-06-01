<?php

function connection(){
    $host = "localhost";
    $user = "tacos";
    $pass = "123";
    $bd = "tacos";
    $connect=mysqli_connect($host, $user, $pass);
    mysqli_select_db($connect, $bd);
    return $connect;
}


?>