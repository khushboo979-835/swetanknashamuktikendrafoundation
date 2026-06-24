<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("common/config.php"); ?>
    <?php include("common/head.php"); ?>
    <?php include("common/plugins.php"); ?>
</head>

<body>
    <?php include("common/header.php"); ?>
    <!-- ===================================== -->
    <section class="py-4">
        <div class="container">
            <div class="breadcrumb-box p-3 d-flex justify-content-between align-items-center flex-wrap">
                <h1 class="h3 fw-bold mb-0">Contact Us</h1>
                <ul class="breadcrumb-list d-flex flex-wrap mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= $base_url ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Spacer to prevent breadcrumb from overlapping the form -->
    <div style="height: 120px;"></div>

    <!-- ====================================== -->
    <?php include("contact.php"); ?>
    <!-- ======================================= -->
    <?php include("common/footer.php"); ?>
</body>

</html>