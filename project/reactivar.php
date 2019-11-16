<?php
  session_start();
  include ("conexion.php");

  if (isset($_POST['pass1'])) {
    $id = $_GET['id'];
    $email = $_GET['ec'];

    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if ($pass1 == $pass2) {

      
        $passmd5 = md5($pass1);

        $sql = "UPDATE datos2 SET pass = '$passmd5' WHERE email = '$email'";

        $resultado = $conexion->query($sql);

        header('location: iniciar.php');
    }else{
        header('location: recuperar.php?id='.$id.'&ec='.$email.'&error=error');
    }
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