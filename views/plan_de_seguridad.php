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
            <h1>Plan de seguridad</h1>
            <h4>Plan de seguridad en caso de enfrentar violencia de genero por parte de tu pareja</h4>
            <hr>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                            1. Reconoce los signos de peligro
                        </button>
                    </h2>
                    <div id="flush-collapse1" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Cambios de comportamiento: Presta atención a señales de agresión verbal, humillación, control excesivo, explosiones de ira o comportamiento intimidante.</li>
                                <li>Amenazas e intimidación: Si tu pareja amenaza con hacerte daño a ti, a tus seres queridos o a sí mismo, es importante tomarlo en serio.</li>
                                <li>Agresión verbal o física: Cualquier forma de violencia física, incluyendo empujones, golpes, patadas o cualquier acto que te haga sentir temor por tu seguridad.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                            2. Mantén un registro
                        </button>
                    </h2>
                    <div id="flush-collapse2" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Documenta los incidentes: Registra cualquier incidente de violencia de género, incluyendo fechas, descripciones detalladas y cualquier evidencia relevante, como mensajes de texto, correos electrónicos o fotos.</li>
                                <li>Guarda tus registros en un lugar seguro: Asegúrate de guardar esta documentación en un lugar seguro fuera del alcance de tu pareja, como una cuenta de correo electrónico privada o una unidad USB protegida con contraseña.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                            3. Crea una red de apoyo
                        </button>
                    </h2>
                    <div id="flush-collapse3" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Comunica tu situación: Informa a personas de confianza sobre lo que estás experimentando. Puede ser familia, amigos, vecinos o compañeros de trabajo. Ellos pueden brindarte apoyo emocional y ayudarte en situaciones de emergencia.</li>
                                <li>Establece una palabra clave: Si te sientes en peligro inmediato o necesitas ayuda, establece una palabra clave con tus seres queridos para que sepan cuándo debes contactar a las autoridades o solicitar ayuda.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                            4. Planifica una salida segura
                        </button>
                    </h2>
                    <div id="flush-collapse4" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Busca asesoramiento profesional: Consulta con un abogado, un terapeuta o un trabajador social especializado en violencia de género para recibir orientación sobre cómo planificar una salida segura. Ellos pueden ayudarte a desarrollar un plan adaptado a tu situación específica.</li>
                                <li>Identifica lugares seguros: Identifica lugares a los que puedas ir en caso de necesitar salir rápidamente de tu hogar, como refugios para víctimas de violencia doméstica, casas de familiares o amigos de confianza.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                            5. Conoce tus derechos legales
                        </button>
                    </h2>
                    <div id="flush-collapse5" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Investiga las leyes locales: Familiarízate con las leyes y los recursos disponibles en tu área en relación con la violencia de género. Investiga sobre órdenes de protección, denuncias penales, líneas telefónicas de emergencia y servicios de asesoramiento.</li>
                                <li>Consulta a un abogado: Si es posible, busca asesoramiento legal para entender tus derechos y opciones legales. Un abogado especializado en violencia de género puede ayudarte a navegar el proceso legal.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                            6. Mantén la comunicación
                        </button>
                    </h2>
                    <div id="flush-collapse6" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Comparte tus planes: Informa a alguien de confianza sobre tus planes y horarios. Puedes compartirles información sobre tus rutinas diarias, salidas o cualquier cambio en tu situación para que puedan estar alerta y brindarte apoyo en caso de necesidad.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                            7. Crea un kit de emergencia (continuación)
                        </button>
                    </h2>
                    <div id="flush-collapse7" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Documentos importantes: Reúne tus documentos esenciales, como identificación, pasaporte, certificados de nacimiento, matrimonio o divorcio, órdenes de protección, y cualquier otro documento legal relevante.</li>
                                <li>Dinero en efectivo: Guarda una cantidad de dinero en efectivo en tu kit de emergencia para cubrir gastos básicos durante tu salida, como transporte, alojamiento o comida.</li>
                                <li>Ropa y objetos personales: Empaca ropa, artículos de higiene personal y medicamentos necesarios para ti y tus hijos si los tienes. Considera incluir elementos reconfortantes, como fotografías o juguetes pequeños para los niños.</li>
                                <li>Teléfono y cargador: Asegúrate de tener un teléfono móvil y un cargador portátil en tu kit de emergencia. Mantén la batería cargada y ten a mano números de contacto importantes.</li>
                                <li>Lista de números de emergencia: Haz una lista con los números de emergencia, como la policía local, servicios de asistencia en violencia de género y personas de confianza a quienes puedas contactar en caso de necesidad.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                            8. Establece límites personales
                        </button>
                    </h2>
                    <div id="flush-collapse8" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Comunica tus límites: Establece límites claros con tu pareja sobre lo que consideras aceptable y qué consecuencias habrá si se cruzan esos límites. Hazlo en un momento y lugar seguro, preferiblemente con apoyo de un profesional o un miembro de tu red de apoyo.</li>
                                <li>Mantén una actitud firme: Si tu pareja cruza esos límites, mantén una actitud firme y sigue tu plan de seguridad. No cedas a la manipulación o las amenazas.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                            9. Utiliza recursos de apoyo
                        </button>
                    </h2>
                    <div id="flush-collapse9" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Servicios de asesoramiento: Busca servicios de asesoramiento especializados en violencia de género. Los profesionales capacitados pueden brindarte apoyo emocional, estrategias de afrontamiento y orientación en el proceso de recuperación.</li>
                                <li>Grupos de apoyo: Considera unirte a grupos de apoyo para personas que han experimentado violencia de género. Estos grupos pueden proporcionar un espacio seguro para compartir experiencias, obtener apoyo mutuo y aprender de los demás.</li>
                                <li>Líneas telefónicas de emergencia: Mantén a mano los números de teléfono de líneas directas de ayuda y asesoramiento en violencia de género. Estos servicios están disponibles las 24 horas del día y pueden brindarte apoyo inmediato en momentos de crisis.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading10">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
                            10. Prioriza tu seguridad
                        </button>
                    </h2>
                    <div id="flush-collapse10" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Llama al número de emergencia: Si sientes que tu vida está en peligro inminente, no dudes en llamar al número de emergencia de tu país. Los servicios de emergencia están capacitados para responder a situaciones de violencia doméstica y brindar ayuda inmediata.</li>
                                <li>Confía en tu instinto: Si sientes que una situación se está volviendo peligrosa, confía en tu instinto y busca ayuda. No minimices las señales de advertencia, ya que tu seguridad y bienestar son prioritarios.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <h4>Plan de seguridad en caso de enfrentar violencia de genero por parte de personas en la calle</h4>
            <hr>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingEleven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                            1. Reconoce los signos de peligro
                        </button>
                    </h2>
                    <div id="flush-collapseEleven" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Observa el comportamiento: Presta atención a personas que te siguen, acechan, te acosan verbalmente, te intimidan o te hacen sentir inseguro/a.</li>
                                <li>Confía en tu intuición: Si sientes un instinto de que algo no está bien o te sientes amenazado/a, confía en tus sentimientos y toma medidas para protegerte.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwelve">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                            2. Mantén la calma y la confianza
                        </button>
                    </h2>
                    <div id="flush-collapseTwelve" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTwelve" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Intenta mantener la calma en situaciones intimidantes. Mostrar confianza y seguridad en ti mismo/a puede disuadir a posibles agresores.</li>
                                <li>Mantén una postura erguida y evita el contacto visual prolongado con personas que te hagan sentir incómodo/a. Camina con determinación y propósito.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThirteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThirteen" aria-expanded="false" aria-controls="flush-collapseThirteen">
                            3. Planifica tu ruta y horarios
                        </button>
                    </h2>
                    <div id="flush-collapseThirteen" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingThirteen" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Conoce las áreas peligrosas: Investiga sobre las áreas de tu localidad que son conocidas por ser peligrosas o tener altos índices de delincuencia. Evita transitar por estas áreas en la medida de lo posible.</li>
                                <li>Planifica tus rutas: Opta por rutas bien iluminadas y transitadas. Evita callejones oscuros, parques desolados y áreas poco frecuentadas.</li>
                                <li>Varía tus horarios: Si es posible, varía tus horarios de desplazamiento para evitar patrones predecibles y minimizar el riesgo de encontrarte con agresores conocidos.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFourteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFourteen" aria-expanded="false" aria-controls="flush-collapseFourteen">
                            4. Sé consciente de tu entorno
                        </button>
                    </h2>
                    <div id="flush-collapseFourteen" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingFourteen" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Mantén la atención: Mantén la atención en tu entorno y las personas a tu alrededor. Evita distraerte con dispositivos electrónicos o auriculares que puedan limitar tu percepción de lo que sucede a tu alrededor.</li>
                                <li>Confía en tus sentidos: Si percibes comportamientos sospechosos o te sientes incómodo/a con alguien, confía en tus instintos y toma medidas para alejarte de la situación.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFifteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFifteen" aria-expanded="false" aria-controls="flush-collapseFifteen">
                            5. Desarrolla habilidades de autodefensa básica
                        </button>
                    </h2>
                    <div id="flush-collapseFifteen" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingFifteen" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Considera tomar clases de autodefensa: Aprender técnicas básicas de autodefensa puede aumentar tu confianza y darte herramientas para defenderte en caso de ataque. Busca clases o talleres en tu área.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSixteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSixteen" aria-expanded="false" aria-controls="flush-collapseSixteen">
                            6. Utiliza el poder de la comunicación
                        </button>
                    </h2>
                    <div id="flush-collapseSixteen" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingSixteen" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Pide ayuda: Si te encuentras en una situación de peligro, busca ayuda de personas a tu alrededor. Puedes pedir ayuda a transeúntes, ingresar a un establecimiento o llamar a la policía.</li>
                                <li>Sé asertivo/a: Si alguien te intimida o te acosa verbalmente, no dudes en decirles firmemente que dejen de hacerlo y alejarte de la situación.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSeventeen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeventeen" aria-expanded="false" aria-controls="flush-collapseSeventeen">
                            7. Mantén contacto con personas de confianza (continuación)
                        </button>
                    </h2>
                    <div id="flush-collapseSeventeen" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingSeventeen" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Informa a otros: Comunica tus rutas y horarios a familiares, amigos o compañeros de trabajo de confianza. Asegúrate de que alguien sepa dónde estás y cuándo esperas regresar.</li>
                                <li>Establece un sistema de "check-in": Acuerda con alguien de confianza que te contacte o que tú lo contactes en momentos específicos para confirmar que estás a salvo.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingEighteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEighteen" aria-expanded="false" aria-controls="flush-collapseEighteen">
                            8. Evita confrontaciones directas
                        </button>
                    </h2>
                    <div id="flush-collapseEighteen" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingEighteen" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>No te enfrentes físicamente: Evita el uso de la violencia física, ya que esto puede poner en mayor riesgo tu seguridad. Busca escapar de la situación y buscar ayuda en lugar de confrontar directamente a la persona agresora.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingNineteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNineteen" aria-expanded="false" aria-controls="flush-collapseNineteen">
                            9. Utiliza recursos de seguridad disponibles
                        </button>
                    </h2>
                    <div id="flush-collapseNineteen" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingNineteen" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Líneas de emergencia: Infórmate sobre las líneas telefónicas de emergencia disponibles en tu área. Programa los números de contacto de emergencia en tu teléfono móvil y asegúrate de tener acceso rápido a ellos.</li>
                                <li>Aplicaciones de seguridad: Explora aplicaciones móviles diseñadas para la seguridad personal, como aquellas que te permiten compartir tu ubicación en tiempo real con contactos de confianza o enviar alertas de emergencia.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwenty">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwenty" aria-expanded="false" aria-controls="flush-collapseTwenty">
                            10. Busca apoyo y asesoramiento
                        </button>
                    </h2>
                    <div id="flush-collapseTwenty" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTwenty" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Servicios de apoyo: Busca organizaciones locales que brinden apoyo a las víctimas de violencia de género. Estos recursos pueden ofrecer asesoramiento, información legal, refugio seguro u otros servicios de apoyo.</li>
                                <li>• Denuncia a las autoridades: Si has sido víctima de violencia en la calle, considera presentar una denuncia a las autoridades correspondientes. Esto puede contribuir a la seguridad de otras personas y ayudar en la investigación de los agresores.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <h4>Plan de seguridad en caso de enfrentar violencia de genero por parte de compañeros de trabajo o estudio</h4>
            <hr>
            <div class="accordion accordion-flush" id="accordionFlush2">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            1. Reconoce los signos de violencia
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlush2">
                        <div class="accordion-body">
                            <ul>
                                <li>Observa cambios en el comportamiento: Presta atención a comportamientos agresivos, intimidantes, acosadores o discriminatorios por parte de tus compañeros de trabajo o estudio.</li>
                                <li>Identifica formas de violencia: La violencia de género en el entorno laboral o educativo puede incluir acoso sexual, intimidación verbal, exclusión social, rumores maliciosos o sabotaje profesional.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            2. Documenta los incidentes
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlush2">
                        <div class="accordion-body">
                            <ul>
                                <li>Registra los incidentes: Mantén un registro detallado de los incidentes de violencia, incluyendo fechas, descripciones, testigos y cualquier evidencia relevante, como correos electrónicos, mensajes de texto, capturas de pantalla o fotografías.</li>
                                <li>Guarda la documentación de forma segura: Almacena la documentación en un lugar seguro y confidencial, fuera del alcance de tus agresores.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            3. Establece límites y comunica tus necesidades
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlush2">
                        <div class="accordion-body">
                            <ul>
                                <li>Sé claro/a y asertivo/a: Establece límites claros sobre lo que consideras aceptable y no aceptable en tu entorno laboral o educativo. Comunica tus necesidades y expectativas de manera firme y respetuosa.</li>
                                <li>Informa a tus superiores: Si te sientes segura y confiada, considera hablar con tus superiores, profesores o responsables de recursos humanos sobre la situación que estás enfrentando.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            4. Busca apoyo y crea una red de confianza
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlush2">
                        <div class="accordion-body">
                            <ul>
                                <li>Encuentra aliados: Identifica a personas de confianza en tu entorno laboral o educativo a quienes puedas recurrir para obtener apoyo emocional y respaldo en caso de situaciones de violencia.</li>
                                <li>Busca apoyo externo: Busca organizaciones especializadas en violencia de género que puedan proporcionarte asesoramiento, apoyo emocional y recursos adicionales.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            5. Conoce tus derechos
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlush2">
                        <div class="accordion-body">
                            <ul>
                                <li>Investiga tus derechos: Infórmate sobre las políticas y los protocolos existentes en tu lugar de trabajo o institución educativa en relación con la violencia de género. Conoce los recursos disponibles, como políticas de no tolerancia, procedimientos de denuncia y servicios de apoyo.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            6. Planifica tu seguridad
                        </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlush2">
                        <div class="accordion-body">
                            <ul>
                                <li>Evita el aislamiento: Trata de no estar sola en espacios donde puedas encontrarte con tus agresores. Busca la compañía de colegas o amigos de confianza.</li>
                                <li>Modifica tu rutina: Si es posible, modifica tus horarios o rutas para evitar encontrarte con tus agresores. Utiliza medidas de seguridad adicionales, como caminar en grupos o solicitar acompañamiento.</li>
                                <li>Mantén tu entorno informado: Comunica tus horarios y planes a personas de confianza, para que estén al tanto de tus movimientos y puedan brindarte apoyo si es necesario.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                            7. Denuncia y busca ayuda profesional (continuación)
                        </button>
                    </h2>
                    <div id="flush-collapseSeven" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlush2">
                        <div class="accordion-body">
                            <ul>
                                <li>Informa a la institución: Si estás experimentando violencia de género en el entorno laboral o educativo, comunica los incidentes a los responsables o autoridades de la institución. Esto puede incluir recursos humanos, jefes de departamento, directores de escuela, consejeros estudiantiles, o cualquier persona designada para abordar problemas relacionados con la violencia en el lugar de trabajo o estudio.</li>
                                <li>Busca asesoramiento legal: Considera buscar el asesoramiento de un abogado especializado en temas de violencia de género para entender tus derechos legales y opciones disponibles. Ellos pueden ayudarte a tomar decisiones informadas sobre las medidas legales que puedes tomar para protegerte.</li>
                                <li>Contacta a organizaciones especializadas: Busca organizaciones y grupos de apoyo especializados en violencia de género en tu localidad. Ellos pueden brindarte apoyo emocional, asesoramiento, información legal y recursos adicionales.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                            8. Prioriza tu seguridad
                        </button>
                    </h2>
                    <div id="flush-collapseEight" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlush2">
                        <div class="accordion-body">
                            <ul>
                                <li>Evalúa tu seguridad: Realiza una evaluación de riesgos en tu entorno laboral o educativo. Identifica las áreas de mayor riesgo y toma medidas para minimizar tu exposición a situaciones peligrosas.</li>
                                <li>Desarrolla un plan de escape: Si consideras que tu seguridad está en riesgo inmediato, desarrolla un plan de escape detallado en caso de emergencia. Identifica rutas seguras de salida y lugares de refugio donde puedas buscar ayuda.</li>
                                <li>Utiliza medidas de seguridad personal: Considera llevar contigo un teléfono móvil con batería cargada, mantener los números de emergencia a mano, y tener acceso a un sistema de seguridad personal, como una alarma de emergencia o una aplicación móvil de seguridad.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                            9. Auto cuidado y apoyo emocional
                        </button>
                    </h2>
                    <div id="flush-collapseNine" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlush2">
                        <div class="accordion-body">
                            <ul>
                                <li>Prioriza tu bienestar: Cuida de ti misma/o durante este proceso. Prioriza el autocuidado, como mantener una buena alimentación, dormir adecuadamente y realizar actividades que te brinden calma y bienestar.</li>
                                <li>Busca apoyo emocional: No dudes en buscar apoyo de amigos, familiares o profesionales de la salud mental para procesar tus emociones, reducir el estrés y fortalecer tu resiliencia.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <h4>Plan de seguridad en caso de enfrentar violencia de genero por parte de familiares o amigos</h4>
            <hr>
            <div class="accordion accordion-flush mb-5" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                            1. Prioriza tu seguridad personal
                        </button>
                    </h2>
                    <div id="flush-collapseTen" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlush2">
                        <div class="accordion-body">
                            <ul>
                                <li>Busca un lugar seguro: Si es posible, busca refugio en un lugar donde te sientas segura y protegida, como la casa de un amigo o un refugio para víctimas de violencia doméstica.</li>
                                <li>Mantén tus pertenencias importantes a mano: Ten a mano tus documentos personales, dinero, medicamentos y cualquier otra pertenencia importante que puedas necesitar en caso de tener que salir rápidamente de la situación.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwentyOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentyOne" aria-expanded="false" aria-controls="flush-collapseTwentyOne">
                            2. Establece límites y comunica tus necesidades
                        </button>
                    </h2>
                    <div id="flush-collapseTwentyOne" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTwentyOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Sé claro/a y firme: Establece límites claros con tus familiares o amigos agresores y comunica tus necesidades de seguridad de manera firme y directa.</li>
                                <li>Reduce el contacto: Si te sientes segura, considera reducir o evitar el contacto con los agresores. Esto puede incluir bloquear sus números de teléfono, mantenerse alejado de ellos en eventos sociales o evitar visitarlos en sus hogares.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwentyTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentyTwo" aria-expanded="false" aria-controls="flush-collapseTwentyTwo">
                            3. Crea una red de apoyo confiable
                        </button>
                    </h2>
                    <div id="flush-collapseTwentyTwo" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTwentyTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Busca personas de confianza: Identifica amigos, familiares u otros miembros de tu comunidad en quienes puedas confiar y que te brinden apoyo emocional y respaldo durante esta situación.</li>
                                <li>Comunica tu situación: Habla con personas de confianza sobre lo que estás experimentando y comparte tus preocupaciones y necesidades con ellos.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwentyThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentyThree" aria-expanded="false" aria-controls="flush-collapseTwentyThree">
                            4. Busca ayuda profesional
                        </button>
                    </h2>
                    <div id="flush-collapseTwentyThree" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTwentyThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Contacta a organizaciones especializadas: Busca organizaciones y centros de apoyo a víctimas de violencia de género que puedan proporcionarte asesoramiento, apoyo emocional y recursos adicionales.</li>
                                <li>Busca asesoramiento legal: Considera buscar el asesoramiento de un abogado especializado en violencia de género para entender tus derechos legales y las opciones disponibles para tu protección.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwentyFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentyFour" aria-expanded="false" aria-controls="flush-collapseTwentyFour">
                            5. Documenta los incidentes
                        </button>
                    </h2>
                    <div id="flush-collapseTwentyFour" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTwentyFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Registra los incidentes: Mantén un registro detallado de los incidentes de violencia, incluyendo fechas, descripciones, testigos y cualquier evidencia relevante, como mensajes de texto, correos electrónicos o fotografías.</li>
                                <li>Guarda la documentación de forma segura: Almacena la documentación en un lugar seguro y confidencial, fuera del alcance de los agresores.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwentyFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentyFive" aria-expanded="false" aria-controls="flush-collapseTwentyFive">
                            6. Planifica tu seguridad
                        </button>
                    </h2>
                    <div id="flush-collapseTwentyFive" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTwentyFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Desarrolla un plan de escape: Si consideras que tu seguridad está en riesgo inmediato, desarrolla un plan de escape detallado en caso de emergencia. Identifica rutas de escape seguras, lugares de refugio y personas de confianza a quienes puedas recurrir en caso de necesidad.</li>
                                <li>Mantén contacto con personas de confianza: Comunica tus planes y horarios a las personas de confianza para que estén al tanto de tu situación y puedan brindarte apoyo en caso de emergencia.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwentySix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentySix" aria-expanded="false" aria-controls="flush-collapseTwentySix">
                            7. Prioriza tu bienestar y autocuidado (continuación)
                        </button>
                    </h2>
                    <div id="flush-collapseTwentySix" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTwentySix" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Cuida de ti misma/o: Prioriza tu bienestar físico, emocional y mental. Asegúrate de mantener una alimentación saludable, descansar lo suficiente y realizar actividades que te brinden tranquilidad y felicidad.</li>
                            </ul>
                            <ul>Busca apoyo emocional: No dudes en buscar apoyo emocional de amigos de confianza, familiares u otros profesionales capacitados en el manejo de la violencia de género. El apoyo emocional puede ayudarte a procesar tus emociones, aliviar el estrés y aumentar tu resiliencia.</ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwentySeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentySeven" aria-expanded="false" aria-controls="flush-collapseTwentySeven">
                            8. Bloquea el acceso a tus redes sociales y tecnología
                        </button>
                    </h2>
                    <div id="flush-collapseTwentySeven" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTwentySeven" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Protege tu privacidad: Asegúrate de mantener tus cuentas de redes sociales y otros dispositivos electrónicos seguros. Configura contraseñas sólidas y evita compartir información personal que pueda ser utilizada en tu contra.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwentyEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentyEight" aria-expanded="false" aria-controls="flush-collapseTwentyEight">
                            9. Mantén evidencia de la violencia
                        </button>
                    </h2>
                    <div id="flush-collapseTwentyEight" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTwentyEight" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Guarda pruebas: Si es posible, conserva cualquier evidencia de la violencia que hayas experimentado, como mensajes, correos electrónicos, fotos o registros de llamadas. Estos pueden ser útiles si decides tomar medidas legales en el futuro.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-5">
                    <h2 class="accordion-header" id="flush-headingTwentyNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentyNine" aria-expanded="false" aria-controls="flush-collapseTwentyNine">
                            10. Conoce tus derechos legales
                        </button>
                    </h2>
                    <div id="flush-collapseTwentyNine" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTwentyNine" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Infórmate sobre tus derechos: Investiga las leyes y los recursos legales disponibles para las víctimas de violencia de género en tu país o localidad. Esto te ayudará a comprender tus derechos y las medidas de protección a las que puedes acceder.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
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