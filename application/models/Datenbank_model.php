<?php
class Datenbank_model extends CI_Model {
	
	
	public function __construct(){
		
		$this->load->database();
	}
	
	
	public function get_data(){
		
		
		$query = $this->db->get('table'); // Select * From table
		return $query->result_array();
		
	}
}