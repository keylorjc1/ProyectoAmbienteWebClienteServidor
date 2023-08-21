<?php

require_once 'conexion.php';

function ingresarCarrito($pImg, $pProducto, $pPrecio, $pCantidad)
{
    $retorno = false;
    try {
        $conexion = Conecta();

        //formato de datos UTF-8
        if (mysqli_set_charset($conexion, "utf8")) {
            $stmt = $conexion->prepare("insert into carrito(imgLink, producto, precio, cantidad) values (?, ?, ?, ?)");
            $stmt->bind_param("ssii", $iImg, $iProducto, $iPrecio, $iCantidad);

            //set parametros y ejecutar
            $iImg = $pImg;
            $iProducto = $pProducto;
            $iPrecio = $pPrecio;
            $iCantidad = $pCantidad;

            if ($stmt->execute()) {
                $retorno = true;
            }
        }
    } catch (\Throwable $th) {
        echo $th;
        //bitacoras
    } finally {
        Desconecta($conexion);
    }

    return $retorno;
}