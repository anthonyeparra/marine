<?php
require_once '../bd/conexion.php';

class Marine extends Conexion
{
    /**
     * @param $bd class
     */
    private $bd;



    public function __construct()
    {
        //datos basicos
    //    $this->bd = new Conexion();
    }
    public function inciarSesion($datos)
    {
        try 
        {
            // 'usuario'=>$_POST['usuario'],
            // 'password'=>md5($_POST["password"])
            //        );
            $sqlConsulta="SELECT * FROM usuario WHERE correo='{$datos['usuario']}' AND password='{$datos['password']}'";
            $queryConsulta=Conexion::Conectar()->prepare($sqlConsulta);//Resolucion de ambito
            // $queryConsulta->bindParam(":correo",$datos['usuario'],PDO::PARAM_STR);
            // $queryConsulta->bindParam(":password",$datos['password'],PDO::PARAM_STR);
            $queryConsulta->execute();
            $numeroderegistro=$queryConsulta->rowCount();
            
            if($numeroderegistro > 0)
            {
                $registro=$queryConsulta->fetch();
                session_start();
                $_SESSION["id"]=$registro["id"];
                $_SESSION["nombre"]=$registro["nombre"];
                $_SESSION['active'] = true;
            }
            
            return $numeroderegistro;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
