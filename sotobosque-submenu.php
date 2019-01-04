<?php $page_name = "sotobosque" ?>
<?php include('header.php'); ?>

<section class="submenu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php include('academica-menu.php'); ?>
            </div>
            <div class="col-md-12">
                <div class="main-title text-center">Sotobosque <a href="#" class="js-open-modal"><img src="img/icons/alert.png" width="20"></a></div>
            </div>
            <div class="col-md-12">
                <div class="submenu-tabs left">
                    <ul>
                        <li <?php if ( $page_int == "destacado" ) echo 'class="active blue"'; ?>>
                            <a href="sotobosque-destacado.php">Destacado</a>
                        </li>
                        <li <?php if ( $page_int == "todos" ) echo 'class="active blue"'; ?>>
                            <a href="sotobosque-todos.php">Todos</a>
                        </li>
                        <li <?php if ( $page_int == "novedades" ) echo 'class="active blue"'; ?>>
                            <a href="sotobosque-novedades.php">Novedades</a>
                        </li>
                    </ul>   
                </div>
            </div>
        </div>
    </div>
</section>
