<?php
ob_start();
session_start();

if (!isset($_SESSION["id_user"]) || $_SESSION["role"] != 1) {
  header("Location: ../index.html");
} else {
  $pagine_active = basename($_SERVER['PHP_SELF'], '.php');
  include_once('templates/header3.php');
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
      <h1>Test de violencia</h1>


      <div class=" container-sp">
        <form id="formulario" method="post">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="contenido">
                  <p>¿Te impiden o prohíbe hacer algo que desees?</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta1" id="pregunta1" value="si" required>
                    <label class="form-check-label" for="">
                      Si
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta1" id="pregunta1" value="no">
                    <label class="form-check-label" for="">
                      No
                    </label>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="contenido">
                  <p>¿Las decisiones importantes las toma sin tener en cuenta tu opinión?</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta2" id="pregunta2" value="si">
                    <label class="form-check-label" for="">
                      Si
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta2" id="pregunta2" value="no">
                    <label class="form-check-label" for="">
                      No
                    </label>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="contenido">
                  <p> ¿Te sientes segura en tu casa?</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3" value="si">
                    <label class="form-check-label" for="">
                      Si
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3" value="no">
                    <label class="form-check-label" for="">
                      No
                    </label>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="contenido">
                  <p>¿Has presenciado o sufrido violencia en tu entorno familiar?</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta4" id="pregunta4" value="si">
                    <label class="form-check-label" for="">
                      Si
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta4" id="pregunta4" value="no">
                    <label class="form-check-label" for="">
                      No
                    </label>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="contenido">
                  <p>¿Has recibido amenazas de violencia física en los últimos seis meses?</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta5" id="pregunta5" value="si">
                    <label class="form-check-label" for="">
                      Si
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta5" id="pregunta5" value="no">
                    <label class="form-check-label" for="">
                      No
                    </label>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="contenido">
                  <p>¿Has sentido miedo de tu pareja o de alguien en tu entorno cercano?</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta6" id="pregunta6" value="si">
                    <label class="form-check-label" for="">
                      Si
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta6" id="pregunta6" value="no">
                    <label class="form-check-label" for="">
                      No
                    </label>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="contenido">
                  <p>¿Has sido restringido(a) físicamente para evitar que salgas de casa o te relaciones con otras personas?</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta7" id="pregunta7" value="si">
                    <label class="form-check-label" for="">
                      Si
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta7" id="pregunta7" value="no">
                    <label class="form-check-label" for="">
                      No
                    </label>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="contenido">
                  <p>¿Alguna vez has tenido que ocultar moretones?</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta8" id="pregunta8" value="si">
                    <label class="form-check-label" for="">
                      Si
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta8" id="pregunta8" value="no">
                    <label class="form-check-label" for="">
                      No
                    </label>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="contenido">
                  <p>¿En alguna ocasion te han humillado o te han criticado en publico o privado?",</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta9" id="pregunta9" value="si">
                    <label class="form-check-label" for="">
                      Si
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta9" id="pregunta9" value="no">
                    <label class="form-check-label" for="">
                      No
                    </label>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="contenido">
                  <p>¿Has presenciado o sufrido violencia en tu lugar de trabajo o estudio?</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta10" id="pregunta10" value="si">
                    <label class="form-check-label" for="">
                      Si
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta10" id="pregunta10" value="no">
                    <label class="form-check-label" for="">
                      No
                    </label>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="contenido">
                  <p>¿Has notado cambios en tu comportamiento, como aislamiento social o depresión, debido a situaciones de violencia?</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta11" id="pregunta11" value="si">
                    <label class="form-check-label" for="">
                      Si
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pregunta11" id="pregunta11" value="no">
                    <label class="form-check-label" for="">
                      No
                    </label>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="contenido">
                  <p>Enviar respuestas</p>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </div>
            </div>
            <div class="swiper-button-next" style="color: #fff;"></div>
            <div class="swiper-button-prev" style="color: #fff;"></div>
            <div class="swiper-pagination" style="color: #fff;"></div>
          </div>
        </form>
      </div>

      <article class="container mt-5 mb-5">
        <h2 class="text-center fw-bold">Violentometro</h2>
        <p>Tu seguridad y bienestar son nuestra prioridad. El Violentometro es una herramienta diseñada para ayudarte a evaluar si estás experimentando situaciones de violencia. Responde las siguientes preguntas de manera honesta y sincera, y el Violentometro te proporcionará una evaluación inicial de tu situación.</p>
        <p>El Violentometro no sustituye el asesoramiento profesional, pero puede ayudarte a reconocer patrones de comportamiento abusivo. Si tus respuestas indican que podrías estar sufriendo violencia, te recomendamos que busques apoyo de organizaciones especializadas en la prevención y atención a la violencia doméstica.</p>
        <p>Recuerda que no estás solo/a, hay personas dispuestas a ayudarte y brindarte el apoyo necesario. Juntos/as podemos romper el ciclo de la violencia y construir una vida segura y libre de maltrato. Siempre mereces vivir en un ambiente saludable y respetuoso.</p>
      </article>


      <section class="violentometro" id="violentometro">
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

      <br>

    </div>
  </main>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <?php include_once('templates/footer.php'); ?>

  <script src="../public/js/test.js"></script>
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