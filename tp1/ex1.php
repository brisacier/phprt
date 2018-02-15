<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>

<?php
echo("<h1>Bienvenue. ");

if(isset($_GET["message"])){
	echo $_GET["message"];
}

echo(" !</h1>");
?>

<div style="display:flex; flex-direction:column;">
<a href="./ex1.php?message=Hello"> Afficher Hello </a>
<a href="./ex1.php?message=Salut"> Afficher Salut </a>
<a href="./ex1.php?message=uninstallfaggot"> Afficher un message peu charlie</a>
</div>


</body>
</html>