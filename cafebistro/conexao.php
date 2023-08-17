<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "cafebistro_fillip";

$con = new mysqli($server, $user, $password, $database);

if (!$con) {
    die("conexão falha!");
}
?>