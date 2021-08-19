<?php

$nombre = $_POST['usar_name'];
$sueno = $_POST['user_sueno'];
$dolor = $_POST['user_dolor'];
$estres = $_POST['user_estres'];
$fatiga = $_POST['user_fatiga'];
$humor = $_POST['user_humor'];

$header = 'From: ' . 'VAL Sport Performance' . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . 'VAL APP' . ",\r\n";
$mensaje .= "Su e-mail es: " . 'info.valperformance@gmail.com' . " \r\n";
$mensaje .= "Jugadora:" . $_POST['usar_name'] . " \r\n";
$mensaje .= "Calidad de Sueño" . $_POST['user_sueno'] . " \r\n";
$mensaje .= "Dolor Muscular" . $_POST['user_dolor'] . " \r\n";
$mensaje .= "Nivel de Estres:" . $_POST['user_estres'] . " \r\n";
$mensaje .= "Nivel de Fatiga:" . $_POST['user_fatiga'] . " \r\n";
$mensaje .= "Estado de Humor:" . $_POST['user_humor'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'sebaalopez20@gmail.com';
$asunto = 'VAL APP- Monitoreamoe la pija';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>
