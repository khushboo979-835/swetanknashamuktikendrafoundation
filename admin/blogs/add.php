<?php
include("../common/config.php");
include("../auth_check.php");
include("../common/header.php");

$message = '';
$error = '';

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
    $cover_image = '';
    $og_image = '';
    $banner = '';

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

    $sql = "INSERT INTO blogs (slug, google_tag, page_title, meta_title, meta_description, meta_keywords, canonical_url, og_title, og_description, og_image, og_alt, cover_title, cover_desc, cover_image, cover_alt, banner, banner_alt, content_title, long_content, status) 
            VALUES ('$slug', '$google_tag', '$page_title', '$meta_title', '$meta_description', '$meta_keywords', '$canonical_url', '$og_title', '$og_description', '$og_image', '$og_alt', '$cover_title', '$cover_desc', '$cover_image', '$cover_alt', '$banner', '$banner_alt', '$content_title', '$long_content', '$status')";

    if ($conn->query($sql)) {
        $message = "Blog added successfully! <a href='index.php'>View All</a>";
    } else {
        $error = "Failed to add blog: " . $conn->error;
    }
}
?>

<div class="card bg-white border-0 shadow-sm p-4">
    <h3>Add New Blog</h3>
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
                    <input type="text" name="cover_title" class="form-control" required id="blogTitle">
                </div>
                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control" required id="blogSlug">
                </div>
                <div class="mb-3">
                    <label class="form-label">Cover Description (Brief)</label>
                    <textarea name="cover_desc" class="form-control" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Content Title</label>
                    <input type="text" name="content_title" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Long Content (HTML supported)</label>
                    <textarea name="long_content" class="form-control" rows="10"></textarea>
                </div>

                <div class="card p-3 bg-light border-0 mb-4">
                    <h5>Advanced Tags</h5>
                    <div class="mb-3">
                        <label class="form-label">Google Analytics / Tag Script</label>
                        <textarea name="google_tag" class="form-control" rows="3" placeholder="Paste <script> here..."></textarea>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-3 bg-light border-0 mb-4">
                    <h5>SEO Settings</h5>
                    <div class="mb-3">
                        <label class="form-label">Page Title (Browser Tab)</label>
                        <input type="text" name="page_title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Meta Keywords</label>
                        <input type="text" name="meta_keywords" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Canonical URL</label>
                        <input type="text" name="canonical_url" class="form-control">
                    </div>
                </div>

                <div class="card p-3 bg-light border-0 mb-4">
                    <h5>Social Media (OG)</h5>
                    <div class="mb-3">
                        <label class="form-label">OG Title</label>
                        <input type="text" name="og_title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">OG Description</label>
                        <textarea name="og_description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">OG Image Alt Text</label>
                        <input type="text" name="og_alt" class="form-control">
                    </div>
                </div>

                <div class="card p-3 bg-light border-0 mb-4">
                    <h5>Media Settings</h5>
                    <div class="mb-3">
                        <label class="form-label">Cover Image</label>
                        <input type="file" name="cover_image" class="form-control">
                        <input type="text" name="cover_alt" class="form-control mt-1" placeholder="Cover Image Alt Text">
                        <small class="text-muted">Used on the listing page</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Banner Image</label>
                        <input type="file" name="banner" class="form-control">
                        <input type="text" name="banner_alt" class="form-control mt-1" placeholder="Banner Image Alt Text">
                        <small class="text-muted">Used as top banner in detail page</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">OG Image</label>
                        <input type="file" name="og_image" class="form-control">
                    </div>
                </div>

                <div class="card p-3 bg-light border-0">
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="published">Published</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-pro w-100">Add Blog</button>
                    <a href="index.php" class="btn btn-outline-secondary w-100 mt-2">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
document.getElementById('blogTitle').addEventListener('input', function() {
    let slug = this.value.toLowerCase()
        .replace(/[^\w ]+/g, '')
        .replace(/ +/g, '-');
    document.getElementById('blogSlug').value = slug;
});
</script>

<?php include("../common/footer.php"); ?>
