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
	
	
	public function create($titel, $inhalt){
		
		$this->db->set('Titel', $titel);
		$this->db->set('Inhalt', $inhalt);
		$this->db->insert('table');
		return $this->db->insert_id();
	}
	
	public function update($id, $titel, $inhalt)
	{
	
		$this->db->set('Titel', $titel);
		$this->db->set('Inhalt', $inhalt);
		$this->db->where('ID', intval($id));
		$this->db->update('table');
		 
	
	}
	
	
	public function delete($id){
		$this->db->where('ID', intval($id));
		$this->db->delete('table');
	}
}