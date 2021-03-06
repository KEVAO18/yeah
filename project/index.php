<?php
  session_start();
  if(isset($_SESSION['useryey'])){
    if($_SESSION['useryey'] != ""){
      $id = md5($_SESSION['useryey']);
      header('location: indexlog.php?id='.$id);
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>¡Yeah English Yeah!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, user-scalable=0, initial-scale=1.0, maximum-scale= 1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilos1.css">
    <link rel="stylesheet" type="text/css" href="css/estilos3.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="multimedia/favicon.png">
  </head>
  <body class="d-flex flex-column">
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
  <div class="container text-center cont">
    <br><br><br>
    <h1 class="text-white font-weight-light"><img class="logo" src="multimedia/yeyL.PNG.png"></h1>
    <br>
    <button class="btn btn-xl btn-primary text-uppercase" onclick="location.href='Registro.php'">Registrate</button>
  </div>
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container">
      <small class="small1">Copyright &copy; ¡Yeah English Yeah! v.0.1</small>
      <small class="small2">INEM - MEDELLÍN</small>
    </div>
  </footer>
</body>
</html>