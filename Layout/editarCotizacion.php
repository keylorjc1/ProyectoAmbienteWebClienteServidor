<?php include '../include/header.php'; ?>
<link rel="stylesheet" href="../CSS/Cotizador.css" />

    <?php
    require_once "../php/conexion.php";
    // Cargar ID enviada en URL
    if (isset($_GET['user_id'])) {
        $userid = $_GET['user_id'];
    }
    // Traer datos de tabla Cita
    $sql = "SELECT * FROM cotizacion WHERE idCotizacion = $userid";
    $conn = Conecta();
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['idCotizacion'];
            $producto = $row['nombreProducto'];
            $cantidad = $row['cantidad'];
            $tipoProducto = $row['tipoProducto'];
        }
    }

    //Procesar columna cargada
    if (isset($_POST['update'])) {
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $tipoProducto = $_POST['tipoProducto'];

        // Realizar actualización 
        $sql = "UPDATE Cotizacion SET nombreProducto = '{$producto}' , cantidad = '{$cantidad}' , tipoProducto = '{$tipoProducto}' WHERE idCotizacion = $userid";
        $update_user = mysqli_query($conn, $sql);
        echo "<script type='text/javascript'>alert('Cotización actualizada correctamente.')</script>";
    }
    Desconecta($conn);
    ?>

    <form action="" method="post">
        Producto:
        <select id="producto" name="producto" class="select-box">
            <option value="">- Seleccionar -</option>
            <option value="Esmaltes">Esmaltes</option>
            <option value="Decoraciones">Decoraciones</option>
            <option value="Herramientas">Herramientas</option>
        </select>
        <br />
        Cantidad:
        <select id="cantidad" name="cantidad"> <!--onchange="myFunction(this.value)" -->
            <option value="">- 0 -</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br />
        Tipo de producto:
        <select id="tipoProducto" name="tipoProducto" class="select-box">
            <option value="">- Seleccionar -</option>
            <option value="Completo">Completo</option>
            <option value="Basico">Basico</option>
        </select>
        <br />
        <input type="submit" name="update" class="btn btn-primary mt-2" value="Actualizar">
        </p>
        <a href='Cotizacion.php' class='btn btn-secondary'><i class='bi bi-pencil'></i>Regresar a cotizaciones</a>
    </form>

    <?php include '../include/footer.php'; ?>