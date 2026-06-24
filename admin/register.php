<?php
// Logic at top for redirection safety
include 'common/config.php'; 

// One-Time Registration Logic: Redirect if an admin already exists
$adminCheck = $conn->query("SELECT id FROM users WHERE role = 'admin' LIMIT 1");
if ($adminCheck && $adminCheck->num_rows > 0) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    $role = 'admin';

    // Strong Validations
    if (empty($name) || empty($email) || empty($password)) {
        echo "<script>alert('Please fill all fields');</script>";
    } elseif ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match! Please try again.');</script>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format');</script>";
    } else {

        // Check if email already exists in 'users' table
        $check = $conn->query("SELECT id FROM users WHERE email = '$email'");
        if ($check && $check->num_rows > 0) {
            echo "<script>alert('This Email is already registered! Redirecting to Login.'); window.location.href='login.php';</script>";
        } else {
            // Hash password for security
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // INSERT into 'users' table
            $sql = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$hashed_password', '$role')";

            if ($conn->query($sql)) {
                echo "<script>alert('Registration successful! Welcome, $name. Please login.'); window.location.href='login.php';</script>";
            } else {
                echo "<script>alert('Database Error: " . $conn->error . "');</script>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default">
<?php include 'common/header.php'; ?>
<body>
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <div class="card shadow">
          <div class="card-body">
            <!-- Branding -->
            <div class="app-brand justify-content-center">
              <span class="app-brand-text demo text-body fw-bolder mb-3">Coral Web Technology</span>
            </div>
            
            <h4 class="mb-2">Admin Registration 🚀</h4>
            <p class="mb-4">Stronger, Secure access for Coral Admins.</p>

            <form id="formAuthentication" class="mb-3" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">FULL NAME</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your full name" required autofocus />
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">EMAIL ADDRESS</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your valid email" required />
              </div>

              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">PASSWORD</label>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="············" required />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>

              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="confirm-password">CONFIRM PASSWORD</label>
                <div class="input-group input-group-merge">
                  <input type="password" id="confirm-password" class="form-control" name="confirm-password" placeholder="············" required />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>

              <button class="btn btn-primary d-grid w-100" type="submit" name="submit">Create Admin Account</button>
            </form>

            <p class="text-center">
              <span>Already have an account?</span>
              <a href="login.php"><span>Sign in instead</span></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'common/footer.php'; ?>
</body>
</html>