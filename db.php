<?php 
    $connection = new mysqli("localhost", "root", "", "01course");
    if ($connection->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
        exit;
    }

    require 'ajax/functions.php';
?>