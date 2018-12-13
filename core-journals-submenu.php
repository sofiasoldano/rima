<?php $page_name = "core-journals" ?>
<?php include('header.php'); ?>

<section class="submenu mb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php include('academica-menu.php'); ?>
            </div>
            <div class="col-md-12">
                <div class="main-title text-center">Core Journals <a href="#"><img src="img/icons/alert.png" width="20"></a></div>
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