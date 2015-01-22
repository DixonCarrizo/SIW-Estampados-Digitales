<?php

require_once("../include/conex.php");


$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];

echo $correo;
echo $contrasena;

$query="Select * from usuario where correo='$correo' and contrasena='$contrasena'";

$rsquery=pg_query($query) or die("Error: ".pg_last_error);
$rowCount=pg_num_rows($rsquery);

if($rowCount==0){
	echo"Error";	
}else{
	/*$fila=pg_fetch_array($rsquery);
	$_SESSION['ID']=$fila['id'];	*/
	
	echo"Logeado";	
}
pg_close("/include/conex.php");

?>