<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RIMA</title>

    <!-- Style -->
    <link href="css/vendors/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
      
  </head>

  <body class="page-<?php echo $page_name; ?>">

    <header>
        <div class="main-header">
            <div class="header-logos left">
                <img src="img/logo.png" width="120" class="main-logo img-responsive">
                <img src="img/nestle-logo.png" width="67" class="partner-logo img-responsive">
            </div>
            <div class="header-info right">
                <div class="language">
                    <div class="dropdown">
                        <select name="lan" class="">
                            <option value="esp">ESP</option>
                            <option value="esp">ESP</option>
                            <option value="esp">ESP</option>
                        </select>
                    </div>
                </div>
                <div class="search">
                    <form>
                        <input type="search" placeholder="Buscar por palabra clave, disciplina, etc..." class="input-search">
                        <button type="submit" value="Enviar" class="button-search"><img src="img/icons/search.png"  width="18"></button>
                        <div class="only-in hidden-xs">
                            <input type="checkbox" name="only">
                            <label for="only">Solo en Core Journals</label>
                        </div>
                    </form>
                </div>
                <div class="notifs">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="img/icons/envelope.png" width="22">
                            </a>
                        </li>
                        <li>
                            <a href="#notificaciones" class="new btn-notifications js-open-modal">
                                <img src="img/icons/bell.png" width="18">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="profile">
                    <a href="perfil-datos-personales.php">
                        <div class="picture left">
                            <img src="img/profile-pic.png" width="35" class="img-responsive">
                        </div>
                        <div class="data left">
                            <p class="name">Dr. Eduardo Hornos</p>
                            <p class="medal">Medalla de Plata <span class="credits"> - 4 créditos</span></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="menu-desktop">
            <div class="top">
                <div class="right">
                    <ul>
                        <li>
                            <a href="biblioteca.php">
                                <img src="img/icons/books-blue.png" width="19">
                                <p>Mi biblioteca</p>
                            </a>
                        </li>
                        <li>
                            <a href="actividad.php">
                                <img src="img/icons/graphic-blue.png" width="23">
                                <p>Mi actividad</p>
                            </a>
                        </li>
                        <li>
                            <a href="calendario.php">
                                <img src="img/icons/calendar-blue.png" width="25">
                                <p>Eventos</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bottom">
                <div class="header-bg"></div>
                <a href="#" class="world-menu">
                    <img src="img/world.png" width="75">
                </a>
            </div>
        </div>
        
        <div class="menu-mobile">
            <ul>
                <li <?php if ( $page_name == "biblioteca" ) echo 'class="active"'; ?>>
                    <a href="biblioteca.php">
                        <img src="img/icons/books.png" width="19">
                    </a>
                </li>
                <li <?php if ( $page_name == "actividad" ) echo 'class="active"'; ?>>
                    <a href="actividad.php">
                        <img src="img/icons/graphic.png" width="23">
                    </a>
                </li>
                <li>
                    <a href="#" class="world-menu">
                        <img src="img/world.png" width="75">
                    </a>
                </li>
                <li <?php if ( $page_name == "notificaciones" ) echo 'class="active"'; ?>>
                    <a href="notificaciones.php" class="new">
                        <img src="img/icons/bell.png" width="18">
                    </a>
                </li>
                <li <?php if ( $page_name == "calendario" ) echo 'class="active"'; ?>>
                    <a href="calendario.php">
                        <img src="img/icons/calendar.png" width="25">
                    </a>
                </li>
            </ul>
        </div>
    </header>


<div id="notificaciones" class="modal">
    <div class="modal-bg js-close-modal"></div>
    <div class="modal-body">
        <div class="title">Notificaciones</div>

        <a href="#" class="notification active">
            <img class="icon" src="img/rima-icon.png">
            <div class="info">
                <p>Completa tu perfil para que te podamos brindar una mejor experiencia</p>
            </div>
        </a>

        <a href="#" class="notification">
            <img class="icon" src="img/icons/core-3.png">
            <div class="info">
                <p>Webvinar en vivo</p>
                <p class="important">Actualización en Otorrinolaringología Pediátrica</p>
                <p class="date">7/10/18</p>
            </div>
        </a>

         <a href="#" class="notification">
            <img class="icon" src="img/icons/core-4.png">
             <div class="info">
                <p>Hemos encontrado nuevos artículos para tu estrategia de cardiología</p>
             </div>
        </a>

        <a href="#" class="notification">
            <img class="icon" src="img/icons/core-8.png">
            <div class="info">
                <p>Ya tenés un nuevo cuento para leer en Sotobosque</p>
                <p class="date">7/10/18</p>
            </div>
        </a>
        
        <a href="notificaciones.php" class="ver-todas underline">Ver todas</a>
    </div>
</div>
