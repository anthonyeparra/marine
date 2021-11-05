<?php
require_once '../../bd/conexion.php';

class Marine extends Conexion
{
    /**
     * @param $bd class
     */
    private $bd;



    public function __construct()
    {
        // session_start();
        //datos basicos
    //    $this->bd = new Conexion();
    }
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
            $sql="CALL INSERTAR_TRATAMIENTO(:mtratamiento,:mcama,:mDiagnostico,:mGravedad,:mpaciente,:mmedico)";
            $query=Conexion::conectar()->prepare($sql);//Resolucion de ambito
            $query->bindParam(":mtratamiento",$datos['tratamiento'],PDO::PARAM_STR);
            $query->bindParam(":mcama",$datos['cama'],PDO::PARAM_STR);
            $query->bindParam(":mDiagnostico",$datos['diagnostico'],PDO::PARAM_STR);
            $query->bindParam(":mGravedad",$datos['gravedad'],PDO::PARAM_STR);
            $query->bindParam(":mpaciente",$datos['paciente'],PDO::PARAM_INT);
            $query->bindParam(":mmedico",$datos['medico'],PDO::PARAM_INT);
            return $query->execute();
        
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
