<?php
// Sube un archivo

if(isset($_POST["Bok"])) {
	var_dump($_POST);	
	var_dump($_FILES);
	
//	print("Nombre a: {$_FILES["a"]["name"]}");
	
	if($_FILES["a"]["error"] == 0 && is_uploaded_file($_FILES["a"]["tmp_name"]) ) {
		if(move_uploaded_file($_FILES["a"]["tmp_name"], "upload/{$_FILES["a"]["name"]}") ) { 
			print("Archivo recibido: {$_FILES["a"]["name"]}");
			chmod("upload/{$_FILES["a"]["name"]}", 0644);
		}

	} else {
			print("Error: {$_FILES["a"]["error"]}");		
	}
}

$res = '';
$tmp = scandir("upload");
array_shift($tmp);
array_shift($tmp);
foreach($tmp as $f) {
	$res .= "Archivo: <a href=\"upload/$f\">$f</a><br />";
}

?>
<html>
<head>

</head>
<body>
<h2>Subir archivo q</h2>
<form action="?" method="post" enctype="multipart/form-data">
	<input type="file" name="a" id="a" />
	<br />
	<input type="file" name="b" id="b" />
	<br />
	<input type="submit" name="Bok" id="Bok" value="Subir" />
</form>

<h4>Archivos:</h4>
<div><?=$res?></div>
</body>
</html>