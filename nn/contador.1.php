<?php
//Aca lo quiero resolver con $_session
  array_push($_session["cont"], $_POST["cont"]);
?>
 
<!DOCTYPE html>
<html>
<body>

<form action="?" method="POST">
  <input type="hidden" name="cont" value="1">
  <input type="submit" value="cuenta">
</form>

<p>::------------::</p>

<?php print_r($historico);?>

</body>
</html>