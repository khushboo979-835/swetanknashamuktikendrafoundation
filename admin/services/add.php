<?php
include("../common/config.php");
include("../auth_check.php");
include("../common/header.php");

$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $slug = mysqli_real_escape_string($conn, $_POST['slug']);
    $short_desc = mysqli_real_escape_string($conn, $_POST['short_desc']);
    $long_desc = mysqli_real_escape_string($conn, $_POST['long_desc']);
    $alt_text = mysqli_real_escape_string($conn, $_POST['alt_text']);
    $ordering = (int)$_POST['ordering'];
    $status = $_POST['status'];

    $image = '';
    $upload_dir = "../../admin/uploads/services/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    if (!empty($_FILES['image']['name'])) {
        $image = time() . "_" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $image);
    }

    $sql = "INSERT INTO services (title, slug, short_desc, long_desc, image, alt_text, ordering, status) 
            VALUES ('$title', '$slug', '$short_desc', '$long_desc', '$image', '$alt_text', '$ordering', '$status')";

    if ($conn->query($sql)) {
        $message = "Service added successfully! <a href='index.php'>View All</a>";
    } else {
        $error = "Failed to add service: " . $conn->error;
    }
}
?>

<div class="card bg-white border-0 shadow-sm p-4">
    <h3>Add New Service</h3>
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
                    <input type="text" name="title" class="form-control" required id="serviceTitle">
                </div>
                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control" required id="serviceSlug">
                </div>
                <div class="mb-3">
                    <label class="form-label">Short Description</label>
                    <textarea name="short_desc" class="form-control" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Long Content / Details</label>
                    <textarea name="long_desc" class="form-control" rows="10"></textarea>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-3 bg-light border-0 mb-4">
                    <h5>Media & Ordering</h5>
                    <div class="mb-3">
                        <label class="form-label">Service Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alt Text</label>
                        <input type="text" name="alt_text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ordering</label>
                        <input type="number" name="ordering" class="form-control" value="0">
                        <small class="text-muted">Lowest number appears first</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-pro w-100">Add Service</button>
                <a href="index.php" class="btn btn-outline-secondary w-100 mt-2">Cancel</a>
            </div>
        </div>
    </form>
</div>

<script>
document.getElementById('serviceTitle').addEventListener('input', function() {
    let slug = this.value.toLowerCase()
        .replace(/[^\w ]+/g, '')
        .replace(/ +/g, '-');
    document.getElementById('serviceSlug').value = slug;
});
</script>

<?php include("../common/footer.php"); ?>
