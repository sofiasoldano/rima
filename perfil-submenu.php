<?php $page_name = "perfil" ?>
<?php include('header.php'); ?>

<section class="submenu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title text-center">Mi perfil</div>
            </div>
            <div class="col-md-12">
                <div class="submenu-tabs left">
                    <ul>
                        <li <?php if ( $page_int == "personales" ) echo 'class="active blue"'; ?>>
                            <a href="perfil-datos-personales.php">Datos personales</a>
                        </li>
                        <li <?php if ( $page_int == "profesionales" ) echo 'class="active blue"'; ?>>
                            <a href="perfil-datos-profesionales.php">Datos profesionales</a>
                        </li>
                        <li <?php if ( $page_int == "usuario" ) echo 'class="active blue"'; ?>>
                            <a href="perfil-datos-usuario.php">Datos de usuario</a>
                        </li>
                        <li <?php if ( $page_int == "notificaciones" ) echo 'class="active blue"'; ?>>
                            <a href="perfil-notificaciones.php">Notifiaciones</a>
                        </li>
                    </ul>   
                </div>
                <div class="right hidden-xs">
                    <a href="#" class="cerrar-sesion">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>
</section>