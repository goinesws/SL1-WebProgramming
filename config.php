<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "profilesKeuangan";

    $connection = mysqli_connect($server, $username, $password, $db_name);

    if (!$connection) {
        throw new Exception('Mysql Connection Error: '.mysqli_connect_error() );
    }
?>