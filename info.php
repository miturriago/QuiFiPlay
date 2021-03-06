<?php
session_start();
	include "database.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>QuiFiPlay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
    
  
  <div class="site-wrap">

  <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0"><strong>QuiFiPlay<span class="text-primary">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="#">Inicio</a>
                  </li>
                  <li><a href="logout.php">Salir</a></li>
                </ul>
              </nav>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="site-blocks-cover overlay" style="background-image: url('images/admin.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="mb-4">
                <p><?=$mensaje?></p>
                	</h1>
                
            <!--<p><a href="#" class="btn btn-primary px-4 py-3">Divertirse!</a></p>-->
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">Información</h2>
         
          </div>
        </div>
        <center>
        <section>

<center><h1 id="titulo">USUARIOS</h1></center>
<table border="0px" width="100%">	
  <tr id="titles">
    <td>ID</td>
    <td>NOMBRE</td>
    <td>EMAIL</td>
  </tr>	

  <?php
    $re=mysqli_query($obj_conexion,"select * from user");
    $numeroventa=0;
    while ($f=mysqli_fetch_array($re)) {
        if($numeroventa	!=$f['numeroventa']){
          echo '<tr><td>Compra No. '.$f['numeroventa'].' </td></tr>';
        }
        $numeroventa=$f['numeroventa'];
        echo '<tr id="opc1">
          <td><img src="./productos/'.$f['imagen'].'" width="150px" heigth="15px" /></td>
          <td>'.$f['nombre'].'</td>
          <td>'.$f['precio'].'</td>
          <td>'.$f['Cliente'].'</td>
          <td>'.$f['cantidad'].'</td>
          <td>'.$f['subtotal'].'</td>
          <td>'.$f['despachador'].'</td>
          <td>'.$f['estado'].'</td>
        </tr>';
    }
  ?>
</table>
</section>
</center>
   </div>
      </div>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">Nuestro equipo</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a href="" class="unit-9">
              <div class="image" style="background-image: url('images/n1.jpg');"></div>
              <div class="unit-9-content">
                <h2>Yeribeth Palencia</h2>
                <span>QuiFiPlay</span>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="unit-9">
              <div class="image" style="background-image: url('images/n2.jpg');"></div>
              <div class="unit-9-content">
                <h2>Luis Vera</h2>
                <span>QuiFiPlay</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="unit-9">
              <div class="image" style="background-image: url('images/n3.jpg');"></div>
              <div class="unit-9-content">
                <h2>Laura Llanos</h2>
                <span>QuiFiPlay</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="unit-9">
              <div class="image" style="background-image: url('images/n4.jpg');"></div>
              <div class="unit-9-content">
                <h2>Daniel Glen</h2>
                <span>QuiFiPlay</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  


    <div class="bg-primary" data-aos="fade">
      <div class="container">

        <div class="row">
          <div class="col-md text-center" data-aos="fade-up" data-aos-delay="400">
          
            <h1  class="mb-4">Los niños que no juegan hoy, son los mayores que harán mañana un mundo aburrido.</h1>
          </div>
          </div>
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Acerca de nosotros</h3>
              <p>El juego es la forma más elevada de investigación (Albert Einstein)</p>
            </div>
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Subscribe</h3>
              <form action="#" method="post" class="site-block-subscribe">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter your email"
                    aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary rounded-top-right-0" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Menú</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Inicio</a></li>
                  <li><a href="#">Aprende</a></li>
                  <li><a href="register.php">Registrarse</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="quizFisica.php">Física</a></li>
                  <li><a href="quizQuimica.php">Química</a></li>
                 
                </ul>
              </div>
            </div>

            

          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Síguenos</h3>

                              <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>


            </div>

            

          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icon-heart text-danger" aria-hidden="true"></i> by QuiFiPlay
            </p>
          </div>
          
        </div>
      </div>
    </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/circleaudioplayer.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>