<!DOCTYPE html>
<html lang="en" xmlns:th="https://www.thymeleaf.org">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="/CSS/Citas.css">
    <script src="/script.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
                        <img src="/Images/WapiCRNoBG.png" alt="WapiCR" width="150" height="110">
                    </a>
                </div>
                <a href="/Layout/Cotizacion.html" class="ButtonInicio">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#eca4c4"
                        class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                        <path
                            d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z" />
                    </svg>
                    <span>Pedir Una Cotizacion</span>
                </a>
                <a href="/Layout/Citas.html" class="ButtonInicio">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#eca4c4" class="bi bi-pencil-fill"
                        viewBox="0 0 16 16">
                        <path
                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                    </svg>
                    <span>Agendar Una Cita</span>
                </a>
                <a href="Carrito.html" class="shopCart ButtonInicio">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#eca4c4" class="bi bi-cart-fill"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
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

        <main>
            <h1>Registro ingresado satisfactoriamente</h1>
        </main>
  
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright: WAPI CR
    </div>
  </footer>

</html>