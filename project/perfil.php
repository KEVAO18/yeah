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

$dir = "multimedia";
$foto = "multimedia/".$id.".png";
opendir($dir);
if (isset($_POST['send'])) {
  $destino = $foto;
  copy($_FILES['foto']['tmp_name'], $foto);
  $foto = "multimedia/".$id.".png";
}

include 'conexion.php';

$user = $_SESSION['useryey'];

$sql = "SELECT * FROM datos2 WHERE usuario = '$user'";

$resultado = $conexion->query($sql) or die("fallo al obtener");

if(isset($_POST['send2'])){
  $edad = $_POST['age'];
  $pais = $_POST['Nacion'];
  $desc = $_POST['descr'];
  $cambio = "UPDATE `datos2` SET `Edad`='$edad', `Nacionalidad`='$pais', `Descrip`='$desc' WHERE usuario = '$user';";
  $cambiar = $conexion->query($cambio);
  header("location: ".$profil);
}

while ($row = $resultado->fetch_assoc()){

  $email = $row['email'];
  $edad = $row['Edad'];
  $pais = $row['Nacionalidad'];
  $desc = $row['Descrip'];
  $intro = $row['intro'];
  $notaInt = $row['NotaIntro'];
  if ($row['NumExams'] >= 1) {
    $numEx = ($row['NumExams'] * 100) / $row['totalExams'];
  }else{
    $numEx = $row['NumExams'];
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
      <header>
        <style type="text/css">
          header{
            width: 100%;
            height: 400px;
            background-size: 100%;
            background-image: url(multimedia/Portada.png);
            background-position: center;
          }

          .foto{
            width: 200px;
            height: 200px;
            opacity: .9;
            color: #0A4237;
            border-radius: 50%;
            border: 1px solid;
            transition: 1s;
          }
          .foto:hover{
            transition: 1s;
            opacity: 1;
            cursor: pointer;
          }

          @media (max-width: 600px){
            header{
              width: 100%;
              height: 300px;
              background-size: 100%;
              background-image: url(multimedia/Portada.png);
              background-position: center;
            }
          }

        </style>
        <br>
        <br>
        <div class="text-center">
          <a data-toggle="modal" class="" data-target="#fotoModal"><img class="foto mx-auto" src="<?php echo $foto; ?>"></a>
        </div>
      </header>
      <!----------------modal-------------->
      <div class="modal fade" id="fotoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <center><form method="post" action="#" enctype="multipart/form-data">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">cambiar foto de perfil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <!------------------------cuerpo del modal---------------------->
                <br>
                <img style="width: 200px; height: 200px; opacity: 1; border: 0px solid;" src="<?php echo $foto; ?>">
                <br>
                <br>
                <br>
                <input class="" type="file" name="foto" value="">

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="send" value="Save changes">
              </div>
            </form></center>
          </div>
        </div>
      </div>

      <div class="container row mx-auto" style="">
        <div class="col-xs-12 text-center col-lg-12 py-5">
          <div class="card border-0 shadow">
            <div class="card-body p-3">

              <div class="container row mx-auto">
                  <div class="col-xs-12 text-center col-lg-5">
                    <div class="card border-0 shadow">
                      <div class="card-body p-5">
                        <h2 class="card-title"><a style="opacity: .7; color: #0A4237; text-decoration: none;" href="<?=$wall?>"><?php echo $_SESSION['useryey'];?></a></h2>
                        <p class="card-text"><?php echo $desc; ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 text-center col-lg-7">
                <div class="card card-info">
                    <div class="card-header">
                        Datos
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Email: <?php echo $email; ?></li>
                        <li class="list-group-item">Edad: <?php echo $edad; ?></li>
                        <li class="list-group-item">Nacionalidad: <?php echo $pais; ?></li>
                    </ul>
                    <div class="card-footer">
                        <a data-toggle="modal" class="btn btn-outline-secondary btn-sm" href="" data-target="#Datos">Editar</a>
                    </div>

                  <div class="modal fade" id="Datos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form method="post" action="#" enctype="multipart/form-data">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">cambiar foto de perfil</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <!------------------------cuerpo del modal---------------------->
                          <div class="form-label-group">
                            <input type="text" id="descr" class="form-control" placeholder="Email address" name="descr" required autofocus maxlength="300">
                            <label for="descr">Descripcion</label>
                          </div>
                          <div class="form-label-group">
                            <input type="number" id="agePartes" class="form-control" placeholder="Email address" name="age" required min="14">
                            <label for="agePartes">Edad</label>
                          </div>
                          <div class="form-label-group">
                            <input type="text" id="inputEmail" class="form-control" placeholder="Email address" name="Nacion" required>
                            <label for="inputEmail">Nacionalidad</label>
                          </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" name="send2">
                          </div>
                        </form>
                      </div>
                    </div>
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
                             style="width: <?php echo $numEx; ?>%">
                          <span class="sr-only"><?php echo $numEx; ?>% completado</span>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>

                  <?php

                  if ($intro == 0) {
                    ?>
                    <div class="col-xs-12 text-center col-lg-8 py-3">
                    <div class="card border-0 shadow">
                      <div class="card-body p-5">
                        <h5 class="card-title">Inicia tu primer Quiz</h5>
                        <p class="card-text">para darte la bienvenida te queremos ofrecer nuestro quiz de inicio para darte tu nivel de ingles al iniciar para que al terminar verifiques tu  proceso
                        </p>
                        <a href="<?=$exam1?>" class="btn btn-primary">iniciar ahora</a>
                      </div>
                    </div>
                  </div>
                    <?php
                  }else{
                    ?>
                  <div class="col-xs-12 text-center col-lg-8 py-3">
                    <div class="card border-0 shadow">
                      <div class="card-body p-5">
                        <h5 class="card-title">Inicia tu primer Quiz</h5>
                        <p class="card-text">Felicidades Ya has realizado tu examen de introduccion y tu nota a sido</p>
                        <h5 class="card-text"><?php echo $notaInt;?> / 10</h5>
                      </div>
                    </div>
                  </div>
                    <?php
                  }
                  ?>
                  <div class="col-xs-12 text-center col-lg-4 py-3">
                    <div class="card border-0 shadow">
                      <div class="card-body p-5">
                        <h5 class="card-title">Inicia tu primer Quiz</h5>
                        <p class="card-text">para darte la bienvenida te queremos ofrecer nuestro quiz de inicio para darte tu nivel de ingles al iniciar para que al terminar verifiques tu  proceso
                        </p>
                        <a href="<?=$exam1?>" class="btn btn-primary">iniciar ahora</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <footer id="sticky-footer" class="py-4 bg-dark text-white-50" style="position: fixed; bottom: 0; left: 0; right: 0;">
          <div class="container">
            <small class="small1">Copyright &copy; ¡Yeah English Yeah!</small>
            <small class="small2">INEM - MEDELLÍN</small>
          </div>
        </footer>
    </body>
</html>