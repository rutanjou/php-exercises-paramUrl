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
<p><a href="#">Age : </a></p>

<?php
$nom = 'Nemare';
$prenom = 'Jean';
$age = '20 ans';
if(!isset ($_GET['age'])) {
	# code...
	echo '$nom</br>';
	echo '$prenom</br>';
	echo $age;
}else {
	echo "Null!";
}


?>

</body>
</html>