<?php
if (!defined('ALLOW_ACCESS') || ALLOW_ACCESS !== true) {
    header("Location: login.php");
    exit;
}
$servername = "localhost";
$username = "root";
$password = "";
$database = "bookinghotel";

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
