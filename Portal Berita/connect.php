<?php


$server = "localhost";
$user = "root";
$password = "";
$database = "news_id";

$db = mysqli_connect($server, $user, $password, $database);

if (!$db) {
    die("gagal konek" . mysqli_connect_error());
}
