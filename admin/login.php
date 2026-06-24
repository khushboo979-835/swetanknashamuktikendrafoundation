<?php
// Session and Logic at the top for proper redirection
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'common/config.php'; 

// Check if already logged in
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email-username']);
    $password = $_POST['password'];

    // Using 'users' table which exists on your server
    $sql = "SELECT * FROM users WHERE email = '$email' AND role = 'admin' LIMIT 1";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_id'] = $user['id'];
            $_SESSION['admin_name'] = isset($user['name']) ? $user['name'] : $email;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>alert('Invalid password! Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Email not found! Please register a new account.'); window.location.href='register.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Swetank Nasha Mukti Kendra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0a3d62 0%, #0c885e 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            padding: 40px;
            width: 100%;
            max-width: 400px;
        }
        .btn-primary {
            background-color: #0c885e;
            border: none;
            padding: 12px;
            font-weight: 600;
        }
        .btn-primary:hover {
            background-color: #0a6b4a;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="text-center mb-4">
            <h4 class="fw-bold">Admin Login</h4>
            <p class="text-muted small">Access your dashboard</p>
        </div>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email-username" class="form-control" placeholder="Enter your email" required autofocus>
            </div>
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Sign In</button>
        </form>
        <div class="text-center mt-3">
            <a href="register.php" class="text-decoration-none text-muted small">Need an account? Register</a>
        </div>
    </div>
</body>
</html>
