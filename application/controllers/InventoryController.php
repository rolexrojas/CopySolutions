<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InventoryController
 *
 * @author Roberto Rojas
 */
class InventoryController extends CI_Controller{
    
        public function index()
	{
		$this->load->view('Inventory_view');
                
	}
}
