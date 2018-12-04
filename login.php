<?php $page_name = "login" ?>
<?php include('header.php'); ?>

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login-box">
                    <img src="img/logo-large.png" width="351">
                    <div class="login-title">Ingresa tus datos para poder acceder </div>
                    <form>
                        <input type="text" placeholder="Usuario">
                        <input type="password" placeholder="Contraseña">
                        <a href="#" class="forgot-pass">Recuperar contraseña</a>
                        <input type="submit" value="Ingresar" class="btn-full blue-bg"> 
                    </form>
                    <p>Tengo mi <a href="#" class="blue">Código Llave</a> para registrarme. <a href="#" class="underline">Ingresar acá</a></p>
                    <div class="bottom-info">
                        <p class="left">Me interesa postularme para poder acceder al portal RIMA</p><a href="#" class="right blue underline">Solicitar acceso</a>
                    </div>
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
                    <input type="submit" value="Enviar" class="btn-full blue-bg right">
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
                        <li><img src="img/partner1.png"></li>
                        <li><img src="img/partner2.png"></li>
                        <li><img src="img/partner3.png"></li>
                        <li><img src="img/partner4.png"></li>
                        <li><img src="img/partner5.png"></li>
                        <li><img src="img/partner6.png"></li>
                        <li><img src="img/partner7.png"></li>
                        <li><img src="img/partner8.png"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
