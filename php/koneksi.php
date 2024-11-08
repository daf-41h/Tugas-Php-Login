<?php

$host     = "localhost";
$username = "root";
$password = "";
$dbname   = "db_loginsystem"; 

$koneksi = mysqli_connect($host, $username, $password, $dbname);

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
} else {
    //echo "Koneksi ke database berhasil!";
}
?>
