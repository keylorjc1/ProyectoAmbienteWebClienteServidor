<?php

require_once 'recogeRequests.php';

$producto = recogePost("producto");
$cantidad = recogePost("cantidad");
$tipoProducto = recogePost("tipoProducto");

$productoOk = false;
$cantidadOk = false;
$tipoProductoOk = false;

$errores = [];

if($producto === ""){
    $errores[] = "No se seleccionó el nombre del producto";
    echo "<script type='text/javascript'>alert('No se seleccionó el nombre del producto.')</script>";
}else{
    $productoOk = true;
}

if($cantidad === ""){
    $errores[] = "No se seleccionó la cantidad";
    echo "<script type='text/javascript'>alert('No se seleccionó la cantidad.')</script>";
}else{
    $cantidadOk = true;
}

if($tipoProducto === ""){
    $errores[] = "No se eligió un tipo de producto";
    echo "<script type='text/javascript'>alert('No se eligió un tipo de producto.')</script>";
}else{
    $tipoProductoOk = true;
}

if($productoOk && $cantidadOk && $tipoProductoOk){
    //ingresar datos de la cotizacion
    require_once 'ingresaCotizacion.php';
    if(ingresarCotizacion($producto, $cantidad, $tipoProducto)){
        header("Location: ../Layout/Cotizacion.php?msg");
    }
}

?>