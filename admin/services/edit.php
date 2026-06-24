<?php
include("../common/config.php");
include("../auth_check.php");
include("../common/header.php");

$message = '';
$error = '';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];
$service_res = $conn->query("SELECT * FROM services WHERE id = '$id'");
$service = $service_res->fetch_assoc();

if (!$service) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $slug = mysqli_real_escape_string($conn, $_POST['slug']);
    $short_desc = mysqli_real_escape_string($conn, $_POST['short_desc']);
    $long_desc = mysqli_real_escape_string($conn, $_POST['long_desc']);
    $alt_text = mysqli_real_escape_string($conn, $_POST['alt_text']);
    $ordering = (int)$_POST['ordering'];
    $status = $_POST['status'];

    $image = $service['image'];
    $upload_dir = "../../admin/uploads/services/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    if (!empty($_FILES['image']['name'])) {
        $image = time() . "_" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $image);
    }

    $sql = "UPDATE services SET 
            title = '$title', slug = '$slug', short_desc = '$short_desc', 
            long_desc = '$long_desc', image = '$image', alt_text = '$alt_text', 
            ordering = '$ordering', status = '$status' 
            WHERE id = '$id'";

    if ($conn->query($sql)) {
        $message = "Service updated successfully! <a href='index.php'>View All</a>";
        $service_res = $conn->query("SELECT * FROM services WHERE id = '$id'");
        $service = $service_res->fetch_assoc();
    } else {
        $error = "Failed to update service: " . $conn->error;
    }
}
?>

<div class="card bg-white border-0 shadow-sm p-4">
    <h3>Edit Service</h3>
    <hr>
    <?php if ($message): ?>
        <div class="alert alert-success"><?= $message ?></div>
    <?php endif; ?>
    <?php if ($error): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8">
                <div class="mb-3">
                    <label class="form-label">Service Title</label>
                    <input type="text" name="title" class="form-control" required id="serviceTitle" value="<?= htmlspecialchars($service['title']) ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control" required id="serviceSlug" value="<?= htmlspecialchars($service['slug']) ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Short Description</label>
                    <textarea name="short_desc" class="form-control" rows="3"><?= htmlspecialchars($service['short_desc']) ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Long Content / Details</label>
                    <textarea name="long_desc" class="form-control" rows="10"><?= htmlspecialchars($service['long_desc']) ?></textarea>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-3 bg-light border-0 mb-4">
                    <h5>Media & Ordering</h5>
                    <div class="mb-3">
                        <label class="form-label">Service Image</label>
                        <input type="file" name="image" class="form-control">
                        <?php if($service['image']): ?>
                            <img src="../../admin/uploads/services/<?= $service['image'] ?>" width="80" class="mt-2 rounded">
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alt Text</label>
                        <input type="text" name="alt_text" class="form-control" value="<?= htmlspecialchars($service['alt_text']) ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ordering</label>
                        <input type="number" name="ordering" class="form-control" value="<?= $service['ordering'] ?>">
                        <small class="text-muted">Lowest number appears first</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="active" <?= $service['status'] == 'active' ? 'selected' : '' ?>>Active</option>
                            <option value="inactive" <?= $service['status'] == 'inactive' ? 'selected' : '' ?>>Inactive</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-pro w-100">Update Service</button>
                <a href="index.php" class="btn btn-outline-secondary w-100 mt-2">Cancel</a>
            </div>
        </div>
    </form>
</div>

<?php include("../common/footer.php"); ?>
