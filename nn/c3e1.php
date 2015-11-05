<?php
	require "request_vars.php";
	

	$hist = '';
	if (in_post_array('izq', 'der', 'op', 'hist')) {
		$izq = $_POST['izq'];
		$der = $_POST['der'];
		$op = $_POST['op'];
		$hist = $_POST['hist'];
		if (!is_numeric($izq) || !is_numeric($der)) {
			$hist = "Error: no se puede operar $izq con $der porque uno o ambos no son numÃ©ricos!!<br />" . $hist;
		} else {
			switch ($op) {
				case "suma":
					$resultado = $izq + $der;
					$hist = $izq . ' + ' . $der . ' = ' . $resultado . '<br />' . $hist;
					break;
				case "resta":
					$resultado = $izq - $der;
					$hist = $izq . ' - ' . $der . ' = ' . $resultado . '<br />' . $hist;
					break;
				case "prod":
					$resultado = $izq * $der;
					$hist = $izq . ' * ' . $der . ' = ' . $resultado . '<br />' . $hist;
					break;
				case "div":
					if ($der == 0) {
						$hist = $izq . ' / ' . $der . ' = Error de division por cero!!<br />' . $hist;
					} else {
						$resultado = $izq / $der;
						$hist = $izq . ' / ' . $der . ' = ' . $resultado . '<br />' . $hist;
					}
					break;
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>clase 1 Ejercicio 3</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="izq"/>
		<select name="op">
			<option value="suma">+</option>
			<option value="resta">-</option>
			<option value="prod">*</option>
			<option value="div">/</option>
		</select>
		<input type="text" name="der"/>
		<input type="hidden" name="hist" value="xxx"/>
		<input type="submit" value="enviar"/>
	</form>
	<p><?=$hist?></p>
</body>
</html>