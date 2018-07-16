<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegisterController
 *
 * @author Roberto Rojas
 */
class RegisterController extends CI_Controller{
    
    public function index()
	{
		$this->load->view('Register_view');
                
	}
        
     public function LogMeIn(){
         $no_empleado = $password = "";
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $no_empleado = $this->test_input($_POST["email"]);
            $password = $this->test_input($_POST["inputPassword"]);
          }
          //Si user valid and user active (will add user active condition from database)
          //roles: SUPERVISOR_DE_SERIVICIOS / COORDINADORES / 
          //GERENTE_DE_SERVICIOS / ENCARGADO_DE_ALMACEN / 
          //REPRESENTANTE_TECNICO / ADMINISTRADOR_SISTEMA
           if($this->isValidUser()){
              // $this->session
               $nombre_empleado = 'John';
               $apellido_empleado = "Doe";
               $mail_empleado = 'johndoe@some-site.com';
               $rol_empleado = 'SUPERVISOR_COMERCIAL';
               $no_empleado = '23325';
               $newdata = array(
                    'username'  => $nombre_empleado." ".$apellido_empleado,
                    'email'     => $mail_empleado,
                    'rol' => $rol_empleado,
                    'no_empleado' => $no_empleado,
                    'logged_in' => TRUE
                );
               
               $this->session->set_userdata($newdata);
               $uri = "http://localhost/CopySolution/index.php";
               redirect($uri);
           }  
             
             //$this->session. 
            
         
     }
     
     
     public function NoAccountYet(){
         $this->load->view('Register_Form_view');
         //check for session, if has session then move it to index php, if it doesn't, then let him go to register form view
        /* if(true){
           $uri = "http://localhost/CopySolution/index.php";
               redirect($uri);  
             
         }else{
         $this->load->view('Register_Form_view');
         }*/
         
     }
     
     
     public function LogMeOut(){
         
         $this->session->sess_destroy();
         $this->load->view('LogOutPage_view');
         
     }
     
     public function RegisterMe(){
            //SAVE THIS DATA ON DATABASE, ADD ACTIVE OPTION
          // ALLOW SYSTEM ADMIN TO ASSIGN ROLE AND ACVITE OR INACTIVE PROFILE
               $nombre_empleado = 'John';
               $apellido_empleado = 'Doe';
               $rol = 'SUPERVISOR_COMERCIAL';
               $mail_empleado = 'johndoe@some-site.com';
               $no_empleado = '23325';
               $newdata = array(
                    'firstName'  => $nombre_empleado,
                    'lastName'     => $apellido_empleado,
                    'email' => $mail_empleado,
                    'no_empleado' => $no_empleado,
                    'logged_in' => TRUE
                );
         
         
     }
     
     //to validate clean data coming from vars
     function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
     
     function isValidUser(){
         //SOME VALIDATION OR ENCRYPTATION PROCESS AGAINS DATABASE STORED DATA
         
         // IF TRUE, USER AND PRIVILEGES ARE STORED ON SESSION
         
         return true;
     }
     
     function isLoggedIn(){
         
         
         
     }
}
