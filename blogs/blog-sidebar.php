<style>
    .blog-page .card {
        position: sticky;
        top: 110px;
        background: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(12px);
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.15);
        transition: all 0.4s ease;
    }

    .blog-page .card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
    }

    .blog-page .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.25);
    }

    .blog-page .card-header {
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        color: #fff;
        text-align: center;
        padding: 14px 0;
        font-weight: 600;
        font-size: 1.1rem;
        letter-spacing: 0.6px;
        position: relative;
        z-index: 2;
        text-transform: uppercase;
        border-bottom: none;
    }

    .blog-page .list-group {
        padding: 8px 0;
    }

    .blog-page .list-group-item {
        background: transparent;
        border: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.08);
        padding: 10px 16px;
        transition: all 0.3s ease;
        position: relative;
    }

    .blog-page .list-group-item:last-child {
        border-bottom: none;
    }

    .blog-page .list-group-item:hover {
        background: rgba(0, 0, 0, 0.03);
        transform: translateX(4px);
    }

    .blog-page .list-group-item::after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 3px;
        height: 0;
        background: linear-gradient(180deg, var(--primary-color), var(--secondary-color));
        transition: height 0.3s ease;
    }

    .blog-page .list-group-item:hover::after {
        height: 100%;
    }

    .blog-page .list-group-item a {
        display: flex;
        align-items: center;
        gap: 12px;
        color: var(--tertiary-color);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .blog-page .list-group-item a:hover {
        color: var(--primary-color);
    }

    .blog-page .list-group-item img {
        width: 30px;
        height: 30px;
        border-radius: 8px;
        object-fit: cover;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
    }

    .blog-page .list-group-item:hover img {
        transform: scale(1.05);
    }

    .blog-page .list-group-item h6 {
        font-size: 0.95rem;
        font-weight: 600;
        margin: 0;
        line-height: 1.3;
        letter-spacing: 0.2px;
        color: #222;
    }

    .blog-page .list-group-item:hover h6 {
        color: var(--primary-color);
    }

    @media (max-width: 992px) {
        .blog-page .card {
            position: static;
            margin-top: 25px;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.15);
        }
    }
</style>



<?php
$latestBlogs = mysqli_query($conn, "SELECT id, cover_title, cover_image, cover_alt, slug FROM blogs ORDER BY created_at DESC LIMIT 5");
?>
<div class="card mb-3">
    <div class="card-header  text-center">
        <h4>Latest Blog Posts</h4>
    </div>
    <ul class="list-group list-group-flush">
        <?php
        while ($blog = mysqli_fetch_assoc($latestBlogs)) {
            $alt_text = !empty($blog['cover_alt']) ? $blog['cover_alt'] : $blog['cover_title'];
            ?>
            <li class="list-group-item">
                <a href="<?= htmlspecialchars($blog['slug']); ?>" class="text-decoration-none">
                    <div class="row ">
                        <div class="col-2">
                            <img src="../admin/uploads/blogs/<?= htmlspecialchars($blog['cover_image']); ?>"
                                class="img-fluid" alt="<?= htmlspecialchars($alt_text); ?>">
                        </div>
                        <div class="col-10">
                            <h6 class="card-title m-0"><?= htmlspecialchars($blog['cover_title']); ?></h6>
                        </div>
                    </div>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>