<?php $page_int = "usuario" ?>

<?php include('perfil-submenu.php'); ?>
<?php include('indice.php'); ?>


<section class="datos-usuario">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title hidden-xs">Datos de usuario</div>
                <div class="perfil-box">
                    <form>
                        <div class="half">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="hola@hornos.com.ar">
                            <label for="usuario">Nombre de usuario</label>
                            <input type="text" name="usuario" value="E-Hornos">
                        </div>
                        <div class="half">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" value="aaaaaaaaaaa">
                            <p class="pass-info">Mínimo 6 caracteres y máximo 12 caracteres</p>
                            <label for="repeat-password">Repetir contraseña</label>
                            <input type="password" name="repeat-password" value="aaaaaaaaaaa">
                            <input type="submit" value="Actualizar datos" class="btn-full blue-bg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
