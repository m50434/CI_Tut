<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seiten extends CI_Controller {


	public function view($seite = 'home'){
		
		if( !file_exists(APPPATH.'views/Seiten/'.$seite.'.php')){
			
			// Diese Seite gibts nicht
			show_404();
		}
		
		
		$data['title'] = ucfirst($seite);
		$data['email'] = 'test@test.com';
		$this->load->view('Seiten/'.$seite, $data);
	}
}