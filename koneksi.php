<?php
$host = "localhost";      // Biasanya localhost
$user = "root";           // Username default XAMPP
$pass = "";               // Password dikosongkan jika pakai XAMPP
$db   = "db_website";     // Nama database kamu

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>