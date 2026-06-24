<?php
include("../common/config.php");
include("../auth_check.php");
include("../common/header.php");

$blogs = $conn->query("SELECT id, cover_title, slug, status, created_at FROM blogs ORDER BY created_at DESC");
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Manage Blogs</h2>
    <a href="add.php" class="btn btn-pro">Add New Blog</a>
</div>

<div class="card bg-white border-0 shadow-sm p-4">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($blogs->num_rows > 0): ?>
                    <?php while($row = $blogs->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['cover_title']) ?></td>
                        <td><code><?= htmlspecialchars($row['slug']) ?></code></td>
                        <td>
                            <span class="badge bg-<?= $row['status'] == 'published' ? 'success' : 'warning' ?>">
                                <?= ucfirst($row['status']) ?>
                            </span>
                        </td>
                        <td><?= date("d M Y", strtotime($row['created_at'])) ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this blog?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center py-4">No blogs found. <a href="add.php">Add your first blog</a></td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include("../common/footer.php"); ?>
