<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../common/config.php"); ?>
    <?php include("../common/plugins.php"); ?>
    <?php include("../common/head.php"); ?>

</head>

<body>
    <?php include("../common/header.php"); ?>
    <!-- ================================================ -->
    <section class="py-4">
        <div class="container">
            <div class="breadcrumb-box p-3 d-flex justify-content-between align-items-center flex-wrap">
                <h1 class="h3 fw-bold mb-0">Blogs</h1>
                <ul class="breadcrumb-list d-flex flex-wrap mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= $base_url ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Blogs</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- =============================================================================== -->
    <style>
        .blogs .card {
            border-radius: 0px;
        }

        .blogs .card img {
            height: 250px;
            width: 100%;
            width: 100%;
            object-fit: contain;
            background-color: var(--primary-color);
        }

        .blogs a {
            text-decoration: none;
        }
    </style>
    <section class="py-5 blogs">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="head-title mb-3 text-center">
                    <h2>Our <span>Blogs</span></h2>
                    <p class="fst-italic">We are committed to providing our customers with the highest quality products
                        and services.</p>
                </div>

                <?php
                // Include database connection
                include '../admin/common/config.php';

                $stmt = $conn->prepare("SELECT slug, cover_title, cover_desc, cover_image, cover_alt, created_at FROM blogs WHERE status = 'published' ORDER BY created_at DESC");
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $slug = urlencode($row['slug']);
                        $coverTitle = htmlspecialchars($row['cover_title']);
                        $coverDesc = $row['cover_desc']; 
                        $coverAlt = htmlspecialchars($row['cover_alt']);
                        $coverImage = "../admin/uploads/blogs/" . htmlspecialchars($row['cover_image']);
                        $createdAt = date("d M Y", strtotime($row['created_at']));
                ?>
                        <div class="col-md-4 mb-4">
                            <a href="<?= $slug; ?>" class="text-decoration-none text-dark">
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="<?= $coverImage; ?>" class="card-img-top" alt="<?= !empty($coverAlt) ? $coverAlt : (!empty($coverTitle) ? $coverTitle : 'Blog Cover Image'); ?>"
                                        title="<?= $coverTitle; ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $coverTitle; ?></h5>
                                        <p class="card-text">
                                            <?= mb_strimwidth($coverDesc, 0, 160, '...'); ?>
                                        </p>
                                    </div>
                                    <div class="card-footer bg-white border-0">
                                        <small class="text-muted">Published on <?= $createdAt; ?></small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } 
                } else {
                    echo "<div class='col-12 text-center'><p>No blogs found.</p></div>";
                }
                ?>
            </div>
        </div>
    </section>



    <!-- =================================================== -->
    <?php include("../common/footer.php"); ?>
</body>

</html>