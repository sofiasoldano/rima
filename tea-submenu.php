<?php $page_name = "tea" ?>
<?php include('header.php'); ?>

<section class="submenu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title text-center">Premios RIMA <a href="#"><img src="img/icons/alert.png" width="20"></a></div>
            </div>
            <div class="col-md-12">
                <div class="submenu-tabs left">
                    <ul>
                        <li <?php if ( $page_int == "inicio" ) echo 'class="active black"'; ?>>
                            <a href="tea-inicio.php">Inicio</a>
                        </li>
                        <li <?php if ( $page_int == "invitaciones" ) echo 'class="active black"'; ?>>
                            <a href="tea-invitaciones.php">Invitaciones</a>
                        </li>
                      
                    </ul>   
                </div>
            </div>
        </div>
    </div>
</section>