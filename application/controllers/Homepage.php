<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
    
	public function index()
	{
		$this->load->view('Homepage_view');
                
	}
        
        public function loadContent(){
            $this->load->view('Homepage_content_view');
            
        }
        
        
}
