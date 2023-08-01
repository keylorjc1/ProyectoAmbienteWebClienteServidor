<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Testimonio.css">
    <link rel="stylesheet" href="../CSS/Citas.css">
    <script src="../Script.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Citas</title>
</head>

<body>

    <!---INICIO Barra Navegacion-->
    <div>
        <div class="fullNav shadow bg-white rounded">
            <div class="custom-btn">
                <span class="fas fa-bars"></span>
            </div>
            <div class="navbar-brand">
                <a href="../index.html">
                    <img src="../Images/WapiCRNoBG.png" alt="WapiCR" width="150" height="110">
                </a>
            </div>
            <a href="Cotizacion.html" class="ButtonInicio">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#eca4c4" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z" />
                </svg>
                <span>Pedir Una Cotizacion</span>
            </a>
            <a href="Citas.php" class="ButtonInicio">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#eca4c4" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                </svg>
                <span>Agendar Una Cita</span>
            </a>
            <a href="Carrito.html" class="shopCart ButtonInicio">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#eca4c4" class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <span>Comprar</span>
            </a>
        </div>

        <nav class="sidebar">
            <div class="text">
                WAPICR
            </div>
            <ul>
                <li class="active"><a href="#">Novedades</a></li>
                <li><a href="#">Testimonios</a></li>
                <li><a href="#">Galeria</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Preguntas</a></li>
            </ul>
        </nav>
        <div id="hero">
        </div>
    </div>
    <!---FIN Barra Navegacion-->

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

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "wapicr";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM cita";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "ID Cita: " . $row["IDCita"] . " - Nombre completo: " . $row["nombre_completo"] . " - Teléfono: " . $row["telefono"] . " - Fecha: " . $row["fecha"] . " - Hora: " . $row["hora"] . " - Descripción: " . $row["descripcion"] ."<br>";
                    }
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>

                <h3>Actualizar o eliminar datos de cita</h3>
                <form name="test" method="post" action="Citas.php">
                    <p>ID Cita (para eliminar, solo llenar este campo):
                        <input type="text" name="id" value="">
                        <br />
                        Nombre completo:
                        <input type="text" name="nombre" value="">
                        <br />
                        Teléfono:
                        <input type="tel" name="telefono" value="">
                        <br />
                        Fecha:
                        <input type="date" name="fecha" value="">
                        <br />
                        Hora:
                        <input type="time" name="hora" value="">
                        <br />
                        Descripción:
                        <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
                        <br />
                        <INPUT TYPE="submit" name="btnBorrar" value="Borrar cita"> <-->
                            <INPUT TYPE="submit" name="btnActualizar" value="Actualizar cita">
                    </p>
                </form>

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "wapicr";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if (isset($_POST['btnActualizar'])) {
                    $Id = $_POST['id'];
                    $Nombre = $_POST['nombre'];
                    $Telefono = $_POST['telefono'];
                    $Fecha = $_POST['fecha'];
                    $Hora = $_POST['hora'];
                    $Descripcion = $_POST['descripcion'];
                    $query = "update cita set nombre_completo ='$Nombre', telefono = '$Telefono', fecha = '$Fecha', hora = '$Hora', descripcion = '$Descripcion' WHERE IDCita='$Id'";
                    $result = mysqli_query($conn, $query);
                    print("Datos modificados.");
                    $conn->close();
                }

                if (isset($_POST['btnBorrar'])) {
                    $Id = $_POST['id'];
                    $query = "delete from cita where IDCita='$Id'";
                    $result = mysqli_query($conn, $query);
                    print("Datos borrados.");
                    $conn->close();
                }
                ?>
            </div>
        </div> <!--.row-->
    </div><!--.container-->

    <script src="/JavaScript/Citas.js" defer></script>
</body>

<footer class="bg-dark text-center text-white">
    <div class="container p-4 pb-0">
        <section class="">
            <form action="">
                <div class="row d-flex justify-content-center">
                    <div class="col-auto">
                        <p class="pt-2">
                            <strong>Registrarse para recibir noticias</strong>
                        </p>
                    </div>

                    <div class="col-md-5 col-12">
                        <div class="form-outline form-white mb-4">
                            <input type="email" id="form5Example2" class="form-control" />
                            <label class="form-label" for="form5Example2">Correo electrónico</label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-outline-light mb-4">
                            Suscribirse
                        </button>
                    </div>
                </div>
            </form>
        </section>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright: WAPI CR
    </div>
</footer>