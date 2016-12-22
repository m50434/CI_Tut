<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		
		if(empty($this->session->userdata('id_user'))){
			$this->session->set_flashdata('flash_data', 'Kein Zugriff');
			redirect('Login');
		}
		
		
	}

	public function dataview($number = '1'){

	

			$data['title'] = $number . "Admin Control";
			$data['email'] = 'test@test.com';
			$data['nav'] = $number;
			
			$this->load->model('Datenbank_model');
			$data['database'] = $this->Datenbank_model->get_data();

			
			$this->load->library('template');

			$this->template->set('Adresse', 'Meine Adresse Str. PLZ');
			$this->template->set('Telefon', '007');
			$this->template->load('basic_template','dataview/'.$number, $data);


		
	}

	
	public function logout() {
		       $data = ['id_user', 'username'];
		       $this->session->unset_userdata($data);
		
		       redirect('login');
	    }
}
















