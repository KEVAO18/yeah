<?php
  session_start();
  $error = "";
  if(isset($_SESSION['useryey'])){
    if($_SESSION['useryey'] != ""){
      $id = md5($_SESSION['useryey']);
      header('location: indexlog.php?id='.$id);
    }
  }
  if (isset($_GET['error'])) {
    $error = $_GET['error'];
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>¡Yeah English Yeah!</title>
  <link rel="stylesheet" type="text/css" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos2.css">
  <link rel="stylesheet" type="text/css" href="css/estilos11.css">
  <link rel="stylesheet" type="text/css" href="css/estilos3.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
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
                  <a class="dropdown-item" href="Registro.php">Registro</a>
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
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Iniciar Seccion</h5>
            <form class="form-signin" method="post" name="inicio" action="init.php" enctype="multipart/form-data">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" placeholder="Email address" name="userInput" required autofocus>
                <label for="inputEmail">Usuario</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Password" required>
                <label for="inputPassword">Contraseña</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Recordar Contraseña</label>
              </div>
              <?php
                if ($error == "error") {
              ?>
              <div class="alert alert-danger" role="alert">
                contraseña incorrecta o usuario son incorrecto
              </div>
              <?php
                }
              ?>
              <button class="completarReg btn btn-lg btn-primary btn-block text-uppercase" name="enviar" type="submit">Iniciar Seccion</button>
              <p class="d-block text-center mt-2 small">Aun no tienes una cuenta?<a class="d-block text-center mt-2 small" href="Registro.php">Registrate</a></p><p class="d-block text-center mt-2 small"><a class="d-block text-center mt-2 small" href="recuperar.php?enviarUrl=si">Olvide mi contraseña</a></p>
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