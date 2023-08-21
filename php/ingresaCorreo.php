<?php

require_once 'conexion.php';

function ingresarCorreo($pCorreo)
{
    $retorno = false;
    try {
        $conexion = Conecta();

        //formato de datos UTF-8
        if (mysqli_set_charset($conexion, "utf8")) {
            $stmt = $conexion->prepare("insert into notificar(correo) values (?)");
            $stmt->bind_param("s", $iCorreo);

            //set parametros y ejecutar
            $iCorreo = $pCorreo;

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