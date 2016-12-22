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
				echo "User existiert";
			}
			else{
				echo "Login fehlgeschlagen";
			}
		}
		
		
		$this->load->view("login");
		
	}
	
	
	
	
}