<?php
ob_start();
session_start();

if (!isset($_SESSION["id_user"]) || $_SESSION["role"] != 0) {
    header("Location: ../../index.html");
} else {
    $pagine_active = basename($_SERVER['PHP_SELF'], '.php');
    include_once('../templates/header2.php');
?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">

    <?php
    $ruta = "";
    include_once('../templates/nav.php');
    ?>
    <style>
        .pagination {
            --bs-pagination-hover-bg: #e0accc;
            --bs-pagination-active-bg: #e7008a;
            --bs-pagination-active-border-color: #e7008a;
        }
    </style>
    <main>
        <?php
        include_once('../templates/loader.php');
        ?>
        <!--Container Main start-->
        <div class="height-100 bg-light">
            <h1 class="m-5 text-center">Reportes</h1>
            <div class="">
                <table id="list" class="table table-striped display nowrap" style="width:100%">

                </table>
            </div>
        </div>
    </main>

    <?php include_once('../templates/footer.php'); ?>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="../../public/js/menu.js"></script>
    <script src="../../public/js/loader.js"></script>
    <script src="../../public/js/admin/reportes.js"></script>

    </body>

    </html>

<?php
}
ob_end_flush();
?>