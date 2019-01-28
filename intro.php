<?php $page_name = "intro" ?>
<?php include('header.php'); ?>

<div class="video-player" >
    <video id="intro-video" muted>
        <source src="img/intro.mp4" type="video/mp4"> 
    </video>
    <a href="noticias.php" class="btn-full enter-btn">Ir al portal</a>
    
    <div class="heading active">
        <img class="logo" src="img/logo-white.png" width="187"> 
        <div class="title">Un viaje a traves del conocimiento</div>
    </div>
    <div class="steps">
        <ul>
            <li><a href="javascript:playVideoAt(1, 5.7);">01</a></li>
            <li><a href="javascript:playVideoAt(2, 12);">02</a></li>
            <li><a href="javascript:playVideoAt(3, 17);">03</a></li>
            <li><a href="javascript:playVideoAt(4, 25);">04</a></li>
        </ul>
    </div>
    
    <div class="step-info actualidad">
        <div class="title">Actualidad</div>
        <p>El Instituto Core Journals es una hemeroteca compuesta por más de 2.200 revistas internacionales ordenadas en 54 especialidades.</p>
    </div>
    <div class="step-info tea">
        <div class="title">Tea</div>
        <p>El Instituto Core Journals es una hemeroteca compuesta por más de 2.200 revistas internacionales ordenadas en 54 especialidades.</p>
    </div>
    <div class="step-info academica">
        <div class="title">Rima Académica</div>
        <p>El Instituto Core Journals es una hemeroteca compuesta por más de 2.200 revistas internacionales ordenadas en 54 especialidades.</p>
        <div class="academica-menu">
            <ul>
                <li>
                    <img src="img/icons/core-3.png" class="img-responsive">
                </li>
                <li>
                    <img src="img/icons/core-4.png" class="img-responsive">
                </li>
                <li>
                    <img src="img/icons/core-5.png" class="img-responsive">
                </li>
                <li>
                    <img src="img/icons/core-6.png" class="img-responsive">
                </li>
                <li>
                    <img src="img/icons/core-7.png" class="img-responsive">
                </li>
                <li>
                    <img src="img/icons/core-8.png" class="img-responsive">
                </li>
            </ul>
        </div>
    </div>
    <div class="step-info core">
        <div class="title">Core Journals</div>
        <p>El Instituto Core Journals es una hemeroteca compuesta por más de 2.200 revistas internacionales ordenadas en 54 especialidades.</p>
        <div class="academica-menu">
            <ul>
                <li>
                    <img src="img/icons/core-1.png" class="img-responsive">
                </li>
                <li>
                    <img src="img/icons/core-2.png" class="img-responsive">
                </li>
            </ul>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>