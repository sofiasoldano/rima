<?php $page_int = "personales" ?>

<?php include('perfil-submenu.php'); ?>
<?php include('indice.php'); ?>


<section class="datos-personales">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title hidden-xs">Datos personales</div>
                <div class="perfil-box">
                    <form>
                        <div>
                            <div class="upload-image">
                                <a href="#" class="photo">
                                    <img src="img/profile-pic-large.png">
                                </a>
                                <a class="subir" href="#">Cambiar foto</a>
                            </div>
                        </div>
                        <div>
                            <label for="tratamiento">Tratamiento</label>
                            <div class="dropdown">
                                <select name="tratamiento">
                                    <option value="dr">Dr</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" value="Hornos" >
                            <label for="Nombre">Nombre</label>
                            <input type="text" name="nombre" value="Eduardo">
                            <label for="nacimiento">Año de nacimiento</label>
                            <input type="text" name="nacimiento" value="22 - 12 - 1990">
                        </div>
                        <div>
                            <label for="pais">País en el que reside</label>
                            <div class="dropdown">
                                <select name="pais">
                                    <option value="1">Argentina</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <label for="ciudad">Ciudad en la que vive</label>
                            <div class="dropdown">
                                <select name="ciudad">
                                    <option value="1">Buenos Aires</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <label for="email">Dirección de e-mail</label>
                            <input type="email" name="email" value="Hornos@campusrima.com">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" name="telefono" value="011 - 56423772">
                            <input type="submit" value="Actualizar datos" class="btn-full blue-bg">
                        </div>
                    </form>
                </div>
                <div class="text-center hidden-md">
                    <a href="#" class="cerrar-sesion">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
