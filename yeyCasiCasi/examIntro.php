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
        <a class="navbar-brand" href="indexlog.php"><img class="favicon" src="multimedia/favicon.png">  ¡Yeah English Yeah! - Start</a>
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menú</a>
                <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="indexlog.php">Mi Muro</a>
                    <a class="dropdown-item" href="perfil.php">Perfil</a>
                    <hr>
                    <a class="dropdown-item" href="salaQ.php">Sala de Quices</a>
                    <a class="dropdown-item" href="regexam.php">Realizados</a>
                    <a class="dropdown-item" href="iniciar.php">Cerrar seccion</a>
                    <a class="dropdown-item" href="more.php">Saber Más</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <div class="container">
        <div class="card border-0 shadow my-5">
          <div class="card-body p-5">
            <h1 class="font-weight-light">welcome quiz</h1>
            <h3 class="font-weight-light">This is an introductory and tutorial exam to teach our performance, but it will also serve to indicate the level of English in which you are at the time of your first entry.</h3><br>
            <div style="height: auto">
              <form method="post" name="quizIntro">
                <!---------------------------------------------pregunta 1-------------------------------------------->  
                <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                  1) Pregunta
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones1" id="opciones_1" value="opcion_1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 1</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones1" id="opciones_2" value="opcion_2" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 2</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones1" id="opciones_3" value="opcion_3" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 3</label>
              </div>
             </div>
             <!--------------------------------------------fin pregunta 1-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 2--------------------------------------------->
             <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   2) Pregunta
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones2" id="opciones_1" value="opcion_1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 1</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones2" id="opciones_2" value="opcion_2" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 2</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones2" id="opciones_3" value="opcion_3" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 3</label>
              </div>
             </div>
             <!--------------------------------------------fin pregunta 2-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 3--------------------------------------------->
             <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   3) pregunta
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones3" id="opciones_1" value="opcion_1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesa 1</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones3" id="opciones_2" value="opcion_2" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 2</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones3" id="opciones_3" value="opcion_3" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 3</label>
              </div>
             </div>
             <!--------------------------------------------fin pregunta 3-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 4--------------------------------------------->
             <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   4) Pregunta
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones4" id="opciones_1" value="opcion_1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 1</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones4" id="opciones_2" value="opcion_2" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 2</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones4" id="opciones_3" value="opcion_3" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 3</label>
              </div>
             </div>
             <!---------------------------------------------fin pregunta 4------------------------------------------->
             <br>
             <br>
             <!---------------------------------------------pregunta 5----------------------------------------------->
             <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   5) Pregunta
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones5" id="opciones_1" value="opcion_1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 1</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones5" id="opciones_2" value="opcion_2" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 2</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones5" id="opciones_3" value="opcion_3" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 3</label>
              </div>
             </div>
             <!-----------------------------------------------fin pregunta 5----------------------------------------->
             <br>
             <br>
             <!---------------------------------------------pregunta 6----------------------------------------------->
             <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   6) Pregunta
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones6" id="opciones_1" value="opcion_1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 1</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones6" id="opciones_2" value="opcion_2" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 2</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones6" id="opciones_3" value="opcion_3" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 3</label>
              </div>
             </div>
             <!-----------------------------------------------fin pregunta 6----------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 7--------------------------------------------->
             <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   7) Pregunta
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones7" id="opciones_1" value="opcion_1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 1</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones7" id="opciones_2" value="opcion_2" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 2</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones7" id="opciones_3" value="opcion_3" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 3</label>
              </div>
             </div>
             <!---------------------------------------------fin pregunta 7------------------------------------------->
             <br>
             <br>
             <!---------------------------------------------pregunta 8----------------------------------------------->
             <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   8) Pregunta
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones8" id="opciones_1" value="opcion_1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 1</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones8" id="opciones_2" value="opcion_2" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 2</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones8" id="opciones_3" value="opcion_3" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 3</label>
              </div>
             </div>
             <!--------------------------------------------fin pregunta 8-------------------------------------------->
             <br>
             <br>
             <!---------------------------------------------pregunta 9----------------------------------------------->
             <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   9) Pregunta
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones9" id="opciones_1" value="opcion_1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 1</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones9" id="opciones_2" value="opcion_2" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 2</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones9" id="opciones_3" value="opcion_3" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 3</label>
              </div>
             </div>
             <!---------------------------------------------fin pregunta 9------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 10-------------------------------------------->
             <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   10) Pregunta
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones10" id="opciones_1" value="opcion_1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 1</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones10" id="opciones_2" value="opcion_2" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 2</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones10" id="opciones_3" value="opcion_3" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Respuesta 3</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 10-------------------------------------------->
             <br>
             <center><button class="btn-danger shadow btn-lg btn-block" style="border-radius:5px">Complete</button></center>
              </form>
            </div>
            <p class="lead mb-0"></p>
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