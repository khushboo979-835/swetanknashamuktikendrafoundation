<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    $redirect_url = (isset($base_url)) ? $base_url . "admin/login.php" : "login.php";
    header("Location: " . $redirect_url);
    exit();
}
?>
