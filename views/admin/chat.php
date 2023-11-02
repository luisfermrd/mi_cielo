<?php
ob_start();
session_start();

if (!isset($_SESSION["id_user"]) || $_SESSION["role"] != 0) {
    header("Location: ../../index.html");
} else {
    $pagine_active = basename($_SERVER['PHP_SELF'], '.php');
    include_once('../templates/header2.php');
?>
    <link rel="stylesheet" href="../../public/css/chat.css">
    <!-- Link ICON-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <?php
    $ruta = "";
    include_once('../templates/nav.php');
    ?>
    <main>
        <?php
        include_once('../templates/loader.php');
        ?>
        <!--Container Main start-->
        <div class="bg-light">
            <section class="chat-container">
                <aside class="chat-list-user">
                    <h3 id="chat_vacio">Chat vacio</h3>
                </aside>
                <article class="chat-section">
                    <div id="chat">
                        <div class="chat-head">
                            <img src="../../public/img/icon.png" alt="icono">
                            <div class="chat-head-name">
                                <h3 id="chat_name">Luis Miranda</h3>
                                <i class='bx bx-x' id="closeChat"></i>
                            </div>
                        </div>
                        <div class="chat-body" id="chat-messages">

                        </div>
                        <div class="chat-footer">
                            <input type="text" id="message-input" placeholder="Escribe un mensaje" />
                            <button id="send-button">Enviar</button>
                        </div>
                    </div>
                    <div id="chat_vacio_section">
                        <h3>Seleccione un chat para empezar</h3>
                        <img src="../../public/img/icon.png" alt="icono">
                    </div>
                </article>
            </section>
        </div>
    </main>

    <?php include_once('../templates/footer.php'); ?>
    <script src="../../public/js/menu.js"></script>
    <script src="../../public/js/loader.js"></script>
    <script src="../../public/js/admin/chat.js"></script>


    </body>

    </html>

<?php
}
ob_end_flush();
?>