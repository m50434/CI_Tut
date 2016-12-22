<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}
	
	
	public function index(){
		
		if($_POST){
			
			$result = $this->Login_model->pruefe_user($_POST);
			
			if(!empty($result)){
				
				$data = [
						
						'id_user' => $result->ID,
						'username' => $result->User
						
				];
				
				$this->session->set_userdata($data);
				redirect('Dashboard');
				
				
				
			}
			else{
				$this->session->set_flashdata('flash_data', 'Passwort oder Name falsch');
				redirect('Login');
			}
		}
		
		
		$this->load->view("login");
		
	}
	
	
	
	
}