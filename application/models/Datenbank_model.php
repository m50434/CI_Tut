<?php
class Datenbank_model extends CI_Model {
	
	
	public function __construct(){
		
		$this->load->database();
	}
	
	
	public function get_data($id = False){
		
		if ($id === FALSE)
		{
			$query = $this->db->get('table');
			return $query->result_array();
		}
		
		
		
		$this->db->where('ID', intval($id));
		$query = $this->db->get('table');
		return $query->result_array();
		
	}
}