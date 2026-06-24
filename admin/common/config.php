<?php
// Diagnostic Errors (Hostinger ONLY)
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$db_name = "u467991428_ayush_db";
$username = "u467991428_ayush_user";
$password = "k:IJBJ+u0+z2";

$conn = new mysqli($host, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$base_url = "https://swetanknashamuktikendrafoundation.in/";
?>