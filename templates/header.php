<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="static/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/static/css/main.css" rel="stylesheet" >
    <title>Villabos</title>
</head>
<body>
    <header>
        <div class="navbar-small d-flex justify-content-end">
            <div class="social-network d-flex justify-content-around">
                <i class="icon-facebook d-flex justify-content-center"></i>
                <i class="icon-twitter d-flex justify-content-center"></i>
                <i class="icon-youtube d-flex justify-content-center"></i>
                <i class="icon-linkedin d-flex justify-content-center"></i>
                <i class="icon-instagram d-flex justify-content-center"></i>
            </div>
        </div>
        <div class="navbar-main" id="sticky-navbar">
            <div class="col-sm-12 col-md-4 col-lg-6 menu-bar-mobile">
                <img src="/static/images/logo_2.png" alt="logo" class="img">
                <i class="icon-menu" onclick="showMenu(this)"></i>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-6 menu" id="menu">
                <nav>
                    <ul>
                        <li class="close-mobile d-flex justify-content-start" onclick="showMenu()">x</li>
                        <li><a href="/" class="d-flex justify-content-center align-items-center">Inicio</a></li>
                        <li><a href="/acerca-de.php" class="d-flex justify-content-center align-items-center">Acerca de</a></li>
                        <li><a href="#" class="d-flex justify-content-center align-items-center">Servicios</a></li>
                        <li><a href="/contacto.php" class="d-flex justify-content-center align-items-center">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>