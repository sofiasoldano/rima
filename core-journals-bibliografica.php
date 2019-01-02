<?php $page_int = "bibliografica" ?>
<?php $nofilter = true ?>
<?php include('core-journals-submenu.php'); ?>

<div class="pedido-bibliografico">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">Pedido por cita bibliográfica</div>
                <div class="form-box">
                    <form>
                        <input type="text" placeholder="Ingrese el nombre o parte del nombre de la revista">
                        <input type="number" placeholder="Volumen">
                        <input type="number" placeholder="Año">
                        <input type="number" placeholder="Número">
                        <p>Páginas</p>
                        <div class="dropdown left">
                            <select name="desde">
                                <option value="" disabled selected hidden>Desde</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="dropdown left no-m">
                            <select name="hasta">
                                <option value="" disabled selected hidden>Hasta</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <input type="text" placeholder="Título del artículo">
                        <div class="caption">Si no conoce el nombre de la revista y los datos catalográficos, ingrese aquí el nombre del artículo.</div>
                        <input type="submit" href="#confirm" value="Enviar pedido" class="btn-full orange-bg js-open-modal"> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="confirm" class="modal">
    <div class="modal-bg js-close-modal"></div>
    <div class="modal-container">
        <div class="modal-body text-center">
            <a href="#" class="js-close-modal btn-close"><img src="img/icons/close.png" width="28"></a>
            <img class="icon-checked" src="img/icons/checked-orange.png" width="81">
            <div class="title">¡Bien hecho!</div>
            <div class="subtitle">Su pedido ha sido registrado con éxito</div>
            <a href="#" class="btn-full orange-bg js-close-modal">Entendido</a>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>