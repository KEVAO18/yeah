<!DOCTYPE html>
<html>
<head>
  <title>¡Yeah English Yeah!</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="css/estilos2.css">
  <link rel="stylesheet" type="text/css" href="css/estilos11.css">
  <link rel="stylesheet" type="text/css" href="css/estilos3.css">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <meta charset="utf-8">
  <link rel="icon" href="multimedia/favicon.png">
  <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale= 1.0, minimum-scale=1.0 ">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><img class="favicon" src="multimedia/favicon.png">  ¡Yeah English Yeah!</a>
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menú</a>
                <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="index.php">Inicio</a>
                  <a class="dropdown-item" href="iniciar.php">Iniciar Sesión</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="iniciar.php">Perfil</a>
                  <a class="dropdown-item" href="iniciar.php">Sala de Quices</a>
                  <a class="dropdown-item" href="help.php">Saber Más</a>
                </div>
              </li>
        </ul>
      </div>
    </div>
  </nav>
   <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-10 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Registro</h5>
            <form class="form-signin" action="Registro.php" method="post" name="registro">
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control" name="userInput" placeholder="Username" value="" required autofocus>
                <label for="inputUserame">Nombre de Usuario</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" value="" required>
                <label for="inputEmail">Correo electronico</label>
              </div>
              <hr>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control contraseña1" name="pass1" placeholder="Password" value="" required>
                <label for="inputPassword">Contraseña</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control contraseña2" name="pass2" placeholder="Password" value="" required>
                <label for="inputConfirmPassword">Comfirmar Contraseña</label>
              </div>
              <div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1" required name="cheked">Aceptar Terminos y condiciones</label>
              </div>
              </div>
              <button class="completarReg btn btn-lg btn-primary btn-block text-uppercase" name="enviar" type="submit">Completar Registro</button>
              <?php

	include ("conexion.php");

	if(isset($_REQUEST["enviar"])){

		$user = $_POST['userInput'];
		$email = $_POST['email'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
       
			if($pass1==$pass2){
				$passmd5=md5($pass1);
				$query="SELECT usuario FORM datos2 WHERE usuario='$user';";
				$conexion->query($query);
				if($query->num_rows==0){
					$query = "INSERT INTO datos2(usuario,email,pass) VALUE('$user','$email','$passmd5');";
					$conexion->query($query);
				}else{
					echo '<div class="alert alert-danger" role="alert">checa tu usuario please!</div>';
				}
			}else{
				echo '<div class="alert alert-danger" role="alert">checa tu contraseña please, tienen que ser iguales!</div>';
			}
		}
	
	$conexion->close();

?>
              <p class="d-block text-center mt-2 small">Ya tienes una cuenta?<a class="d-block text-center mt-2 small" href="iniciar.php">Iniciar Seccion</a></p>
              <hr class="my-4">
              
              <button disabled class="btn btn-lg btn-google btn-block text-uppercase" type="submit">Registrar con Google (Desactivado)</button>
              <button disabled class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit">Registrar con Facebook (Desactivado)</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container">
      <small class="small1">Copyright &copy; ¡Yeah English Yeah!</small>
      <small class="small2">INEM - MEDELLÍN</small>
    </div>
  </footer>
</body>
</html>