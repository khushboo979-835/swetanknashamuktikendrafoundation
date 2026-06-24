<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/../auth_check.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Swetank Nasha Mukti Kendra</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #0c885e;
            --secondary-color: #0a3d62;
            --bg-light: #f8f9fa;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-light);
            display: flex;
        }
        .sidebar {
            width: 260px;
            height: 100vh;
            background-color: var(--secondary-color);
            color: white;
            position: fixed;
            padding-top: 20px;
            transition: 0.3s;
        }
        .sidebar h4 {
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .sidebar a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: 0.3s;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: var(--primary-color);
            color: white;
        }
        .main-content {
            flex-grow: 1;
            margin-left: 260px;
            padding: 30px;
        }
        .card-stat {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            transition: 0.3s;
        }
        .card-stat:hover {
            transform: translateY(-5px);
        }
        .btn-pro {
            background-color: var(--primary-color);
            color: white;
            border: none;
        }
        .btn-pro:hover {
            background-color: #0a6b4a;
            color: white;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4>Swetank Admin</h4>
        <a href="<?= $base_url ?>admin/dashboard.php" class="<?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">
            <i class="fas fa-home"></i> Dashboard
        </a>
        <a href="<?= $base_url ?>admin/blogs/index.php">
            <i class="fas fa-blog"></i> Manage Blogs
        </a>
        <a href="<?= $base_url ?>admin/services/index.php">
            <i class="fas fa-concierge-bell"></i> Manage Services
        </a>
        <a href="<?= $base_url ?>admin/logout.php" class="mt-5 text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </div>
    <div class="main-content">
        <header class="d-flex justify-content-between align-items-center mb-4">
            <h3><?= str_replace(['-', '.php'], [' ', ''], ucfirst(basename($_SERVER['PHP_SELF']))) ?></h3>
            <div class="user-info">
                <span>Welcome, <strong><?= $_SESSION['admin_name'] ?></strong></span>
            </div>
        </header>
