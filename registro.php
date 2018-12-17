<?php $page_name = "registro" ?>
<?php include('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="title">Bienvenido a <b>RIMA</b></div>
            <p>Por favor, complete los siguientes datos:</p>
            
            <div class="registro-process">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true"><p>Datos personales</p></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profesional-tab" data-toggle="tab" href="#profesional" role="tab" aria-controls="profesional" aria-selected="false"><p>Datos profesionales</p></a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                    <form>
                        <div>
                            <div class="upload-image">
                                <a href="#" class="photo">
                                    +
                                </a>
                                <a class="subir" href="#">Subir foto</a>
                            </div>
                        </div>
                        <div>
                            <div class="dropdown">
                                <select name="tratamiento">
                                    <option value="" disabled selected hidden>Tratamiento</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <input type="text" name="apellido" placeholder="Apellido">
                            <input type="text" name="nombre" placeholder="Nombre">
                            <input type="number" name="nacimiento" placeholder="Año de nacimiento">
                        </div>
                        <div>
                            <div class="dropdown">
                                <select name="pais">
                                    <option value="" disabled selected hidden>País en el que reside</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div class="dropdown">
                                <select name="ciudad">
                                    <option value="" disabled selected hidden>Ciudad en la que vive</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <input type="email" name="email" placeholder="Dirección de e-mail">
                            <input type="tel" name="telefono" placeholder="Teléfono">
                            <input type="submit" value="Siguiente" class="btn-full blue-bg">
                        </div>
                    </form>
                  </div>
                  <div class="tab-pane fade" id="profesional" role="tabpanel" aria-labelledby="profesional-tab">
                    <form>
                        <div class="half">
                            <div class="dropdown">
                                <select name="perfil">
                                    <option value="" disabled selected hidden>Perfil Profesional</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div class="dropdown">
                                <select name="graduacion">
                                    <option value="" disabled selected hidden>Año de Graduación</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div class="dropdown">
                                <select name="especialidad">
                                    <option value="" disabled selected hidden>Especialidad</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div class="dropdown">
                                <select name="interes">
                                    <option value="" disabled selected hidden>Temas de interés</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>
                        <div class="half">
                            <input type="text" name="centro" placeholder="Centro de salud en el que trabaja">
                            <div class="dropdown">
                                <select name="cargo">
                                    <option value="" disabled selected hidden>Cargo</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div class="dropdown">
                                <select name="ingles">
                                    <option value="" disabled selected hidden>Nivel de Inglés</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div class="radio-input">
                                <p>¿Es Usted docente universitario de pre o post grado?</p>
                                <input type="radio" name="univ" value="no"> No
                                <input type="radio" name="univ" value="si"> Si
                            </div>
                            <div class="radio-input">
                                <p>¿Tiene Publicaciones en revistas médicas sobre su principal tema de interés?</p>
                                <input type="radio" name="publi" value="no"> No
                                <input type="radio" name="publi" value="si"> Si
                            </div>
                            <input type="submit" value="Enviar datos" class="btn-full blue-bg">
                        </div>
                    </form>
                  </div>
                </div>  
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
