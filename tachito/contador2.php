<Html>
<Title>  Numeros.php </Title>
<Body>
<?PHP
if (isset($_REQUEST[boton]))
  {
   $a=$_REQUEST[a];
   $b=$_REQUEST[b];
   echo "Números comprendidos entre $a y $b";
   echo "<Hr>";
    for ($i=$a+1; $i<$b; $i++)
     {
       echo ("$i - ");
     }
    }
  else
  {
 ?>
 <FORM ACTION="contador2.php" METHOD="POST">
 <H2>
 Ingrese el intervalo para los números pares
 <Hr>
 Valor 1: &nbsp<INPUT TYPE="TEXT" NAME="a" SIZE="10">
 <Br>
 Valor 2: &nbsp<INPUT TYPE="TEXT" NAME="b" SIZE="10">
 <Br><Br>
 <INPUT TYPE="SUBMIT" NAME="boton" VALUE="Ingresar Datos">
 <?PHP
   }
 ?>
</Body>
</Html>