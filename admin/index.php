<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("common/header.php");

// Helper function to get count safely
function getCount($conn, $table) {
    $result = @$conn->query("SELECT COUNT(*) as count FROM $table");
    if ($result) {
        $row = $result->fetch_assoc();
        return $row['count'];
    }
    return 0; // Return 0 if table doesn't exist yet
}

$blog_count = getCount($conn, 'blogs');
$service_count = getCount($conn, 'services');
$user_count = getCount($conn, 'users');
?>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card card-stat p-4 bg-white">
            <div class="d-flex align-items-center gap-3">
                <div class="icon-box bg-primary bg-opacity-10 p-3 rounded-circle">
                    <i class="fas fa-blog text-primary fs-3"></i>
                </div>
                <div>
                    <h5 class="text-muted mb-0">Total Blogs</h5>
                    <h2 class="fw-bold mb-0"><?= $blog_count ?></h2>
                </div>
            </div>
            <hr>
            <a href="blogs/index.php" class="text-decoration-none text-primary">View All <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-stat p-4 bg-white">
            <div class="d-flex align-items-center gap-3">
                <div class="icon-box bg-success bg-opacity-10 p-3 rounded-circle">
                    <i class="fas fa-concierge-bell text-success fs-3"></i>
                </div>
                <div>
                    <h5 class="text-muted mb-0">Services</h5>
                    <h2 class="fw-bold mb-0"><?= $service_count ?></h2>
                </div>
            </div>
            <hr>
            <a href="services/index.php" class="text-decoration-none text-success">View All <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-stat p-4 bg-white">
            <div class="d-flex align-items-center gap-3">
                <div class="icon-box bg-info bg-opacity-10 p-3 rounded-circle">
                    <i class="fas fa-users text-info fs-3"></i>
                </div>
                <div>
                    <h5 class="text-muted mb-0">Admins</h5>
                    <h2 class="fw-bold mb-0"><?= $user_count ?></h2>
                </div>
            </div>
            <hr>
            <span class="text-muted small">Active Administrators</span>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <div class="card p-4 bg-white border-0 shadow-sm">
            <h4>Quick Actions</h4>
            <div class="d-flex gap-3 mt-3">
                <a href="blogs/add.php" class="btn btn-pro px-4">Add New Blog</a>
                <a href="services/add.php" class="btn btn-outline-success px-4">Add New Service</a>
            </div>
        </div>
    </div>
</div>

<?php include("common/footer.php"); ?>
