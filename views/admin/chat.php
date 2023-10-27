<?php
ob_start();
session_start();

if (!isset($_SESSION["id_user"]) || $_SESSION["role"] != 0) {
    header("Location: ../index.html");
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
                    <div class="chat-info">
                        <img src="../../public/img/icon.png" alt="icono">
                        <div class="chat-info-details">
                            <div class="chat-info-left">
                                <h3>Luis Miranda</h3>
                                <p>Hola</p>
                            </div>
                            <div class="chat-info-ringth">
                                <span>10</span>
                                <span>10:30 pm</span>
                            </div>
                        </div>

                    </div>
                    <div class="chat-info">
                        <img src="../../public/img/icon.png" alt="icono">
                        <div class="chat-info-details">
                            <div class="chat-info-left">
                                <h3>Luis Miranda</h3>
                                <p>Hola</p>
                            </div>
                            <div class="chat-info-ringth">
                                <span>1</span>
                                <span>10:30 pm</span>
                            </div>
                        </div>

                    </div>
                    <div class="chat-info">
                        <img src="../../public/img/icon.png" alt="icono">
                        <div class="chat-info-details">
                            <div class="chat-info-left">
                                <h3>Luis Miranda</h3>
                                <p>Hola</p>
                            </div>
                            <div class="chat-info-ringth">
                                <span>1</span>
                                <span>10:30 pm</span>
                            </div>
                        </div>

                    </div>
                    <div class="chat-info">
                        <img src="../../public/img/icon.png" alt="icono">
                        <div class="chat-info-details">
                            <div class="chat-info-left">
                                <h3>Luis Miranda</h3>
                                <p>Hola</p>
                            </div>
                            <div class="chat-info-ringth">
                                <span>1</span>
                                <span>10:30 pm</span>
                            </div>
                        </div>

                    </div>
                    <div class="chat-info">
                        <img src="../../public/img/icon.png" alt="icono">
                        <div class="chat-info-details">
                            <div class="chat-info-left">
                                <h3>Luis Miranda</h3>
                                <p>Hola</p>
                            </div>
                            <div class="chat-info-ringth">
                                <span>1</span>
                                <span>10:30 pm</span>
                            </div>
                        </div>

                    </div>
                    <div class="chat-info">
                        <img src="../../public/img/icon.png" alt="icono">
                        <div class="chat-info-details">
                            <div class="chat-info-left">
                                <h3>Luis Miranda</h3>
                                <p>Hola</p>
                            </div>
                            <div class="chat-info-ringth">
                                <span>1</span>
                                <span>10:30 pm</span>
                            </div>
                        </div>

                    </div>
                    <div class="chat-info">
                        <img src="../../public/img/icon.png" alt="icono">
                        <div class="chat-info-details">
                            <div class="chat-info-left">
                                <h3>Luis Miranda</h3>
                                <p>Hola</p>
                            </div>
                            <div class="chat-info-ringth">
                                <span>1</span>
                                <span>10:30 pm</span>
                            </div>
                        </div>

                    </div>
                    <div class="chat-info">
                        <img src="../../public/img/icon.png" alt="icono">
                        <div class="chat-info-details">
                            <div class="chat-info-left">
                                <h3>Luis Miranda</h3>
                                <p>Hola</p>
                            </div>
                            <div class="chat-info-ringth">
                                <span>1</span>
                                <span>10:30 pm</span>
                            </div>
                        </div>

                    </div>
                    <div class="chat-info">
                        <img src="../../public/img/icon.png" alt="icono">
                        <div class="chat-info-details">
                            <div class="chat-info-left">
                                <h3>Luis Miranda</h3>
                                <p>Hola</p>
                            </div>
                            <div class="chat-info-ringth">
                                <span>1</span>
                                <span>10:30 pm</span>
                            </div>
                        </div>

                    </div>
                    <div class="chat-info">
                        <img src="../../public/img/icon.png" alt="icono">
                        <div class="chat-info-details">
                            <div class="chat-info-left">
                                <h3>Luis Miranda</h3>
                                <p>Hola</p>
                            </div>
                            <div class="chat-info-ringth">
                                <span>1</span>
                                <span>10:30 pm</span>
                            </div>
                        </div>

                    </div>
                    <div class="chat-info">
                        <img src="../../public/img/icon.png" alt="icono">
                        <div class="chat-info-details">
                            <div class="chat-info-left">
                                <h3>Luis Miranda</h3>
                                <p>Hola</p>
                            </div>
                            <div class="chat-info-ringth">
                                <span>1</span>
                                <span>10:30 pm</span>
                            </div>
                        </div>

                    </div>
                    <div class="chat-info">
                        <img src="../../public/img/icon.png" alt="icono">
                        <div class="chat-info-details">
                            <div class="chat-info-left">
                                <h3>Luis Miranda</h3>
                                <p>Hola</p>
                            </div>
                            <div class="chat-info-ringth">
                                <span>1</span>
                                <span>10:30 pm</span>
                            </div>
                        </div>

                    </div>
                    <div class="chat-info">
                        <img src="../../public/img/icon.png" alt="icono">
                        <div class="chat-info-details">
                            <div class="chat-info-left">
                                <h3>Luis Miranda</h3>
                                <p>Hola</p>
                            </div>
                            <div class="chat-info-ringth">
                                <span>1</span>
                                <span>10:30 pm</span>
                            </div>
                        </div>

                    </div>
                    <div class="chat-info">
                        <img src="../../public/img/icon.png" alt="icono">
                        <div class="chat-info-details">
                            <div class="chat-info-left">
                                <h3>Luis Miranda</h3>
                                <p>Hola</p>
                            </div>
                            <div class="chat-info-ringth">
                                <span>1</span>
                                <span>10:30 pm</span>
                            </div>
                        </div>

                    </div>
                    <div class="chat-info">
                        <img src="../../public/img/icon.png" alt="icono">
                        <div class="chat-info-details">
                            <div class="chat-info-left">
                                <h3>Luis Miranda</h3>
                                <p>Hola</p>
                            </div>
                            <div class="chat-info-ringth">
                                <span>1</span>
                                <span>10:30 pm</span>
                            </div>
                        </div>

                    </div>
                </aside>
                <article class="chat-section">
                    <div class="chat-head">
                        <img src="../../public/img/icon.png" alt="icono">
                        <div class="chat-head-name">
                            <h3>Luis Miranda</h3>
                            <i class='bx bx-x'></i>
                        </div>
                    </div>
                    <div class="chat-body">
                        <div class="message received">
                            <div class="message-bubble">¡Hola! ¿Cómo estás?</div>
                        </div>
                        <!-- Ejemplo de mensaje enviado -->
                        <div class="message sent">
                            <div class="message-bubble">Hola, estoy bien, ¿y tú?</div>
                        </div>
                        <div class="message received">
                            <div class="message-bubble">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat laboriosam ut itaque sit! Sint rem asperiores nesciunt ipsum assumenda debitis aut, adipisci voluptatem. Itaque quae architecto, fugiat alias repellat atque.</div>
                        </div>
                        <!-- Ejemplo de mensaje enviado -->
                        <div class="message sent">
                            <div class="message-bubble">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim veniam voluptatibus provident rem, ut quia, itaque similique dolorem esse nulla, deleniti quos? Corrupti id modi doloribus voluptatum sit nisi distinctio.</div>
                        </div>
                    </div>
                    <div class="chat-footer">
                        <input type="text" id="message-input" placeholder="Escribe un mensaje" />
                        <button id="send-button">Enviar</button>
                    </div>
                </article>
            </section>
        </div>
    </main>

    <?php include_once('../templates/footer.php'); ?>
    <script src="../../public/js/menu.js"></script>
    <script src="../../public/js/loader.js"></script>
    <script src="../../public/js/admin/testimonios.js"></script>


    </body>

    </html>

<?php
}
ob_end_flush();
?>