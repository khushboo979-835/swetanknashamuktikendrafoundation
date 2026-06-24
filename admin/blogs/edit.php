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

$id = mysqli_real_escape_string($conn, $_GET['id']);
$blog_res = $conn->query("SELECT * FROM blogs WHERE id = '$id'");
$blog = $blog_res->fetch_assoc();

if (!$blog) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Basic Info
    $slug = mysqli_real_escape_string($conn, $_POST['slug'] ?? '');
    $cover_title = mysqli_real_escape_string($conn, $_POST['cover_title'] ?? '');
    $cover_desc = mysqli_real_escape_string($conn, $_POST['cover_desc'] ?? '');
    $content_title = mysqli_real_escape_string($conn, $_POST['content_title'] ?? '');
    $long_content = mysqli_real_escape_string($conn, $_POST['long_content'] ?? '');
    $status = $_POST['status'] ?? 'published';

    // SEO Info
    $page_title = mysqli_real_escape_string($conn, $_POST['page_title'] ?? '');
    $meta_title = mysqli_real_escape_string($conn, $_POST['meta_title'] ?? '');
    $meta_description = mysqli_real_escape_string($conn, $_POST['meta_description'] ?? '');
    $meta_keywords = mysqli_real_escape_string($conn, $_POST['meta_keywords'] ?? '');
    $canonical_url = mysqli_real_escape_string($conn, $_POST['canonical_url'] ?? '');
    $google_tag = mysqli_real_escape_string($conn, $_POST['google_tag'] ?? '');

    // OG Info
    $og_title = mysqli_real_escape_string($conn, $_POST['og_title'] ?? '');
    $og_description = mysqli_real_escape_string($conn, $_POST['og_description'] ?? '');
    $og_alt = mysqli_real_escape_string($conn, $_POST['og_alt'] ?? '');
    $cover_alt = mysqli_real_escape_string($conn, $_POST['cover_alt'] ?? '');
    $banner_alt = mysqli_real_escape_string($conn, $_POST['banner_alt'] ?? '');

    // Image Uploads
    $cover_image = $blog['cover_image'];
    $og_image = $blog['og_image'];
    $banner = $blog['banner'];

    $upload_dir = "../../admin/uploads/blogs/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    if (!empty($_FILES['cover_image']['name'])) {
        $cover_image = time() . "_" . $_FILES['cover_image']['name'];
        move_uploaded_file($_FILES['cover_image']['tmp_name'], $upload_dir . $cover_image);
    }
    if (!empty($_FILES['og_image']['name'])) {
        $og_image = time() . "_og_" . $_FILES['og_image']['name'];
        move_uploaded_file($_FILES['og_image']['tmp_name'], $upload_dir . $og_image);
    }
    if (!empty($_FILES['banner']['name'])) {
        $banner = time() . "_banner_" . $_FILES['banner']['name'];
        move_uploaded_file($_FILES['banner']['tmp_name'], $upload_dir . $banner);
    }

    $sql = "UPDATE blogs SET 
            slug = '$slug', google_tag = '$google_tag', page_title = '$page_title', 
            meta_title = '$meta_title', meta_description = '$meta_description', 
            meta_keywords = '$meta_keywords', canonical_url = '$canonical_url', 
            og_title = '$og_title', og_description = '$og_description', 
            og_image = '$og_image', og_alt = '$og_alt', 
            cover_title = '$cover_title', cover_desc = '$cover_desc', 
            cover_image = '$cover_image', cover_alt = '$cover_alt', 
            banner = '$banner', banner_alt = '$banner_alt', 
            content_title = '$content_title', long_content = '$long_content', 
            status = '$status' 
            WHERE id = '$id'";

    if ($conn->query($sql)) {
        $message = "Blog updated successfully! <a href='index.php'>View All</a>";
        // Refresh local data
        $blog_res = $conn->query("SELECT * FROM blogs WHERE id = '$id'");
        $blog = $blog_res->fetch_assoc();
    } else {
        $error = "Failed to update blog: " . $conn->error;
    }
}
?>

