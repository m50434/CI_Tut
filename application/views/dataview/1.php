

<?php 
foreach ($database as $data_item){
	
		echo "
			
			<div class=\"panel panel-default\">
			  <div class=\"panel-heading\">" . $data_item['Titel'] . "</div>
			  <div class=\"panel-body\">".
			    $data_item['Inhalt'] 
			  ."</div>
			</div>
			
			
			";
}


?>


