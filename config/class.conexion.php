<?php
class Conexion extends mysqli{
    private $DB_HOST = 'localhost';
    private $DB_USER = 'root';
    private $DB_PASS = '';
    private $DB_NAME = 'revis';
    
    public function __construct(){
        parent:: __construct($this->DB_HOST, $this-> DB_USER, $this->DB_PASS, $this->DB_NAME);
        $this->set_charset('utf-8');
        
        $this->connect_errno ? die('Error en la Conexion'. mysqli_connect_errno()):
            $m = 'Conectado';
        return $m;
        
        return 'No Conectado';
    } 
    
    
    
}
?>
