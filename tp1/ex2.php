<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>

<?php
/*
if(isset($_GET["message"])){
	echo $_GET["message"];
}
*/

$args = count($_GET);
if ($args==0){
	echo("<p>Erreur, vous n'avez spécifié aucun argument</p>");
}
else{
	//test si oubli paramètres
	if(!isset($_GET["color"]){
		$color="black"
	}
	if(!isset($_GET["size"]){
		$size=12
	}
	
	// récupération paramètres
	$color=$_GET["color"]
	$size=$_GET["size"]
	$message=$_GET["message"]
	
	echo(<p style="font-size");
	
}
?>

<div style="display:flex; flex-direction:column;">
<a href="./ex2.php?message=Salut a tous&color=red&size=15"> Afficher bonjour en rouge taille 15 </a>
<a href="./ex2.php?message=Casse toi, sale français!&color=green&size=30"> Afficher au revoir en vert taille 30 </a>

</div>


</body>
</html>