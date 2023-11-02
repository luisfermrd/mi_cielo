<?php
ob_start();
session_start();

if (!isset($_SESSION["id_user"]) || $_SESSION["role"] != 1) {
    header("Location: ../index.html");
} else {
    $pagine_active = basename($_SERVER['PHP_SELF'], '.php');
    include_once('templates/header.php');
?>
    <link rel="stylesheet" href="../public/css/slide-testimonios.css">
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
            <h1 style="text-align: center;">Perfil del usuario</h1>
            <section class="container mb-5">
                <div class="row g-3 mb-5">
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Identificacion</label>
                        <input type="text" class="form-control" id="identificacion" name="identificacion" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="departamento" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="correo" name="correo" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="telefono" class="form-label">Edad</label>
                        <input type="text" class="form-control" id="edad" name="edad" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="ubicacion" class="form-label">Ubicacion</label>
                        <input type="text" class="form-control" id="ubicacion" name="ubicacion" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="ubicacion" class="form-label">Genero</label>
                        <input type="text" class="form-control" id="genero" name="genero" disabled>
                    </div>
                </div>
                <hr>
                <br>
                <h3>Contactos de emergencia</h3>
                <p>Puedes agregar 3 numeros como contacto de emergencia, a la hora que presiones el bonto de S.O.S se les enviara un mensaje de texto para que se pongan en contacto con las autoridades pertinentes.</p>
                <br>
                <table class="table table-hover">
                    <thead >
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Numero</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Opcion</th>
                        </tr>
                    </thead>
                    <tbody id="tableData">
                        
                    </tbody>
                </table>

                <div class="d-flex align-items-center g-5">
                    <button type="button" id="abrirModal" class="btn btn-success me-3">Agregar</button>
                    <a class="btn btn-primary" href="home.php">Volver al inicio</a>
                </div>


            </section>
            <section id="modal_container" class="modal-container">
                <div class="modal">
                    <div class="img_logo">
                        <img src="../public/img/icon.png" alt="mi cielo">
                    </div>
                    <div class="modal-header mt-3">
                        <h5 class="modal-title">Registrar nuevo contacto de emergencia</h5>
                    </div>
                    <div class="modal-body" style="text-align: start;">
                        <form method="post" id="formulario">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="numero" class="form-label">Numero de telefono</label>
                                <div class="row">
                                    <div class="col-4">
                                        <select class="form-control" name="indicativo">
                                            <option value="+1">+1 (Estados Unidos y Canadá)</option>
                                            <option value="+52">+52 (México)</option>
                                            <option value="+54">+54 (Argentina)</option>
                                            <option value="+55">+55 (Brasil)</option>
                                            <option value="+56">+56 (Chile)</option>
                                            <option value="+57" selected>+57 (Colombia)</option>
                                            <option value="+58">+58 (Venezuela)</option>
                                            <option value="+51">+51 (Perú)</option>
                                            <option value="+502">+502 (Guatemala)</option>
                                            <option value="+503">+503 (El Salvador)</option>
                                            <!-- Agrega más opciones según sea necesario -->
                                        </select>
                                    </div>
                                    <div class="col-8">
                                        <input type="tel" class="form-control" id="numero" name="numero" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electronico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="modal-footer">
                                <div class="botones">
                                    <button id="closeModal" class="btn btn-primary" style="position: relative; padding-left: 35px;">
                                        <i class='bx bx-x icon'></i>
                                        Cerrar
                                    </button>
                                    <button id="registrarContacto" type="submit" class="btn btn-primary" style="position: relative; padding-left: 35px;">
                                        <i class='bx bxs-save icon'></i>
                                        Guardar contacto
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>


                </div>
            </section>
            <br>
            <br>
            <br>
        </div>
    </main>

    <?php include_once('templates/footer.php'); ?>
    <script src="../public/js/loader.js"></script>
    <script src="../public/js/menu.js"></script>
    <script src="../public/js/perfil.js"></script>
    <script src="../public/js/sos.js"></script>
    <script src="../public/js/chat.js"></script>


    </body>

    </html>

<?php
}
ob_end_flush();
?>