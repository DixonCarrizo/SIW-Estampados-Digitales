 <?php
	require_once("../include/conex.php");
	
	$query="select * from producto";
	$rsquery=pg_query($query) or die("Error: ".pg_last_error);
	
	$catalogo= new stdClass();
	$catalogo->lista =  array();
	
	$catalogo->status = "1";
	//$lista= array();
	$i=0;
	while($row=pg_fetch_array($rsquery))
	{	
				
		

		// This appends a new element to $d, in this case the value is another array
		$catalogo->lista[] = array('id' => $row["id_producto"] ,'descripcion' => $row["descripcion"], 'precio' => $row["precio"]);
		$i++;
		
			
	} 
	$json = json_encode($catalogo);
	echo($json);
?>