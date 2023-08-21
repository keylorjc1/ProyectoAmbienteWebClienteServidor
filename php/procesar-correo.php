<?php

require_once 'recogeRequests.php';

$correo = recogePost("correo");

$correoOk = false;

$errores = [];

if($correo === ""){
    $errores[] = "No se digitó ningún correo";
    echo "<script type='text/javascript'>alert('No se digitó ningún correo.')</script>";
}else{
    $correoOk = true;
}

if($correoOk){
    //ingresar correo
    require_once 'ingresaCorreo.php';
    if(ingresarCorreo($correo)){
        header("Location: ../Layout/Cotizacion.php?msgCorreo");
    }
}

?>