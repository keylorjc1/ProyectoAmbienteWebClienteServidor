<?php include '../include/header.php'; ?>
<link rel="stylesheet" href="../CSS/Citas.css" />

    <h2 class="text-center my-5 titulo">Administrador de Citas</h2>
    <div class="container mt-5 p-5">
        <div id="contenido" class="row">
            <div class="col-md-6 agregar-cita">
                <form id="nueva-cita" action="../php/procesar-cita.php" method="post">
                    <legend class="mb-4 ingresarDatos">Ingresa tus Datos</legend>
                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4 col-form-label formDatos">Nombre Completo:</label>
                        <div class="col-sm-8 col-lg-8">
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4 col-form-label formDatos">Teléfono:</label>
                        <div class="col-sm-8 col-lg-8">
                            <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Número de Teléfono">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4 col-form-label formDatos">Fecha:</label>
                        <div class="col-sm-8 col-lg-8">
                            <input type="date" id="fecha" name="fecha" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4 col-form-label formDatos">Hora:</label>
                        <div class="col-sm-8 col-lg-8">
                            <input type="time" id="hora" name="hora" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4 col-form-label formDatos">Descripcion:</label>
                        <div class="col-sm-8 col-lg-8">
                            <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success w-100 d-block">Crear Cita</button>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <h2 id="administra" class="mb-4">Administra tus Citas</h2>
                <ul id="citas" class="list-group lista-citas"></ul>

                <table>
                    <thead>
                        <tr>
                            <th scope="">ID Cita</th>
                            <th scope="">Nombre completo</th>
                            <th scope="">Teléfono</th>
                            <th scope="">Fecha</th>
                            <th scope="">Hora</th>
                            <th scope="">Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        require_once "../php/conexion.php";

                        $sql = "SELECT * FROM cita";
                        //$result = $conexion->query($sql);
                        $conn = Conecta();
                        $result = mysqli_query($conn,$sql);

                        //if ($result->num_rows > 0) {
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['IDCita'];                
                                $nombre = $row['nombre_completo'];        
                                $telefono = $row['telefono'];         
                                $fecha = $row['fecha'];
                                $hora = $row['hora'];
                                $descripcion = $row['descripcion'];

                                echo "<tr>";
                                    echo "<td> {$id} </th>";
                                    echo "<td> {$nombre} </th>";
                                    echo "<td> {$telefono} </th>";
                                    echo "<td> {$fecha} </th>";
                                    echo "<td> {$hora} </th>";
                                    echo "<td> {$descripcion} </th>";
                                    //Botón para editar
                                    echo " <td class='text-center' > <a href='editarCita.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i>Actualizar</a> </td>";
                                    //Botón para eliminar
                                    echo " <td  class='text-center'>  <a href='../php/eliminarCita.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i>Eliminar</a> </td>";
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
        </div> <!--.row-->
    </div><!--.container-->

    <?php
        if(isset($_GET['msg']))
        {
            $message = "Cita agendada correctamente.";
            echo $message;
        }
    ?>

    <script src="/JavaScript/Citas.js" defer></script>
</body>

<?php include '../include/footer.php'; ?>