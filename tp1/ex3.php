<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
	
<h1>Récupération de paramètres en requête POST</h1>

<?php

$args = count($_POST);
if ($args==0){
	echo("<p>Erreur, vous n'avez spécifié aucun argument</p>");
}
else{
	//test si oubli paramètres
	if(!isset($_POST["color"])){
		$color="black";
	}
	if(!isset($_POST["size"])){
		$size=12;
	}
	
	// récupération paramètres
	$color=$_POST["color"];
	$size=$_POST["size"];
	$message=$_POST["message"];
	
	echo "<div style='font-size:{$size}px; color:{$color};'>{$message}</div>";
	
}
?>

<form method="POST" action="./ex3.php">
	<div>
    <label for="size">Taille : </label>
    <input type="number" min="0" value="20" name="size" id="size">
    <label for="color">Couleur : </label>
    <input type="color" value="" name="color" id="color">
    </div>
    <textarea placeholder="Entrez votre message ici..."  rows="5" cols="50" name="message"></textarea>

    <input type="submit" value="Valider">
</form>


</body>
</html>
