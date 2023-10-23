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
            <h1>Violencia digital o cibernética</h1>

            <div class="d-flex justify-content-center align-content-center">
                <div class="text-center" style="width: 700px;">
                    <img src="../../public/img/violencia-digital-2.jpg" class="rounded img-fluid" alt="...">
                </div>
            </div>
            <br>
            <p>La violencia digital mediante redes sociales (ciberviolencia) contra las mujeres y niñas representa un obstáculo para su acceso seguro a las comunicaciones e información digital, genera consecuencias psicológicas, emocionales y sociales para las víctimas y limita el pleno uso, goce y disfrute de sus derechos humanos.</p>
            <p>Es importante recordar que no se debe culpar a las niñas y mujeres que son víctimas de violencia mediática a través de internet. Ninguna mujer busca, induce ni provoca actos violentos hacia ella en plataformas digitales, su vida, libertad e integridad debe ser respetada en la vida offline y online.</p>

            <h2>Otras definiciones sobre ciberviolencia</h2>
            <p>La Organización de Naciones Unidas lo define como un comportamiento violento en línea que va dese el acoso en línea y el agravio público hasta el deseo de infligir daño físico, incluidos los ataques sexuales, los asesinatos y los suicidios inducidos.</p>
            <p>Es <strong>violencia cibernética</strong> contra las mujeres:</p>
            <ul>
                <li><strong>Violar la intimidad de las mujeres:</strong> al filtrar imágenes y/o videos ya sea realizando algún acto sexual o exhibiendo su cuerpo semidesnudo o desnudo, sin su consentimiento.</li>
                <li><strong>Sembrar rumores falsos y difamar:</strong> a alguna mujer con el propósito de dañar su reputación y buscar avergonzarla en su red social ante sus familiares, amigos y/o conocidos.</li>
                <li><strong>Crear perfiles falsos y/o usurpar la identidad:</strong> de alguna para subir fotos, hacer comentarios ofensivos o hasta ofertas sexuales.</li>
                <li><strong>Denigrar a mujeres:</strong> al difundir fotos, “memes” y/o grabaciones en donde se busque intimidar, agredir, humillar o ridiculizar, denigrar. Asimismo, filmar a través de teléfonos celulares o cámaras digitales actos de violencia en donde se golpea, agrede, grita o persigue a una persona de sexo femenino.</li>
                <li><strong>Acechar o espiar:</strong> (stalked) las publicaciones, comentarios, fotos y todo tipo de información de una mujer en sus cuentas de redes sociales. Esta modalidad puede ir de una simple indagación hasta el deseo de relacionarse con la víctima para intimidarla y acosarla sexualmente.</li>
                <li><strong>Acoso y amenaza: </strong> mediante el envío de imágenes con contenidos sexuales y/o mensajes agresivos y hostigadores en cuentas de correo electrónico, mensajería telefónica o redes sociales de las víctimas; así como intimidar a una mujer con la intención de golpearla, abusarla sexualmente y/o matarla si no accede a sus deseos.</li>
            </ul>
            <br>
            <h2>Medidas de prevención</h2>
            <h3>Ciberbullying</h3>
            <p>Promueve y ejerce uso de las tecnologías de la información responsablemente y con respeto.</p>
            <p>Genera relaciones respetuosas con otras personas, tanto física como a través de medios de comunicación, específicamente en la navegación en páginas web y redes sociales.</p>
            <p>Si eres testigo de algún acto de ciberbullying <strong>¡comunica este hecho a personas que tengan posibilidad de frenarlo!</strong>, actuando prevenimos futuras agresiones.</p>

            <br>
            <h3>Sexting</h3>
            <p>Primero es necesario reconocer que las mujeres tienen derecho a practicar el sexting de manera segura, sin que eso conlleve a que les sean impuestas etiquetas sociales que atenten contra su libertad e integridad, además:</p>
            <ul>
                <li>Tienes el derecho de expresar tu sexualidad, orientación e identidad, sin que esto represente un peligro para ti.</li>
                <li>Tienes derecho a compartir aspectos de tu vida íntima con la persona que tú desees.</li>
                <li>Tienes derecho a que se respete la privacidad de aquellos contenidos que deseas compartir de manera privada.</li>
                <li>Tienes derecho a exigir castigo para aquellas personas que hagan uso no autorizado del contenido digital que creaste de tu cuerpo.</li>
                <li>Tienes derecho a que se investigue de manera pronta y expedita, cuando algún tipo de información haya sido difundida sin tu consentimiento, lo que tiene que realizarse por las autoridades competentes con perspectiva de género y debida diligencia.</li>
                <li>Tienes derecho a solicitar la reparación del daño integral, cuando se haya hecho mal uso de los contenidos compartidos.</li>
            </ul>
            <br>
            <p>Algunos tips que pueden ser de tu interés:</p>
            <ol>
                <li>Corrobora que al momento de enviar tu contenido sexual el envío sea dirigido a la persona con la que deseas compartirlo.
                </li>
                <li>Si lo deseas puedes optar por no fotografiar aspectos de tu vida o personalidad que permitan a trolls identificarte.</li>
                <li>Si deseas incrementar los niveles de seguridad del contenido sexual digital que has creado, una opción es utilizar alguna aplicación que permita guardar ese contenido en carpetas cifradas.</li>
                <li>Si así lo deseas, puedes solicitar a la persona receptora que elimine de manera inmediata el contenido que le has compartido.</li>
            </ol>

            <br>
            <h3>Stalked</h3>
            <p>Si deseas que disminuyan las posibilidades de localizar tu perfil en redes sociales puedes configurarlas de manera tal que no sea posible localizarte a partir de tu número telefónico y/o correo electrónico.</p>
            <p>Si deseas mantener tu cuenta personal de correo electrónica sin vinculación con tus redes sociales, puedes denegar el permiso de vinculación que puedes encontrar en el apartado de privacidad o puedes crear una cuenta de correo electrónico exclusiva para cada red social.</p>


            <br>
            <h3>Grooming</h3>
            <p>Platica con las niñas, niños y adolescentes acerca de la importancia de no compartir ningún tipo de información con personas desconocidas.</p>
            <p>Presta atención en los sitios web en los que las niñas, niños adolescentes navegan.</p>
            <p>Si notas un cambio de comportamiento en las niñas, niños y/o adolescentes, manifiéstales tu apoyo pues en un ambiente de confianza es más factible se comuniquen los problemas que les aquejan y busquen apoyo institucional.</p>
            <br>
            <h3>Shaming</h3>
            <p>Visibiliza el fat-shaming y slut-shaming como prácticas que constituyen violencia de género contra las mujeres.</p>
            <p>Denuncia aquellas bromas, burlas y contenidos digitales que representen acoso o discriminación contra las mujeres dada su complexión física o su comportamiento y expresiones sexuales.</p>
            <p>No compartas contenidos que promuevan éste tipo de violencia.</p>
            <p>Promueve la idea de que el cuerpo y la sexualidad de las mujeres no deben ser calificados ni estigmatizados.-Reporta los contenidos y páginas que promuevan estos contenidos.</p>

            <br>
            <h3>Doxing</h3>
            <p>Si identificas información privada publicada en redes sociales, denuncia esas publicaciones.</p>
            <p>Si conoces a la persona de quien se comparte información privada, comunícaselo de inmediato para que tome precauciones.</p>
            <h4>Tips para la prevención de violencia en contra de las mujeres en redes sociales</h4>
            <ol>
                <li>Verifica la configuración de la privacidad del contenido que compartes para que tu contenido sea visto únicamente por los perfiles que tú deseas.</li>
                <li>Utiliza la verificación de inicio de sesión.</li>
                <li>Utiliza contraseñas que contenga números, letras, símbolos, mayúsculas y minúsculas.</li>
                <li>En caso de tener sospechas sobre la identidad o intención de alguien que intente ponerse en contacto contigo, háblalo con alguna persona de tu confianza y de ser el caso, busca ayuda especializada.</li>
                <li>Cuando abras tu cuenta desde ordenadores o dispositivos ajenos, asegúrate de cerrar tu sesión.</li>
                <li>Actualiza tu aplicación para mantener también actualizadas las medidas de seguridad que las redes sociales te ofrecen.</li>
                <li>Si deseas acudir a citas a ciegas con personas desconocidas, acompáñate de personas de tu confianza  y procura que siempre sea en lugares públicos.</li>
                <li>Los dispositivos suelen preguntarte si deseas que el navegador recuerde tu contraseña, verifica no aceptar esta opción.</li>
            </ol>


            <h5>No olvides:</h5>
            <p>Contarle a alguien de tu familia o a una amiga o amigo sobre la situación que estás pasando para que esté pendiente de ti.</p>
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