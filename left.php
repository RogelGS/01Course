<?php
    require_once 'db.php';

    $_SESSION['id'] = null;
    $_SESSION['username'] = null;

    session_destroy();

    header('Location:'. url);

    exit();
?>