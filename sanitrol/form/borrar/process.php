<?php
/*
	Creado por DaríoBF - www.dariobf.com
	Script que gestiona el envío de un formulario por correo electrónico a la cuenta indicada.
*/

//Correo de destino; donde se enviará el correo.
$correoDestino = "redoficio@gmail.com";

//Texto emisor; sólo lo leerá quien reciba el contenido.
$textoEmisor = "MIME-VERSION: 1.0\r\n";
$textoEmisor .= "Content-type: text/html; charset=UTF-8\r\n";


/*
	Recopilo los datos vía POST
	Con strip_tags suprimo etiquetas HTML y php para evitar una posible inyección.
	Como no gestiona base de datos no es necesario limpiar de inyección SQL.
*/

$nombre = strip_tags($_POST['name']);
$telefono = strip_tags($_POST['phone']);
$fecha = time();
$fechaFormateada = date("j/n/Y", $fecha);

//Formateo el asunto del correo
$asunto = "Red-Oficio";

//Formateo el cuerpo del correo
 

$cuerpo .= "<b>Fecha:</b> " . $fechaFormateada . "<br />";
$cuerpo .= "<b>Nombre:</b> " . $nombre . "<br />";
$cuerpo .= "<b>Telefono:</b> " . $telefono . "<br />";
$cuerpo .= "<i>MDQuality</i> ";



// Envío el mensaje
mail( $correoDestino, $asunto, $cuerpo, $textoEmisor);
?>