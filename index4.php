
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> URL Langue</title>
</head>
<body>
	<p><a href="index4.php?langage">Langue: </a></p>
	<p><a href="index4.php?serveur">Serveur: </a></p>
	<?php 
	$langage = "PHP";
	$serveur = 'LAMP';
	if(isset($_GET['langage'])){
		echo $langage;	
	}
	if(isset($_GET['serveur'])){
		echo $serveur;
	}

	?>

</body>
</html>