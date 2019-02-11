<?php $page_name = "premios" ?>
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
                        <li <?php if ( $page_int == "mis-premios" ) echo 'class="active blue"'; ?>>
                            <a href="premios-mis-premios.php">Mis Pemios</a>
                        </li>
                        <li <?php if ( $page_int == "que-son" ) echo 'class="active blue"'; ?>>
                            <a href="premios-que-son.php">Que son los Premios RIMA</a>
                        </li>
                        <li <?php if ( $page_int == "ranking" ) echo 'class="active blue"'; ?>>
                            <a href="premios-ranking.php">Ranking y premiación</a>
                        </li>
                    </ul>   
                </div>
            </div>
        </div>
    </div>
</section>