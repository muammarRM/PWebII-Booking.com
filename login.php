<?php
define('ALLOW_ACCESS', true);
require_once('fungsi.php');
require_once('koneksi.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if (login($username, $password, $koneksi)) {
            $_SESSION['logged_in'] = true;

            header("Location: index.php");
            exit();
        } else {
            // Jangan lupa untuk menangani kasus login gagal
            $_SESSION['logged_in'] = false; // memastikan session ini diset
            $error = "Username atau password salah.";
        }
        
    } 
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
    <title>Booking.com</title>
    <link href="login.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class= "logo">
            <img src="img/logo.png" alt="logo">
            <h1>Booking.com</h1>
        </div>
        <p>Lakukan booking hotel sekarang juga dan lebih mudah!</p>
    </header>
    <form method="post">
        <div>
            <h1>Login</h1>
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <button type="submit" name="login">Login</button>
        </div>
    </form>
    <footer>
        <div class= "logo">
            <img src="img/logo.png" alt="logo" >
            <h1>Booking.com</h1>
        </div>
        <div class="contact">
            <p>Hubungi kami di:</p>
            <ul>
                <li><a href="">WhatsApp</a></li>
                <li><a href="">Instagram</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Twitter</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
