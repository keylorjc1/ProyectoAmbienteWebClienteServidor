<?php

require_once 'recogeRequests.php';

$img = recogePost("img");
$producto = recogePost("producto");
$precio = recogePost("precio");
$cantidad = recogePost("cantidad");

$imgOk = false;
$productoOk = false;
$precioOk = false;
$cantidadOk = false;

$errores = [];

if($img === ""){
    $errores[] = "Error en link de imagen.";
}else{
    $imgOk = true;
}

if($producto === ""){
    $errores[] = "Error en info de producto.";
}else{
    $productoOk = true;
}

if($precio === ""){
    $errores[] = "Error en info de precio.";
}else{
    $precioOk = true;
}

if($cantidad === ""){
    $errores[] = "No se seleccionó la cantidad.";
    echo "<script type='text/javascript'>alert('No se seleccionó la cantidad.')</script>";
}else{
    $cantidadOk = true;
}

if($imgOk && $productoOk && $precioOk && $cantidadOk){
    //ingresar productos al carrito
    require_once 'ingresaCarrito.php';
    if(ingresarCarrito($img, $producto, $precio, $cantidad)){
        header("Location: ../Layout/Carrito.php?msg");
    }
}

?>