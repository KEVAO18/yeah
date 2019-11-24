<?php
  session_start();

if (isset($_GET['id']) && isset($_GET['ec'])) {
#-----------------------------------------------------------------------------------------------------------------------------------------------------------
$id = $_GET['id'];
$email = $_GET['ec']; 
$url='reactivar.php?id='.$id.'&ec='.$email;
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
  </nav>
 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Recuperar Contraseña</h5>
            <form class="form-signin" method="post" name="inicio" action="<?php $url ?>" enctype="multipart/form-data">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control contraseña1" name="pass1" placeholder="Password" value="" required>
                <label for="inputPassword">Contraseña</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control contraseña2" name="pass2" placeholder="Password" value="" required>
                <label for="inputConfirmPassword">Comfirmar Contraseña</label>
              </div>
              <button class="completarReg btn btn-lg btn-primary btn-block text-uppercase" name="enviar" type="submit">Cambiar Contraseña</button>
              <p class="d-block text-center mt-2 small">Aun no tienes una cuenta?<a class="d-block text-center mt-2 small" href="NoRecuperar.php">Registrate</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50" style="position: fixed; bottom: 0;">
    <div class="container">
      <small class="small1">Copyright &copy; ¡Yeah English Yeah!</small>
      <small class="small2">INEM - MEDELLÍN</small>
    </div>
  </footer>
</body>
</html>

<?php
  
}elseif (isset($_GET['enviarUrl'])) {
#--------------------------------------------------------------------------------------------------------------------------------------------------------------
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
  </nav>
 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Olvide mi contraseña</h5>
            <form class="form-signin" method="post" name="inicio" action="enviar.php?envio=verificar" enctype="multipart/form-data">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" value="" required>
                <label for="inputEmail">Correo electronico</label>
              </div>
              <button class="completarReg btn btn-lg btn-primary btn-block text-uppercase" name="enviar" type="submit">enviar enlace</button>
              <p class="d-block text-center mt-2 small">Aun no tienes una cuenta?<a class="d-block text-center mt-2 small" href="NoRecuperar.php">Registrate</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50" style="position: fixed; bottom: 0;">
    <div class="container">
      <small class="small1">Copyright &copy; ¡Yeah English Yeah!</small>
      <small class="small2">INEM - MEDELLÍN</small>
    </div>
  </footer>
</body>
</html>
<?php
} elseif (isset($_GET['enviado'])) {
#---------------------------------------------------------------------------------------------------------------------------------------------------------

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
  </nav>
 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <div class="alert alert-success" role="alert">
              <h4 class="alert-heading">Listo...</h4>
              <p>El mensage a sido enviado a <a href="" class="alert-link"></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50" style="position: fixed; bottom: 0;">
    <div class="container">
      <small class="small1">Copyright &copy; ¡Yeah English Yeah!</small>
      <small class="small2">INEM - MEDELLÍN</small>
    </div>
  </footer>
</body>
</html> 

<?php
  }else{

#-----------------------------------------------------------------------------------------------------------------------------------------------------------

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
  </nav>
 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <div class="alert alert-warning" role="alert">
              <center>Enlace invalido <a href="recuperar.php?enviarUrl=si" class="alert-link">volver a enviar</a></center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50" style="position: fixed; bottom: 0;">
    <div class="container">
      <small class="small1">Copyright &copy; ¡Yeah English Yeah!</small>
      <small class="small2">INEM - MEDELLÍN</small>
    </div>
  </footer>
</body>
</html> 


<?php 
#-------------------------------------------------------------------------------------------------------------------------------------------------------------- 
  }

?>