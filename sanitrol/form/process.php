<?php
/*
	FZS Web/Dev
*/

//Correo de destino; donde se enviará el correo.
$correoDestino = "andjustice@gmail.com";

//Texto emisor; sólo lo leerá quien reciba el contenido.
$textoEmisor = "MIME-VERSION: 1.0\r\n";
$textoEmisor .= "Content-type: text/html; charset=UTF-8\r\n";




$nombre = strip_tags($_POST['name']);
$telefono = strip_tags($_POST['phone']);
$fecha = time();
$fechaFormateada = date("j/n/Y", $fecha);

//Formateo el asunto del correo
$asunto = "Contacto via web";

//Formateo el cuerpo del correo
 
$cuerpo="";
$cuerpo .= "<b>Fecha:</b> " . $fechaFormateada . "<br />";
$cuerpo .= "<b>Nombre:</b> " . $nombre . "<br />";
$cuerpo .= "<b>Telefono:</b> " . $telefono . "<br />";
$cuerpo .= "<i>FZS Web/Dev</i> ";



// Envío el mensaje
mail( $correoDestino, $asunto, $cuerpo, $textoEmisor);
?>