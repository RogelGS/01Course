<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Practica 01</title>

    <link rel="icon" href="images/logo.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/materialize.min.js"></script>
</head>
<body>

    <header class="navbar-fixed index-1">
        <nav class="purple">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo left">
                        <img src="images/logo.png" width="20%">
                    </a>
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="sass.html">Articulos</a></li>
                        <li><a href="#" class="waves-effect waves-light btn blue">Registro</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <ul class="sidenav" id="nav-mobile">
            <li><a href="sass.html">Articulos</a></li>
            <li><a href="#" class="waves-effect waves-light btn blue">Registro</a></li>
        </ul>
    </header>

    <!-- Hero -->

    <section class="section-hero">
        <div class="hero">
            <div class="container">
                <div class="container-hero">
                    <h2 class="title-hero">
                        Bienvenido al sistema de usuarios
                    </h2>
                    <p>Para ingresar al sistema debes de estar registrado!</p>
                    <a href="#" class="waves-effect waves-light btn blue">Registro</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="black">
        <div class="contaier">
            <p class="copy center">
                &copy; Todos los derechos reservados - Project
            </p>
        </div>
    </footer>

    <div class="scrolltop scrolltop-dark"></div>
    <script src="js/app.js"></script>
</body>
</html>