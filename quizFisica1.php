
<!DOCTYPE html>

<html>

<head>

  <title>Física</title>
  <meta charset="utf-8">
  <link href="fisica/quizzer.css" type="text/css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://underscorejs.org/underscore.js"></script>
  <script src="fisica/quizzer1.js"></script>

</head>

<body>
  

  <header>

    <div class="title">
      <h1>QuiFiPlay</h1>
      <h2>¿Sabes tanto como creías?</h2>
    </div>
    <div class="countdown"><span class="time_left">10s</span></div>
    <div class="points"><span class="points">0 points</span></div>
  </header>
  <div class="start">
    <div class="card" >
      <button class="start" onclick="carga_sonido()">Aprender!</button>
    </div>
  </div>
  <div class="play">
    <div class="questions"></div>
  </div>
  <div class="finish card">
    <p class="times_up">¡Se acabó el tiempo!</p>
    <p>Has obtenido</p>
    <p class="final_points">8 puntos</p>
    <div class="play_again">
      <button>Volver a jugar</button>
      <br>
      <a href="fisica3.php"><img src="images/avanzar.png" height="50" width="100" alt="Botón"></a>
        

    </div>
  </div>

</body>

</html>