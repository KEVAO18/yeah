<?php
  session_start();
  if(isset($_SESSION['useryey'])){
    if($_SESSION['useryey'] != ""){
      $id = md5($_SESSION['useryey']);
      header('location: more.php?id='.$id);
    }
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
    <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale= 1.0, minimum-scale=1.0 ">
    <link rel="icon" href="multimedia/favicon.png">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><img class="favicon" src="multimedia/favicon.png">  ¡Yeah English Yeah! - Info</a>
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
        <div class="card border-0 shadow my-5">
          <div class="card-body p-5">
            <h1 class="font-weight-light">About us</h1><br><br>
            <div style="height: auto">
                <ol>
                    <h2 class="font-weight-light">- Our mission</h2>
                    <h4 class="font-weight-light">
                    The mission of ¡Yeah English Yeah! is to help, promote and complement the study of the most basic English language, helping people who do not find it easy to learn this topic or, on the other hand, complement previous knowledge on the subject, this web page is aimed especially at students of grade IX of the IE INEM José Félix de Restrepo. Through this website people can start learning or supplementing their knowledge in the English language today. In addition this is a project developed by students of the eleventh grade of the I.E. INEM José Félix de Restrepo.
                    </h4>
                    <br><br>
                    <h2 class="font-weight-light">- Our vision</h2>
                    <h4 class="font-weight-light">
                    The vision of ¡Yeah English Yeah! It is not only focused on a single academic degree of the I.E. INEM José Félix de Restrepo, but to create a web page for all the people who want to learn the English language, whether they are children, young people or adults, since we will cover all the necessary subjects either to learn from scratch and to be able to have a good level speaking English or simply for practicing and reinforcing your level speaking this language, all this for the students of said institution without the need to charge any cost for using the website.
                    </h4>
                    <br><br>
                    <h2 class="font-weight-light">- Developers</h2>
                    <il>
                        <h4 class="font-weight-light">
                            <ul>
                                <li>
                                    <a href="https://kevaosportafolio.000webhostapp.com/index.html" style="color: #545454; text-decoration: none;" target="_blak">Kevin Andrés Orrego Martínez</a>
                                </li>
                            </ul>
                        </h4>
                    </il>
                </ol>
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