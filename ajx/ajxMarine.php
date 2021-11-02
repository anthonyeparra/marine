<?php
require_once '../class/Service.php';

use classes\Service;

$service = new Service('Marine');

// if(!isset($_SESSION)){
//     session_start();
// }

// $usuario = $_SESSION['usuario'];

// if ($usuario) {
//     $id_usuario = $usuario->getUserId();
// } else {
//     $id_usuario = $_POST['usuario_id'];
// }

$op = 1;

if ($op) {
    //$serviceToken = $service->getToken();

        //obtener todo el post
        $data = $_POST;
        $paso = true;
        $t = '';
        //verificar opción
        switch ($op) {
            case 1:
                $t = 'inicioSesion';
                break;
            default:
                $paso = false;
                break;
            }  
        
        //verificar opción
        
        if ($paso) {
            $data['t'] = $t;
           //$data['usuario'] = $id_usuario;
            $resp = $service->useService($data);
        } else {
            $resp = ['error' => 1, 'mensaje' => 'Opción incorrecta.'];
        }
    //retornar datos
    echo json_encode($resp);
} else {
    //retornar error
    echo json_encode(['error' => 1, 'mensaje' => 'Opción incorrecta.']);
}

