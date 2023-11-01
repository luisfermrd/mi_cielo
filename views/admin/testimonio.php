<?php
ob_start();
session_start();

if (!isset($_SESSION["id_user"]) || $_SESSION["role"] != 0) {
    header("Location: ../../index.html");
} else {
    $pagine_active = basename($_SERVER['PHP_SELF'], '.php');
    include_once('../templates/header2.php');
?>
    <link rel="stylesheet" href="../../public/css/slide-testimonios.css">
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
        <div class="height-100 bg-light">
            <h1>Testimonios</h1>
            <section class="testimonios">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper" id="testimonios-container">


                    </div>
                    <div class="swiper-pagination"></div>
                </div>
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