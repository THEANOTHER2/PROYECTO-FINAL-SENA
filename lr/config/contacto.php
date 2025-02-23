<?php

$destino ="alejoali2018@gmail.com";
$nombre = $_POST ['nombre'];
$correo = $_POST ['correo'];
$mensaje = $_POST ['mensaje'];

$cabecera = 'From:' .$correo. ''."r\n".
			'Replay-To:' .$correo. ''."r\n".
			'X-Mailer: PHP/' .phpversion();

$contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;

mail($destino,"Respuesta del formulario de contacto",$contenido,$cabecera);
header("Location: ../index.php");
?>