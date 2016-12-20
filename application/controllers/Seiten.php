<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seiten extends CI_Controller {


	public function view($seite = 'home'){
		
		if( !file_exists(APPPATH.'views/Seiten/'.$seite.'.php')){
			
			// Diese Seite gibts nicht
			show_404();
		}
		else{
		
		$data['title'] = ucfirst($seite);
		$data['email'] = 'test@test.com';
		$data['nav'] = $seite;
		
		$this->load->library('template');
		
		$this->template->set('Adresse', 'Meine Adresse Str. PLZ');
		$this->template->set('Telefon', '007');
		$this->template->load('basic_template','Seiten/'.$seite, $data);
		
		
		}
	}
}