<?php
$name = $_POST["name"];
$email = $_POST["email"];
$motivo = $_POST["motivo"];

$header = "From: " . $email . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . "\r\n";
$message .= "Su e-mail es: "  . $email . " \r\n ";\
$message .= "El motivo de contacto es " . $_POST["motivo"] . "\r\n";
$message .= "Enviado el: " . date("d/m/Y", time());

$para = "jeyfergo25@gmail.com";
$asunto = "Cimitarra web contacto";

mail($para, $asunto, utf8_decode($message), $header);

header("location:contactanos.html")

?>
