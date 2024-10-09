<?php
if (!defined('ALLOW_ACCESS') || ALLOW_ACCESS !== true) {
    // Redirect to the main page or display an error message
    header("Location: login.php");
    exit;
}
session_start(); 

function login($username, $password, $koneksi) {

    $query = "SELECT * FROM tblogin WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 0) {
        echo '
        <script>
            alert("Username tidak terdaftar!");
            window.location.href = "login.php";
        </script>
        ';
        exit();
    }

    $user = mysqli_fetch_assoc($result);
    $db_password = $user['password'];

    if ($password == $db_password) {
        $_SESSION['username'] = $username;
        return true;
    } else {
        return false;
        echo '
        <script>
            alert("Password yang dimasukkan salah!");
            window.location.href = "login.php";
        </script>
        ';
        exit();
        return false;
    }
}

?>
