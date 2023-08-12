<?php

require_once 'conexion.php';

function ingresarCotizacion($pProducto, $pCantidad, $pTipoProducto)
{
    $retorno = false;
    try {
        $conexion = Conecta();

        //formato de datos UTF-8
        if (mysqli_set_charset($conexion, "utf8")) {
            $stmt = $conexion->prepare("insert into cotizacion(nombreProducto, cantidad, tipoProducto) values (?, ?, ?)");
            $stmt->bind_param("sis", $iProducto, $iCantidad, $iTipoProducto);

            //set parametros y ejecutar
            $iProducto = $pProducto;
            $iCantidad = $pCantidad;
            $iTipoProducto = $pTipoProducto;

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