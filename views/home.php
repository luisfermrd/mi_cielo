<?php
ob_start();
session_start();

if (!isset($_SESSION["id_user"]) || $_SESSION["role"] != 1) {
    header("Location: ../index.html");
} else {
    $pagine_active = basename($_SERVER['PHP_SELF'], '.php');
    include_once('templates/header.php');
?>
    <link rel="stylesheet" href="../public/css/slide.css">
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
            <div class="swiper mySwiper" style="height: 85vh;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="../public/img/img5.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/img/img.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/img/img1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/img/img3.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/img/img6.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="../public/img/img2.jpeg" alt="">
                    </div>
                </div>
                <div class="swiper-button-next" style="color: #e7008a;"></div>
                <div class="swiper-button-prev" style="color: #e7008a;"></div>
                <div class="swiper-pagination" style="color: #e7008a;"></div>
                <div class="autoplay-progress">
                    <svg viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="20"></circle>
                    </svg>
                    <span></span>
                </div>
            </div>
            <h1 class="m-5 text-center">¿Que hacer en caso de violencia?</h1>
            <div class="m-5 row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4 d-flex align-content-center justify-content-center">
                <div class="col d-flex align-content-center justify-content-center">
                    <a href="violencia/fisica-psicologica.php" style="text-decoration: none; color: black;">
                        <div class="card" style="width: 15rem;">
                            <img src="../public/img/violencia.png" class="card-img-top" alt="..." style="min-height: 15rem;">
                            <div class="card-body text-center">
                                <p class="card-text">Violencia física y / o psicológica</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col d-flex align-content-center justify-content-center">
                    <a href="violencia/sexual.php" style="text-decoration: none; color: black;">
                        <div class="card" style="width: 15rem;">
                            <img src="../public/img/violencia2.jpg" class="card-img-top" alt="..." style="min-height: 15rem;">
                            <div class="card-body">
                                <p class="card-text text-center">Violencia Sexual </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col d-flex align-content-center justify-content-center">
                    <a href="violencia/economica.php" style="text-decoration: none; color: black;">
                        <div class="card" style="width: 15rem;">
                            <img src="../public/img/violencia3.jpg" class="card-img-top" alt="..." style="min-height: 15rem;">
                            <div class="card-body">
                                <p class="card-text text-center">Violencia económica </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col d-flex align-content-center justify-content-center">
                    <a href="violencia/politica.php" style="text-decoration: none; color: black;">
                        <div class="card" style="width: 15rem;">
                            <img src="../public/img/violencia4.png" class="card-img-top" alt="..." style="min-height: 15rem;">
                            <div class="card-body">
                                <p class="card-text text-center">Violencia politica </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col d-flex align-content-center justify-content-center">
                    <a href="violencia/acoso-sexual.php" style="text-decoration: none; color: black;">
                        <div class="card" style="width: 15rem;">
                            <img src="../public/img/violencia5.png" class="card-img-top" alt="..." style="min-height: 15rem;">
                            <div class="card-body">
                                <p class="card-text text-center">Acoso Sexual </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mb-5 mt-5">
                <h3>Preguntas frecuentes</h3>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                ¿Qué hacer si mi pareja o expareja oculta sus bienes para no responder por sus obligaciones?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Es violencia económica. Puedes solicitar protección de los bienes comunes o denunciar los delitos de alzamiento de bienes o de inasistencia alimentaria.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                ¿A dónde debo acudir si necesito asesoría y representación jurídica?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Si necesitas orientación y asesoría jurídica puedes acudir a la Defensoría del Pueblo, la Personería, los consultorios jurídicos de las universidades y las entidades encargadas de la protección de los derechos de las mujeres en tu municipio o localidad (como las Secretarías de la Mujer).</p>
                                <p>En caso de que necesites representación jurídica y no tengas dinero para pagar a una abogada, puedes solicitar a la Defensoría del Pueblo que te brinde ese servicio.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                ¿Cómo puedo identificar la violencia psicológica?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" style="width: 100%;" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>La violencia psicológica se caracteriza por no dejar marcas físicas, pero sí emocionales y está directamente relacionada con cómo te hacen sentir. Si encuentras que en tu caso se cumple una o más afirmaciones de las que te presentamos a continuación, entonces hay violencia psicológica:</p>
                                <ul>
                                    <li>Te sientes menospreciada por él.</li>
                                    <li>Sientes que ha afectado tu autoestima.</li>
                                    <li>Hace chistes o comentarios hirientes sobre ti.</li>
                                    <li>Has sido humillada a solas o frente a otras personas.</li>
                                    <li>Intenta restringir el contacto con cualquier miembro de tu familia o con tus amistades.</li>
                                    <li>Insiste en saber en dónde estás en todo momento.</li>
                                    <li>Limita, controla o inspecciona tus comunicaciones (teléfono, correo electrónico, redes sociales).</li>
                                    <li>Limita y controla tus decisiones, incluso sobre cómo vestirte.</li>
                                    <li>Presenta comportamientos celosos, posesivos o te acusa de serle infiel.</li>
                                    <li>Ha golpeado la pared, un mueble o roto un objeto para amedrentarte.</li>
                                    <li>Hace cosas para intimidarte, castigarte o hacerte sentir miedo.</li>
                                    <li>Te culpa por sus reacciones.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>
    </main>

    <?php include_once('templates/footer.php'); ?>

    <script src="../public/js/menu.js"></script>
    <script src="../public/js/home.js"></script>
    <script src="../public/js/loader.js"></script>
    <script src="../public/js/sos.js"></script>

    </body>

    </html>

<?php
}
ob_end_flush();
?>