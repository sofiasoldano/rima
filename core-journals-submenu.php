<?php $page_name = "core-journals" ?>
<?php include('header.php'); ?>

<section class="submenu mb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php include('academica-menu.php'); ?>
            </div>
            <div class="col-md-12">
                <div class="main-title text-center">Core Journals <a href="#info" class="js-open-modal"><img src="img/icons/alert.png" width="20"></a></div>
            </div>
            <div class="col-md-12">
                <div class="submenu-tabs left">
                    <ul>
                        <li <?php if ( $page_int == "inicio" ) echo 'class="active orange"'; ?>>
                            <a href="core-journals-inicio.php">Inicio</a>
                        </li>
                        <li <?php if ( $page_int == "ranking" ) echo 'class="active orange"'; ?>>
                            <a href="core-journals-ranking.php">Ranking</a>
                        </li>
                        <li <?php if ( $page_int == "core" ) echo 'class="active orange"'; ?>>
                            <a href="core-journals-core.php">Mi Core</a>
                        </li>
                        <li <?php if ( $page_int == "acceso" ) echo 'class="active orange"'; ?>>
                            <a href="core-journals-acceso.php">Acceso libre</a>
                        </li>
                        <li <?php if ( $page_int == "todas" ) echo 'class="active orange"'; ?>>
                            <a href="core-journals-todas.php">Todas</a>
                        </li>
                        <li <?php if ( $page_int == "bibliografica" ) echo 'class="active orange"'; ?>>
                            <a href="core-journals-bibliografica.php">Pedido por cita bibliografica</a>
                        </li>
                    </ul>   
                </div>
                <div 
                    <?php 
                         if (isset($nofilter)){ 
                             echo 'class="dropdown right hidden-xs"';
                         } else{
                             echo 'class="dropdown right"';
                         } 
                    ?>
                >
                    <select name="rubros">
                        <option value="cardiologia">Cardiologia</option>
                        <option value="cardiologia">Cardiologia</option>
                        <option value="cardiologia">Cardiologia</option>
                        <option value="cardiologia">Cardiologia</option>
                        <option value="cardiologia">Cardiologia</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal" id="info">
    <div class="modal-bg js-close-modal"></div>
    <div class="modal-container">
        <div class="modal-body text-center">
            <a href="#" class="js-close-modal btn-close"><img src="img/icons/close.png" width="28"></a>
            <img class="academica-icon" src="img/icons/core-1.png" width="65">
            <div class="title">Instituto Core Journals</div>
            <p>Una de las hemerotecas electrónicas más grandes del mundo.<br class="hidden-xs"> Brinda acceso gratuito a su acervo compuesto por más de 2200  revistas internacionales, clasificadas en 54 especialidades, con acceso a 11 años retrospectivos.</p>
            <div class="video">
                <img src="img/info-video.png" class="img-responsive">
                <a class="play-btn" href="#"><img src="img/icons/play.png" width="61"></a>
            </div>
        </div>
    </div>
</div>