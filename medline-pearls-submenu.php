<?php $page_name = "medline-pearls" ?>
<?php include('header.php'); ?>

<section class="submenu mb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php include('academica-menu.php'); ?>
            </div>
            <div class="col-md-12">
                <div class="main-title text-center">Medline Pearls <a href="#"><img src="img/icons/alert.png" width="20"></a></div>
            </div>
            <div class="col-md-12">
                <div class="submenu-tabs left">
                    <ul>
                        <li <?php if ( $page_int == "sinopsis" ) echo 'class="active purple"'; ?>>
                            <a href="medline-pearls-sinopsis.php">Sinopsis</a>
                        </li>
                        <li <?php if ( $page_int == "multimedia" ) echo 'class="active purple"'; ?>>
                            <a href="medline-pearls-multimedia.php">Evidencia multimedia</a>
                        </li>
                        <li <?php if ( $page_int == "glosario" ) echo 'class="active purple"'; ?>>
                            <a href="medline-pearls-glosario.php">Glosario</a>
                        </li>
                        <li <?php if ( $page_int == "evidencia" ) echo 'class="active purple"'; ?>>
                            <a href="medline-pearls-evidencia.php">Nivel de evidencia</a>
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