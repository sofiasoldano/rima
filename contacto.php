<?php $page_name = "contacto" ?>
<?php include('header.php'); ?>



<section class="contacto">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-box">
                    <div class="column">
                        <img src="img/contact.png" width="158">
                        <div class="main-title">Contacto directo</div>
                        <p>Ponemos a su disposición un servicio de atención personalizado, a través del cual podrá obtener soporte técnico y ayuda, tanto para la navegación dentro del sitio como para cualquier otra duda.</p>
                    </div>
                    <div class="column">
                        <form>
                            <label for="name">Nombre y apellido</label>
                            <input type="text" id="name">
                            <label for="name">Selecciona un tema de tu consulta</label>
                            <div class="dropdown">
                                <select name="consulta">
                                    <option hidden selected disabled value="null"> </option>
                                    <option value="material">Como descargar material</option>
                                </select>
                            </div>
                            <label for="mail">Dirección de e-mail</label>
                            <input type="email" id="mail">
                            <label for="message">¿En qué podemos ayudarlo?</label>
                            <textarea id="message"></textarea>
                            <input type="submit" value="Enviar" class="btn-full blue-bg">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php'); ?>