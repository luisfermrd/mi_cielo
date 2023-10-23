<?php
ob_start();
session_start();

if (!isset($_SESSION["id_user"]) || $_SESSION["role"] != 0) {
    header("Location: ../../../index.html");
} else {
    $pagine_active = basename($_SERVER['PHP_SELF'], '.php');
    include_once('../../templates/header4.php');
?>
    <?php
    $ruta = "../";
    include_once('../../templates/nav.php');
    ?>
   
    <main>
        <input type="hidden" id="id_user_pagine" name="id_user_pagine" value="<?php echo $_GET['id'] ?>">
        <?php
        include_once('../../templates/loader.php');
        ?>
        <!--Container Main start-->
        <div class="height-100 bg-light">
            <h1 class="m-5 text-center">Detalles del usuario</h1>
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
                    <div class="col-md-6 mb-5">
                        <label for="ubicacion" class="form-label">Fecha/Hora de creacion de cuenta</label>
                        <input type="text" class="form-control" id="fecha" name="fecha" disabled>
                    </div>
                </div>
                <a class="btn btn-primary mb-5" href="../users.php" role="button">Volver</a>
            </section>
        </div>
    </main>

    <?php include_once('../../templates/footer.php'); ?>

    <script src="../../../public/js/menu.js"></script>
    <script src="../../../public/js/loader.js"></script>
    <script src="../../../public/js/admin/detail.js"></script>

    </body>

    </html>

<?php
}
ob_end_flush();
?>