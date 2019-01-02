<?php $page_int = "core" ?>
<?php include('core-journals-submenu.php'); ?>

<div class="mi-core">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">Mi core</div>
                
                <div class="folders-container">
                    <a href="#crear-carpeta" class="add-folder js-open-modal">
                        <img src="img/icons/add-folder.png" width="40">
                        <p>Nueva carpeta</p>
                    </a>
                    <a href="core-journals-core-single.php" class="folder pink">
                        <img src="img/icons/folder.png" width="47">
                        <p>Para compartir <span class="quantity">8 artículos</span></p>
                    </a>
                    <a href="core-journals-core-single.php" class="folder green">
                        <img src="img/icons/folder.png" width="47">
                        <p>Sin título <span class="quantity">18 artículos</span></p>
                    </a>
                    <a href="core-journals-core-single.php" class="folder light-blue">
                        <img src="img/icons/folder.png" width="47">
                        <p>Pediatría <span class="quantity">18 artículos</span></p>
                    </a>
                    <a href="core-journals-core-single.php" class="folder purple">
                        <img src="img/icons/folder.png" width="47">
                        <p>Temas varios <span class="quantity">18 artículos</span></p>
                    </a>
                    <a href="core-journals-core-single.php" class="folder red">
                        <img src="img/icons/folder.png" width="47">
                        <p>Sin título <span class="quantity">18 artículos</span></p>
                    </a>
                    <a href="core-journals-core-single.php" class="folder light-gray">
                        <img src="img/icons/folder.png" width="47">
                        <p>Sin título <span class="quantity">18 artículos</span></p>
                    </a>
                    <a href="core-journals-core-single.php" class="folder orange">
                        <img src="img/icons/folder.png" width="47">
                        <p>Favoritas <span class="quantity">18 artículos</span></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="crear-carpeta" class="modal">
    <div class="modal-bg js-close-modal"></div>
    <div class="modal-container">
        <div class="modal-body text-center">
            <a href="#" class="js-close-modal btn-close"><img src="img/icons/close.png" width="28"></a>
            <div class="title">Creá una nueva carpeta</div>
            <input type="text" placeholder="Ingrese un nombre">
            <p>Asignale un color</p>
            <ul class="colors">
                <li><a class="color orange" href="#"></a></li>
                <li><a class="color red" href="#"></a></li>
                <li><a class="color pink" href="#"></a></li>
                <li><a class="color green" href="#"></a></li>
                <li><a class="color light-blue" href="#"></a></li>
                <li><a class="color purple" href="#"></a></li>
            </ul>
            <a href="#" class="btn-full orange-bg">Crear carpeta</a>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>