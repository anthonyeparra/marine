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
             "password" => md5($password)
         ];
         $marine = new Marine();
         $resp = $marine->inciarSesion($datos);
         if($resp["cantidad"] == 1 ){
               if($resp["cantidad"] > 0)
                { 
                    session_start();
                    $_SESSION["id"]=$resp["registro"]["id"];
                    $_SESSION["nombre"]=$resp["registro"]["nombre"];
                    $_SESSION['active'] = true;
                }
            response($modulo, 'Marines-Modulo', $resp["cantidad"] , 0);
         }else{
            response($modulo, 'Marines-Modulo', $resp["cantidad"] , 1);
         }
        break;
        case 'registroUsuarios':
            $modulo = 'Registro de usuario';
            $cedula = addslashes(trim($_POST['cedula']));
            $nombre = addslashes(trim($_POST['nombre'])); 
            $direccion = addslashes(trim($_POST['direccion'])); 
            $celular = addslashes(trim($_POST['celular']));
            $email = addslashes(trim($_POST['email']));
            $password = addslashes(trim($_POST['password']));

            $datos = [
                "cedula" => $cedula,
                "nombre" => $nombre,
                "direccion" => $direccion,
                "celular" => $celular,
                "email" => $email,
                "password" => md5($password)
            ];
            $marine = new Marine();
            $resp = $marine->registroUsuarios($datos);
            if($resp){
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



