<?php

$server = 'localhost';
$user = 'root';
$password = 'root';
$db = 'library';

$con = mysqli_connect($server, $user, $password, $db);

if ($con->connect_error) {
    die('Error al conectar a la base de dades!' . $con->connect_error);
};

mysqli_query($db, "SET NAMES 'utf-8';");
