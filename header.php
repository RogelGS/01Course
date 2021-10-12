<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
                    <a href="./" class="brand-logo left">
                        <img src="images/logo.png" width="20%">
                    </a>
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="articles.php">Articulos</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="register.php" class="waves-effect waves-light btn red">Registro</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <ul class="sidenav" id="nav-mobile">
            <li><a href="articles.php">Articulos</a></li>
            <li><a href="articles.php">Contacto</a></li>
            <li><a href="register.php" class="waves-effect waves-light btn red">Registro</a></li>
        </ul>
    </header>