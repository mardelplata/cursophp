<?php
// POR FAVOR USAR CHECKDATE !!!
        if (isset($_POST["boton"])) {
            print ("Ya tengo la fecha");
        }
        else {
            print ("No tengo la fecha");
        };
?>
<!DOCTYPE html>
<html>
<body>
    <form action="?" method="post">
        <h2>:: Ingrese su fecha de cumpleaños ::</h2>
        dia: <input type="text" name="dia"/>
        mes: <input type="text" name="mes"/>
        año: <input type="text" name="ano"/>
        <input type="submit" name="boton" value="Submit"/>
    </form>
    <br /> ================================= <br />
    
</body>
</html> 