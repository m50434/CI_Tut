


	<h1><?= $title ?></h1>

<div class="container">

<br>
<div class="row">
<div id="eintraege">
	<?php 
	

	
	
foreach ($suchergebnis as $data_item){
	
	if(!empty($this->session->userdata('id_user'))){
	
		$admin_icons = "
			    		<span style=\"padding-left: 5px\"; data-id=\"" . $data_item['ID'] . "\" data-titel=\"". $data_item['Titel'] ."\" data-inhalt=\"". $data_item['Inhalt'] ."\" class=\"glyphicon glyphicon-pencil pull-right\" aria-hidden=\"true\"></span>
    		  <span data-id=\"" . $data_item['ID'] . "\"  class=\"glyphicon glyphicon-trash pull-right text-danger\" aria-hidden=\"true\"></span>
			  
			    		";
	
	}
	else{
		$admin_icons = "";
	}
	
		echo "
			<div id=\"eintrag". $data_item['ID'] . "\">
			<div class=\"panel panel-default\">
			  
			  $admin_icons
			  <div class=\"panel-heading\">" . $data_item['Titel'] . "</div>
			  <div class=\"panel-body\">".
			    $data_item['Inhalt'] 
			  ."</div>
			</div>
			</div>
			
			";
}


?>
</div>
</div>
</div>






