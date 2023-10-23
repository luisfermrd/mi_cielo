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
        <input type="hidden" id="id_report" name="id_report" value="<?php echo $_GET['id'] ?>">
        <?php
        include_once('../../templates/loader.php');
        ?>
        <!--Container Main start-->
        <div class="height-100 bg-light">
            <h1 class="m-5 text-center">Detalles del reporte</h1>
            <section class="container mb-5">
                <section class="container mb-5">
                    <form id="formulario" class="row g-3 mb-5">
                        <div class="col-md-6">
                            <label for="identificacion" class="form-label">Identificacion</label>
                            <input type="text" class="form-control" id="identificacion" name="identificacion" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="text" class="form-control" id="correo" name="correo" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="departamento" class="form-label">Departamento</label>
                            <input type="text" class="form-control" id="departamento" name="departamento" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="telefono" class="form-label">Numero de telefono</label>
                            <input type="number" class="form-control" id="telefono" name="telefono" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="ubicacion" class="form-label">Ubicacion</label>
                            <input type="text" class="form-control" id="ubicacion" name="ubicacion" disabled>
                        </div>
                        <div class="col-md-2">
                            <div class="mt-2">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" disabled>
                            </div>
                            <div class="mt-2">
                                <label for="hora" class="form-label">Hora</label>
                                <input type="time" class="form-control" id="hora" name="hora" disabled>
                            </div>
                            <label for="rb" class="form-label mt-3">Notifico a la policia</label>
                            <div class="form-check form-check-inline" id="rb">
                                <input class="form-check-input" type="radio" name="policia" id="policia" value="Si" disabled>
                                <label class="form-check-label" for="policia">Si</label>
                            </div>
                            <div class="form-check form-check-inline" id="rb">
                                <input class="form-check-input" type="radio" name="policia" id="policia" value="No" disabled>
                                <label class="form-check-label" for="policia">No</label>
                            </div>

                        </div>
                        <div class="col-md-10">
                            <div>
                                <label for="detalles" class="form-label">Detalles</label>
                                <textarea class="form-control" placeholder="Escriba los detalles del incidente" id="detalles" name="detalles" style="height: 200px" disabled></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="causas" class="form-label">Causas del incidente</label>
                            <textarea class="form-control" placeholder="Escriba las causas del incidente" id="causas" name="causas" style="height: 60px" disabled></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="recomendaciones" class="form-label">Recomendaciones de seguimiento</label>
                            <textarea class="form-control" placeholder="Escriba las recomendaciones del incidente" id="recomendaciones" name="recomendaciones" style="height: 60px" disabled></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="notas" class="form-label">Notas adicionales</label>
                            <textarea class="form-control" placeholder="Escriba las notas" id="notas" name="notas" style="height: 60px" disabled></textarea>
                        </div>
                        <div class="d-flex justify-content-center align-content-center">
                            <div class="text-center" style="width: 700px;">
                                <img id="imagen" src="" class="rounded img-fluid" alt="...">
                            </div>
                        </div>
                    </form>
                </section>
                <a class="btn btn-primary mb-5" href="../reports.php" role="button">Volver</a>
            </section>
        </div>
    </main>

    <?php include_once('../../templates/footer.php'); ?>

    <script src="../../../public/js/menu.js"></script>
    <script src="../../../public/js/loader.js"></script>
    <script src="../../../public/js/admin/reporte.js"></script>

    </body>

    </html>

<?php
}
ob_end_flush();
?>