<?php
session_start();
$id = $_GET['id'];
$wall = 'indexlog.php?id='.$id;
$profil = 'perfil.php?id='.$id;
$SalaQ = 'salaQ.php?id='.$id;
$Reali = 'regexam.php?id='.$id;
$more = 'more.php?id='.$id;
$ExamI = 'examIntro.php?id='.$id;
$exam1 = 'exam1.php?id='.$id;
$search = 'search.php?id='.$id;

if ($_SESSION['useryey'] == "" || $id == "") {
    header('location: Error404.php');
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
        <a class="navbar-brand" href="<?=$wall?>"><img class="favicon" src="multimedia/favicon.png">  ¡Yeah English Yeah! - Profil</a>
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menú</a>
                <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?=$wall?>">Mi Muro</a>
                    <a class="dropdown-item" href="<?=$profil?>"><?php echo $_SESSION['useryey'];?></a>
                    <hr>
                    <a class="dropdown-item" href="<?=$SalaQ?>">Sala de Quices</a>
                    <a class="dropdown-item" href="<?=$Reali?>" >Realizados</a>
                    <a class="dropdown-item" href="cerrar.php">Cerrar seccion</a>
                    <a class="dropdown-item" href="<?=$more?>">Saber Más</a>
                </div>
              </li>
            </ul>
          <form class="form-inline my-2 my-lg-0" method="post" action="<?=$search?>">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
          </div>
        </div>
      </nav>
      
        <footer id="sticky-footer" class="py-4 bg-dark text-white-50" style="position: fixed; bottom: 0;">
          <div class="container">
            <small class="small1">Copyright &copy; ¡Yeah English Yeah!</small>
            <small class="small2">INEM - MEDELLÍN</small>
          </div>
        </footer>
    </body>
</html>

<!--
          <img class="card-img-top" src="multimedia/Portada.png" style="width:100%; height:500px; position:relative; top:0px; left:0%; z-index:1;" alt="Card image cap">>
      <div class="container row mx-auto">
        <div class="card col-md-4 py-3 border-0 text-center" style="position:relative; top:-400px; left:33%; z-index:3;">
          <img class="card-img-top" src="multimedia/DefaultProfile.png" style="border-radius:100%;" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?#php echo $_SESSION['useryey'];?></h2>
          </div>
        </div>
        </div>
        <div class="container row mx-auto" style="position:relative; top:-500px; z-index:2;">
              <div class="col-xs-12 text-center col-lg-12 py-5">
                <div class="card border-0 shadow">
                  <div class="card-body p-5">
                    <div class="container row mx-auto">
                        <div class="col-xs-12 text-center col-lg-5">
                          <div class="card border-0 shadow">
                            <div class="card-body p-5">
                              <h5 class="card-title">Inicia tu primer Quiz</h5>
                              <p class="card-text">para darte la bienvenida te queremos ofrecer nuestro quiz de inicio para darte tu nivel de ingles al iniciar para que al terminar verifiques tu  proceso
                              </p>
                              <a href="examIntro.php" class="btn btn-primary">iniciar ahora</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 text-center col-lg-7">
                          <div class="card border-0 shadow">
                            <div class="card-body p-5">
                              <h5 class="card-title">Inicia tu primer Quiz</h5>
                              <p class="card-text">para darte la bienvenida te queremos ofrecer nuestro quiz de inicio para darte tu nivel de ingles al iniciar para que al terminar verifiques tu  proceso
                              </p>
                              <a href="examIntro.php" class="btn btn-primary">iniciar ahora</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 text-center col-lg-12 py-5">
                          <div class="card border-0 shadow ">
                            <div class="card-body p-5">
                              <h5 class="card-title">Quices realizados / Quices Exitosos</h5>
                              <div class="progress progress-striped active">
                              <div class="progress-bar" role="progressbar"
                                   aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
                                   style="width: 45%">
                                <span class="sr-only">45% completado</span>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 text-center col-lg-8 py-3">
                          <div class="card border-0 shadow">
                            <div class="card-body p-5">
                              <h5 class="card-title">Inicia tu primer Quiz</h5>
                              <p class="card-text">para darte la bienvenida te queremos ofrecer nuestro quiz de inicio para darte tu nivel de ingles al iniciar para que al terminar verifiques tu  proceso
                              </p>
                              <a href="examIntro.php" class="btn btn-primary">iniciar ahora</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 text-center col-lg-4 py-3">
                          <div class="card border-0 shadow">
                            <div class="card-body p-5">
                              <h5 class="card-title">Inicia tu primer Quiz</h5>
                              <p class="card-text">para darte la bienvenida te queremos ofrecer nuestro quiz de inicio para darte tu nivel de ingles al iniciar para que al terminar verifiques tu  proceso
                              </p>
                              <a href="examIntro.php" class="btn btn-primary">iniciar ahora</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              -->