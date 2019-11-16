<?PHP
session_start();
  include('conexion.php');

  $user = $_POST['userInput'];
  $pass = $_POST['pass'];

  $passmd5 = md5($pass);
  $usermd5 = md5($user);
  $_SESSION['useryey'] = $user;
  $_SESSION['contyey'] = 0;

  $sql = "SELECT * FROM datos2";
  $resultado = $conexion->query($sql) or die("fallo al obtener");
  while ($row=$resultado->fetch_assoc()){
    if ($row['usuario']==$user && $row['pass']==$passmd5){
      $_SESSION['contyey'] = 1;
      $_SESSION['useryey'] = $row['usuario'];
      
      echo $_SESSION['useryey']." cont: ".$_SESSION['contyey'];

      header('location: indexlog.php?id='.$usermd5);
      break;
    }
  }

  if ($_SESSION['contyey'] == 0) {
      echo "error";
      header('location: iniciar.php?error=error');
      session_destroy();
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