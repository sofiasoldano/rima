<?php $page_int = "profesionales" ?>

<?php include('perfil-submenu.php'); ?>
<?php include('indice.php'); ?>


<section class="datos-profesionales">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title hidden-xs">Datos profesionales</div>
                <div class="perfil-box">
                    <form>
                        <div class="half">
                            <label for="perfil">Perfil Profesional</label>
                            <div class="dropdown">
                                <select name="perfil">
                                    <option value="1">Especialista</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <label for="graduacion">Año de Graduación</label>
                            <div class="dropdown">
                                <select name="graduacion">
                                    <option value="1">1990</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <label for="especialidad">Especialidad</label>
                            <div class="dropdown">
                                <select name="especialidad">
                                    <option value="1">Cardiologo</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <label>Temas de interes</label>
                            <div class="intereses">
                                <ul>
                                    <li class="interes">Hipertensión renovascular <a href="#" class="btn-close"><img src="img/icons/close.png" width="20"></a></li>
                                    <li class="interes">Carfiología infantil <a href="#" class="btn-close"><img src="img/icons/close.png" width="20"></a></li>
                                    <li class="interes">Cardiopatías <a href="#" class="btn-close"><img src="img/icons/close.png" width="20"></a></li>
                                    <li><a href="#" class="underline">Agregar temas</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="half">
                            <label for="centro">Centro de salud en el que trabaja</label>
                            <input type="text" name="centro" value="Centro de Educación Médica e Investigaciones Clínicas">
                            <label for="cargo">Cargo</label>
                            <div class="dropdown">
                                <select name="cargo">
                                    <option value="1">Supervisor</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            
                            <label for="ingles">Nivel de Inglés</label>
                            <div class="dropdown">
                                <select name="ingles">
                                    <option value="1">Nivel Intermedio</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div class="radio-input">
                                <p>¿Es Usted docente universitario de pre o post grado?</p>
                                <input type="radio" name="univ" value="no" checked> No
                                <input type="radio" name="univ" value="si"> Si
                            </div>
                            <div class="radio-input">
                                <p>¿Tiene Publicaciones en revistas médicas sobre su principal tema de interés?</p>
                                <input type="radio" name="publi" value="no" checked> No
                                <input type="radio" name="publi" value="si"> Si
                            </div>
                            <input type="submit" value="Actualizar datos" class="btn-full blue-bg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
