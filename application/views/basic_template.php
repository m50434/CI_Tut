<html>
<head>
<title>Meine Website</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />

<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js');?>"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<div id="navigation">

	<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img width="30" src="<?php echo base_url('assets/img/penguin.png');?>"></img></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        	<?php foreach ($nav_list as $li => $nav_item): ?>
	
				<?= ($nav == $nav_item ? '<li class="active">' : '<li>')?>
				  
				  <?php echo anchor('Seiten/'.$nav_item,$nav_item);?> 
				  
				  <?= ($nav == $nav_item ? '</b>' : '')?>
				
				</li>
   			 <?php endforeach;?>
        
        
        
        
        
        
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?= anchor('Datenbank/1','Erste Datenbankseite')?></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form action="<?= site_url('Suche/suche_suchwort/2') ?>" method="post" class="navbar-form navbar-left pull-right">
        <div class="form-group">
          <input type="text" class="form-control" name="suchwort" placeholder="Search">
        </div>
        <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




</div>

 <div class="container"><?php echo $content; ?></div>

 <nav class="navbar navbar-default navbar-fixed-bottom navbar-inverse">
  <div class="container">
    <div class="row">
    	<div class=" col-xs-12 text-warning text-center">FOOTER  <?php echo $Adresse; ?> und <?php echo $Telefon; ?></div>
    
    </div>
    
  </div>
</nav>

</body>

</html>