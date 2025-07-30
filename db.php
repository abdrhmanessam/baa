<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "simple_auth";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die( mysqli_connect_error() );
}
?>
