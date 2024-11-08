<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $cek_user = "SELECT * FROM tbl_users WHERE username='$username'";
    $result = mysqli_query($koneksi, $cek_user);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Username sudah digunakan.'); window.location='register.php';</script>";
    } else {
        $query = "INSERT INTO tbl_users (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Registrasi berhasil. Silakan login.'); window.location='../index.php';</script>";
        } else {
            echo "<script>alert('Registrasi gagal. Coba lagi.'); window.location='register.php';</script>";
        }
    }
}
?>
