<?php

	
//Importamos las variables del formulario de contacto
@$Name = addslashes($_POST['nombre']);
@$Email = addslashes($_POST['email']);
@$Compania = addslashes($_POST['compania']);
@$Pais = addslashes($_POST['pais']);
@$Message = addslashes($_POST['mensaje']);
	
//Preparamos el mensaje de contacto
$cabeceras = "From: $Email\n" //La persona que envia el correo
 . "Reply-To: $Email\n";
$asunto = "Message sent from the IDBCGroup Website"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "hola@idbcgroup.com"; //cambiar por tu email
$contenido = "$Name ha enviado un mensaje desde la web de IDBC Group (www.idbcgroup.com)\n"
. "\n"
. "Nombre: $Name\n"
. "E-mail: $Email\n"
. "Compania: $Compania\n"
. "Pais: $Pais\n"
. "Mensaje: $Message\n"
. "\n";
 
//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {

//Si el mensaje se envía muestra una confirmación
header("Location: http://www.idbcgroup.com/test/index.html");
die("Gracias, su mensaje fue enviado correctamente.");
}else{
 
//Si el mensaje no se envía muestra el mensaje de error
die("Error: Su información no pudo ser enviada, intente más tarde");
}


?>