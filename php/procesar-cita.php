<?php

require_once 'recogeRequests.php';

$nombre = recogePost("nombre");
$telefono = recogePost("telefono");
$fecha = recogePost("fecha");
$hora = recogePost("hora");
$descripcion = recogePost("descripcion");

$nombreOk = false;
$telefonoOk = false;
$fechaOk = false;
$horaOk = false;
$descripcionOk = false;

$errores = [];

if($nombre === ""){
    $errores[] = "No se digito el nombre de la persona";
}else{
    $nombreOk = true;
}

if($telefono === ""){
    $errores[] = "No se digito el teléfono de la persona";
}else{
    $telefonoOk = true;
}

if($fecha === ""){
    $errores[] = "No se eligió una fecha";
}else{
    $fechaOk = true;
}

if($hora === ""){
    $errores[] = "No se eligió una hora";
}else{
    $horaOk = true;
}

if($descripcion === ""){
    $errores[] = "No se digitó una descripción";
}else{
    $descripcionOk = true;
}

if($nombreOk && $telefonoOk && $fechaOk && $horaOk && $descripcionOk){
    //ingresar datos de la cita
    require_once 'ingresaCita.php';
    if(ingresarCita($nombre, $telefono, $fecha, $hora, $descripcion)){
        header("Location: estado-cita.php");
    }
}

?>