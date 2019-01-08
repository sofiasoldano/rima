<?php $page_name = "calendario" ?>
<?php include('header.php'); ?>



<section class="calendario">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <div class="title">Calendario de eventos</div>
                    <a href="#publicar-evento" class="right small border-btn blue hidden-xs js-open-modal"><p>Publicar un evento</p></a>
                </div>
                <div class="uppercase-subtitle left blue hidden-xs">Agosto</div>
                <div class="month-indicator">
                    <ul>
                        <li><a href="#"><img src="img/icons/page-prev-gray.png" width="10"></a></li>
                        <li><p class="month">Agosto 2018</p></li>
                        <li><a href="#"><img src="img/icons/page-next-gray.png" width="10"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="events">
                    <div class="day">Lunes 13</div>
                    <a href="#event-info" class="js-open-modal">
                    <div class="main-block">
                        <div class="hour">13hrs</div>
                        <div class="info">
                            <div class="category">Congreso</div>
                            <div class="name">American Society of Pediatric Neurosurgeons Annual Meeting (ASPN 2019)</div>
                            <div class="place">Hawaii, Estados Unidos</div>
                        </div>
                        </div></a>
                    <a href="#event-info" class="js-open-modal">
                    <div class="main-block">
                        <div class="hour">21hrs</div>
                        <div class="info">
                            <div class="category">Curso</div>
                            <div class="name">7th Pediatric And Neonatal International Conference UHS</div>
                            <div class="place">Hawaii, Estados Unidos</div>
                        </div>
                        </div></a>
                </div>
                <div class="events">
                    <div class="day">Martes 14</div>
                    <a href="#event-info" class="js-open-modal">
                    <div class="main-block active">
                        <div class="hour">19hrs</div>
                        <div class="info">
                            <div class="category">WEBINAR EN VIVO</div>
                            <div class="name">Actualización en Otorrinolaringología Pediátrica</div>
                            <div class="place">Hawaii, Estados Unidos</div>
                        </div>
                    </div>
                    </a>
                    <a href="#event-info" class="js-open-modal">
                    <div class="main-block">
                        <div class="hour">20hrs</div>
                        <div class="info">
                            <div class="category">Congreso</div>
                            <div class="name">British Society for Haematology (BSH) Paediatric Symposium</div>
                            <div class="place">Hawaii, Estados Unidos</div>
                        </div>
                    </div>
                    </a>
                    <a href="#event-info" class="js-open-modal">
                    <div class="main-block">
                        <div class="hour">17hrs</div>
                        <div class="info">
                            <div class="category">Curso</div>
                            <div class="name">Liga de Intervención Nutricional contra Autismo e Hiperactividad A.C. (LINCA)</div>
                            <div class="place">Hawaii, Estados Unidos</div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="events">
                    <div class="day">Viernes 28</div>
                    <a href="#event-info" class="js-open-modal">
                    <div class="main-block">
                        <div class="hour">13hrs</div>
                        <div class="info">
                            <div class="category">Jornada</div>
                            <div class="name">American Society of Pediatric Neurosurgeons Annual Meeting (ASPN 2019)</div>
                            <div class="place">Hawaii, Estados Unidos</div>
                        </div>
                    </div>
                    </a>
                    <a href="#event-info" class="js-open-modal">
                    <div class="main-block">
                        <div class="hour">21hrs</div>
                        <div class="info">
                            <div class="category">Congreso</div>
                            <div class="name">1st LAUNCH: Lung Ultrasound in Neonates and Children</div>
                            <div class="place">Hawaii, Estados Unidos</div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="event-info" class="modal">
    <div class="modal-bg js-close-modal"></div>
    <div class="modal-container">
        <div class="modal-body">
            <div class="heading">
                <div class="title">Taller de Control de Daño en Paciente Pediátrico</div>
                <a href="#" class="js-close-modal btn-close"><img src="img/icons/close.png" width="28"></a>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.755262612391!2d-58.44305278417094!3d-34.61034966535731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca14b9849b47%3A0xa7644f2009747fcf!2sUniversidad+Maim%C3%B3nides!5e0!3m2!1ses!2sar!4v1546961985668" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="content">
                <div class="item">
                    <div class="icon"><img src="img/icons/calendar2.png" width="21"></div>
                    <div class="info">
                        <p><b>Fechas:</b></p>
                        <p>26/11/2018 - 27/11/2018</p>
                    </div>
                </div>
                <div class="item">
                    <div class="icon"><img src="img/icons/flag.png" width="18"></div>
                    <div class="info">
                        <p><b>Tipo De Evento:</b></p>
                        <p>Taller</p>
                    </div>
                </div>
                <div class="item">
                    <div class="icon"><img src="img/icons/location.png" width="20"></div>
                    <div class="info">
                        <p><b>Ubicación:</b></p>
                        <p>Universidad Maimónides. Auditorio Del 1° Piso.</p>
                        <p>Hidalgo 775. Caba</p>
                    </div>
                </div>
                <div class="item">
                    <div class="icon"><img src="img/icons/user.png" width="20"></div>
                    <div class="info">
                        <p><b>Organiza:</b></p>
                        <p>Universidad Maimónides</p>
                    </div>
                </div>
                <div class="item">
                    <div class="icon"><img src="img/icons/envelope.png" width="22"></div>
                    <div class="info">
                        <p><b>Contacto:</b></p>
                        <p>Informes@maimonides.edu</p>
                    </div>
                </div>
                <div class="bottom">
                    <ul>
                        <li><a href="#"><img src="img/icons/share.png" width="16">Compartir evento</a></li>
                        <li><a href="#"><img src="img/icons/bookmark.png" width="14">Guardar evento</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div id="publicar-evento" class="modal">
    <div class="modal-bg js-close-modal"></div>
    <div class="modal-container">
        <div class="modal-body text-center">
            <a href="#" class="js-close-modal btn-close"><img src="img/icons/close.png" width="28"></a>
            <div class="title">Publicar un evento</div>
            <div class="calendar">
                <input type="text" name="date" placeholder="Fecha de publicación del evento">
            </div>
            <input type="text" name="titulo" placeholder="Título del evento">
            <input type="text" name="entidad" placeholder="Entidad que organiza el evento">
            <input type="email" name="email" placeholder="E-mail del organizador">
            <div class="dropdown">
                <select name="especialidades">
                    <option hidden selected disabled value="especialidades">Especialidades</option>
                    <option value="especialidades">Especialidades</option>
                    <option value="especialidades">Especialidades</option>
                    <option value="especialidades">Especialidades</option>
                </select>
            </div>
            <div class="dropdown">
                <select name="pais">
                    <option hidden selected disabled value="pais">País</option>
                    <option value="pais">País</option>
                    <option value="pais">País</option>
                    <option value="pais">País</option>
                </select>
            </div>
            
            <a href="#" class="upload-content blue underline">Subir contenido relacionado</a>

            <a href="#" class="btn-full small blue-bg">Publicar</a>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>