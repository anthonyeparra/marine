<?php
class Conexion
{
    public function Conectar()
    {
        try
        {
           $conexion=new PDO('mysql:host=localhost; dbname=poseidon','root','');
           $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           return $conexion;
       } catch (Exception $e)
       {
       }
    }
}
?>