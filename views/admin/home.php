<?php
ob_start();
session_start();

if (!isset($_SESSION["id_user"]) || $_SESSION["role"] != 0) {
    header("Location: ../../index.html");
} else {
    $pagine_active = basename($_SERVER['PHP_SELF'], '.php');
    include_once('../templates/header2.php');
?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            <h1 class="m-5 text-center">¡Bienvenido, administrador de Mi Cielo!</h1>
            <p>Nos complace darle una cálida bienvenida a su nuevo rol en nuestra página. Su llegada como administrador es un gran paso hacia la excelencia en la gestión de usuarios, reportes y demás aspectos importantes de nuestra plataforma.</p>
            <p>Confiamos en que su experiencia y habilidades serán invaluables para mantener un entorno seguro, ordenado y amigable para todos nuestros usuarios. Su liderazgo y dedicación serán fundamentales para mantener altos estándares de calidad y eficiencia en cada interacción.</p>
            <p>Estamos ansiosos por trabajar juntos y aprovechar al máximo su expertise en esta tarea crucial. Estamos seguros de que bajo su administración, Mi Cielo alcanzará nuevas alturas y se convertirá en un verdadero referente en el panorama digital.</p>
            <p>Una vez más, le damos la bienvenida y le agradecemos por aceptar este desafiante y gratificante rol. ¡Estamos emocionados por el camino que recorreremos juntos hacia un cielo aún más brillante!</p>
            <p>Atentamente,</p>
            <p>El equipo de Mi Cielo</p>
        </div>
        <div class="containerGraficas">
            <div class="grafica">
                <canvas id="myChart"></canvas>
            </div>
            <div class="grafica">
                <canvas id="myChart2"></canvas>
            </div>
            <div class="grafica">
                <canvas id="myChart3"></canvas>
            </div>
            <div class="grafica">
                <canvas id="myChart4"></canvas>
            </div>
            <div class="grafica">
                <canvas id="myChart5"></canvas>
            </div>
            <div class="grafica">
                <canvas id="myChart6"></canvas>
            </div>
        </div>
    </main>

    <?php include_once('../templates/footer.php'); ?>

    <script src="../../public/js/menu.js"></script>
    <script src="../../public/js/loader.js"></script>
    <script src="../../public/js/admin/home.js"></script>

    </body>

    </html>

<?php
}
ob_end_flush();
?>