<?php
    require_once "conexion.php";
    
    $conn = Conecta();
     if(isset($_GET['delete'])){
         $userid= $_GET['delete'];
         // Preparar eliminación
         $sql = "DELETE FROM Cotizacion WHERE idCotizacion = {$userid}"; 
         $delete_query = mysqli_query($conn, $sql);
         header("Location: ../Layout/Cotizacion.php");
     }
?>