<?php

$destinatario = 'br1_morales@hotmail.com';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$number = $_POST['number'];
$asunto = $_POST['asunto'];

$header = "Enviado de prueba";
$mensajecompleto = $nombre . $email . $number;

mail($destinatario, $asunto, $mensajecompleto, $header);
