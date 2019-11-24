<?php
  session_start();
  include ("conexion.php");

  $user = $_POST['userInput'];
  $email = $_POST['email'];
  $pass1 = $_POST['pass1'];
  $pass2 = $_POST['pass2'];
  $TyC = $_POST['TyC'];
  $NumExams = 0;
  $intro = 0;

  if ($pass1 == $pass2) {

    if ($TyC == "") {

      header('location: Registro.php?error=TyC');

    }else{
      $passmd5 = md5($pass1);
      $usermd5 = md5($user);

      $_SESSION['useryey'] = $user;
      $_SESSION['emailyey'] = $email;
      $_SESSION['TCyey'] = $TyC;

      $sql = "INSERT INTO `datos2` (`usuario`, `email`, `pass`, `TC`, `NumExams`, `intro`) VALUES ('$user','$email','$passmd5','$TyC', '$NumExams', '$intro')";

      $resultado = $conexion->query($sql);

      $dir = "multimedia/";
      opendir($dir);
      $destino1 = $dir."predefinePhoto.png";
      $destino2 = $dir.$usermd5.".png";
      copy($destino1,$destino2);

      header('location: indexlog.php?id='.$usermd5);
    }
  }else{
      header('location: Registro.php?error=pass');
  }

?>
<!DOCTYPE html>
<html>
<head>
  <title class="par">Loaded</title>
</head>
<body>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-12 card" style="height: 40vh; margin-top: 10vh;">
        <div class="text-center">
          <h1 class="par" style="margin-top: 30px" id="par">Loaded</h1>
        </div>
        <div class="progress" style="height: 20px; margin-top: 90px;">
            <div class="progress-bar anim" id="barra" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
      setTimeout(function() {
        document.getElementById('par').innerHTML = "Loaded.";
      }, 1000);
      setTimeout(function() {
        document.getElementById('par').innerHTML = "Loaded..";
      }, 2000);
      setTimeout(function() {
        document.getElementById('par').innerHTML = "Loaded...";
      }, 3000);
      setTimeout(function() {
        document.getElementById('par').innerHTML = "Loaded....";
      }, 4000);
      setTimeout(function() {
        document.getElementById('par').innerHTML = "Listo";
      }, 5000);
  </script>
</body>
</html>