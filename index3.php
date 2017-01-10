<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> URL Date</title>
</head>
<body>
	<p><a href="index3.php?dateDebut">Date debut : </a></p>
	<p><a href="index3.php?dateFin">Date fin : </a></p>
	<?php 
	$dateDebut = '2/05/2016';
	$dateFin = '27/11/2016';
	if(isset($_GET['dateDebut'])){
		echo $dateDebut;
	 
	}
	if (isset($_GET['dateFin'])) {
		# code...
		echo $dateFin;
	}
	?>
</body>
</html>