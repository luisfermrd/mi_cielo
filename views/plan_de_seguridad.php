<?php
ob_start();
session_start();

if (!isset($_SESSION["id_user"])) {
    header("Location: ../index.html");
} else {
    $pagine_active = basename($_SERVER['PHP_SELF'], '.php');
    include_once('templates/header.php');
?>
    <?php
    $ruta = "";
    include_once('templates/nav.php');
    ?>
    <main>
        <?php
        include_once('templates/loader.php');
        ?>
        <!--Container Main start-->
        <div class="height-100 bg-light">
            <h1>Plan de seguridad</h1>
        </div>
    </main>

    <?php include_once('templates/footer.php'); ?>
    <script src="../public/js/loader.js"></script>
    <script src="../public/js/menu.js"></script>

    </body>

    </html>

<?php
}
ob_end_flush();
?>