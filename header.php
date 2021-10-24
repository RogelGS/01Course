<!-- <?php include_once 'db.php' ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Practica 01</title>

    <link rel="icon" href="<?php echo url ?>images/logo.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo url?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo url?>css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo url?>css/main.css">

    <script src="<?php echo url ?>js/materialize.min.js"></script>
</head>
<body>

    <header class="navbar-fixed index-1">
        <nav class="purple">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="<?php echo url ?>home" class="brand-logo left">
                        <img src="<?php echo url ?>images/logo.png" width="20%">
                    </a>
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="<?php echo url ?>articles">Articulos</a></li>
                        <?php if(isset($_SESSION['id'])): ?>
                                <li><a href="<?php echo url ?>profile" class="waves-effect waves-light btn green"><?php echo $_SESSION['username']; ?></a></li>
                                <li><a href="<?php echo url ?>left" class="waves-effect waves-light btn red">X</a></li>
                            <?php else: ?>
                                <li><a href="<?php echo url ?>login">Ingresar</a></li>
                                <li><a href="<?php echo url ?>register" class="waves-effect waves-light btn red">Registro</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <ul class="sidenav" id="nav-mobile">
            <li><a href="<?php echo url ?>articles">Articulos</a></li>
            <?php if(isset($_SESSION['id'])): ?>
                <li><a href="<?php echo url ?>profile" class="waves-effect waves-light btn green"><?php echo $_SESSION['username']; ?></a></li>
                <li><a href="<?php echo url ?>left" class="waves-effect waves-light btn red">X</a></li>
            <?php else: ?>
                <li><a href="<?php echo url ?>login">Ingresar</a></li>
                <li><a href="<?php echo url ?>register" class="waves-effect waves-light btn red">Registro</a></li>
            <?php endif; ?>
        </ul>
    </header>