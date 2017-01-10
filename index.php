<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>URL</title>
</head>
<body> 
<p><a href="index.php?nom
">Nom :</a></p>
<p><a href="index.php?prenom">Prenom : </a></p>
<?php
$nom = 'Nemare';
$prenom = 'Jean';
if(isset ($_GET['nom'])) {
	# code...
	echo $nom;
}

if(isset ($_GET['prenom'])){
	echo $prenom;
}
?>

</body>
</html>