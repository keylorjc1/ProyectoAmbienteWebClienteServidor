<?php

require_once 'conexion.php';

function ingresarCita($pNombre, $pTelefono, $pFecha, $pHora, $pDescripcion)
{
    $retorno = false;
    try {
        $conexion = Conecta();

        //formato de datos UTF-8
        if (mysqli_set_charset($conexion, "utf8")) {
            $stmt = $conexion->prepare("insert into cita(nombre_completo, telefono, fecha, hora, descripcion) values (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $iNombre, $iTelefono, $iFecha, $iHora, $iDescripcion);

            //set parametros y ejecutar
            $iNombre = $pNombre;
            $iTelefono = $pTelefono;
            $iFecha = $pFecha;
            $iHora = $pHora;
            $iDescripcion = $pDescripcion;

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