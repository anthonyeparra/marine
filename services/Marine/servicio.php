<?php
header("Content-Type:application/json; charset=UTF-8");
require_once '../../class/marine.php';

switch ($_POST['t']) {
// switch ("prueba") {
    case 'inicioSesion':
         $modulo = 'Inicio de sesion';
         $usuario = addslashes(trim($_POST['usuario']));
         $password = addslashes(trim($_POST['password']));
         $datos = [
             "usuario" => $usuario,
             "password" => $password
         ];
         $marine = new Marine();
         $resp = $marine->inciarSesion($datos);
         if($resp == 1 ){
            response($modulo, 'Marines-Modulo', $resp , 0);
         }else{
            response($modulo, 'Marines-Modulo', $resp , 1);
         }
        break;
        default :
            response("Defecto", 'Opcion Invalda', [], 1);
        break;
}

function response($modulo, $mensaje, $datos, $error)
{
    header("HTTP/1.1 " . $error == 0 ? 200 : 500);

    $response['error'] = $error;
    $response['mensaje'] = $mensaje;
    $response['modulo'] = $modulo;
    $response['datos'] = $datos;

    $json_response = json_encode($response);
    echo $json_response;
}



