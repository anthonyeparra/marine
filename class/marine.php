<?php
require_once 'conexion.php';

class Marine extends Conexion
{
    public function inciarSesion($datos)
    {
        try 
        {
            $sqlConsulta="SELECT * FROM usuario WHERE correo='{$datos['usuario']}' AND password='{$datos['password']}'";
            $queryConsulta=Conexion::Conectar()->prepare($sqlConsulta);//Resolucion de ambito
            // $queryConsulta->bindParam(":correo",$datos['usuario'],PDO::PARAM_STR);
            // $queryConsulta->bindParam(":password",$datos['password'],PDO::PARAM_STR);
            $queryConsulta->execute();
            $numeroderegistro=$queryConsulta->rowCount();
            $registro=$queryConsulta->fetch();
            
        
            $datos =[
                "registro" => $registro,
                "cantidad" => $numeroderegistro
            ];
            return $datos;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function registroUsuarios($datos)
    {
        try 
        {
            $sql="INSERT INTO usuario (nombre, direccion, celular, correo, password, roll)
            VALUES (:mnombre, :mdireccion, :mcelular, :memail, :mpass, :mroll)";
            $query=Conexion::conectar()->prepare($sql);//Resolucion de ambito
            $query->bindParam(":mnombre",$datos['nombre'],PDO::PARAM_STR);
            $query->bindParam(":mdireccion",$datos['direccion'],PDO::PARAM_STR);
            $query->bindParam(":mcelular",$datos['celular'],PDO::PARAM_STR);
            $query->bindParam(":memail",$datos['email'],PDO::PARAM_STR);
            $query->bindParam(":mpass",$datos['password'],PDO::PARAM_STR);
            $query->bindParam(":mroll",$datos['roll'],PDO::PARAM_STR);
            return $query->execute();
        
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function registroDesechos($datos)
    {
        try 
        {
            $sql="INSERT INTO desecho (nombre, descripcion, peso, id_usuario)
            VALUES (:mnombre, :mdescripcion, :mpeso, :mid_usuario)";
            $query=Conexion::conectar()->prepare($sql);//Resolucion de ambito
            $query->bindParam(":mnombre",$datos['nombre'],PDO::PARAM_STR);
            $query->bindParam(":mdescripcion",$datos['descripcion'],PDO::PARAM_STR);
            $query->bindParam(":mpeso",$datos['peso'],PDO::PARAM_STR);
            $query->bindParam(":mid_usuario",$datos['id'],PDO::PARAM_INT);
            $respuesta = $query->execute();
            if($respuesta){
                $result = $this->consultarUsuario($datos['id']);
                if(count($result)!=0){
                    $puntos = $result['puntos'] + 10;
                    $update = "UPDATE usuario SET puntos = " . $puntos . " WHERE id = {$datos['id']}";
                    $query3 = Conexion::conectar()->prepare($update);
                    return $query3->execute();
                }
            }else{
                return false;
            }
        
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function consultarUsuario($id){

        $sql2 ="SELECT puntos FROM usuario WHERE id = $id";
        $query2 = Conexion::conectar()->prepare($sql2);
        $query2->execute();
        return $query2->fetch(); //retorna en array asociativo
    }
    function iniciarSesionSiNoEstaIniciada()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }
    function cerrarSesion()
    {
        Marine::iniciarSesionSiNoEstaIniciada();
            session_destroy();
    }

    function getPremios($data){
        $sql2 ="SELECT * FROM premio WHERE valor <= (SELECT puntos FROM usuario WHERE id = {$data['id']}) AND disponible != 0";
        $query2 = Conexion::conectar()->prepare($sql2);
        $query2->execute();
        $registros = $query2->fetchAll();
        $numeroderegistro=$query2->rowCount();

            $datos =[
                "registro" => $registros,
                "cantidad" => $numeroderegistro
            ];
            return $datos;
    }
    function canjearPremios($data){
        // CONSULTAR STOCK DE PREMIO POR ID 
        $sqlConsultarPremio ="SELECT disponible,valor FROM premio WHERE id = {$data['idPremio']}";
        $queryConsultarPremio = Conexion::conectar()->prepare($sqlConsultarPremio);
        $queryConsultarPremio->execute();
        $registros = $queryConsultarPremio->fetch();
        //Consultar los puntos del usuario
        $sqlPuntosUser ="SELECT puntos FROM usuario WHERE id = {$data['id']}";
        $queryPuntosUser = Conexion::conectar()->prepare($sqlPuntosUser);
        $queryPuntosUser->execute();
        $registrosUser = $queryPuntosUser->fetch();
        
        if($registros['disponible'] > 0 AND $registrosUser['puntos']>0){
            //Al usuario restarle el valor que vale el premio
            $calularDisponibilidad = $registros['disponible'] - 1;
            $calularPuntos = $registrosUser['puntos'] - $data['valor'];

            $update = "UPDATE usuario SET puntos =  {$calularPuntos} WHERE id = {$data['id']}";
            $query3 = Conexion::conectar()->prepare($update);
            $query3->execute();
            //En la tabla premio actualizar el stock
            $updateValor = "UPDATE premio SET disponible = {$calularDisponibilidad}  WHERE id = {$data['idPremio']}";
            $queryValor = Conexion::conectar()->prepare($updateValor);
            $queryValor->execute();
            //INSERTAR EN EL DETALLE PREMIO

            
            return "1";
        }else{
            return "No puede canejar el stock no esta disponible";
        }
    }
}
