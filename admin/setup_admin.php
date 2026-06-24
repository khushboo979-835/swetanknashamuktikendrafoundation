<?php
/**
 * ONE-TIME SETUP SCRIPT
 * Use this script to create your master admin account.
 * IMPORTANT: DELETE THIS FILE IMMEDIATELY AFTER USE FOR SECURITY.
 */

include("common/config.php");

// Configuration for the master admin
$admin_name = "Master Admin";
$admin_email = "admin@swetank.in"; // You can change this
$admin_password = "admin_password_123"; // You should change this immediately after logging in
$hashed_password = password_hash($admin_password, PASSWORD_DEFAULT);
$role = 'admin';

echo "<h2>Admin Account Setup</h2>";

// Check if admin already exists
$check = $conn->query("SELECT id FROM users WHERE email = '$admin_email'");

if ($check && $check->num_rows > 0) {
    echo "<p style='color: orange;'>An account with the email <strong>$admin_email</strong> already exists.</p>";
} else {
    // Insert the admin account
    $sql = "INSERT INTO users (name, email, password, role) VALUES ('$admin_name', '$admin_email', '$hashed_password', '$role')";
    
    if ($conn->query($sql)) {
        echo "<p style='color: green;'><strong>SUCCESS!</strong> Master admin account created.</p>";
        echo "<ul>";
        echo "<li><strong>Email:</strong> $admin_email</li>";
        echo "<li><strong>Password:</strong> $admin_password</li>";
        echo "</ul>";
        echo "<p>Please <a href='login.php'>Login here</a> and then <strong>DELETE this file (setup_admin.php)</strong> from your server.</p>";
    } else {
        echo "<p style='color: red;'><strong>FAILED:</strong> " . $conn->error . "</p>";
    }
}

$conn->close();
?>
