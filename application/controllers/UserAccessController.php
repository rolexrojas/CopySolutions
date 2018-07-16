<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserAccessController
 *
 * @author Roberto Rojas
 */
class UserAccessController extends CI_Controller{
    public function index()
	{
		$this->load->view('UserAccess_view');
                
	}
        
    public function ShowMeAll(){
        $query = "SELECCIONA TODOS LOS REGISTROS DE LA BASE DE DATOS";
        
         
    }    
}