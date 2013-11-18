<? 
$destinatario = "gonzalo.mejias.moreno@gmail.com.es"; //ponemos la dirección a quien le queremos enviar el email
$asunto = "Gonzalo Mejias: Email de prueba para práctica"; //el asunto que aparecerá en el correo
//a continuación declaramos el mensaje que queremos enviar, en código html, que nos permitirá hacerlo más bonito, metiendo fotos, fondos y colores
$cuerpo = ' 
<html> 
<head> 
   <title>Prueba de correo</title> 
</head> 
<body> 
<h1>Hola</h1> 
<p> 
<b>Este es un mensaje que enviamos de prueba</b>. 
</body> 
</html> 
'; 

//Estas cabeceras son para definir la versión, y el tipo 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Gonzalo Mejias <gonzalo.mejias.moreno@gmail.com>\r\n"; 

//dirección de respuesta, que no tiene por qué ser igual que la del remitente, como vemos en este caso 
$headers .= "Reply-To: gonzalo.mejias.moreno@gmail.com>\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers)  //esta es la sentencia que envía el email.

?>
