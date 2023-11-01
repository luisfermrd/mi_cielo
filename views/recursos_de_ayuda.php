<?php
ob_start();
session_start();

if (!isset($_SESSION["id_user"]) || $_SESSION["role"] != 1) {
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
        include_once('templates/buttons.php');
        ?>
        <!--Container Main start-->
        <div class="height-100 bg-light">
            <h1 style="text-align: center;">Recursos de ayuda</h1>
            <div class="img-ayuda">
                <img src="../public/img/servicio-al-cliente.png" alt="">
            </div>
            <div class="mt-2 mb-5 d-flex justify-content-center align-items-center flex-wrap">
                <div class="card p-2 m-2 d-flex justify-content-between align-items-center" style="width: 18rem; min-height: 30rem;">
                    <img src="../public/img/smartphone.png" style="width:10rem" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Llama al 155</h5>
                        <p class="card-text">Funciona 24/7. Proporciona información sobre los diferentes tipos de violencia, cómo denunciar y las rutas de atención jurídica y en salud.</p>
                        <a href="tel: 155" class="btn btn-primary mt-5">Llamar</a>
                    </div>
                </div>
                <div class="card p-2 m-2 d-flex justify-content-between align-items-center" style="width: 18rem; min-height: 30rem;">
                    <img src="../public/img/smartphone.png" style="width:10rem" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Llama al 122</h5>
                        <p class="card-text">Funciona 24/7 dando orientacion de como hacer una denuncia y reciven renuncias. Desde un fijo en bogota y cundinamarca se marca 5702000, opción 7. Desde un fijo en cualquier lugar del pais se marca 018000919748.</p>
                        <a href="tel: 122" class="btn btn-primary">Llamar</a>
                    </div>
                </div>
                <div class="card p-2 m-2 d-flex justify-content-between align-items-center" style="width: 18rem; min-height: 30rem;">
                    <img src="../public/img/smartphone.png" style="width:10rem" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Llama al 3173699932</h5>
                        <p class="card-text">Ya está en servicio la Patrulla Púrpura para protejer a la mujer contra todo acto de violencia, maltrado físico y verbal. Disponible en la localidad de Santa Cruz de Lorica.</p>
                        <a href="tel: 3173699932" class="btn btn-primary mt-4">Llamar</a>
                    </div>
                </div>
                <div class="card p-2 m-2 d-flex justify-content-between align-items-center" style="width: 18rem; min-height: 30rem;">
                    <img src="../public/img/smartphone.png" style="width:10rem" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Llama al 3107295893</h5>
                        <p class="card-text">Comunicate con el cuadrante N° 01 de la estacion de policia que se encuentra ubicada en el municipio de lorica en la Cra 17a N 2-27 Barrio centro.</p>
                        <a href="tel: 3107295893" class="btn btn-primary mt-5">Llamar</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
    </main>

    <?php include_once('templates/footer.php'); ?>
    <script src="../public/js/loader.js"></script>
    <script src="../public/js/menu.js"></script>
    <script src="../public/js/sos.js"></script>
    <script src="../public/js/chat.js"></script>


    </body>

    </html>

<?php
}
ob_end_flush();
?>