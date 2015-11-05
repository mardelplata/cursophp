<?php
    if(isset($_POST["boton"])){
        $contador .= ($contador + 1);
        $hist = $hist . $contador . "<br />"; 
    }
    else {
        $hist = "";
    }
?>
 
<!DOCTYPE html>
<html>
<body>

<form action="?" method="POST">
  <input type="hidden" name="cont" value="<?php $contador?>"/>
  <input type="submit" name= "boton" value="cuenta"/>
</form>

<p><?php print ($hist);?></p> <br />




</body>
</html>