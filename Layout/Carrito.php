<!DOCTYPE html>
<html lang="en" xmlns:th="https://www.thymeleaf.org">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../CSS/Carrito.css" />
  <link rel="stylesheet" href="../CSS/normalize.css" />
  <script src="../Script.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <title>Carrito</title>
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
          <img src="../Images/WapiCRNoBG.png" alt="WapiCR" width="150" height="110" />
        </a>
      </div>
      <a href="Cotizacion.php" class="ButtonInicio">
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
      <a href="Carrito.php" class="shopCart ButtonInicio">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#eca4c4" class="bi bi-cart-fill" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
        <span>Comprar</span>
      </a>
    </div>

    <div id="hero"></div>
  </div>
  <!---FIN Barra Navegacion-->

  <header id="header" class="header">

  <?php
if (isset($_GET['msg'])) {
    $message = "Artículo agregado correctamente al carrito.";
    echo '<div id="message" class="message">' . $message . '</div>';
}
?>
<script>
const messageElement = document.getElementById('message');

messageElement.style.color = '#ec86b1'; 
messageElement.style.fontSize = '20px'; 


setTimeout(() => {
    messageElement.style.display = 'none'; 
}, 5000); 
</script>

const messageElement = document.getElementById('message');

messageElement.style.color = '#ec86b1'; 
messageElement.style.fontSize = '20px';

