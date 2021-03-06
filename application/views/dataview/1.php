<html>
<head>

 <script>
    $(document).ready(function(){
			    $("#submit").click(function(){
			    	if($("#Eintrag_ID").val()!=""){
						var id = $("#Eintrag_ID").val();
						$.ajax({
						    type:"POST",
						    url: "<?php echo site_url('Datenbank/update');?>",
						    data:$("#myForm").serialize(),
						    success: function (response) {
								    
							    window.location.reload();
							  
							    }
						    ,})

			    	}
			    	else{
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
			    	}
			    ;})
			    
			    
			$("#neuerEintrag").click(function(){
				
				$("#form").removeClass("collapse");
			});   



	$("#neuerEintrag").click(function(){
        $("#formular").removeClass("collapse");
	});	


	$(".glyphicon-trash").click(function(){
        var id = $(this).data("id");
        //alert(id);
         $.ajax({
					    type:"POST",
					    url: "<?php echo site_url('Datenbank/delete');?>",
					    data:"id="+id,
					    success: function (response) {
							    
						    //alert(response);
						    $("#eintrag"+id).fadeOut("slow");
						  
						    }
		 ,})
	});	


	$(".glyphicon-pencil").click(function(){
		$("#formular").removeClass("collapse");
        var id = $(this).data("id");
        //alert(id);
        
        $("#ip_titel").val($(this).data("titel"));
        $("#ta_inhalt").val($(this).data("inhalt"));
        $("#Eintrag_ID").val(id);
	});	

			 
	    
    ;});
 </script>


</head>

<body>
<h1>Datenbank <?= $title ?></h1>

<div class="container">
<div class="row">
  <div class="col-xs-12"><button id="neuerEintrag" type="button" class="btn btn-default btn-primary pull-right">Neuer Eintrag</button></div>
</div>
<br>
<div class="row">
<div id="eintraege">
	<?php 
	

	
	
foreach ($database as $data_item){
	
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

<div id="formular" class="container collapse">
 <div class="row">
 
 <div class="col-xs-8">
 <form id="myForm" class="form-horizontal">
  <div class="form-group">
    <label class="col-xs-1" for="exampleInputName2">Titel</label>
     <div class="col-xs-11">
    <input type="text" class="form-control" id="ip_titel" name="ip_titel">
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
  <input type="hidden" id="Eintrag_ID" name="id" value="" class="form-control">
  <button id="submit" type="button" class="btn btn-default">Send</button>
  </div>
  </div>
  </div>
</form>
</div>
</div>
<br><br><br><br><br>
</body>
</html>




