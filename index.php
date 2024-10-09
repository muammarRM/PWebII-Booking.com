<?php
session_start(); // Memulai session di awal file dan hanya sekali
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}else{
    define('ALLOW_ACCESS', true);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/css-reset-and-normalize@2.3.6/css/reset-and-normalize.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Home | Booking.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require "header.php"; ?>
    <nav>
        <div>
            <p>Username: <?=$_SESSION['username']?></p>
        </div>
        <div>
            <a href="link1.php">Link 1</a>
            <a href="link2.php">Link 2</a>
            <a href="link3.php">Link 3</a>
            <a href="logout.php">Logout</a>
        </div>
    </nav>
    <section>
            <img src="img/gambar.jpg" alt="login">
            <h1>Selamat Datang <?=$_SESSION['username']?></h1>
    </section>
    <?php require "footer.php"; ?>
</body>
</html>
