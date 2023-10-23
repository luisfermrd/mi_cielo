<?php
ob_start();
session_start();

if (!isset($_SESSION["id_user"]) || $_SESSION["role"] != 0) {
    header("Location: ../../../index.html");
} else {
    $pagine_active = basename($_SERVER['PHP_SELF'], '.php');
    include_once('../../templates/header4.php');
?>
    <link rel="stylesheet" href="../../../public/css/test.css">
    <?php
    $ruta = "../";
    include_once('../../templates/nav.php');
    ?>
    <main>
        <input type="hidden" id="id_user_pagine" name="id_user_pagine" value="<?php echo $_GET['id'] ?>">
        <?php
        include_once('../../templates/loader.php');
        ?>
        <!--Container Main start-->
        <div class="height-100 bg-light">
            <h1 class="m-5 text-center">Test de violencia</h1>
            <div id="no_respondio" style="display: none;">
                <h4>El usuario aun no ha respondido el test</h4>
            </div>
            <div id="respondio" style="display: none;">
                <h4>Resultados del test</h4>
                <section class="violentometro" id="violentometro" style="z-index: -2;">
                    <div class="thermometer">
                        <div class="mercury" id="mercury" style="height: 0%;"></div>
                        <div class="mercury2" id="mercury2" style="height: 100%;"></div>
                        <div class="numbers">
                            <span>100</span>
                            <span>80</span>
                            <span>60</span>
                            <span>40</span>
                            <span>20</span>
                            <span>0</span>
                        </div>
                    </div>

                    <div class="info-violentometro">
                        <h2>Resultado del test de violencia</h2>
                        <p id="respuestaTest"></p>
                    </div>
                </section>
                <div class="m-5">
                <h4>A las preguntas respondio: </h4>
                <p>¿Te impiden o prohíbe hacer algo que desees? (<span style="text-transform: uppercase; font-weight: bold;" id="p1">no</span>)</p>
                <p>¿Las decisiones importantes las toma sin tener en cuenta tu opinión? (<span style="text-transform: uppercase; font-weight: bold;" id="p2">no</span>)</p>
                <p> ¿Te sientes segura en tu casa? (<span style="text-transform: uppercase; font-weight: bold;" id="p3">no</span>)</p>
                <p>¿Has presenciado o sufrido violencia en tu entorno familiar? (<span style="text-transform: uppercase; font-weight: bold;" id="p4">no</span>)</p>
                <p>¿Has recibido amenazas de violencia física en los últimos seis meses? (<span style="text-transform: uppercase; font-weight: bold;" id="p5">no</span>)</p>
                <p>¿Has sentido miedo de tu pareja o de alguien en tu entorno cercano? (<span style="text-transform: uppercase; font-weight: bold;" id="p6">no</span>)</p>
                <p>¿Has sido restringido(a) físicamente para evitar que salgas de casa o te relaciones con otras personas? (<span style="text-transform: uppercase; font-weight: bold;" id="p7">no</span>)</p>
                <p>¿Alguna vez has tenido que ocultar moretones? (<span style="text-transform: uppercase; font-weight: bold;" id="p8">no</span>)</p>
                <p>¿En alguna ocasion te han humillado o te han criticado en publico o privado?" (<span style="text-transform: uppercase; font-weight: bold;" id="p9">no</span>)</p>
                <p>¿Has presenciado o sufrido violencia en tu lugar de trabajo o estudio? (<span style="text-transform: uppercase; font-weight: bold;" id="p10">no</span>)</p>
                <p>¿Has notado cambios en tu comportamiento, como aislamiento social o depresión, debido a situaciones de violencia? (<span style="text-transform: uppercase; font-weight: bold;" id="p11">no</span>)</p>
                </div>

            </div>
            <a class="btn btn-primary mb-5" href="../users.php" role="button">Volver</a>
        </div>
    </main>

    <?php include_once('../../templates/footer.php'); ?>

    <script src="../../../public/js/menu.js"></script>
    <script src="../../../public/js/loader.js"></script>
    <script src="../../../public/js/admin/test.js"></script>

    </body>

    </html>

<?php
}
ob_end_flush();
?>