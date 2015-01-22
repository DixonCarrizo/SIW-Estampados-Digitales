<?php

require_once("../include/conex.php");

$correo = $_POST['correo'];
//Titulo
$mensaje = $_POST['mensaje'];
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: prueba <dixon.carrizo.daca@gmail.com>\r\n";
//Enviamos el mensaje a info@geekytheory.com 
$bool = mail("dixon.carrizo.daca@gmail.com",$mensaje,$correo,$headers);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}
?>