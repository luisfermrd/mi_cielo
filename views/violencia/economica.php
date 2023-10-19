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
            <h1>Violencia económica</h1>
            <div class="d-flex justify-content-center align-content-center">
                <div class="text-center" style="width: 700px;">
                    <img src="../../public/img/violencia-economica.jpg" class="rounded img-fluid" alt="...">
                </div>
            </div>
            <br>
            <p>La violencia económica puede ocurrir tanto dentro de la familia como fuera de esta. Aquí vamos a referirnos a la violencia económica que ocurre en el ámbito intrafamiliar. </p>
            <p>Hay violencia económica intrafamiliar cuando una persona de tu núcleo familiar controla tu dinero de forma abusiva, cuando te castigan o premian con dinero si haces o dejas de hacer algo que quieren obligarte a hacer, te obligan a pagar deudas que no son tuyas, a asumir los gastos que no son tu responsabilidad o a adquirir préstamos para otros, no cumplen con el mantenimiento de tus hijos o hijas o te quitan o destruyen tus medios de trabajo.</p>
            <br>
            <h3>Ejemplos: </h3>
            <ul>
                <li>Obligarte a pagar una deuda que no es tuya.</li>
                <li>Hacerte préstamos y nunca devolverte el dinero.</li>
                <li>No cumplir con el mantenimiento de los hijos o hijas.</li>
                <li>Quitarte o destruir tus medios de trabajo</li>
            </ul>
            <br>
            <h5>Si eres víctima de violencia económica intrafamiliar, sigue estos pasos:</h5>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Paso 1: Busca atención médica
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Si la violencia económica está relacionada con otros eventos de violencia física o psicológica, puedes solicitar medidas de protección ante la Comisaría de Familia, entre ellas:</p>
                            <ul>
                                <li>Decidir provisionalmente quién tendrá a su cargo las pensiones alimentarias, es decir los gastos de alimentos, vestido y otros de la pareja que no trabaja fuera del hogar o de los hijos e hijas.</li>
                                <li>Decidir provisionalmente que puedes usar y disfrutar de la vivienda familiar.</li>
                                <li>Prohibir, al agresor la venta o préstamo o cualquier tipo de disposición de los bienes de la familia así estén a su nombre.</li>
                                <li>Ordenar al agresor la devolución inmediata de los objetos de uso personal, documentos de identidad y cualquier otro documento u objeto de propiedad o custodia de la víctima.</li>
                            </ul>
                            <br>
                            <p>Cualquier otra medida que la Comisaría considere pertinente para cuidar los bienes familiares.</p>
                            <p>Para solicitar medidas de protección debes acudir a la Comisaría de Familia. La Comisaría se encarga de darte las medidas de protección provisionales y de adelantar la audiencia para el otorgamiento de medidas definitivas. El plazo para solicitar medidas de protección es de treinta días a partir del momento en que sucedan los hechos.</p>
                            <br>
                            <p><strong style="color: red;">Medidas provisionales: </strong>las otorga la Comisaría de Familia de forma inmediata para garantizar tu integridad hasta que se realice la audiencia donde se definen de manera definitiva. Para otorgar este tipo de medidas basta con la denuncia de la víctima y la solicitud de medidas de protección. En la Comisaría de Familia, en el transcurso de las cuatro horas siguientes a la realización de tu solicitud, deberán darte una medida de protección provisional.</p>
                            <p><strong style="color: red;">Medidas definitivas: </strong>las otorga el la Comisaría de Familia, luego de haber realizado una audiencia en la que tanto la víctima como el denunciado son escuchados respecto a la situación de violencia que se ha presentado. Es importante aclarar que en estas audiencias se debe garantizar el derecho de la víctima a no ser confrontada con el agresor por lo que se recomienda cuando se haga la solicitud de medidas de protección se manifieste expresamente que se quiere hacer uso del derecho a no ser confrontada con el agresor e le ordena al agresor.</p>
                            <p>El apoyo policivo es un documento anexo a la medida de protección y está dirigido al comandante de la Estación de Policía más cercana, con el fin de informarle que la mujer está en una situación de riesgo para que, en caso de que lo requiera, la policía le preste atención de manera oportuna. Debes tomar una fotocopia de este documento y radicarla en la Estación de Policía de la localidad, comuna o sitio en donde residas, trabajes y/ o estudies. Si estas actividades las haces en lugares diferentes, debe radicarse en la Estación de Policía de cada localidad, comuna o sitio.</p>
                            <p>En caso de que el agresor incumpla la medida de protección, se debe llamar a la policía y acudir inmediatamente a la Comisaría de Familia que haya emitido la medida para informar que hubo un incumplimiento y solicitar que se sancione al agresor.</p>
                            <br>
                            <p>Recuerda llevar a la Comisaría de Familia:</p>
                            <ul>
                                <li>Fotocopia de tu historia clínica.</li>
                                <li>El nombre completo y la dirección del agresor.</li>
                                <li>Información sobre denuncias previas contra el agresor.</li>
                                <li>El nombre y la dirección de las personas que presenciaron la violencia, si las hay y quieren declarar (tus hijas e hijos pueden ser escuchados como testigos).</li>
                                <li>Fotos y videos del momento en que ocurrió la agresión, si los tienes.</li>
                                <li>Cualquier otra prueba que te sirva para comprobar la violencia (audios, cartas, conversaciones por redes sociales y correos electrónicos, entre otros).</li>
                            </ul>
                            <p>En la audiencia de trámite y fallo de la medida de protección puedes hacer uso de tu derecho a no ser confrontada con el agresor. De esta forma, serás escuchada sin que él esté presente. Si quieres hacer uso de tu derecho, solicítalo con antelación a la fecha de audiencia, mediante un documento escrito, dirigido a la Comisaría de Familia o al Juez de Control de Garantías.</p>
                            <p>En caso de que en la audiencia de trámite y fallo a la medida de protección no te concedan esta medida, puedes interponer un recurso de reposición y apelación para que el Juez de Familia o Juez Promiscuo de Familia, decida si te la da o no. Si nada de esto funciona, puedes interponer una acción de tutela.</p>
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
                            <ul>
                                <li>Con la solicitud de medidas de protección ante la Comisaría de Familia, o con la denuncia directamente ante la Fiscalía cuando el agresor ha destruido bienes comunes o de tu propiedad o cuando no cumple con sus obligaciones alimentarias, ya has iniciado el proceso.</li>
                                <li>Recoge todas las pruebas y testigos posibles que quieran declarar para que en caso de un posible delito de violencia económica la Fiscalía investigue y un juez pueda decidir si hubo o no delito.</li>
                                <li>Si el proceso continúa, el agresor deberá cesar de forma definitiva la violencia económica.</li>
                                <li>Puedes buscar ayuda jurídica o representación legal en la Personería, la Defensoría del Pueblo, los consultorios jurídicos de universidades y las entidades encargadas de la defensa de las mujeres como las Secretarías de la Mujer en caso de que esta oficina exista en tu ciudad o municipio.</li>
                                <li>En caso de incumplimiento del padre con el mantenimiento de hijos/as o de su esposa o compañera permanente cuando esta se dedica de manera exclusiva a labores de cuidado y no recibe remuneración por otros trabajos puedes demandar o denunciar así:</li>
                                <ol>
                                    <li>Vía civil: se puede presentar una demanda civil ante un Juzgado Civil Municipal con la finalidad de que el responsable sea obligado a cumplir.</li>
                                    <li>Vía penal: se puede presentar una denuncia ante la Fiscalía por el delito de "inasistencia alimentaria" con la finalidad de que el responsable sea juzgado y condenado por el delito, page lo adeudado y sea obligado a continuar asumiendo su responsabilidad económica.</li>
                                </ol>
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