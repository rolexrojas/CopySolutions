<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#" id="Home">CopySolutions Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Terminos y Condiciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Privacidad</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Módulos de Trabajo</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
               
             <?php 
                if($this->session->userdata('rol')){
                if($this->session->userdata('rol') == "SUPERVISOR_COMERCIAL"){?>   
              <a class="dropdown-item" href="#" id="clients" >Módulo de Administración de Perfiles de Clientes</a>
             <?php } if($this->session->userdata('rol') == "SUPERVISOR_COMERCIAL2"){ ?>
              <a class="dropdown-item" href="#" id="inventory" >Módulo de Administración de Inventario de Piezas/Equipos Multi-Funcionales</a>
              <?php } if($this->session->userdata('rol') == "SUPERVISOR_COMERCIAL"){ ?>
              <a class="dropdown-item" href="#" id="workpool" >Módulo de Administración de Casos Pendientes de Trabajar</a>
              <?php } if($this->session->userdata('rol') == "SUPERVISOR_COMERCIAL"){ ?>
              <a class="dropdown-item" href="#" id="useraccess" >Módulo de Administración de Accesos, Roles y Privilegios</a>
                <?php } }else{ ?>
              <a class="dropdown-item" href="#"><span> Es necesario iniciar sesión para acceder a estas opciones.</span></a>
                <?php } ?>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Soporte de Sistemas</a>
          </li>
        </ul>
          <?php if($this->session->userdata('username')){ ?>
          
          <span style="color:white;font-weight:bold">Bienvenido &nbsp;<?php echo $this->session->userdata('username');?>&nbsp;&nbsp;</span>
          <form class="form-inline my-3 my-lg-0">
              <a class="btn btn-warning btn-sm my-2 my-sm-0" href="<?php echo base_url(); ?>RegisterController/LogMeOut" >Cerrar Sesión</a>
          </form>
          <?php }else{ ?>
        <form class="form-inline my-2 my-lg-0">
            <a href="#" class="btn btn-outline-success my-2 my-sm-0" id="register">Register/Login</a>
        </form>
          <?php } ?>
      </div>
    </nav>
