<?php
class Suche extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Suche_model');
	}
	
	public function suche_suchwort($number){
		
		$suchwort = $this->input->post('suchwort');
		
		   $data['suchergebnis']= $this->Suche_model->suche($suchwort);
		   
		   $data['title'] = "Suchergebnis";
		   
		   $data['nav'] = $number;
		   
		   $this->load->library('template');
		   $this->template->set('Adresse', 'Meine Adresse Str. PLZ');
		   $this->template->set('Telefon', '007');
		   $this->template->load('basic_template','dataview/'.$number, $data);
		
	}
	
}