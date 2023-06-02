<?php
header('Content-Type: application/json; charset=utf-8');
//include_once(__DIR__."/../admin/controllers/sistema.php");
include_once("index_cliente.php");
include_once("connection.php");

$accion = $_SERVER['REQUEST_METHOD'];
$id = isset($_GET['id']) ? $_GET['id'] : null;
switch ($accion):
    case 'DELETE':
        $con = connection();
        $sql = "DELETE FROM cliente where id_Cliente =  '{$id}'";
        $query = mysqli_query($con, $sql);
        echo 'se borro';
        exit;
        break;
    case 'POST': //Va a hacer tanto insertar como editar
        $body = (json_decode(file_get_contents('php://input'), true));

        $con = connection();
        $sql = "INSERT INTO cliente (nombre_cliente, direccion, telefono, fecha_nacimiento, correo) 
       values ('{$body['nombre_cliente']}', '{$body['direccion']}', '{$body['telefono']}', '{$body['fecha_nacimiento']}', '{$body['correo']}')";
        $query = mysqli_query($con, $sql);
        echo 'se inserto';
        exit;
        break;
    case 'PUT':
        $body = (json_decode(file_get_contents('php://input'), true));
        $con = connection();
        $sql = "UPDATE cliente set nombre_cliente= '{$body['nombre_cliente']}', direccion = '{$body['direccion']}', 
        telefono= '{$body['telefono']}', fecha_nacimiento = '{$body['fecha_nacimiento']}', correo = '{$body['correo']}' where id_Cliente =  '{$id}'";
        $query = mysqli_query($con, $sql);
         echo 'se actualizo';
         exit;
        break;
    case 'GET':
    default:
        if (is_null($id)) {
            $con = connection();

            $sql = "SELECT * FROM cliente";
            $query = mysqli_query($con, $sql);

            $arreglo = array();
            while ($row = mysqli_fetch_assoc($query)) {
                $arreglo[] = $row;
            }

            $data = $arreglo;
        } else {
            $con = connection();

            $sql = "SELECT * FROM cliente where id_Cliente = '{$id}' ";
            $query = mysqli_query($con, $sql);
            $data =  mysqli_fetch_assoc($query);
        }

        break;
endswitch;

$data = json_encode($data);
echo ($data);
