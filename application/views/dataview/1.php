<html>
<head>

 <script>
    $(document).ready(function(){
			    $("#submit").click(function(){
			    	
			        $.ajax({
					    type:"POST",
					    url: "<?php echo site_url('Datenbank/create');?>",
					    data:$("#myForm").serialize(),
					    success: function (response) {
							    
						    //alert(response);
						    $("#eintraege").append(response);
						    $('#eintraege .panel-default:last').hide().fadeIn(2000);
						    $("#myForm").trigger("reset");
						  
						    }
					    ,})
			    ;})
			    
			    
			$("#neuerEintrag").click(function(){
				
				$("#form").removeClass("collapse");
			});   



	$("#neuerEintrag").click(function(){
        $("#formular").removeClass("collapse");
	});			 
	    
    ;});
 </script>


</head>

<body>

<div class="container">
<div class="row">
<button id="neuerEintrag" type="button" class="btn btn-default btn-primary pull-right">Neuer Eintrag</button>
</div>

<div class="row">
<div id="eintraege">
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
</div>
</div>
</div>

<div id="formular" class="container collapse">
 <div class="row">
 
 <div class="col-xs-8">
 <form id="myForm" class="form-horizontal">
  <div class="form-group">
    <label class="col-xs-1" for="exampleInputName2">Titel</label>
     <div class="col-xs-11">
    <input type="text" class="form-control" id="ip_titel" name="ip_titel" placeholder="Inhalt">
    </div>
  </div>
  <div class="form-group">
    <label class="col-xs-1" for="exampleInputEmail2">Inhalt</label>
    <div class="col-xs-11">
    <textarea  class="form-control" id="ta_inhalt" name="ta_inhalt" rows="3"></textarea>
    </div>
  </div>
  
  <div class="form-group">
  <div class="col-xs-11">
  <button id="submit" type="button" "btn btn-default">Send</button>
  </div>
  </div>
  </div>
</form>
</div>
</div>
<br><br><br><br><br>
</body>
</html>




