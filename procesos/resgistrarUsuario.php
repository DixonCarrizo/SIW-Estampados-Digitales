<?php 
	require_once("../include/conex.php");
/*	print_r($_POST);
	echo "<p>Hizo algo";*/
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$fechanac = $_POST['fechanac'];
	$numtelefono = $_POST['numtelefono'];
	$cedula = $_POST['cedula'];
	$clave = $_POST['clave'];
	$correo = $_POST['correo'];
	/*echo $fechanac;*/
	$query="INSERT INTO usuario(nombre, apellido, fechanac, numtelefono, cedula, contrasena, correo, nivel) values ('$nombre', '$apellido', '$fechanac', '$numtelefono', $cedula,'$clave', '$correo', '1')";


$rs=pg_query($query) or die('Error: '. pg_last_error());
	
?>