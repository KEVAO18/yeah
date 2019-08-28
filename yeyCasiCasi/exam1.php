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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="1" aria-expanded="false">Menú</a>
                <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="indexlog.php">Mi Muro</a>
                    <a class="dropdown-item" href="perfil.php">Perfil</a>
                    <hr>
                    <a class="dropdown-item" href="salaQ.php">Sala de Quices</a>
                    <a class="dropdown-item" href="regexam.php">Realizados</a>
                    <a class="dropdown-item" href="iniciar.php">Cerrar seccion</a>
                    <a class="dropdown-item" href="more.html">Saber Más</a>
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
                <!-----------------------------------------------pregunta 1--------------------------------------------->  
                <div class="list-group pregunta1">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                  1) Can I park here?
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones1" id="p1r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Sorry, I did that.</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones1" id="p1r2" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">It's the same place.</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones1" id="p1r3" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Only for half an hour.</label>
              </div>
             </div>
             <!--------------------------------------------fin pregunta 1-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 2--------------------------------------------->
             <div class="list-group pregunta2">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   2) What colour will you paint the children's bedroom?
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones2" id="p2r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">I hope it was right.</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones2" id="p2r2" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">We can't decide.</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones2" id="p2r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">It wasn't very difficult.</label>
              </div>
             </div>
             <!--------------------------------------------fin pregunta 2-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 3--------------------------------------------->
             <div class="list-group pregunta3">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   3) I can't understand this email.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones3" id="p3r1" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Would you like some help?</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones3" id="p3r2" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Don't you know?</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones3" id="p3r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">I suppose you can.</label>
              </div>
             </div>
             <!--------------------------------------------fin pregunta 3-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 4--------------------------------------------->
             <div class="list-group pregunta4">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   4) I'd like two tickets for tomorrow night.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones4" id="p4r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">How much did you pay?</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones4" id="p4r2" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Afternoon and evening.</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones4" id="p4r3" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">I'll just check for you.</label>
              </div>
             </div>
             <!---------------------------------------------fin pregunta 4------------------------------------------->
             <br>
             <br>
             <!---------------------------------------------pregunta 5----------------------------------------------->
             <div class="list-group pregunta5">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   5) Shall we go to the gym now?
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones5" id="p5r1" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">I'm too tired.</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones5" id="p5r2" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">It's very good.</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones5" id="p5r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Not at all.</label>
              </div>
             </div>
             <!-----------------------------------------------fin pregunta 5----------------------------------------->
             <br>
             <br>
             <!---------------------------------------------pregunta 6----------------------------------------------->
             <div class="list-group pregunta6">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   6) His eyes were ...... bad that he couldn't read the number plate of the car in front.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones6" id="p6r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">such</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones6" id="p6r2" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">too</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones6" id="p6r3" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">so</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones6" id="p6r4" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">very</label>
              </div>
             </div>
             <!-----------------------------------------------fin pregunta 6----------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 7--------------------------------------------->
             <div class="list-group pregunta7">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   7) The company needs to decide ...... and for all what its position is on this point.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones7" id="p7r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">here</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones7" id="p7r2" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">once</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones7" id="p7r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">first</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones7" id="p7r4" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">finally</label>
              </div>
             </div>
             <!---------------------------------------------fin pregunta 7------------------------------------------->
             <br>
             <br>
             <!---------------------------------------------pregunta 8----------------------------------------------->
             <div class="list-group pregunta8">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   8) Don't put your cup on the ...... of the table – someone will knock it off.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones8" id="p8r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">outside</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones8" id="p8r2" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">edge</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones8" id="p8r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">boundary</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones8" id="p8r4" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">border</label>
              </div>
             </div>
             <!--------------------------------------------fin pregunta 8-------------------------------------------->
             <br>
             <br>
             <!---------------------------------------------pregunta 9----------------------------------------------->
             <div class="list-group pregunta9">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   9) I'm sorry - I didn't ...... to disturb you.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones9" id="p9r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">hope</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones9" id="p9r2" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">think</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones9" id="p9r3" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">mean</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones9" id="p9r4" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">suppose</label>
              </div>
             </div>
             <!---------------------------------------------fin pregunta 9------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 10-------------------------------------------->
             <div class="list-group pregunta10">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   10) The singer ended the concert ...... her most popular song.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones10" id="p10r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">by</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones10" id="p10r2" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">with</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones10" id="p10r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">in</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones10" id="p10r4" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">as</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 10-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 11-------------------------------------------->
             <div class="list-group pregunta11">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   11) Would you mind ...... these plates a wipe before putting them in the cupboard?
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones11" id="p11r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">making</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones11" id="p11r2" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">doing</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones11" id="p11r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">getting</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones11" id="p11r4" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">giving</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 11-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 12-------------------------------------------->
             <div class="list-group pregunta12">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   12) I was looking forward ...... at the new restaurant, but it was closed.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones12" id="p12r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">to eat</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones12" id="p12r2" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">to have eaten</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones12" id="p12r3" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">to eating</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones12" id="p12r4" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">eating</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 12-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 13-------------------------------------------->
             <div class="list-group pregunta13">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   13) ...... tired Melissa is when she gets home from work, she always makes time to say goodnight to the children.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones13" id="p13r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Whatever</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones13" id="p13r2" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">No matter how</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones13" id="p13r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">However much</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones13" id="p13r4" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">Although</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 13-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 14-------------------------------------------->
             <div class="list-group pregunta14">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   14) It was only ten days ago ...... she started her new job.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones14" id="p14r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">then</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones14" id="p14r2" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">since</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones14" id="p14r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">after</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones14" id="p14r4" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">that</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 14-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 15-------------------------------------------->
             <div class="list-group pregunta15">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   15) The shop didn't have the shoes I wanted, but they've ...... a pair specially for me.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones15" id="p15r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">booked</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones15" id="p15r2" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">ordered</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones15" id="p15r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">commanded</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones15" id="p15r4" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">asked</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 15-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 16-------------------------------------------->
             <div class="list-group pregunta16">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   16) Have you got time to discuss your work now or are you ...... to leave?
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones16" id="p16r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">thinking</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones16" id="p16r2" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">round</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones16" id="p16r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">planned</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones16" id="p16r4" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">about</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 16-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 17-------------------------------------------->
             <div class="list-group pregunta17">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   17) She came to live here ...... a month ago.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones17" id="p17r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">quite</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones17" id="p17r2" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">beyond</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones17" id="p17r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">already</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones17" id="p17r4" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">almost</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 17-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 18-------------------------------------------->
             <div class="list-group pregunta18">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   18) Once the plane is in the air, you can ...... your seat belts if you wish.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones18" id="p18r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">undress</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones18" id="p18r2" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">unfasten</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones18" id="p18r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">unlock</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones18" id="p18r4" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">untie</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 18-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 19-------------------------------------------->
             <div class="list-group pregunta19">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   19) I left my last job because I had no ...... to travel.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones19" id="p19r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">place</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones19" id="p19r2" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">position</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones19" id="p19r3" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">opportunity</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones19" id="p19r4" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">possibility</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 19-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 20-------------------------------------------->
             <div class="list-group pregunta20">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   20) It wasn't a bad crash and ...... damage was done to my car.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones20" id="p20r1" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">little</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones20" id="p20r2" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">small</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones20" id="p20r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">light</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones20" id="p20r4" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">mere</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 20-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 21-------------------------------------------->
             <div class="list-group pregunta21">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   21) I'd rather you ...... to her why we can't go.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones21" id="p21r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">would explain</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones21" id="p21r2" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">explained</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones21" id="p21r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">to explain</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones21" id="p21r4" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">will explain</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 21-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 22-------------------------------------------->
             <div class="list-group pregunta22">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   22) Before making a decision, the leader considered all ...... of the argument.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones22" id="p22r1" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">sides</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones22" id="p22r2" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">features</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones22" id="p22r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">perspectives</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones22" id="p22r4" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">shades</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 22-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 23-------------------------------------------->
             <div class="list-group pregunta23">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   23) This new printer is recommended as being ...... reliable.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones23" id="p23r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">greatly</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones23" id="p23r2" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">highly</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones23" id="p23r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">strongly</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones23" id="p23r4" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">readily</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 23-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 24-------------------------------------------->
             <div class="list-group pregunta24">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   24) When I realised I had dropped my gloves, I decided to ...... my steps.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones24" id="p24r1" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">retrace</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones24" id="p24r2" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">regress</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones24" id="p24r3" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">resume</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones24" id="p24r4" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">return</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 24-------------------------------------------->
             <br>
             <br>
             <!-----------------------------------------------pregunta 25-------------------------------------------->
             <div class="list-group pregunta25">
                <a href="#" class="list-group-item list-group-item-action active" disabled>
                   25) Anne's house is somewhere in the ...... of the railway station.
                </a>
                <br>
                <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones25" id="p25r1" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">region</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class             ="input-group-text">
                    <input type="radio" name="opciones25" id="p25r2" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">quarter</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones25" id="p25r3" value="1" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">vicinity</label>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" name="opciones25" id="p25r4" value="0" aria-label="Radio button for following text input">
                  </div>
                </div>
                <label class="form-control" aria-label="Text input with radio button">district</label>
              </div>
             </div>
             <!-------------------------------------------fin pregunta 25-------------------------------------------->
             <br>
             <center>
                 <button class="btn-danger shadow btn-lg btn-block" style="border-radius:5px">Complete</button>
             </center>
              </form>
              <script>
                  
              </script>
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

