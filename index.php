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
        <li class="tab active"><a href="#login">Iniciar Sesion</a></li>
        <li class="tab"><a href="#signup">Registrarse</a></li>
      </ul>
      
      <div class="tab-content">
               
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
          <div id="signup">   
          <!-- <h1>Registrate Gratis </h1> -->
          
          <form action="http://localhost:8080/revis/controller/registro.php" method="post">
          
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
              <input name="apellidos" type="text"required autocomplete="off" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Correo Electronico<span class="req">*</span>
            </label>
            <input name="correoElectronico" type="email"required autocomplete="off" />
          </div>
          
          <div class="field-wrap">
            <label>
              Contrase�a<span class="req">*</span>
            </label>
            <input name="clave" type="password"required autocomplete="off" />
          </div>          
          <button name="registrar" type="submit" class="button button-block"/>Registrar</button>          
          </form>   
            

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>


</body>
</html>