<div class="card bg-white border-0 shadow-sm p-4">
    <h3>Edit Blog</h3>
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
                    <label class="form-label">Cover Title</label>
                    <input type="text" name="cover_title" class="form-control" required value="<?= htmlspecialchars($blog['cover_title']) ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control" required value="<?= htmlspecialchars($blog['slug']) ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Cover Description (Brief)</label>
                    <textarea name="cover_desc" class="form-control" rows="3"><?= htmlspecialchars($blog['cover_desc']) ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Content Title</label>
                    <input type="text" name="content_title" class="form-control" value="<?= htmlspecialchars($blog['content_title']) ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Long Content (HTML supported)</label>
                    <textarea name="long_content" class="form-control" rows="10"><?= htmlspecialchars($blog['long_content']) ?></textarea>
                </div>

                <div class="card p-3 bg-light border-0 mb-4">
                    <h5>Advanced Tags</h5>
                    <div class="mb-3">
                        <label class="form-label">Google Analytics / Tag Script</label>
                        <textarea name="google_tag" class="form-control" rows="3" placeholder="Paste <script> here..."><?= htmlspecialchars($blog['google_tag']) ?></textarea>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-3 bg-light border-0 mb-4">
                    <h5>SEO Settings</h5>
                    <div class="mb-3">
                        <label class="form-label">Page Title (Browser Tab)</label>
                        <input type="text" name="page_title" class="form-control" value="<?= htmlspecialchars($blog['page_title']) ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="<?= htmlspecialchars($blog['meta_title']) ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3"><?= htmlspecialchars($blog['meta_description']) ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Meta Keywords</label>
                        <input type="text" name="meta_keywords" class="form-control" value="<?= htmlspecialchars($blog['meta_keywords']) ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Canonical URL</label>
                        <input type="text" name="canonical_url" class="form-control" value="<?= htmlspecialchars($blog['canonical_url']) ?>">
                    </div>
                </div>

                <div class="card p-3 bg-light border-0 mb-4">
                    <h5>Social Media (OG)</h5>
                    <div class="mb-3">
                        <label class="form-label">OG Title</label>
                        <input type="text" name="og_title" class="form-control" value="<?= htmlspecialchars($blog['og_title']) ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">OG Description</label>
                        <textarea name="og_description" class="form-control" rows="3"><?= htmlspecialchars($blog['og_description']) ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">OG Image Alt Text</label>
                        <input type="text" name="og_alt" class="form-control" value="<?= htmlspecialchars($blog['og_alt']) ?>">
                    </div>
                </div>

                <div class="card p-3 bg-light border-0 mb-4">
                    <h5>Media Settings</h5>
                    <div class="mb-3">
                        <label class="form-label">Cover Image</label>
                        <input type="file" name="cover_image" class="form-control">
                        <input type="text" name="cover_alt" class="form-control mt-1" placeholder="Cover Image Alt Text" value="<?= htmlspecialchars($blog['cover_alt']) ?>">
                        <?php if($blog['cover_image']): ?>
                            <img src="../../admin/uploads/blogs/<?= $blog['cover_image'] ?>" width="80" class="mt-2 rounded">
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Banner Image</label>
                        <input type="file" name="banner" class="form-control">
                        <input type="text" name="banner_alt" class="form-control mt-1" placeholder="Banner Image Alt Text" value="<?= htmlspecialchars($blog['banner_alt']) ?>">
                        <?php if($blog['banner']): ?>
                            <img src="../../admin/uploads/blogs/<?= $blog['banner'] ?>" width="80" class="mt-2 rounded">
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">OG Image</label>
                        <input type="file" name="og_image" class="form-control">
                        <?php if($blog['og_image']): ?>
                            <img src="../../admin/uploads/blogs/<?= $blog['og_image'] ?>" width="80" class="mt-2 rounded">
                        <?php endif; ?>
                    </div>
                </div>

                <div class="card p-3 bg-light border-0">
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="published" <?= $blog['status'] == 'published' ? 'selected' : '' ?>>Published</option>
                            <option value="draft" <?= $blog['status'] == 'draft' ? 'selected' : '' ?>>Draft</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-pro w-100">Update Blog</button>
                    <a href="index.php" class="btn btn-outline-secondary w-100 mt-2">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>

<?php include("../common/footer.php"); ?>
