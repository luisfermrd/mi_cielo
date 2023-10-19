<?php
ob_start();
session_start();

if (!isset($_SESSION["id_user"])) {
    header("Location: ../../index.html");
} else {
    $pagine_active = basename($_SERVER['PHP_SELF'], '.php');
    include_once('../templates/header2.php');
?>
    <?php
    $ruta = "../";
    include_once('../templates/nav.php');
    ?>
    <main>
        <!--Container Main start-->
        <div class="height-100 bg-light">
            <h1>Violencia física y / o psicológica</h1>
            <p><strong>Hay violencia física</strong> cuando se genera una acción de manera voluntaria que ocasiona daños no accidentales, utilizando la fuerza física o material (es decir, sirviéndose de objetos) y que tiene como fin fundamental generar un impacto directo en el cuerpo y consecuencias físicas tanto externas como internas.</p>
            <p>Hay <strong>violencia psicológica o emocional</strong> cuando se da una agresión sin que haya contacto físico entre las personas causando daño a nivel psicológico o emocional en las personas agredidas.</p>
            <hr>
            <h3>Ejemplos:</h3>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Violencia física:
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Golpes</li>
                                <li>Puños</li>
                                <li>Patadas</li>
                                <li>Tirones de pelo</li>
                                <li>Empujones</li>
                                <li>Cachetadas</li>
                                <li>Pellizcos</li>
                                <li>Heridas con cualquier arma</li>
                                <li>Entre otros</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Violencia psicológica:
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Gritos</li>
                                <li>Insultos</li>
                                <li>Burlas</li>
                                <li>Regaños</li>
                                <li>Amenazas verbales o físicas</li>
                                <li>Entre otros</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <h5 style="color: red;">Para denunciar que eres víctima de violencia física y/o psicológica, procura mantener estos documentos en un lugar seguro que el agresor no conozca:</h5>
            <p>Fotocopia de tu documento de identificación que puede ser cualquiera de estos: cédula de ciudadanía, tarjeta de identidad, contraseña o constancia de documento en trámite, cédula de extranjería o pasaporte. Aunque no lleves el documento de identificación tienen que atenderte. Si tienes hijos o hijas, debes tener también el documento de identificación de ellos. Si son menores, debe ser una copia del registro civil.</p>
            <br>
            <h5>También:</h5>
            <ul>
                <li>Ten guardado dinero para tomar un transporte en caso de que lo necesites.</li>
                <li>Mantén una copia de las llaves de tu vivienda con alguien de confianza.</li>
            </ul>
            <h5>No olvides:</h5>
            <ul>
                <li>Contarle a alguien de tu familia o a una amiga o amigo sobre la situación que estás pasando para que esté pendiente de ti.</li>
            </ul>
            <br><br><br>
            <div class="d-flex justify-content-center align-content-center">
              <a href="../home.php" type="button" class="btn btn-danger" style="width: 200px;">Volver</a>
            </div>
            <br><br><br>
        </div>
    </main>

    <?php include_once('../templates/footer.php'); ?>
    <script src="../../public/js/home.js"></script>

    </body>

    </html>

<?php
}
ob_end_flush();
?>