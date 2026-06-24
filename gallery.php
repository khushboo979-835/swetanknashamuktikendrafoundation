<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("common/config.php"); ?>
    <?php include("common/head.php"); ?>
    <?php include("common/plugins.php"); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
</head>

<body>
    <?php include("common/header.php"); ?>
    <!-- ================================= -->
    <section class="py-4">
        <div class="container">
            <div class="breadcrumb-box p-3 d-flex justify-content-between align-items-center flex-wrap">
                <h1 class="h3 fw-bold mb-0">Gallery</h1>
                <ul class="breadcrumb-list d-flex flex-wrap mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= $base_url ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Gallery</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================================== -->
    <!-- Gallery Section -->
    <style>
        .gallery img {
            height: 200px;
            object-fit: cover;
            border-radius: 10% 20% 10% 20% / 20% 10% 20% 0;
            border: 5px solid var(--tertiary-color);
        }

        .gallery .card {
            height: 200px;
            object-fit: cover;
            border-radius: 10% 20% 10% 20% / 20% 10% 20% 0;
            border: 5px solid var(--primary-color);
        }

        .gallery {
            margin-top: 60px;
        }
    </style>
    <section class="py-5 gallery ">
        <div class="container">
            <div class="row">
                <div class="head-title text-center mb-3">
                    <h2>Our <span>Gallery</span></h2>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/1.jpg" data-fancybox="gallery" data-caption="Swetank Nasha Mukti Kendra Facility 1">
                            <img src="<?= $base_url; ?>assets/images/gallery/1.jpg" class="card-img-top img-fluid"
                                alt="Swetank Nasha Mukti Kendra Facility 1">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/2.jpg" data-fancybox="gallery" data-caption="Swetank Nasha Mukti Kendra Facility 2">
                            <img src="<?= $base_url; ?>assets/images/gallery/2.jpg" class="card-img-top img-fluid"
                                alt="Swetank Nasha Mukti Kendra Facility 2">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/3.jpg" data-fancybox="gallery" data-caption="Swetank Nasha Mukti Kendra Facility 3">
                            <img src="<?= $base_url; ?>assets/images/gallery/3.jpg" class="card-img-top img-fluid"
                                alt="Swetank Nasha Mukti Kendra Facility 3">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/4.jpg" data-fancybox="gallery" data-caption="Swetank Nasha Mukti Kendra Facility 4">
                            <img src="<?= $base_url; ?>assets/images/gallery/4.jpg" class="card-img-top img-fluid"
                                alt="Swetank Nasha Mukti Kendra Facility 4">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/5.jpg" data-fancybox="gallery" data-caption="Swetank Nasha Mukti Kendra Facility 5">
                            <img src="<?= $base_url; ?>assets/images/gallery/5.jpg" class="card-img-top img-fluid"
                                alt="Swetank Nasha Mukti Kendra Facility 5">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/6.jpg" data-fancybox="gallery" data-caption="Swetank Nasha Mukti Kendra Facility 6">
                            <img src="<?= $base_url; ?>assets/images/gallery/6.jpg" class="card-img-top img-fluid"
                                alt="Swetank Nasha Mukti Kendra Facility 6">
                        </a>
                    </div>
                </div>

                
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <?php include("common/footer.php"); ?>
</body>
<script>
    // Initialize AOS (Animate on Scroll)
    AOS.init({
        duration: 1000, // Animation duration
        once: true      // Animation happens only once while scrolling
    });

    // Fancybox initialization (optional, Fancybox 5 auto-inits)
    Fancybox.bind("[data-fancybox='gallery']", {
        Thumbs: {
            autoStart: true, // Show thumbnails in the lightbox
        },
        Toolbar: {
            display: [
                "close",
                "thumbs",
                "zoom",
                "slideshow"
            ]
        }
    });
</script>

</html>