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
                    $_SESSION["roll"]=$resp["registro"]["roll"];
                    $_SESSION["puntos"]=$resp["registro"]["puntos"];
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
            $roll = addslashes(trim($_POST['roll']));
            $email = addslashes(trim($_POST['email']));
            $password = addslashes(trim($_POST['password']));
            // response($modulo, 'Marines-Modulo', $_POST , 0);
            // exit;



            $datos = [
                "cedula" => $cedula,
                "nombre" => $nombre,
                "direccion" => $direccion,
                "celular" => $celular,
                "roll" => $roll,
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

           case 'registroDesechos':
            $modulo = 'Registro de desechos';
            $nombre = addslashes(trim($_POST['nombre'])); 
            $descripcion = addslashes(trim($_POST['descripcion'])); 
            $peso = addslashes(trim($_POST['peso']));
            $id = addslashes(trim($_POST['id']));
            //validaciones que los campos no deben ir vacio
        
            $datos = [
                "nombre" => $nombre,
                "descripcion" => $descripcion,
                "peso" => $peso,
                "id" => $id
            ];
            $marine = new Marine();
            $resp = $marine->registroDesechos($datos);
            if($resp){
               response($modulo, 'HA INSERTADO CORRECTAMENTE', $resp , 0);
            }else{
               response($modulo, 'HA  OCURRIDO UN ERROR', $resp , 1);
            }
           break;
           case 'getPremio':
            $modulo = 'GetPremiosUser';
        
            $id = addslashes(trim($_POST['id']));
            //validaciones que los campos no deben ir vacio
        
            $datos = [
                "id" => $id
            ];
            $marine = new Marine();

            $resp = $marine->getPremios($datos);
            if($resp['cantidad']>0){
                response($modulo, 'OK', $resp['registro'] , 0);
            }else{
                response($modulo, 'NO TIENES PREMIOS POR TU PUNTAJE', [] , 0);
            }

               
  
           break;

           case 'getPremio':
            $modulo = 'GetPremiosUser';
        
            $id = addslashes(trim($_POST['id']));
            //validaciones que los campos no deben ir vacio
        
            $datos = [
                "id" => $id
            ];
            $marine = new Marine();

            $resp = $marine->getPremios($datos);
            if($resp['cantidad']>0){
                response($modulo, 'OK', $resp['registro'] , 0);
            }else{
                response($modulo, 'NO TIENES PREMIOS POR TU PUNTAJE', [] , 0);
            }
  
           break;

           case 'canjearPremios':
            $modulo = 'canjearPremios';
            $id = addslashes(trim($_POST['id'])); 
            $idPremio = addslashes(trim($_POST['idPremio'])); 
            $valor = addslashes(trim($_POST['valor'])); 
            //validaciones que los campos no deben ir vacio
        
            $datos = [
                "id" => $id,
                "idPremio" => $idPremio,
                "valor" => $valor
            ];
            $marine = new Marine();
            $resp = $marine->canjearPremios($datos);
            //response($modulo, 'HA CANJEADO CORRECTAMENTE', $resp , 0);
            if($resp){
                response($modulo, 'HA CANJEADO CORRECTAMENTE', $resp , 0);
            }else{
               response($modulo, $resp, [] , 1);
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



