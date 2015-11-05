<?php 
/*Dado el vector: $vector=array("d"=>"banana", "a"=>"limon","c"=>"pera", "b"=>"anana", "e"=>"sandia");

1) realice un script que ordene con las seis funciones vistas a este vector y lo muestre por pantalla.
*/
$vector=array("d"=>"banana", "a"=>"limon","c"=>"pera", "b"=>"anana", "e"=>"sandia");
if (isset($_POST["imprimir"])) {
	switch ($_POST["funciones"]) {
		case 'sort': {
			sort($vector);
			foreach ($vector as $key => $value) {
				print($key . " --> " . $value. "<br/>");
			}
			
			break;
		}
	}
}
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="?" method="POST">
		<select name="funciones">
			<option value="sort">sort</option>
			<option value="asort">asort</option>
			<option value="ksort">ksort</option>
			<option value="krsort">krsort</option>
			<option value="arsort">arsort</option>
			<option value="rsort">rsort</option>
		</select>
		<input type="submit" name="imprimir" value="inprimir">
	</form>
</body>
</html>