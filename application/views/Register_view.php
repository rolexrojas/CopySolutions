<div class="text-center" >
    <form class="form-signin">
     <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
      <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
      <label for="email" class="sr-only">Correo Empleado</label>
      <input type="email" id="email" name="inputUserCode" class="form-control" placeholder="tucorreo@copysolutions.com" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Clave" required>
      
      <a href="#" id="accederSys" class="btn btn-lg btn-primary btn-block">Entrar</a>
      
      <div class="checkbox mb-3">
        <label>
            <small>Aun no tienes cuenta? <a href="<?php echo site_url('index.php/registercontroller/NoAccountYet');?>"> Registrate! </a></small>
        </label>
          <label>
              <small><p style="color:red"><?php if(isset($mensaje)){ echo $mensaje; } ?></p></small>
          </label>
      </div>
      <p class="mt-5 mb-3 text-muted">&copy;2018 Dalmau Corps</p>
    </form>
</div>    
<link href="<?php echo site_url("assets/css/signin.css"); ?>" rel="stylesheet">    
<script>
  $("#accederSys").on("click", function () {
      
      var mail = $("#email").val(); 
      var pass = $("#inputPassword").val();
      var full_url = "<?php echo base_url("index.php/registerController/LogMeIn/"); ?>";
     
        $.ajax({
            url: full_url,
            method: "POST",
            data: { inputUserCode: mail, inputPassword: pass },
            dataType: "text",
            success: function (response) {
                //mandar el content del main y pasarlo ahi
                if(response == 0){
                     location.reload();
                }else{
                    $(".mainContainer").html(response);
                }
            }
            });
       
    });
</script>