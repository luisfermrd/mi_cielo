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
            <h1>Acoso Sexual</h1>
            <div class="d-flex justify-content-center align-content-center">
                <div class="text-center" style="width: 700px;">
                    <img src="../../public/img/violencia-acoso-sexual.jpg" class="rounded img-fluid" alt="...">
                </div>
            </div>
            <br>
            <p>Modelo de como queda al acceder</p>
            <div class="d-flex justify-content-center align-content-center gap-4 flex-wrap">
                
                <div class="text-center" style="width: 200px;">
                    <img src="../../public/img/v-a-s-1.png" class="rounded img-fluid" alt="...">
                    <p>Espacio educativos</p>
                </div>
                <div class="text-center" style="width: 200px;">
                    <img src="../../public/img/v-a-s-2.png" class="rounded img-fluid" alt="...">
                    <p>Espacios laborales</p>
                </div>
                <div class="text-center" style="width: 200px;">
                    <img src="../../public/img/v-a-s-3.png" class="rounded img-fluid" alt="...">
                    <p>Espacios publicos</p>
                </div>
                <div class="text-center" style="width: 200px;">
                    <img src="../../public/img/v-a-s-4.png" class="rounded img-fluid" alt="...">
                    <p>Espacios virtuales</p>
                </div>
            </div>
            <br>
            <h5>¿Qué es acoso sexual?</h5>
            <p>El acoso sexual, como manifestación de la violencia de género, es una agresión que se presenta contra las mujeres y que se define como unas conductas sexuales diversas no deseadas por la persona que las recibe y que resultan ofensivas o amenazantes para ella. El acoso sexual también puede ser un chantaje o coacción, es decir, presión para que la persona acosada haga algo o deje de hacerlo. Para que se presente el acoso no es necesario que se haya presentado la conducta sexual, basta con la amenaza.</p>
            <br>
            <h5>¿Cómo saber si estas siendo acosada sexualmente?</h5>
            <p>Para saber si estás siendo acosada, puedes hacerte estas preguntas. Si respondes positivamente a cualquiera de ellas se puede afirmar que hay acoso:</p>
            <ul>
                <li>Confianza. ¿Existe confianza suficiente entre tú y la persona que te agrede para que te dé ese trato? Es importante que, de acuerdo con el nivel de confianza de la relación, tengas claro si te sientes cómoda o no con el trato que estás recibiendo.</li>
                <li>Reciprocidad. ¿Tienes la posibilidad de comportarte con quien te agrede de la misma manera en que se comporta contigo, por ejemplo, echarle un chiste obsceno? Es muy importante tener en cuenta la reciprocidad cuando entre quien te agrede y tú existe una relación de poder y tú eres subordinada a él.</li>
                <li>Consentimiento. Este es el elemento más importante: ¿Has dado tu consentimiento para que quien te agrede tenga ese tipo de trato contigo o, por el contrario, le has dicho o demostrado (con excusas, evasivas, lenguaje no verbal) que su comportamiento te incomoda y/o que no estás de acuerdo con la forma como te trata?</li>
            </ul>
            <br>
            <h5>Recomendaciones generales</h5>
            <p>Debido a que el acoso sexual es un delito nuevo en Colombia, creado a través de la Ley 1257 de 2008, y que su desarrollo jurídico es deficiente, las rutas de atención con las que se cuenta para lograr su judicialización no son lo suficientemente específicas como sí ocurre con otro tipo de violencias contra las mujeres. Por este motivo, te brindamos unos consejos que pueden ser muy útiles:</p>
            <ul>
                <li>Ten presente que quien tiene la función de investigar si se cometió o no un delito es la Fiscalía. Por este motivo, es esta entidad la que tiene la responsabilidad de buscar y recopilar las pruebas. No obstante, si en tu proceso consideras que puedes ayudar aportando alguna prueba te recomendamos que cuando la presentes solicites una constancia de recibido.</li>
                <li>En todos los procesos disciplinarios que se lleven a cabo por casos relacionados con acoso sexual la mujer agredida siempre puede y debe ser reconocida como víctima de la falta disciplinaria, ya que el acoso sexual implica una violación a los derechos humanos de las mujeres.</li>
                <li>Teniendo en cuenta que estas situaciones suelen presentarse de forma sistemática, se recomienda que cuando sospeches que estás viviendo una situación de acoso sexual, lleves un registro escrito de las agresiones donde anotes exactamente qué sucedió, cuándo y si hubo testigos. Esto te ayudará a presentar tanto la queja como la denuncia, según el caso.</li>
                <li>Las denuncias por violencia sexual contra las mujeres (incluido el acoso sexual) NO pueden ser retiradas, pues a pesar de que la víctima se retracte el Estado debe seguir adelantando la investigación de oficio.</li>
            </ul>
            <p>Puedes buscar ayuda jurídica o representación legal en la Personería, la Defensoría del Pueblo, los consultorios jurídicos de universidades y en las entidades encargadas de la defensa de las mujeres como las Secretarías de la Mujer en caso de que existan en tu ciudad o municipio. También puedes comunicarte con la línea de la Fiscalía al 018000919748 o desde un celular a la línea 122.</p>
            <ul>
                <li>En caso de que te hayan otorgado una medida de protección, debes radicar una copia en la Estación de Policía o CAI más cercano a tu domicilio, o lugar estudio o trabajo. Si quien hizo la agresión incumple la medida de protección, debes informar de inmediato a la autoridad que haya expedido la medida para que pueda ser multado o arrestado, según el caso.</li>
                <li>En caso de que te hayan otorgado una medida de protección, debes radicar una copia en la Estación de Policía o CAI más cercano a tu domicilio, o lugar estudio o trabajo. Si quien hizo la agresión incumple la medida de protección, debes informar de inmediato a la autoridad que haya expedido la medida para que pueda ser multado o arrestado, según el caso.</li>
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