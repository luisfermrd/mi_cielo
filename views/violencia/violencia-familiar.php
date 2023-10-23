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
            <h1>Violencia Familiar</h1>

            <div class="d-flex justify-content-center align-content-center">
                <div class="text-center" style="width: 700px;">
                    <img src="../../public/img/violencia-familiar-2.jpg" class="rounded img-fluid" alt="...">
                </div>
            </div>
            <br>
            <p>La violencia familiar es un término utilizado para describir la violencia y el abuso de familiares o una pareja íntima, como un cónyuge, ex cónyuge, novio o novia, ex novio o ex novia, o alguien con quien se tiene una cita. Otros términos utilizados para la violencia familiar incluyen los siguientes:</p>
            <ul>
                <li>Maltrato de pareja íntima.</li>
                <li>Violencia doméstica.</li>
                <li>Maltrato infantil.</li>
                <li>Abuso físico.</li>
                <li>Violencia en el noviazgo.</li>
                <li>Violación marital.</li>
                <li>Violación perpetrada por una persona con la que se tiene una cita.</li>
                <li>Acoso.</li>
            </ul>
            <br>
            <h3>¿Cuáles son las diferentes formas de violencia familiar?</h3>
            <p>De acuerdo con la Coalición Nacional contra la Violencia Familiar (National Coalition Against Domestic Violence), el maltrato a menudo comienza con conductas verbales, como insultos, amenazas o golpes o lanzamiento de objetos. Puede empeorar con empujones, bofetadas y retención en contra de la voluntad de la víctima. El maltrato posterior puede incluir trompadas, golpes y puntapiés, y puede empeorar con conductas que pongan en peligro la vida, como estrangulamiento, fractura de huesos o uso de armas.</p>
            <p>Las siguientes son formas de violencia familiar y maltrato físico:</p>
            <ul>
                <li><strong>Física.</strong> Se refiere a palizas o golpes que causan lesiones físicas que pueden incluir moretones, fractura de huesos, sangrado interno e incluso la muerte. A menudo, el maltrato comienza con contactos leves y con el tiempo empeora para convertirse en acciones más violentas.</li>
                <li><strong>Sexual.</strong> Suele acompañar o seguir el maltrato físico, y tiene como consecuencia una violación u otra actividad sexual forzada.</li>
                <li><strong>Psicológica o emocional.</strong> Una persona que maltrata a menudo lo hace mentalmente o emocionalmente con palabras, amenazas, hostigamiento, posesión extrema, aislamiento forzado y destrucción de pertenencias. El aislamiento a menudo se produce cuando la persona que maltrata intenta controlar el tiempo, las actividades y el contacto con otras personas de la víctima. Las personas que maltratan pueden lograr esto al interferir con las relaciones de apoyo de la víctima, crear barreras para las actividades normales, como sustraer las llaves del coche o encerrar a la víctima en la casa, y mentir y distorsionar la realidad para obtener el control psicológico.</li>
                <li><strong>Acoso.</strong> Conducta de hostigamiento o amenaza repetida que a menudo deriva en maltrato físico o sexual.</li>
                <li><strong>Económica.</strong> Esto se da cuando la persona que maltrata controla el acceso a todos los recursos de la víctima, como el tiempo, el transporte, el alimento, la vestimenta,el refugio, el seguro y el dinero. Por ejemplo, puede interferir con la capacidad de la víctima de autoabastecerse e insistir en controlar todas las finanzas de la víctima. Cuando la víctima abandona la relación violenta, el perpetrador puede recurrir al aspecto económico como una manera de mantener el control u obligar a la víctima a regresar.</li>
            </ul>
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