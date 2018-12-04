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
                <div class="search">
                    <form>
                        <input type="search" placeholder="Buscar por palabra clave, disciplina, etc..." class="input-search">
                        <button type="submit" value="Enviar" class="button-search"><img src="img/icons/search.png"  width="18"></button>
                    </form>
                </div>
                <div class="notifs hidden-xs">
                    <ul>
                        <li><a href="#"><img src="img/icons/envelope.png" width="22"></a></li>
                        <li class="new"><a href="#"><img src="img/icons/bell.png" width="18"></a></li>
                    </ul>
                </div>
                <div class="profile">
                    <div class="picture left">
                        <img src="img/profile-pic.png" width="35">
                    </div>
                    <div class="data left">
                        <p class="name">Dr. Eduardo Hornos</p>
                        <p class="medal">Medalla de Plata <span class="credits"> - 4 créditos</span></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="menu-desktop hidden-xs">
            <div class="top">
                <div class="right">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="img/icons/books.png" width="19">
                                <p>Mi biblioteca</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icons/graphic.png" width="23">
                                <p>Mi actividad</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/icons/calendar.png" width="25">
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
    </header>

