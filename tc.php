
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Formulario de pago</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link href="/assets/css/main.css" rel="stylesheet">   
   
  </head>

  <body>

    <main class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-push-6 col-md-5 col-md-push-7">
          <div class="secure">
            <small>
              <span class="icon-lock"></span>
              Ahora está en una página segura</small>
            <img src="assets/imgs/geotrust.jpg" title="Secure web" alt="Geotrust logo" />
          </div>
        </div>
      </div>

      <div class="row"> 
        <div class="col-xs-12 col-sm-5 col-sm-push-7 col-md-5 col-md-push-7"> 

          <aside class="reservation">

            <section class="summary">
              <h1 class="sr-only">Resumen de su estancia y pago</h1>
              
              <div class="row">
                <div class="col-xs-5 col-sm-5 col-md-5">
                  <p>Inicio</p>
                  <p class="dates"><?php echo " " . date("d") . " - " . date("m") . " - " . date("Y");
?></p>
                </div>
                <div class="col-xs-1 col-sm-1 col-md-1">
                  <span class="icon-arrow-range-date"></span>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-5">
                  <p>Fin</p>
                  <p class="dates"><?php $fecha_actual = date("d-m-Y");

echo date("d-m-Y",strtotime($fecha_actual."+ 1 year")); ?></p>
                </div>
                
              </div>

              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="price">
                    <big>Total a pagar</big>
                    <p>$2.000.000</p>
                    <p></p>
                    <p>Impuestos incluidos</p>  
                  </div>

                </div>              
              </div>  
              
            </section>

            
            <section class="policies">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <ul>
                  <li><b>Pago:</b> Prepago de 100%: Con tarjeta de crédito</li>
                  <li><b>Cancelación:</b> Anulación restringida.<br>Cuando reciba la suscripción, cobrará en su tarjeta la totalidad del importe. No se admite devolución en caso de anuilación, salida anticipada. Si el pago fuera denegado, se anularía su suscripción. </li>
                  <li><b>Privacidad:</b> Solo usamos sus datos personales para temas relacionados con su suscripción. <a>Leer política de privacidad</a></li>
                  </ul>
                </div>
              </div>
                          
            </section>

          </aside>

        </div> 

        <div class="col-xs-12 col-sm-6 col-sm-pull-5 col-md-6 col-md-pull-5"> 
          
          <article class="reservationData">
            
            <header>              
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="center-table">
                    <ul>
                      <li class="black">Welcome - QuiFiPlay</li>
                      <li>Barranquilla, Colombia</li> 
                    </ul>
                  </div>
                </div>
              </div> 
            </header>
           
              <h2>Datos de la suscripción</h2>
              <form id="formPayment" class="form" novalidate="novalidate" >
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <label for="firstName" class="sr-only">Nombre</label>
                      <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Nombre" required>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <label for="lastName" class="sr-only">Apellidos</label>
                      <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Apellidos">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <label for="email" class="sr-only">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <label for="phone" class="sr-only">Teléfono móvil</label>
                      <input type="tel" class="form-control" id="phone" name="phone" placeholder="Teléfono móvil">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <label for="company" class="sr-only">Empresa</label>
                      <input type="text" class="form-control" id="company" placeholder="Empresa (opcional)">
                    </div>
                  </div>
                </div>             
              
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title ">       
                        <input type="radio" class="radioPayment" id="cardPayment" name="selectedPayment" checked/>
                        <label for="cardPayment"> 
                          Tarjeta de crédito               
                          <span class="cardImages">
                            <img src="assets/imgs/visa.jpg" title="Tarjeta Visa" id="visaCard" class="cardIcon"/>   
                            <img src="assets/imgs/mastercard.jpg" title="Tarjeta MasterCard" id="mastercardCard" class="cardIcon"/>  
                            <img src="assets/imgs/amex.jpg" title="Tarjeta American Expres" id="amexCard" class="cardIcon"/> 
                          </span>                     
                        </label>    
                        <a data-toggle="collapse" data-parent="#accordion" href="#card"></a>
                      </h4>
                    </div>
                    <div id="card" class="panel-collapse collapse in">
                      <div class="panel-body">  
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <label for="creditCardNumber" class="sr-only">Número de tarjeta de crédito</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="creditCardNumber" name="creditCardNumber" placeholder="Número tarjeta crédito">
                              <span class="input-group-addon">
                                <i class="icon-lock"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label for="cardName" class="sr-only">Nombre del titular</label>
                            <input type="text" class="form-control" id="cardName" name="cardName" placeholder="Nombre del titular">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                          <div class="form-group">
                            <div class="date"><!-- falta clase date -->
                              <label for="expirationDate" class="sr-only">Fecha de caducidad</label>
                              <input type="text" class="form-control" id="expirationDate" name="expirationDate" placeholder="MM/YYYY">
                            </div>
                          </div>
                        </div>   
                        <div class="col-xs-12 col-sm-3 col-md-3">
                          <div class="form-group">
                            <label for="cvv" class="sr-only">CVV</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="cvv" name="cvv" placeholder="CVV">
                              <span class="input-group-addon">
                                <i class="icon-answer"></i>
                              </span>
                            </div>
                          </div>
                        </div>   
                      </div>
                    </div>
                  </div>
                  
              
              
                
                <div class="checkbox">
                  <label for="newsletter">
                    <input type="checkbox" id="newsletter" name="newsletter"> Quiero recibir futuras ofertas y noticias del establecimiento
                  </label>
                </div>
                
                <hr>
                
                <div class="checkbox">
                  <label for="acceptPolicy">
                    <input type="checkbox" id="acceptPolicy" name="acceptPolicy"> Acepto la política de <a>cancelación/pago</a>, <a>política de privacidad</a> y condiciones particulares de la reserva, todas ellas detalladas en esta página.
                  </label>
                </div>

                <div class="buttonsForm">                 
                  <a class="boton_personalizado" href="index.php">Suscribirse</>                 
                </div> 
                
              </form> 
              
          </article>
          
        </div> 
      </div> 
    </main>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <!-- Bootstrap Date-Picker  -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script src="/assets/js/lib/watermark.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/validateForm.js"></script>
  
  </body>
</html>
