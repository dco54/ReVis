<?php
//class Conexion extends mysqli{
define('HOST','localhost'); //AQUI VA TU HOST
define('USER','root');
define('PASS','');
define('DBNAME','revistest');
//define('DBNAME2','BDinexistente');

class Conexion{
    protected $conexion;
    
    public function conectar()
    {        
        $this->conexion = new mysqli(HOST, USER, PASS, DBNAME);
        if ($this->conexion->connect_errno) {
            die('Error en la Conexion'. mysqli_connect_errno());
            return false;
        }        
        return true;
    }    
    public function registrar($nombres, $apellidos, $correoElectronico, $clave)
    {
        $this->conexion = new mysqli(HOST, USER, PASS, DBNAME);
        $sql = "INSERT INTO desarrollador (nombres, apellidos, correoElectronico, clave) VALUES ('$nombres', '$apellidos', '$correoElectronico', '$clave')";
        if(strlen($nombres)==0 || strlen($apellidos)==0 || strlen($correoElectronico)==0 || strlen($clave)==0  ){
            return false;
        }
        if ($this->conexion->query($sql)){
            return true;
        }
        
    }
}
?>