<?
$p1 = $_POST['opciones1'];
$p2 = $_POST['opciones2'];
$p3 = $_POST['opciones3'];
$p4 = $_POST['opciones4'];
$p5 = $_POST['opciones5'];
$p6 = $_POST['opciones6'];
$p7 = $_POST['opciones7'];
$p8 = $_POST['opciones8'];
$p9 = $_POST['opciones9'];
$p10 = $_POST['opciones10'];
$p11 = $_POST['opciones11'];
$p12 = $_POST['opciones12'];
$p13 = $_POST['opciones13'];
$p14 = $_POST['opciones14'];
$p15 = $_POST['opciones15'];
$p16 = $_POST['opciones16'];
$p17 = $_POST['opciones17'];
$p18 = $_POST['opciones18'];
$p19 = $_POST['opciones19'];
$p20 = $_POST['opciones20'];
$p21 = $_POST['opciones21'];
$p22 = $_POST['opciones22'];
$p23 = $_POST['opciones23'];
$p24 = $_POST['opciones24'];
$p25 = $_POST['opciones25'];

$suma = $p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10+$p11+$p12+$p13+$p14+$p15+$p16+$p17+$p18+$p19+$p20+$p21+$p22+$p23+$p24+$p25;

include ('conexion.php');

$user ="SELECT usuario FROM datos2 WHERE ";

$query="INSERT INTO PUNTOS_DE_USUARIO(id,user,xp,numExam) VALUES('','$user','$suma','')";
?>