<?php $page_name = "rima-tv" ?>
<?php include('header.php'); ?>

<section class="submenu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php include('academica-menu.php'); ?>
            </div>
            <div class="col-md-12">
                <div class="main-title text-center">RimaTV <a href="#"><img src="img/icons/alert.png" width="20"></a></div>
            </div>
            <div class="col-md-12">
                <div class="submenu-tabs left">
                    <ul>
                        <li <?php if ( $page_int == "inicio" ) echo 'class="active blue"'; ?>>
                            <a href="rima-tv-inicio.php">Inicio</a>
                        </li>
                        <li <?php if ( $page_int == "todos" ) echo 'class="active blue"'; ?>>
                            <a href="rima-tv-todos.php">Todos los videos</a>
                        </li>
                        
           
                    </ul>   
                </div>
                <div class="dropdown right hidden-xs">
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