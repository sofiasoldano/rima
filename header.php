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
                            <a href="#" class="new">
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
                <li>
                    <a href="#">
                        <img src="img/icons/books.png" width="19">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/icons/graphic.png" width="23">
                    </a>
                </li>
                <li>
                    <a href="#" class="world-menu">
                        <img src="img/world.png" width="75">
                    </a>
                </li>
                <li>
                    <a href="#" class="new">
                        <img src="img/icons/bell.png" width="18">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/icons/calendar.png" width="25">
                    </a>
                </li>
            </ul>
        </div>
    </header>

