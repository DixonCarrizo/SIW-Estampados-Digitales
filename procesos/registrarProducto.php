<?php 
	require_once("../include/conex.php");

	$precio = $_POST['precio'];
	$descripcion = $_POST['descripcion'];
	$imagen = $_POST['imagen'];
	

	$query="INSERT INTO producto(precio, descripcion, imagen) values ('$precio', '$descripcion', '$imagen')";


$rs=pg_query($query) or die('Error: '. pg_last_error());
	
?>