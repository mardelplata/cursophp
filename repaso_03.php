<?php
    $hist="";

    if(isset($_POST["calcular"])){
        $a = $_POST["numero_a"];
        $b = $_POST["numero_b"];
        $op = $_POST["operacion"];
        
        switch ($op) {
        case "suma":
            $resultado = $a + $b;
            $hist = $hist . $a . ' + ' . $b . ' = ' . $resultado . '<br />';
            break;
        
        
        case "resta":
            $resultado = $a - $b;
            $hist = $hist . $a . ' - ' . $b . ' = ' . $resultado . '<br />';
            break;
        
        
        case "producto":
            $resultado = $a * $b;
            $hist = $hist . $a . ' * ' . $b . ' = ' . $resultado . '<br />';
            break;
        
        
        case "division":
            if ($b == 0) {
                $hist = $hist . $a . ' / ' . $b . ' = ' . 'Error: No se puede dividir por 0 :/' . '<br />';
            }
            else {
                $resultado = $a / $b;
                $hist = $hist . $a . ' / ' . $a . ' = ' . $resultado . '<br />';
            }
            break;
        default:
            break;
        }
        $hist .= $_POST["historial"];
            
        }
        else {
          $hist = "";
          print ("borre hist!");
        }
?>

<!DOCTYPE HTML>
<body>
    <form action="?" method="post">
        <input type="text" name="numero_a" value=""/>
        <select name="operacion">
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="producto">*</option>
            <option value="division">/</option>
        </select>
        <input type="text" name="numero_b" value=""/>
        <input type="hidden" name="historial" value="<?php print ($hist); ?>"/>
        <input type="submit" name="calcular" value="Calular"/>
    </form>
    <?php 
        print ($hist);
    ?>
</body>