<?php

class Template {
	
	
	var $template_data = array();
	
	
	 function set($key, $value){
	 	
	 	$this -> template_data[$key] = $value; 
	 	// beliebige Datenpaare (key und value) werden im Array template_data gespeichert
	 	// um weiter der zu ladenden View $template mitgegeben zu werden
	 	
	 }
	
	
	 function load($template, $view, $view_data = array()){
	 	
	 	
	 	// die Instanz wird benötigt, um auf die internen Controller_ethoden (wie z.B load) zugreifen zu können
	 	$this-> CI =& get_instance();
	 	
	 	$this->set('nav_list', array('Home','Kontakt','Impressum'));
	 	
	 	
	 	// die per Parameter übergebene $view wird geladen, jedoch wegen des dritten Parameters "TRUE"
	 	// als Datensatz zurückgegeben und dem Array template_data bzw. dem Schlüssel content zugeordnet.
	 	$this->set('content', $this->CI->load->view($view, $view_data, TRUE));
	 	
	 	// letzlich liefert die Funktion eine View zurück, die das übergebene Template enthält
	 	// und gleichzeitig die gesetzten Daten (unter anderem content (also die View des Hauptinhalts) beinhaltet,
	 	return $this->CI->load->view($template, $this->template_data);
	 }
	
	
	
}

?>