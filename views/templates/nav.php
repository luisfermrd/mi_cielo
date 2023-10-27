</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img">
            <?php
            if ($_SESSION['role'] == 1) {
            ?>
                <img src="<?php echo $ruta == "" ? "" : $ruta; ?>../public/img/mi_cielo.png" alt="mi cielo">
            <?php
            }
            ?>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <?php
                if ($_SESSION['role'] == 1) {
                ?>
                    <a href="<?php echo $ruta == "" ? "" : $ruta; ?>home.php" class="nav_logo"> <i class='bx bxs-hand nav_logo-icon'></i><span class="nav_logo-name">Mi cielo</span> </a>
                    <div class="nav_list">
                        <a href="<?php echo $ruta == "" ? "" : $ruta; ?>mi_diario.php" class="nav_link <?php echo $pagine_active == "mi_diario" ? "active" : ""; ?>">
                            <i class='bx bx-book-heart nav_icon'></i>
                            <span class="nav_name">Mi diario</span>
                        </a>
                        <a href="<?php echo $ruta == "" ? "" : $ruta; ?>test_de_violencia.php" class="nav_link <?php echo $pagine_active == "test_de_violencia" ? "active" : ""; ?>">
                            <i class='bx bx-list-ul nav_icon'></i>
                            <span class="nav_name">Test de violencia</span>
                        </a>
                        <a href="<?php echo $ruta == "" ? "" : $ruta; ?>recursos_de_ayuda.php" class="nav_link <?php echo $pagine_active == "recursos_de_ayuda" ? "active" : ""; ?>">
                            <i class='bx bxs-phone-call nav_icon'></i>
                            <span class="nav_name">Recursos de ayuda</span>
                        </a>
                        <a href="<?php echo $ruta == "" ? "" : $ruta; ?>plan_de_seguridad.php" class="nav_link <?php echo $pagine_active == "plan_de_seguridad" ? "active" : ""; ?>">
                            <i class='bx bxs-lock nav_icon'></i>
                            <span class="nav_name">Plan de seguridad</span>
                        </a>
                        <a href="<?php echo $ruta == "" ? "" : $ruta; ?>reportes.php" class="nav_link <?php echo $pagine_active == "reportes" ? "active" : ""; ?>">
                            <i class='bx bxs-customize nav_icon'></i>
                            <span class="nav_name">Reportes</span>
                        </a>
                        <a href="<?php echo $ruta == "" ? "" : $ruta; ?>testimonio.php" class="nav_link <?php echo $pagine_active == "testimonio" ? "active" : ""; ?>">
                            <i class='bx bxs-message-rounded-detail nav_icon'></i>
                            <span class="nav_name">Testimonio</span>
                        </a>
                        <a href="<?php echo $ruta == "" ? "" : $ruta; ?>perfil.php" class="nav_link <?php echo $pagine_active == "perfil" ? "active" : ""; ?>">
                            <i class='bx bxs-user-circle nav_icon'></i>
                            <span class="nav_name">Perfil</span>
                        </a>
                    </div>
            </div>
            <a href="<?php echo $ruta == "" ? "" : $ruta; ?>../controller/salir.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Cerrar sesión</span> </a>
        <?php
                } else {
        ?>

            <a href="<?php echo $ruta == "" ? "" : $ruta; ?>home.php" class="nav_logo"> <i class='bx bx-customize nav_logo-icon'></i><span class="nav_logo-name">Administrador</span> </a>
            <div class="nav_list">
                <a href="<?php echo $ruta == "" ? "" : $ruta; ?>users.php" class="nav_link <?php echo $pagine_active == "users" ? "active" : ""; ?>">
                    <i class='bx bxs-user-circle nav_icon'></i>
                    <span class="nav_name">Usuarios</span>
                </a>
                <a href="<?php echo $ruta == "" ? "" : $ruta; ?>reports.php" class="nav_link <?php echo $pagine_active == "reports" ? "active" : ""; ?>">
                    <i class='bx bx-list-ul nav_icon'></i>
                    <span class="nav_name">Reportes</span>
                </a>
                </a>
                <a href="<?php echo $ruta == "" ? "" : $ruta; ?>chat.php" class="nav_link <?php echo $pagine_active == "chat" ? "active" : ""; ?>">
                    <i class='bx bxs-conversation nav_icon'></i>
                    <span class="nav_name">Chat</span>
                </a>
                <a href="<?php echo $ruta == "" ? "" : $ruta; ?>testimonio.php" class="nav_link <?php echo $pagine_active == "testimonio" ? "active" : ""; ?>">
                    <i class='bx bxs-message-rounded-detail nav_icon'></i>
                    <span class="nav_name">Testimonio</span>
                </a>
            </div>
    </div>
    <a href="<?php echo $ruta == "" ? "" : $ruta; ?>../../controller/salir.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Cerrar sesión</span> </a>
<?php
                }
?>

</nav>
</div>