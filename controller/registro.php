
<!DOCTYPE html>
<html>
    <body>
        <?php
        require_once '..\config\class.conexion.php';
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $correo = $_POST["correoElectronico"];
        $clave = $_POST["clave"];
        echo $nombres;
        echo $apellidos;
        echo $correo;
        echo $clave;
        $bd = new Conexion;
        $bd->registrar($nombres,$apellidos,$correo,$clave);
              
        
        header ("Location: http://localhost:8080/revis/index.php");
        ?>
    </body>
</html>


