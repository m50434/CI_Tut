<?php
class Suche_model extends CI_Model {


	public function __construct(){

		$this->load->database();
	}

	
	function suche($suchwort){
		
		//$this->db->like('Titel', $suchwort); // WHERE 'Titel' LIKE '%suchwort%
		
		$array = array('Titel' => $suchwort, 'Inhalt' => $suchwort);
		$this->db->or_like($array);
		
		$query = $this->db->get('table');
		return $query->result_array();
	}
	
}