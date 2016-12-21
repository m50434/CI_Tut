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
	
	public function create(){
		
		$titel = $this->input->post('ip_titel');
		$inhalt = $this->input->post('ta_inhalt');
		
		$id = $this->Datenbank_model->create($titel,$inhalt);
		
		echo "
			<div class=\"panel panel-default\">
				<span data-id=\"" . $id . "\"  class=\"glyphicon glyphicon-trash pull-right text-danger\" aria-hidden=\"true\"></span>
				  <div class=\"panel-heading\">" . $titel . "</div>
				  <div class=\"panel-body\">".
			      $inhalt 
			      ."</div>
			</div>	
		
		";
	}
	
	public function delete(){
		$id = $this->input->post('id');
		$this->Datenbank_model->delete($id);
		
	}

}
















