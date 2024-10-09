<?php
if (!defined('ALLOW_ACCESS') || ALLOW_ACCESS !== true) {
    header("Location: login.php");
    exit;
}
session_start();
session_unset();
session_destroy();

header("Location: login.php");
exit();
?>
