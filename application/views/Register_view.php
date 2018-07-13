<div class="text-center" >
    <form class="form-signin" action="<?php echo base_url();?>RegisterController/LogMeIn" method="POST">
     <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
      <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
      <label for="email" class="sr-only">Correo Empleado</label>
      <input type="email" id="email" name="inputUserCode" class="form-control" placeholder="tucorreo@copysolutions.com" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Clave" required>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      
      <div class="checkbox mb-3">
        <label>
            <small>Aun no tienes cuenta? <a href="<?php echo base_url();?>RegisterController/NoAccountYet"> Registrate! </a></small>
        </label>
      </div>
      <p class="mt-5 mb-3 text-muted">&copy;2018 Dalmau Corps</p>
    </form>
</div>    
 <link href="assets/css/signin.css" rel="stylesheet">    