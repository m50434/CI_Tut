<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datenbank extends CI_Controller {
  function __construct(){
  	 parent::__construct();
  	 $this->load->model('Datenbank_model');
  }

	public function dataview($number = '1'){

		if( !file_exists(APPPATH.'views/dataview/'.$number.'.php')){
				
			// Diese Seite gibts nicht
			show_404();
		}
		else{

			$data['title'] = $number;
			$data['email'] = 'test@test.com';
			$data['nav'] = $number;
			$data['database'] = $this->Datenbank_model->get_data();

			$this->load->library('template');

			$this->template->set('Adresse', 'Meine Adresse Str. PLZ');
			$this->template->set('Telefon', '007');
			$this->template->load('basic_template','dataview/'.$number, $data);


		}
	}
}