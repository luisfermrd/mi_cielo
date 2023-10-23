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
            <h1>Violencia politica</h1>
            <div class="d-flex justify-content-center align-content-center">
                <div class="text-center" style="width: 700px;">
                    <img src="../../public/img/violencia-politica-2.jpg" class="rounded img-fluid" alt="...">
                    <p class="p-2" style="color: red;">Hay violencia política cuando se le impide a una mujer ejercer su derecho a la participación ciudadana, política o comunitaria.</p>
                </div>
            </div>
            <p>En el caso específico de las lideresas sociales, hay violencia política cuando se restringe su libertad de opinión y/o escogencia política, o cuando se busca detener su liderazgo. La violencia política incluye atentados y amenazas a la mujer o sus personas cercanas para impedir su participación. </p>
            <br>
            <h3>Ejemplos: </h3>
            <ul>
                <li>Si te amenazan, violentan, intentan asesinarte a ti o a personas cercanas con el objetivo de impedir tu participación política, social o comunitaria.</li>
                <li>Si tu pareja o familia te prohíbe participar en escenarios sociales o políticos.</li>
                <li>Si se atenta contra tu autonomía política incumpliendo las leyes existentes sobre participación política (Ley 581 de 2000 y la Ley 1475 de 2011).</li>
            </ul>
            <br>
            <h5>Si eres víctima de violencia política sigue estos pasos:</h5>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Paso 1: Pide protección
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Las medidas de protección para violencia política están dirigidas a mujeres que cumplen estas condiciones:</p>
                            <ul>
                                <li>Ser indígena, afro, rom, lesbiana, transgénero o líder de un grupo social o político.</li>
                                <li>Ser víctimas del conflicto armado, mujeres que reclaman sus tierras, dirigentes, lideresas, representantes o activistas de organizaciones de derechos humanos, de organizaciones de víctimas, de organizaciones sociales, cívicas o comunitarias, de organizaciones campesinas o pertenecientes a grupos étnicos.</li>
                                <li>Ser sindicalista, periodista, comunicadora social, miembro de una misión médica.</li>
                            </ul>
                            <br>
                            <p>Para solicitar medidas de protección debes seguir estos pasos:</p>
                            <p><strong>Solicita medidas de protección</strong></p>
                            <p>Para solicitar medidas de protección debes diligenciar el Formulario de Solicitud de Protección que puede descargarse en la página web www.unp.gov.co. Debes incluir información personal y de las circunstancias de amenaza y riesgo. El formulario se envía por correo electrónico a: correspondencia@unp .gov.co. Si no tienes un computador o correo electrónico, la Defensoría del Pueblo o la Personería te tienen que apoyar. El formulario también se puede enviar a esta dirección física: Carrera 69B No. 17A-75 en Bogotá o puede radicarse personalmente en la Oficina de Atención al Usuario de la Unidad Nacional de Protección en la Carrera 58 No. 10-51 en Bogotá.</p>
                            <p>Si hay riesgo inmediato, se asignan medidas de protección por tres meses mientras el trámite continúa. Para pedir estas medidas, debes mencionar la necesidad en el formulario de solicitud y si se valora que es urgente prevenir el riesgo, la protección es inmediata.</p>
                            <br>
                            <p>Debes anexar estos documentos al formulario:</p>
                            <ul>
                                <li>Fotocopia por ambas caras de cualquier de estos documentos de identificación: cédula de ciudadanía, tarjeta de identidad, contraseña o constancia de documento en trámite, cédula de extranjería o pasaporte. Recuerda que aunque no lleves tu documento de identificación, deben atenderte.</li>
                                <li>Certificado que acredite la categoría poblacional a la que perteneces: miembro de organización social con certificado de Cámara de Comercio (si la organización lo tiene), Registro Único de Víctimas o certificación de entidades públicas sobre el grupo étnico al que perteneces.</li>
                            </ul>
                            <br>
                            <p><strong>Es mejor si tienes:</strong></p>
                            <ul>
                                <li>Denuncias penales ante la Fiscalía General de la Nación.</li>
                                <li>Documentos de identificación del grupo familiar.</li>
                            </ul>
                            <br>
                            <p><strong>Análisis del riesgo</strong></p>
                            <p>Después de que recibe tu solicitud de protección, la Unidad Nacional de Protección te pide permiso para recoger información sobre ti. Con esta información se hace el análisis de riesgo. Para ello, te hacen una entrevista personal y buscan todo lo relacionado con el caso en las entidades estatales y en las organizaciones sociales. Se recomienda que desde la entrevista se solicite que el caso sea tramitado ante el Cerrem (Comité de Evaluación del Riesgo y Recomendación de Medidas) de Mujeres.</p>
                            <p>Después de estudiar esta información se dará una de estas calificaciones:</p>
                            <ul>
                                <li><strong>Nivel de riesgo ordinario: </strong>nivel de riesgo que todas las personas en el territorio colombiano tienen la obligación de soportar. Si te califican en este nivel de riesgo, no te dan la protección, pero sí puedes solicitar una conciliación o querella.La conciliación es un mecanismo por medio del cual dos partes en conflicto llegan a un acuerdo ante un tercero que no necesariamente tiene que ser un juez. La querella, por su parte, puede ser interpuesta por cualquier ciudadano o ciudadana que se considere afectado por un delito, ya sea contra su persona o contra sus bienes. El objetivo de la querella es la persecución del delincuente que ha ocasionado un daño.</li>
                                <li><strong>Nivel de riesgo extraordinario: </strong>amerita la protección especial del Estado.</li>
                                <li><strong>Nivel de riesgo extraordinario extremo: </strong>amerita la protección inmediata del Estado.</li>
                            </ul>
                            <p>Esta calificación y todos los documentos se envían al Cerrem (Comité de Evaluación del Riesgo y Recomendación de Medidas) que hace la valoración integral del riesgo y otorga las medidas de protección correspondientes.</p>
                            <br>
                            <p><strong>Medidas definitivas y seguimiento</strong></p>
                            <p>Si el Cerrem considera que se trata de un caso de riesgo extraordinario extremo, lo comunica a la mujer y de inmediato se le da protección. Si considera el riesgo como extraordinario, se comunica a la mujer y en los días siguientes se aplican las medidas de protección.</p>
                            <br>
                            <p><strong>La protección incluye:</strong></p>
                            <ul>
                                <li>Comunicaciones; celulares y radioteléfonos.</li>
                                <li>Movilidad: subsidio de transporte, subsidio de gasolina, contratos de transporte, carros o carros blindados.</li>
                                <li>Escoltas.</li>
                                <li>Chalecos antibalas.</li>
                                <li>Puertas y ventanas de seguridad.</li>
                                <li>Otras cosas necesarias para preservar la vida y seguridad.</li>
                                <li>Atención psicosocial.</li>
                                <li>Atención en salud.</li>
                                <li>Educación.</li>
                                <li>Otras cosas necesarias para preservar la salud física y mental.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Paso 2: Sigue adelante
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Para seguir adelante con el proceso, debes poner la denuncia penal ante la Fiscalía o, en caso de que en el municipio donde vives no haya Fiscalía, puedes hacer la denuncia en la Inspección de Policía, donde deben remitir la denuncia a la Fiscalía. Si no lo puedes hacer, la Unidad Nacional de Protección debe hacerlo por ti.</p>
                            <p>Si sigues adelante con la denuncia, a tu agresor o agresores los pueden meter a la cárcel y hacer que te indemnicen y te pidan perdón.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <p style="color: red;">¡TE DESEAMOS LO MEJOR EN EL PROCESO QUE HAS COMENZADO!</p>
            <p style="color: red;">¡Y NO OLVIDES CONTARNOS CÓMO TE FUE! ¡TU EXPERIENCIA NOS SIRVE A TODAS!</p>

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