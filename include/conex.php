<?php

$conexion = pg_connect("host=localhost port=5432 dbname=pruebatesis1 user=postgres password=20860796");
if (!$conexion)
	{
		die('no se conecto al servidor: '. pg_last_error());
	}
?>