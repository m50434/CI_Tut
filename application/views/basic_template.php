<html>
<head>
<title>Meine Website</title>
</head>

<body>
<div>
<ul>

	<?php foreach ($nav_list as $li => $nav_item): ?>
	
		<li><?= ($nav == $nav_item ? '<b>' : '')?>
		  
		  <?php echo anchor('Seiten/'.$nav_item,$nav_item);?> 
		  
		  <?= ($nav == $nav_item ? '</b>' : '')?>
		
		</li>
    <?php endforeach;?>
</ul>

</div>

 <div><?php echo $content; ?></div>


 <div>FOOTER  <?php echo $Adresse; ?> und <?php echo $Telefon; ?></div>
</body>

</html>