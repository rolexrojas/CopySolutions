<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Registro Empleados</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/CopySolution/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        
        <h2>Formulario de Registro de Usuarios</h2>
        <p class="lead">Se debe completar la información del formulario debajo y enviarse, en un tiempo aproximado de 2 horas nuestro encargado configurará su perfíl y usted podrá acceder al sistema. <strong><small>Att: Ing. Tony Fake (Admin de Acceso Sistema) Ext. 2215</small></strong></p>
      </div>

      <div class="row">
        <div class="col order-md-1">
          <h4 class="mb-3">Información Personal</h4>
          <form class="needs-validation" novalidate metho="post" action="RegisterController/RegisterMe">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Primer Nombre</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Primer nombre válido es requerido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Primer Apellido</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Primer apellido válido es requerido.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Correo Electronico</label>
              <input type="email" class="form-control" id="email" placeholder="tucorreo@copysolutions.com">
              <div class="invalid-feedback">
                Favor entrar una dirección de correo valida.
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="no_empleado">No. Empleado</label>
                <input type="text" class="form-control" id="no_empleado" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Su no. de empleado es requerido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                
              </div>
            </div>
              
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Al registrarme en este portal estoy aceptando las politicas de privacidad y seguridad de la empresa</label>
            </div>
            <hr class="mb-4">

           

            
           
            <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar Solicitud de Registro</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy;2018 Copy Solutions In, CopySol System</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacidad</a></li>
          <li class="list-inline-item"><a href="#">Terminos y Condiciones</a></li>
          <li class="list-inline-item"><a href="#">Soporte</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
