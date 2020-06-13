<?php

$server = "localhost";
$user = "admin";
$password = "alone";
$nama_database = "4";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>