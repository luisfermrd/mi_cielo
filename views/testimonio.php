<?php
ob_start();
session_start();

if (!isset($_SESSION["id_user"]) || $_SESSION["role"] != 1) {
    header("Location: ../index.html");
} else {
    $pagine_active = basename($_SERVER['PHP_SELF'], '.php');
    include_once('templates/header.php');
?>
    <link rel="stylesheet" href="../public/css/slide-testimonios.css">
    <!-- Link ICON-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <?php
    $ruta = "";
    include_once('templates/nav.php');
    ?>
    <main>
        <?php
        include_once('templates/loader.php');
        include_once('templates/buttons.php');
        ?>
        <!--Container Main start-->
        <div class="height-100 bg-light">
            <h1>Testimonio</h1>
            <div class="d-flex justify-content-end p-2">
                <button type="button" class="btn btn-primary" id="new_entry" style="position: relative; padding-left: 35px; background: #5000ca;">
                    <i class='bx bxs-book-add icon'></i> Agregar un nuevo testimonio
                </button>
            </div>
            <section class="testimonios">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper" id="testimonios-container">


                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
        </div>
        <section id="modal_container" class="modal-container">
            <div class="modal">
                <div class="img_logo">
                    <img src="../public/img/icon.png" alt="mi cielo">
                </div>
                <div class="modal-header mt-3">
                    <h5 class="modal-title">Crea un nuevo testimonio</h5>
                </div>
                <div class="modal-body" style="text-align: start;">
                    <form method="post" id="formulario">
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Contenido:</label>
                            <textarea class="form-control" rows="6" id="message-text" name="content" onkeyup="countChars(this)"></textarea>
                            <p><span id="num_caracter">0</span>/600</p>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <div class="botones">
                        <button id="closeTerminos" class="btn btn-primary" style="position: relative; padding-left: 35px;">
                            <i class='bx bx-x icon'></i>
                            Cerrar
                        </button>
                        <button id="noQuieroVerMasEsto" class="btn btn-primary" style="position: relative; padding-left: 35px;">
                            <i class='bx bxs-save icon'></i>
                            Guardar testimonio
                        </button>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <?php include_once('templates/footer.php'); ?>
    <script src="../public/js/menu.js"></script>
    <script src="../public/js/loader.js"></script>
    <script src="../public/js/testimonios.js"></script>
    <script src="../public/js/sos.js"></script>
    <script src="../public/js/chat.js"></script>


    </body>

    </html>

<?php
}
ob_end_flush();
?>