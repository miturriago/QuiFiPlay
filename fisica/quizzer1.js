// 1

var questions = [
  [
    "1.	¿Qué significan las siglas: “SI”?",
    "Afirmación positiva",
    "Sistema internacional de unidades",
    "Socidedad Iberoamericana",
    "Sistema intelectual",
    1
  ],
  [
    "2.	¿Cual es la principal característica del SI?",
    "Sus unidades están basadas en fenómenos físicos fundamentales",
    "Indicadores",
    "Que tiene el Joul como unidad de medida",
    "Ninguna de las anteriores",
    0
  ],
  [
    "3.	¿Con cuántas unidades básicas cuenta el SI?",
    "10 unidades",
    "100 unidades",
    "7 unidades",
    "8 unidades",
    2
  ],
  [
    "4.	¿El amperio pertenece a las unidades de medida del SI? ",
    "SI",
    "No",
    "Perteneció",
    "Pertenecerá",
    0
  ],
  [
    "5. ¿A qué equivale el Joule?",
    "A la intensidad de la corriente",
    "m/s",
    "A la cantidad de trabajo efectuado por una fuerza de 1 newton actuando a través de una distancia de 1 metro.",
    "km/h",
    2
  ],
  [
    "6.	¿Qué unidad de medida se utiliza en la presión?",
    "Segundo",
    "Amperio",
    "Tiempo",
    "Kilometraje",
    1
  ],
  [
    "7.	¿Cual es la unidad básica de la masa? ",
    "Kilogramo",
    "Centímetros",
    "Metros",
    "Toneladas",
    0
  ],

  ];
  // 2
  var questionTemplate = _.template(" \
  <div class='card question'><span class='question'><%= question %></span> \
  <ul class='options'> \
  <li> \
  <input type='radio' name='question[<%= index %>]' value='0' id='q<%= index %>o1'> \
  <label for='q<%= index %>o1'><%= a %></label> \
  </li> \
  <li> \
  <input type='radio' name='question[<%= index %>]' value='1' id='q<%= index %>o2'> \
  <label for='q<%= index %>o2'><%= b %></label> \
  </li> \
  <li> \
  <input type='radio' name='question[<%= index %>]' value='2' id='q<%= index %>o3'> \
  <label for='q<%= index %>o3'><%= c %></label> \
  </li> \
  <li> \
  <input type='radio' name='question[<%= index %>]' value='3' id='q<%= index %>o4'> \
  <label for='q<%= index %>o4'><%= d %></label> \
  </li> \
  </ul> \
  </div> \
  ");
  
  // 3
  var points,
    pointsPerQuestion,
    currentQuestion,
    questionTimer,
    timeForQuestion = 20, // seconds
    timeLeftForQuestion;
  // 4
  $(function() {
    // 5
    $('button.start').click(start);
    $('.play_again button').click(restart);
  
    // 6
    function restart() {
      points = 0;
      pointsPerQuestion = 10;
      currentQuestion = 0;
      timeLeftForQuestion = timeForQuestion;
      // 7
      $('.finish.card').hide();
      $('div.start').show();
      $('.times_up').hide();
  
      generateCards();
      updateTime();
      updatePoints();
    }
  
    // 8
    function start() {
      $('div.start').fadeOut(200, function() {
        moveToNextQuestion();
      });
    }
  
    // 9
    function generateCards() {
      $('.questions').html('');
      for (var i = 0; i < questions.length; i++) {
        var q = questions[i];
        var html = questionTemplate({
          question: q[0],
          index: i,
          a: q[1],
          b: q[2],
          c: q[3],
          d: q[4]
        });
        $('.questions').append(html);
      };
  
      // 10
      $('.question.card input').change(optionSelected);
    }
  
    // 11
    function moveToNextQuestion() {
      currentQuestion += 1;
      if (currentQuestion > 1) {
        $('.question.card:nth-child(' + (currentQuestion - 1) + ')').hide();
      }
  
      // 12
      showQuestionCardAtIndex(currentQuestion);
      setupQuestionTimer();
    }
  
    // 13
    function setupQuestionTimer() {
      if (currentQuestion > 1) {
        clearTimeout(questionTimer);
      }
      timeLeftForQuestion = timeForQuestion;
      // 14
      questionTimer = setTimeout(countdownTick, 1000);
    }
  
    // 15
    function showQuestionCardAtIndex(index) { // staring at 1
      var $card = $('.question.card:nth-child(' + index + ')').show();
    }
  
    // 16
    function countdownTick() {
      timeLeftForQuestion -= 1;
      updateTime();
      if (timeLeftForQuestion == 0) {
        return finish();
      }
      questionTimer = setTimeout(countdownTick, 1000);
    }
  
    // 17
    function updateTime() {
      $('.countdown .time_left').html(timeLeftForQuestion + 's');
    }
  
    // 18
    function updatePoints() {
      $('.points span.points').html(points + ' puntos');
    }
  
    // 19
    function optionSelected() {
      var selected = parseInt(this.value);
      var correct = questions[currentQuestion - 1][5];
  
      if (selected == correct) {
        points += pointsPerQuestion;
        updatePoints();
        correctAnimation();
      } else {
        wrongAnimation();
      }
  
      if (currentQuestion == questions.length) {
        clearTimeout(questionTimer);
        return finish();
      }
      moveToNextQuestion();
    }
  
    // 20
    function correctAnimation() {
      animatePoints('right');
    }
  
    // 21
    function wrongAnimation() {
      animatePoints('wrong');
    }
  
    // 22
    function animatePoints(cls) {
      $('header .points').addClass('animate ' + cls);
      setTimeout(function() {
        $('header .points').removeClass('animate ' + cls);
      }, 500);
    }
  
   
  
    // 23
    function finish() {
      if (timeLeftForQuestion == 0) {
        $('.times_up').show();
      }
      $('p.final_points').html(points + ' puntos');
      $('.question.card:visible').hide();
      $('.finish.card').show();
    }
  
    // 24
    restart();
  });