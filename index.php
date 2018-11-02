<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
  <title>Login</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css"> 
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Registrarse</a></li>
        <li class="tab"><a href="#login">Iniciar Sesion</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <!-- <h1>Registrate Gratis </h1> -->
          
          <form action="index.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nombres<span class="req">*</span>
              </label>
              <input name="nombres" type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Apellidos<span class="req">*</span>
              </label>
              <input name="apellidos" type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Correo Electronico<span class="req">*</span>
            </label>
            <input name="correoElectronico" type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contrase�a<span class="req">*</span>
            </label>
            <input name="clave" type="password"required autocomplete="off"/>
          </div>
          
          <button name="registrar" type="submit" class="button button-block"/>Registrar</button>
          
          </form>
          
            <?php
                include 'config/class.conexion.php';
                $db = new Conexion();
    
                /*if (isset($_POST['insertar'])){
                    $nombres = $_POST['nombres'];
                    $apellidos = $_POST['apellidos'];
                    $correoElectronico = $_POST['correoElectronico'];
                    $clave = $_POST['clave'];

                    $insertar = "INSERT INTO desarrollador (nombres, apellidos, correoElectronico, clave) VALUES ('$nombres', '$apellidos', '$correoElectronico', '$clave')";

                    $ejecutar = mysqli_query($db, $ejecutar);
                    
                    if ($ejecutar){
                        echo "<label> Insertado Correctamente </label>";
                    }else{
                        echo "<label> No registrado </label>";
                    }

                }*/

            ?>

        </div>
        
        <div id="login">   
          <h1>Bienvenido!</h1>
          
          <form action="/" method="post">
          
           <div class="field-wrap">
            <label>
              Correo Electronico<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
           </div>
          
          <div class="field-wrap">
            <label>
              Contrase�a<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Olvid� su contrase�a?</a></p>
          
          <button class="button button-block"/>Iniciar</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>


</body>
</html>
