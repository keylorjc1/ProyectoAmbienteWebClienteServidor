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
    echo "<script type='text/javascript'>alert('Cita agendada correctamente.')</script>";
}else{
    $nombreOk = true;
}

if($telefono === ""){
    $errores[] = "No se digito el teléfono de la persona";
    echo "<script type='text/javascript'>alert('No se digito el teléfono de la persona.')</script>";
}else{
    $telefonoOk = true;
}

if($fecha === ""){
    $errores[] = "No se eligió una fecha";
    echo "<script type='text/javascript'>alert('No se eligió una fecha.')</script>";
}else{
    $fechaOk = true;
}

if($hora === ""){
    $errores[] = "No se eligió una hora";
    echo "<script type='text/javascript'>alert('No se eligió una hora.')</script>";
}else{
    $horaOk = true;
}

if($descripcion === ""){
    $errores[] = "No se digitó una descripción";
    echo "<script type='text/javascript'>alert('No se digitó una descripción.')</script>";
}else{
    $descripcionOk = true;
}

if($nombreOk && $telefonoOk && $fechaOk && $horaOk && $descripcionOk){
    //ingresar datos de la cita
    require_once 'ingresaCita.php';
    if(ingresarCita($nombre, $telefono, $fecha, $hora, $descripcion)){
        header("Location: ../Layout/Citas.php?msg");
    }
}

?>