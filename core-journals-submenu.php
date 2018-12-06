<?php $page_name = "core-journals" ?>
<?php include('header.php'); ?>

<section class="submenu mb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="core-menu">
                    <ul>
                        <li class="active">
                            <a href="">
                                <img src="img/icons/core-1.png" class="img-responsive">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/icons/core-2.png" class="img-responsive">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/icons/core-3.png" class="img-responsive">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/icons/core-4.png" class="img-responsive">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/icons/core-5.png" class="img-responsive">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/icons/core-6.png" class="img-responsive">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/icons/core-7.png" class="img-responsive">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/icons/core-8.png" class="img-responsive">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="main-title text-center">Core Journals <a href="#"><img src="img/icons/alert.png" width="20"></a></div>
            </div>
            <div class="col-md-12">
                <div class="core-tabs left">
                    <ul>
                        <li <?php if ( $core_int == "inicio" ) echo 'class="active orange"'; ?>>
                            <a href="core-journals-inicio.php">Inicio</a>
                        </li>
                        <li <?php if ( $core_int == "ranking" ) echo 'class="active orange"'; ?>>
                            <a href="core-journals-ranking.php">Ranking</a>
                        </li>
                        <li <?php if ( $core_int == "core" ) echo 'class="active orange"'; ?>>
                            <a href="core-journals-core.php">Mi Core</a>
                        </li>
                        <li <?php if ( $core_int == "acceso" ) echo 'class="active orange"'; ?>>
                            <a href="core-journals-acceso.php">Acceso libre</a>
                        </li>
                        <li <?php if ( $core_int == "todas" ) echo 'class="active orange"'; ?>>
                            <a href="core-journals-todas.php">Todas</a>
                        </li>
                        <li <?php if ( $core_int == "bibliografica" ) echo 'class="active orange"'; ?>>
                            <a href="core-journals-bibliografica.php">Pedido por cita bibliografica</a>
                        </li>
                    </ul>   
                </div>
                <div class="dropdown right">
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