<?php
/* 1) Realice un script que pida al usuario una frase y muestrela toda en 
minúsculas, toda en mayusculas, con la primer letra en mayusculas y con la 
primer palabra en mayusculas y el resto en minusculas. */

	if (isset($_POST["enviar"])) {
		print(strtolower($_POST["frase"]). "<br />");
		print(strtoupper($_POST["frase"]). "<br />");
		//print(strt($_POST["frase"]). "<br />");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cadenas_01</title>
</head>
<body>
	<form action="?" method="POST">
		<h2>Ingrese una frase</h2>
		<input type="text" name="frase" value="" />
		<input type="submit" name="enviar" value="enviar" />
		
	</form>
</body>
</html>