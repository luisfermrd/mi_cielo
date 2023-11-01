<?php
ob_start();
session_start();

if (!isset($_SESSION["id_user"]) || $_SESSION["role"] != 1) {
    header("Location: ../index.html");
} else {
    $pagine_active = basename($_SERVER['PHP_SELF'], '.php');
    include_once('templates/header.php');
?>

    <link rel="stylesheet" href="../public/css/diario.css">

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
            <div class="d-flex justify-content-end p-2">
                <button type="button" class="btn btn-primary" id="new_entry" style="position: relative; padding-left: 35px; background: #5000ca;">
                    <i class='bx bxs-book-add icon'></i> Agregar una nueva entrada
                </button>
            </div>

            <div class="container" id="container">
                <div class="book-content" id="container_book">
                    <div class="book" id="book_portada">
                        <div class="face-front" id="portada"></div>
                        <div class="face-back" id="trsf"></div>
                    </div>



                    <div class="book">
                        <div class="face-front"></div>
                        <div class="face-back" id="portada-back">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="modal_container" class="modal-container">
            <div class="modal">
                <div class="img_logo">
                    <img src="../public/img/icon.png" alt="mi cielo">
                </div>
                <div class="modal-header mt-3">
                    <h5 class="modal-title">Nueva entrada a tu diario!</h5>
                </div>
                <div class="modal-body" style="text-align: start;">
                    <form method="post" id="formulario">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Titulo:</label>
                            <input type="text" class="form-control" id="recipient-name" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Contenido:</label>
                            <textarea class="form-control" id="message-text" name="content" onkeyup="countChars(this)"></textarea>
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
                            Guardar entrada
                        </button>
                    </div>
                </div>

            </div>
        </section>

    </main>



    <?php include_once('templates/footer.php'); ?>
    <script src="../public/js/menu.js"></script>
    <script src="../public/js/loader.js"></script>
    <script src="../public/js/diario.js"></script>
    <script src="../public/js/sos.js"></script>
    <script src="../public/js/chat.js"></script>

    </body>

    </html>

<?php
}
ob_end_flush();
?>