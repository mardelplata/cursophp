<?php
//Aca quiero resolverlo como pedro.
    if(isset($_POST["cont"])){
        $historico = $_POST["cont"] . "<br />";
    }
    else {
        //$historico = "";
        $contador = 0;
    }
?>
 
<!DOCTYPE html>
<html>
<body>

<form action="?" method="POST">
  <input type="hidden" name="cont" value="<?php $contador = $contador + 1; ?>"/>
  <input type="submit" value="cuenta"/>
</form>

<p>:: :: ::</p>

<?php print ($historico);?>

</body>
</html>