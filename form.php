<?php
error_reporting(4);
$nombre = $_POST['nombre'];
$observaciones= $_POST['observaciones'];
$email = $_POST['email'];
$radio =$_POST['radio'];
$pais =$_POST['pais'];

$aficiones1 = $_POST['afi1'];
$aficiones2 = $_POST['afi2'];
$aficiones3 = $_POST['afi3'];
$aficiones4 = $_POST['afi4'];

$destinatario= "paulamilena8@digitechfp.com";
$asunto = "Formulario web";
$mensaje = "Nombre: ".$nombre ."\r\n";
$mensaje.= "Email: ".$email."\r\n";
$mensaje.= "radio:".$radio."\r\n";
$mensaje.= "pais:".$pais."\r\n";
$mensaje.= "Aficion1:".$aficiones1."\r\n";
$mensaje.= "Aficion2:".$aficiones2."\r\n";
$mensaje.= "Aficion3:".$aficiones3."\r\n";
$mensaje.= "Aficion4:".$aficiones4."\r\n";
$mensaje.= "observaciones: ".$observaciones."\r\n";

mail($destinatario,$asunto,utf8_decode($mensaje),$email);
echo("Los datos se han enviado correctamente".utf8_decode($mensaje));
?>