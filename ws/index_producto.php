<?php
header('Content-Type: application/json; charset=utf-8');
//include_once(__DIR__."/../admin/controllers/sistema.php");
include_once("index_producto.php");
include_once("connection.php");

$accion = $_SERVER['REQUEST_METHOD'];
$id = isset($_GET['id']) ? $_GET['id'] : null;
switch ($accion):
    case 'DELETE':
        $con = connection();
        $sql = "DELETE FROM producto where id_producto =  '{$id}'";
        $query = mysqli_query($con, $sql);
        echo 'se borro';
        exit;
        break;
    case 'POST': //Va a hacer tanto insertar como editar
        $body = (json_decode(file_get_contents('php://input'), true));

        $con = connection();
        $sql = "INSERT INTO producto (nombre_producto, tamaño, precio) 
       values ('{$body['nombre_producto']}', '{$body['tamaño']}', '{$body['precio']}')";
        $query = mysqli_query($con, $sql);
        echo 'se inserto';
        exit;
        break;
    case 'PUT':
        $body = (json_decode(file_get_contents('php://input'), true));
        $con = connection();
        $sql = "UPDATE producto set nombre_producto= '{$body['nombre_producto']}', tamaño = '{$body['tamaño']}', 
        precio= '{$body['precio']}' where id_producto =  '{$id}'";
        $query = mysqli_query($con, $sql);
         echo 'se actualizo';
         exit;
        break;
    case 'GET':
    default:
        if (is_null($id)) {
            $con = connection();

            $sql = "SELECT * FROM producto";
            $query = mysqli_query($con, $sql);

            $arreglo = array();
            while ($row = mysqli_fetch_assoc($query)) {
                $arreglo[] = $row;
            }

            $data = $arreglo;
        } else {
            $con = connection();

            $sql = "SELECT * FROM producto where id_producto = '{$id}' ";
            $query = mysqli_query($con, $sql);
            $data =  mysqli_fetch_assoc($query);
        }

        break;
endswitch;

$data = json_encode($data);
echo ($data);
