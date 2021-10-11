<?php 
    function clean($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") {
    // clean = ($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") => {
        global $connection;

        if(PHP_VERSION < 7) {
            $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
        }

        $theValue = function_exists('mysqli_real_escape_string') ? mysqli_real_escape_string($connection, $theValue) : mysqli_escape_string($connection, $theValue);

        switch($theType) {
            case "text":
                $theValue = ($theValue !== "") ? "'" . $theValue . "'" : "NULL";
                break;
            case "long":
            case "int":
                $theValue = ($theValue !== "") ?  intval($theValue) : "NULL";
                break;
            case "double":
                $theValue = ($theValue !== "") ? doubleval($theValue) : "NULL"; 
                break;
            case "date":
                $theValue = ($theValue !== "") ? "'" . $theValue . "'" : "NULL";
                break;
            case "defined":
                $theValue = ($theValue !== "") ? $theDefinedValue : $theNotDefinedValue;
                break;
        }
        return $theValue;
    }
?>