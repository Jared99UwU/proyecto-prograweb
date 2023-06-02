<?php
header('Content-Type: application/json; charset=utf-8');
//include_once(__DIR__."/../admin/controllers/sistema.php");
include_once("index_repartidor.php");
include_once("connection.php");

$accion = $_SERVER['REQUEST_METHOD'];
$id = isset($_GET['id']) ? $_GET['id'] : null;
switch ($accion):
    case 'DELETE':
        $con = connection();
        $sql = "DELETE FROM repartidor where id_repartidor =  '{$id}'";
        $query = mysqli_query($con, $sql);
        echo 'se borro';
        exit;
        break;
    case 'POST': 
        $body = (json_decode(file_get_contents('php://input'), true));

        $con = connection();
        $sql = "INSERT INTO repartidor (nombre_repartidor, apellido_paterno, apellido_materno, Direccion, Telefono, correo_electronico) 
       values ('{$body['nombre_repartidor']}', '{$body['apellido_paterno']}', '{$body['apellido_materno']}', '{$body['Direccion']}', '{$body['Telefono']}', '{$body['correo_electronico']}')";
        $query = mysqli_query($con, $sql);
        echo 'se inserto';
        exit;
        break;
    case 'PUT':
        $body = (json_decode(file_get_contents('php://input'), true));
        $con = connection();
        $sql = "UPDATE repartidor set nombre_repartidor= '{$body['nombre_repartidor']}', apellido_paterno = '{$body['apellido_paterno']}', 
        apellido_materno= '{$body['apellido_materno']}', Direccion = '{$body['Direccion']}',  Telefono = '{$body['Telefono']}', correo_electronico = '{$body['correo_electronico']}' where id_repartidor =  '{$id}'";
        $query = mysqli_query($con, $sql);
         echo 'se actualizo';
         exit;
        break;
    case 'GET':
    default:
        if (is_null($id)) {
            $con = connection();

            $sql = "SELECT * FROM repartidor";
            $query = mysqli_query($con, $sql);

            $arreglo = array();
            while ($row = mysqli_fetch_assoc($query)) {
                $arreglo[] = $row;
            }

            $data = $arreglo;
        } else {
            $con = connection();

            $sql = "SELECT * FROM repartidor where id_repartidor = '{$id}' ";
            $query = mysqli_query($con, $sql);
            $data =  mysqli_fetch_assoc($query);
        }

        break;
endswitch;

$data = json_encode($data);
echo ($data);
