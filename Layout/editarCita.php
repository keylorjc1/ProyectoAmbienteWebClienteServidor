<?php include '../include/header.php'; ?>
<link rel="stylesheet" href="../CSS/Citas.css" />

    <?php
    require_once "../php/conexion.php";
    // Cargar ID enviada en URL
    if (isset($_GET['user_id'])) {
        $userid = $_GET['user_id'];
    }
    // Traer datos de tabla Cita
    $sql = "SELECT * FROM cita WHERE IDCita = $userid";
    $conn = Conecta();
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = $result->fetch_assoc()){
            $id = $row['IDCita'];
            $nombre = $row['nombre_completo'];
            $telefono = $row['telefono'];
            $fecha = $row['fecha'];
            $hora = $row['hora'];
            $descripcion = $row['descripcion'];
        }
    }

    //Procesar columna cargada
    if (isset($_POST['update'])) {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $descripcion = $_POST['descripcion'];

        // Realizar actualización 
        $sql = "UPDATE Cita SET nombre_completo = '{$nombre}' , telefono = '{$telefono}' , fecha = '{$fecha}' , hora = '{$hora}' , descripcion = '{$descripcion}' WHERE IDCita = $userid";
        $update_user = mysqli_query($conn, $sql);
        echo "<script type='text/javascript'>alert('Cita actualizada correctamente.')</script>";
    }
    Desconecta($conn);
    ?>

    <form action="" method="post">
        <!-- <p>ID Cita (para eliminar, solo llenar este campo):
            <input type="text" name="id" value="">
            <br /> -->
            Nombre completo:
            <input type="text" name="nombre" value="<?php echo $nombre ?>">
            <br />
            Teléfono:
            <input type="tel" name="telefono" value="<?php echo $telefono ?>">
            <br />
            Fecha:
            <input type="date" name="fecha" value="<?php echo $fecha ?>">
            <br />
            Hora:
            <input type="time" name="hora" value="<?php echo $hora ?>">
            <br />
            Descripción:
            <input type="text" name="descripcion" value="<?php echo $descripcion ?>">
            <br />
            <input type="submit" name="update" class="btn btn-primary mt-2" value="Actualizar">
        </p>
        <a href='Citas.php' class='btn btn-secondary'><i class='bi bi-pencil'></i>Regresar a citas</a>
    </form>

    <?php include '../include/footer.php'; ?>