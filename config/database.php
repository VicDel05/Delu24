<?php
    //session_start();

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'Delu');

    // Establecer conexión a la base de datos
    function db_connect(){
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($conn->connect_error) {
            die('Error de conexión: ' . $conn->connect_error);
        } 

        return $conn;
    }
?>