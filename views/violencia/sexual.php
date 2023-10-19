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
            <h1>Violencia Sexual</h1>

            <div class="d-flex justify-content-center align-content-center">
                <div class="text-center" style="width: 700px;">
                    <img src="../../public/img/violencia-sexual.jpg" class="rounded img-fluid" alt="...">
                    <p class="p-2" style="color: red;">Hay violencia sexual cuando te obligan a tener contacto sexual físico, virtual o verbal.</p>
                </div>
            </div>
            <p>Esta violencia puede cometerla tu pareja, expareja, un familiar, un amigo o un desconocido.</p>
            <h3>Ejemplos: </h3>
            <ul>
                <li>Si te tocan sin que tú lo desees o autorices.</li>
                <li>Si te obligan a ver o a escuchar contenidos sexuales o pornográficos.</li>
                <li>Si te obligan a ejercer la prostitución o eres víctima de explotación sexual.</li>
                <li>Si te acosan sexualmente.</li>
                <li>Si te violan.</li>
            </ul>
            <br>
            <h5>Si eres víctima de violencia sexual sigue estos pasos:</h5>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Paso 1: Busca atención médica
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>La ruta de atención en violencia sexual se activa por la primera entidad a la que acudas que puede ser un hospital o centro de salud, la policía, la Comisaría de Familia, la Defensoría del Pueblo o la Fiscalía, entre otras. La entidad a la que te dirijas está en la obligación de informarte sobre tus derechos, cuál es la actividad que puedes desarrollar frente a tu caso y a dónde deberás acudir según tus necesidades. Si quieres denunciar directamente debes acudir a la fiscalia.</p>
                            <h5 style="color: red;">Si inicias por el sector salud:</h5>
                            <ul>
                                <li>Acude a un servicio de urgencias. Te tienen que atender de forma inmediata como una urgencia médica sin importar el tiempo transcurrido desde la agresión sexual.</li>
                                <li>Exige que te hagan pruebas para descartar el contagio con alguna infección de transmisión sexual o que hayas quedado en embarazo.</li>
                                <li>Si la agresión sexual incluyó penetración y no han pasado más de 72 horas, tienes derecho a recibir una profilaxis de emergencia y un método anticonceptivo de emergencia para evitar que quedes en embarazo.</li>
                                <li>En caso de que hayas sido contagiada con alguna infección de transmisión sexual deben darte tratamiento inmediato y gratuito.</li>
                                <li>Si como consecuencia de la agresión sexual quedaste en embarazo, tienes derecho a la Interrupción Voluntaria del Embarazo (IVE) o aborto.</li>
                                <li>Pide que te entreguen copia de la historia clínica.</li>
                                <li>Exige que te hagan seguimiento médico con citas periódicas (a un mes, tres meses, seis meses y una última al año del hecho).</li>
                                <li>ecuerda que la atención en salud debe incluir el tratamiento psicólogo o psiquiátrico al que tienes derecho</li>
                            </ul>
                            <br>
                            <p>Llevar tu documento de identificación: cédula de ciudadanía, tarjeta de identidad, contraseña o constancia de documento en trámite, cédula de extranjería o pasaporte.</p>
                            <br>
                            <ul>
                                <li style="color: red;">Recuerda que aunque no lleves tu documento de identificación, deben atenderte</li>
                                <li>No bañarte o limpiarte ni cambiarte de ropa si la agresión acaba de ocurrir.</li>
                                <li>Llevar una muda para cambiarte después de los exámenes.</li>
                                <li>Puedes elegir si quieres que te atienda un médico o una médica.</li>
                            </ul>
                            <br>
                            <p><strong>Nota: En urgencias te tienen que atender así no estés afiliada a un servicio de salud.</strong></p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Paso 2: Pide protección
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Para solicitar medidas de protección por violencia sexual por parte de un familiar u otra persona que habite en tu casa según lo previsto por la ley 1859 de 2019, puedes solicitar protección ante la Comisaría de Familia que deberá remitir la denuncia a la Fiscalía para que investigue el delito. Si el agresor es otra persona debes acudir directamente a la Fiscalía. Si haces la denuncia ante la Comisaría de Familia, ésta se encarga de darte las medidas de protección provisionales y de adelantar la audiencia de otorgamiento de medidas definitivas. Si haces la denuncia ante la Fiscalía, ésta se encarga de solicitar a un Juez de Control de Garantías las medidas de protección.</p>
                            <br>
                            <p><strong style="color: red;">Medidas provisionales:</strong> son aquellas que se otorgan de manera inmediata para garantizar la integridad de la víctima hasta que se realice la audiencia donde se definen de manera definitiva. Para otorgar este tipo de medidas basta con la denuncia de la víctima y la solicitud de medidas de protección ante la Comisaría de Familia (si la violencia sexual es por parte de un familiar) o ante la Fiscalía (si la violencia sexual es por parte de una persona que no es un familiar).</p>
                            <p><strong style="color: red;">Medidas definitivas:</strong> son aquellas que profiere el Comisario/a de Familia o el Juez de Control de Garantías luego de haber realizado un a audiencia en la que tanto la víctima como el denunciado son escuchados respecto a la situación de violencia que se ha presentado. Es importante aclarar que en estas audiencias se debe garantizar el derecho de la víctima a no ser confrontada con el agresor, razón por la cual se recomienda que el día en que se haga la solicitud de medidas de protección se manifieste expresamente que se quiere hacer uso del derecho a no ser confrontada con el agresor.</p>
                            <p>Si la violencia sexual es por parte de un familiar, la Comisaría de Familia se encarga de llevar tu caso ante la Fiscalía para el trámite penal, pero será el Comisario/a quien tramite tus medidas de protección.</p>
                            <br>
                            <p>Las medidas de protección que se pueden dar en estos casos, por parte del Juez de Control de Garantías o el Comisario/a de Familia, incluyen, entre otras:</p>
                            <ul>
                                <li>Ordenar al agresor detener la violencia.</li>
                                <li>Ordenar al agresor no acercarse a la víctima ni comunicarse con ella.</li>
                                <li>Ordenar la protección de la víctima por parte de la policía.</li>
                                <li>Ordenar cualquier tipo de medida necesaria para garantizar los derechos de la víctima.</li>
                                <ul>
                                    <li>Para que te otorguen una medida de protección provisional o definitiva:</li>
                                </ul>
                                <li>Debes ir a la Fiscalía a solicitar las medidas de protección provisionales que las da el Juez de Control de Garantías.</li>
                                <li>En caso de que la violencia sexual se haya presentado al interior de la familia, es decir, que el responsable haya sido tu pareja o expareja o un hombre que vive contigo o pertenece a tu núcleo familiar, puedes solicitar las medidas de protección ante la Comisaría de Familia de tu localidad.</li>
                                <li>La Comisaría de Familia o la Fiscalía debe ordenar a la policía que te proteja temporalmente en caso de ser necesario. Para esto te darán un número de teléfono de reacción inmediata al cual te puedes comunicar en caso de que el agresor esté cerca.</li>
                                <li>Las medidas definitivas las otorga o el Comisario/a de Familia, si es un caso de violencia sexual dentro de la familia o el Juez de Control de Garantías, si los hechos sucedieron por fuera de la familia.</li>
                            </ul>
                            <p>Si vas a denunciar ante la Comisaría de Familia (si la violencia es por parte de un familiar) o ante la Fiscalía (si la violencia es por parte de una persona que no es un familiar), recuerda llevar:</p>
                            <ul>
                                <li>Tu documento de identificación: cédula de ciudadanía, tarjeta de identidad, contraseña o constancia de documento en trámite, cédula de extranjería o pasaporte. Recuerda que aunque no lleves tu documento de identificación deben atenderte.</li>
                                <li>Fotocopia de tu historia clínica.</li>
                                <li>Es obligación de la Fiscalía recopilar las pruebas que existan. No obstante, te recomendamos que si tienes pruebas como las que te mencionamos a continuación, las lleves a la Fiscalía para así agilizar tu proceso:</li>
                                <ol>
                                    <li>El nombre y la dirección de las personas que presenciaron la violencia.</li>
                                    <li>Fotos y videos del momento en que ocurrió la agresión.</li>
                                    <li>Cualquier otra prueba que te sirva para comprobar la violencia (audios, cartas, conversaciones por redes sociales y correos electrónicos, entre otros).</li>
                                </ol>
                            </ul>
                            <p>Recuerda que el delito de violencia sexual no es conciliable. Tampoco te pueden obligar a estar en presencia del agresor en ningún procedimiento administrativo, judicial, médico, psicológico ni de ningún tipo.</p>
                            <p>Tienes derecho a solicitar que tus datos sean tratados con confidencialidad, es decir, a que tu nombre no se haga público. Para esto debes hacer la solicitud por escrito a la Fiscalía o al Juzgado directamente o a través de tu abogado/a.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Paso 3: Sigue adelante
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Con la solicitud de medidas de protección ante la Comisaría de Familia o ante la Fiscalía, ya has iniciado el proceso de denuncia.</li>
                                <li>Recoge todas las pruebas y testigos posibles para que se pueda decidir si hubo un delito o no. Lleva tu historia clínica, fotos y videos si los tienes, la ubicación del agresor, si la conoces, y todo lo que tengas para probar la agresión.</li>
                                <li>Si al agresor lo encuentran culpable en el proceso, eventualmente irá a la cárcel</li>
                                <li>Puedes buscar ayuda jurídica o representación legal en la Personería, la Defensoría del Pueblo, los consultorios jurídicos de universidades y entidades encargadas de la defensa de las mujeres como las Secretarías de la Mujer en caso de que existan en tu ciudad o municipio.</li>
                            </ul>
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