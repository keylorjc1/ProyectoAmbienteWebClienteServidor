<?php include '../include/header.php'; ?>
<link rel="stylesheet" href="../CSS/Cotizador.css" />

    <div class="container mt-5 p-5">
        <div id="contenido" class="row">
            <div class="col-md-6 agregar-cita">
                <form id="nueva-cotizacion" action="../php/procesar-cotizacion.php" method="post">
                    <legend class="mb-4 ingresarDatos">Cotiza tus productos</legend>
                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4 col-form-label formDatos">Producto:</label>
                        <div class="col-sm-8 col-lg-8">
                            <select id="producto" name="producto" class="select-box">
                                <option value="">- Seleccionar -</option>
                                <option value="Esmaltes">Esmaltes</option>
                                <option value="Decoraciones">Decoraciones</option>
                                <option value="Herramientas">Herramientas</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4 col-form-label formDatos" for="cantidad">Cantidad:</label>
                        <div class="col-sm-8 col-lg-8">
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
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4 col-form-label formDatos">Tipo de producto:</label>
                        <div class="col-sm-8 col-lg-8">
                            <select id="tipoProducto" name="tipoProducto" class="select-box">
                                <option value="">- Seleccionar -</option>
                                <option value="Completo">Completo</option>
                                <option value="Basico">Basico</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success w-100 d-block">Solicitar cotización</button>
                    </div>
                </form>
            </div>
            
            <div class="col-md-6">
                <h2 id="administra" class="mb-4">Cotizaciones solicitadas</h2>
                <ul id="cotizaciones" class="list-group lista-cotizaciones"></ul>

                <table>
                    <thead>
                        <tr>
                            <th scope="">Nombre del producto</th>
                            <th scope="">Cantidad</th>
                            <th scope="">Tipo de producto</th>
                            <th scope="">Fecha de solicitud</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        require_once "../php/conexion.php";

                        $sql = "SELECT * FROM cotizacion";
                        //$result = $conexion->query($sql);
                        $conn = Conecta();
                        $result = mysqli_query($conn,$sql);

                        //if ($result->num_rows > 0) {
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['idCotizacion'];                
                                $producto = $row['nombreProducto'];        
                                $cantidad = $row['cantidad'];         
                                $tipoProducto = $row['tipoProducto'];
                                $fecha = $row['fechaIngreso'];

                                echo "<tr>";
                                    echo "<td> {$producto} </th>";
                                    echo "<td> {$cantidad} </th>";
                                    echo "<td> {$tipoProducto} </th>";
                                    echo "<td> {$fecha} </th>";
                                    //Botón para editar
                                    echo " <td class='text-center' > <a href='editarCotizacion.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i>Editar</a> </td>";
                                    //Botón para eliminar
                                    echo " <td  class='text-center'>  <a href='../php/eliminarCotizacion.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i>Eliminar</a> </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "0 results";
                        }

                        Desconecta($conn);
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <?php
    if (isset($_GET['msg'])) {
        $message = "Solicitud de cotización registrada correctamente.";
        echo $message;
    }
    ?>

    <script src="../Script.js" defer></script>
    <script src="../JavaScript/Cotizacion.js" defer></script>
</body>

<?php include '../include/footer.php'; ?>