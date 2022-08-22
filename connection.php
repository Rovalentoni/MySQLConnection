<?php

$host = 'localhost';
$username = 'root';
$password = '3005';
$database = 'test';
$port = 3306;
$mysqli = new mysqli($host, $username, $password, $database, $port);

        if (mysqli_connect_errno() != 0) {
            echo 'Failed' . $mysqli->connect_error;
        } 

