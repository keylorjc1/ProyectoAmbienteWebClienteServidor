<footer class="bg-dark text-center text-white">
    <div class="container p-4 pb-0">
      <section class="">
        <form action="../php/procesar-correo.php" method="post">
          <div class="row d-flex justify-content-center">
            <div class="col-auto">
              <p class="pt-2">
                <strong>Registrarse para recibir noticias</strong>
              </p>
            </div>

            <div class="col-md-5 col-12">
              <div class="form-outline form-white mb-4">
                <input type="email" id="correo" name="correo" class="form-control" />
                <label class="form-label" for="form5Example2"
                  >Correo electrónico</label
                >
              </div>
            </div>

            <div class="col-auto">
              <button type="submit" class="btn btn-outline-light mb-4">
                Suscribirse
              </button>
            </div>
            <div class="msgCorreo">
            <?php
                if(isset($_GET['msgCorreo']))
                {
                    $message = "Correo registrado correctamente.";
                    echo $message;
                }
            ?>
            </div>
          </div>
        </form>
      </section>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright: WAPI CR
    </div>
  </footer>
</html>