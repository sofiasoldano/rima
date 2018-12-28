<?php $page_name = "login" ?>
<?php include('header.php'); ?>

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login-box">
                    <div class="dropdown select-language">
                        <select name="lan">
                            <option value="esp">ESP</option>
                            <option value="esp">ESP</option>
                            <option value="esp">ESP</option>
                        </select>
                    </div>
                    <img src="img/logo-large.png" width="217">
                    <div class="login-title">Ingresa tus datos para poder acceder </div>
                    <form>
                        <input type="text" placeholder="Usuario">
                        <input type="password" placeholder="Contraseña">
                        <a href="#" class="forgot-pass underline">Recuperar contraseña</a>
                        <input type="submit" value="Ingresar" class="btn-full blue-bg"> 
                    </form>
                    
                    <div class="bottom-info">
                        <div class="code">
                            <p>Tengo mi <span class="blue">Código Llave</span> para registrarme.</p>
                            <input class="number" placeholder="Ingresar código aquí">
                            <a class="btn-full blue-bg"><img src="img/icons/arrow-next-white.png" width="10"></a>
                        </div>
                        <div class="access">
                            <p class="left">Me interesa postularme para poder acceder al portal RIMA</p><a href="#" class="right blue underline js-open-register">Solicitar acceso</a>
                        </div>
                    </div>
                </div>
                <div class="register-box hidden">
                    <a href="#" class="btn-full blue-bg back-btn js-open-login"><img src="img/icons/arrow-back-white.png" width="10"></a>
                    <div class="dropdown select-language">
                        <select name="lan">
                            <option value="esp">ESP</option>
                            <option value="esp">ESP</option>
                            <option value="esp">ESP</option>
                        </select>
                    </div>
                    <img src="img/logo-large.png" width="217">
                    <div class="login-title">Ingresa tus datos para comenzar el registro </div>
                    <form>
                        <div class="dropdown">
                            <select name="tratamiento">
                                <option value="tratamiento" disabled selected hidden>Tratamiento</option>
                                <option value="tratamiento">Tratamiento</option>
                                <option value="tratamiento">Tratamiento</option>
                            </select>
                        </div>
                        <input type="text" placeholder="Apellido">
                        <input type="text" placeholder="Nombre">
                        <input type="email" placeholder="Dirección de e-mail">
                        <input type="submit" value="Registrarme" class="btn-full blue-bg"> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="info">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title blue sm">¿Qué es RIMA?</div>
                <div class="subtitle">Estrategia Global</div>
                <p>Creamos sistemas de información científica en cada especialidad con los más altos estándares de calidad internacional y excelencia operativa, para promover la mejora de las competencias clínicas, la calidad en la atención de los pacientes y la equidad en la salud pública de Iberoamérica. </p>
                <div class="subtitle">Postulado Ético</div>
                <p>Contribuir con nuestros mayores esfuerzos profesionales a prevenir enfermedades con responsabilidad social, curar con profesionalismo, prolongar la vida con dignidad o aliviar con respeto el dolor de quien aún no tiene remedio. </p>
                <div class="subtitle">Principales Valores:</div>
                <p>Excelencia – Cercanía - Practicidad </p>
            </div>
            <div class="col-md-6">
                <div class="title blue sm">Contacto directo</div>
                <form>
                    <label for="name">Nombre</label>
                    <input type="text" id="name">
                    <label for="mail">E-Mail</label>
                    <input type="email" id="mail">
                    <label for="message">Comentario</label>
                    <textarea id="message"></textarea>
                    <input type="submit" value="Enviar" class="btn-full blue-bg">
                </form>
            </div>
        </div>
    </div>
</section>

<section class="partners">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box-logos">
                    <ul>
                        <li><img src="img/partner1.png" class="img-responsive"></li>
                        <li><img src="img/partner2.png" class="img-responsive"></li>
                        <li><img src="img/partner3.png" class="img-responsive"></li>
                        <li><img src="img/partner4.png" class="img-responsive"></li>
                        <li><img src="img/partner5.png" class="img-responsive"></li>
                        <li><img src="img/partner6.png" class="img-responsive"></li>
                        <li><img src="img/partner7.png" class="img-responsive"></li>
                        <li><img src="img/partner8.png" class="img-responsive"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
