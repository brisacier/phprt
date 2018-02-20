<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
	
<h1>Récupération de paramètres en requête GET</h1>

<?php

$args = count($_GET);
if ($args==0){
	echo("<p>Erreur, vous n'avez spécifié aucun argument</p>");
}
else{
	//test si oubli paramètres
	if(!isset($_GET["color"])){
		$color="black";
	}
	if(!isset($_GET["size"])){
		$size=12;
	}
	
	// récupération paramètres
	$color=$_GET["color"];
	$size=$_GET["size"];
	$message=$_GET["message"];
	
	echo "<div style='font-size:{$size}px; color:{$color};'>{$message}</div>";
	
}
?>

<div style="display:flex; flex-direction:column; justify-content:space-around; height:100px; border: 1px solid lightgrey;">
<a href="./ex2.php?message=Salut a tous&color=red&size=15"> Afficher bonjour en rouge taille 15 </a>
<a href="./ex2.php?message=Au revoir !&color=green&size=30"> Afficher au revoir en vert taille 30 </a>
</div>

<form method="GET" action="./ex2.php">
	<div>
    <label for="size">Taille : </label>
    <input type="number" min="0" value="20" name="size" id="size">
    <label for="color">Couleur : </label>
    <input type="color" value="" name="color" id="color">
    </div>
    <input type="text" placeholder="Entrez votre message ici..." name="message"></textarea>

    <input type="submit" value="Valider">
</form>


</body>
</html>
