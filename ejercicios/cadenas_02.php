<?php 
/* 2) Realice un script que ofrezca al usuario una caja de texto y que devuelva 
el contenido sin espacios ni retornos de carro. */

	if (isset($_POST["enviar"])) {
	    $texto = explode("-", $_POST["texto"]);
	    foreach ($texo as $palabra) {
            print($palabra);
	    }
	}
 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cadenas_02</title>
</head>
<body>
	<form action="?" method="POST">
		<h2>Ingrese una frase</h2>
		<input type="texto" name="texto" value=""/>
		<input type="submit" name="enviar" value="enviar"/>
		
	</form>
</body>
</html>