setTimeout(() => {
    messageElement.style.display = 'none'; 
}, 5000); 
</script>


    <!-- Tabla de Carrito -->
    <div class="container">
      <div>
        <div>
          <ul>
            <li class="submenu">
              <div id="carrito">
                <table id="lista-carrito" class="table">
                  <thead>
                    <tr>
                      <th class="px-4 text-center">Imagen</th>
                      <th class="px-4 pl-5">Producto</th>
                      <th class="px-4 pl-50">Precio</th>
                      <th class="px-4 pl-10">Cantidad</th>
                      <th class="px-4 pl-10">Total</th>
                      <th class="px-4 pl-10">Remover</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                      require_once "../php/conexion.php";

                      $sql = "SELECT * FROM carrito";
                      //$result = $conexion->query($sql);
                      $conn = Conecta();
                      $result = mysqli_query($conn,$sql);

                      //if ($result->num_rows > 0) {
                      if (mysqli_num_rows($result) > 0) {
                          while ($row = $result->fetch_assoc()) {
                              $id = $row['idItem'];                
                              $img = $row['imgLink'];        
                              $producto = $row['producto'];         
                              $precio = $row['precio'];
                              $cantidad = $row['cantidad'];
                              $total = $row['total'];

                              echo "<tr>";
                                  echo "<td>" ?> <img class="" src="<?php echo "{$img}" ?>" <?php "/> </th>";
                                  echo "<td> {$producto} </th>";
                                  echo "<td> $ {$precio} </th>";
                                  echo "<td> {$cantidad} </th>";
                                  echo "<td> $ {$total} </th>";
                                  //Botón para eliminar
                                  echo " <td  class='text-center'>  <a href='../php/eliminarCarrito.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i>Eliminar</a> </td>";
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
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <div id="lista-cursos" class="container">
    <h1 id="encabezado" class="titulo">Agrega tus productos</h1>
    <div class="row">
      <div class="four columns">
        <div class="card">
          <form action="../php/procesar-carrito.php" method="post">
            <img src="../Images/Nails1.jpg" class="imagen-curso u-full-width" />
            <input type="hidden" id="img" name="img" value="../Images/Nails1.jpg">
            <div class="info-card" style="text-align: center">
              <h4 class="textProductos">Esmalte de uñas black yellow</h4>
              <input type="hidden" id="producto" name="producto" value="Esmalte de uñas black yellow">
              <p class="precio">$20</p>
              <input type="hidden" id="precio" name="precio" value="20">
              <select id="cantidad" name="cantidad"> 
                                <option value="">- Cantidad -</option>
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
                            </select><br>
              <!-- <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a> -->
              <br><button type="submit" class="u-full-width button-primary button input agregar-carrito">Agregar Al Carrito</button>
            </div>
          </form>
        </div>
      </div>
      <div class="four columns">
        <div class="card">
          <form action="../php/procesar-carrito.php" method="post">
            <img src="../Images/Nails2.jpg" class="imagen-curso u-full-width" />
            <input type="hidden" id="img" name="img" value="../Images/Nails2.jpg">
            <div class="info-card" style="text-align: center">
              <h4 class="textProductos">Esmalte de uñas confite</h4>
              <input type="hidden" id="producto" name="producto" value="Esmalte de uñas confite">
              <p class="precio">$20</p>
              <input type="hidden" id="precio" name="precio" value="20">
              <select id="cantidad" name="cantidad"> 
                                <option value="">- Cantidad -</option>
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
                            </select><br>
              <!-- <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a> -->
              <br><button type="submit" class="u-full-width button-primary button input agregar-carrito">Agregar Al Carrito</button>
            </div>
          </form>
        </div>
      </div>
      <div class="four columns">
        <div class="card">
          <form action="../php/procesar-carrito.php" method="post">
            <img src="../Images/Nails3.jpg" class="imagen-curso u-full-width" />
            <input type="hidden" id="img" name="img" value="../Images/Nails3.jpg">
            <div class="info-card" style="text-align: center">
              <h4 class="textProductos">Esmalte de uñas normal</h4>
              <input type="hidden" id="producto" name="producto" value="Esmalte de uñas normal">
              <p class="precio">$20</p>
              <input type="hidden" id="precio" name="precio" value="20">
              <select id="cantidad" name="cantidad"> 
                                <option value="">- Cantidad -</option>
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
                            </select><br>
              <!-- <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a> -->
              <br><button type="submit" class="u-full-width button-primary button input agregar-carrito">Agregar Al Carrito</button>
            </div>
          </form>
        </div>
      </div>
      <!--Cierra card-->
    </div>

    <!--Cierra row-->

    <div class="row">
      <div class="four columns">
        <div class="card">
          <form action="../php/procesar-carrito.php" method="post">
            <img src="../Images/Producto1.jpg" class="imagen-curso u-full-width" />
            <input type="hidden" id="img" name="img" value="../Images/Producto1.jpg">
            <div class="info-card" style="text-align: center">
              <h4 class="textProductos">Rimel para cejas</h4>
              <input type="hidden" id="producto" name="producto" value="Rimel para cejas">
              <p class="precio">$12</p>
              <input type="hidden" id="precio" name="precio" value="12">
              <select id="cantidad" name="cantidad"> 
                                <option value="">- Cantidad -</option>
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
                            </select><br>
              <!-- <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a> -->
              <br><button type="submit" class="u-full-width button-primary button input agregar-carrito">Agregar Al Carrito</button>
            </div>
          </form>
        </div>
      </div>
      <!--Cierra card-->
      <div class="four columns">
        <div class="card">
          <form action="../php/procesar-carrito.php" method="post">
            <img src="../Images/Producto10.jpg" class="imagen-curso u-full-width" />
            <input type="hidden" id="img" name="img" value="../Images/Producto10.jpg">
            <div class="info-card" style="text-align: center">
              <h4 class="textProductos">Finish Gel - Drill Gel</h4>
              <input type="hidden" id="producto" name="producto" value="Finish Gel - Drill Gel">
              <p class="precio">$10</p>
              <input type="hidden" id="precio" name="precio" value="10">
              <select id="cantidad" name="cantidad"> 
                                <option value="">- Cantidad -</option>
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
                            </select><br>
              <!-- <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a> -->
              <br><button type="submit" class="u-full-width button-primary button input agregar-carrito">Agregar Al Carrito</button>
            </div>
          </form>
        </div>
      </div>
      <!--Cierra card-->
      <div class="four columns">
        <div class="card">
          <form action="../php/procesar-carrito.php" method="post">
            <img src="../Images/Producto11.jpg" class="imagen-curso u-full-width" />
            <input type="hidden" id="img" name="img" value="../Images/Producto11.jpg">
            <div class="info-card" style="text-align: center">
              <h4 class="textProductos">Fashions Decorations</h4>
              <input type="hidden" id="producto" name="producto" value="Fashions Decorations">
              <p class="precio">$13</p>
              <input type="hidden" id="precio" name="precio" value="13">
              <select id="cantidad" name="cantidad"> 
                                <option value="">- Cantidad -</option>
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
                            </select><br>
              <!-- <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a> -->
              <br><button type="submit" class="u-full-width button-primary button input agregar-carrito">Agregar Al Carrito</button>
            </div>
          </form>
        </div>
      </div>
      <!--Cierra card-->
    </div>

    <!--Cierra row-->

    <div class="row">
      <div class="four columns">
        <div class="card">
          <form action="../php/procesar-carrito.php" method="post">
            <img src="../Images/Producto12.jpg" class="imagen-curso u-full-width" />
            <input type="hidden" id="img" name="img" value="../Images/Producto12.jpg">
            <div class="info-card" style="text-align: center">
              <h4 class="textProductos">Uñas decoración</h4>
              <input type="hidden" id="producto" name="producto" value="Uñas decoración">
              <p class="precio">$15</p>
              <input type="hidden" id="precio" name="precio" value="15">
              <select id="cantidad" name="cantidad"> 
                                <option value="">- Cantidad -</option>
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
                            </select><br>
              <!-- <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a> -->
              <br><button type="submit" class="u-full-width button-primary button input agregar-carrito">Agregar Al Carrito</button>
            </div>
          </form>
        </div>
      </div>
      <!--Cierra card-->
      <div class="four columns">
        <div class="card">
          <form action="../php/procesar-carrito.php" method="post">
            <img src="../Images/Producto13.jpg" class="imagen-curso u-full-width" />
            <input type="hidden" id="img" name="img" value="../Images/Producto13.jpg">
            <div class="info-card" style="text-align: center">
              <h4 class="textProductos">Uñas decoración</h4>
              <input type="hidden" id="producto" name="producto" value="Uñas decoración">
              <p class="precio">$16</p>
              <input type="hidden" id="precio" name="precio" value="16">
              <select id="cantidad" name="cantidad"> 
                                <option value="">- Cantidad -</option>
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
                            </select><br>
              <!-- <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a> -->
              <br><button type="submit" class="u-full-width button-primary button input agregar-carrito">Agregar Al Carrito</button>
            </div>
          </form>
        </div>
      </div>
      <!--Cierra card-->
      <div class="four columns">
        <div class="card">
          <form action="../php/procesar-carrito.php" method="post">
            <img src="../Images/Producto16.jpg" class="imagen-curso u-full-width" />
            <input type="hidden" id="img" name="img" value="../Images/Producto16.jpg">
            <div class="info-card" style="text-align: center">
              <h4 class="textProductos">Crystal Clear</h4>
              <input type="hidden" id="producto" name="producto" value="Crystal Clear">
              <p class="precio">$14</p>
              <input type="hidden" id="precio" name="precio" value="14">
              <select id="cantidad" name="cantidad"> 
                                <option value="">- Cantidad -</option>
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
                            </select><br>
              <!-- <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a> -->
              <br><button type="submit" class="u-full-width button-primary button input agregar-carrito">Agregar Al Carrito</button>
            </div>
          </form>
        </div>
      </div>
      <!--Cierra card-->
    </div>

    <!--Cierra row-->

    <div class="row">
      <div class="four columns">
        <div class="card">
          <form action="../php/procesar-carrito.php" method="post">
            <img src="../Images/Producto17.jpg" class="imagen-curso u-full-width" />
            <input type="hidden" id="img" name="img" value="../Images/Producto17.jpg">
            <div class="info-card" style="text-align: center">
              <h4 class="textProductos">Aceite de Cuticula</h4>
              <input type="hidden" id="producto" name="producto" value="Aceite de Cuticula">
              <p class="precio">$16</p>
              <input type="hidden" id="precio" name="precio" value="16">
              <select id="cantidad" name="cantidad"> 
                                <option value="">- Cantidad -</option>
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
                            </select><br>
              <!-- <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a> -->
              <br><button type="submit" class="u-full-width button-primary button input agregar-carrito">Agregar Al Carrito</button>
            </div>
          </form>
        </div>
      </div>
      <!--Cierra card-->
      <div class="four columns">
        <div class="card">
          <form action="../php/procesar-carrito.php" method="post">
            <img src="../Images/Producto18.jpg" class="imagen-curso u-full-width" />
            <input type="hidden" id="img" name="img" value="../Images/Producto18.jpg">
            <div class="info-card" style="text-align: center">
              <h4 class="textProductos">Rimels negros</h4>
              <input type="hidden" id="producto" name="producto" value="Rimels negros">
              <p class="precio">$17</p>
              <input type="hidden" id="precio" name="precio" value="17">
              <select id="cantidad" name="cantidad"> 
                                <option value="">- Cantidad -</option>
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
                            </select><br>
              <!-- <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a> -->
              <br><button type="submit" class="u-full-width button-primary button input agregar-carrito">Agregar Al Carrito</button>
            </div>
          </form>
        </div>
      </div>
      <!--Cierra card-->
      <div class="four columns">
        <div class="card">
          <form action="../php/procesar-carrito.php" method="post">
            <img src="../Images/Producto19.jpg" class="imagen-curso u-full-width" />
            <input type="hidden" id="img" name="img" value="../Images/Producto19.jpg">
            <div class="info-card" style="text-align: center">
              <h4 class="textProductos">Esmalte negro</h4>
              <input type="hidden" id="producto" name="producto" value="Esmalte negro">
              <p class="precio">$12</p>
              <input type="hidden" id="precio" name="precio" value="12">
              <select id="cantidad" name="cantidad"> 
                                <option value="">- Cantidad -</option>
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
                            </select><br>
              <!-- <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a> -->
              <br><button type="submit" class="u-full-width button-primary button input agregar-carrito">Agregar Al Carrito</button>
            </div>
          </form>
        </div>
      </div>
      <!--Cierra card-->
    </div>

    <!--Cierra row-->

  </div>

  <script src="/JavaScript/Carrito.js" defer></script>
</body>

<?php include '../include/footer.php'; ?>