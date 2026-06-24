<style>
    /* ================= Root Colors ================= */

    /* ================= Top Header ================= */
    .top-header {
        background: var(--primary-color);
        font-size: 14px;
    }

    .top-header i {
        margin-right: 5px;
    }

    @media screen and (max-width: 767px) {
        .top-header {
            display: none;
        }
    }

    /* ================= Navbar ================= */
    header {
        position: relative;
        width: 100%;
        z-index: 999;
    }

    .navbar {
        transition: all 0.4s ease;
        background: var(--tertiary-color);
        border-radius: 0px;
        margin: 0 auto;
        width: 100%;
        /* top: 35px; */
        position: absolute;
        left: 0;
        right: 0;
        padding: 8px 20px;
        box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.08);
    }

    .navbar .navbar-brand img {
        width: 65px;
        transition: all 0.3s ease;
    }

    .navbar .nav-item {
        margin: 0 10px;
        position: relative;
    }

    .navbar .nav-link {
        color: black;
        font-weight: 600;
        transition: all 0.3s ease;
        padding: 8px 12px;
    }

    .navbar .nav-link:hover,
    .navbar .nav-link:focus,
    .navbar .dropdown-item:focus {
        color: black;
    }

    /* ================= Dropdown ================= */
    .navbar-nav .dropdown-menu {
        border: none;
        border-radius: 0px;
        background: var(--tertiary-color);
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
        padding: 8px 10px;
        animation: fadeIn 0.3s ease;
    }

    .navbar .dropdown-item {
        color: #333;
        font-weight: 500;
        padding: 8px 15px;
        transition: all 0.3s ease;
    }

    .navbar .dropdown-item:hover {
        background: var(--primary-color);
        color: var(--tertiary-color);
    }

    /* ================= Scrolled Navbar ================= */
    header.scrolled .navbar {
        width: 100%;
        top: 0;
        border-radius: 0;
        position: fixed;
        background: var(--tertiary-color) !important;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
        animation: slideDown 0.3s ease;
    }

    header.scrolled .nav-link {
        color: var(--primary-color) !important;
    }

    header.scrolled .navbar-brand img {
        width: 55px;
    }

    /* ================= Mobile Responsive ================= */
    @media (max-width: 992px) {
        .navbar {
            width: 100%;
            top: 0;
            border-radius: 0;
            position: fixed;
        }

        .navbar .collapse {
            background: var(--tertiary-color);
            border-top: 1px solid #eee;
            padding: 15px 20px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .navbar .nav-link {
            padding: 12px 0 !important;
            border-bottom: 1px solid #f8f9fa;
        }

        .navbar .nav-link:last-child {
            border-bottom: none;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .toggle-icon span {
            color: var(--primary-color);
            transition: color 0.3s ease;
        }

        header.scrolled .toggle-icon span {
            color: var(--primary-color) !important;
        }
    }

    /* ================= Book Now Button ================= */
    .btn-quotes {
        background: var(--secondary-color);
        color: var(--tertiary-color);
        border-radius: 30px;
        padding: 8px 20px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
    }

    .btn-quotes:hover {
        background: var(--primary-color);
        color: var(--tertiary-color);
    }

    /* ================= Animations ================= */
    @keyframes slideDown {
        from {
            transform: translateY(-100%);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- ================= Top Header ================= -->
<!-- <section class="top-header py-2 text-white">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-12 col-md-3 mb-1 mb-md-0">
                <i class="bi bi-telephone"></i> +91 72728 18208
            </div>
            <div class="col-12 col-md-6 mb-1 mb-md-0 fw-semibold">
                <i class="bi bi-heart-fill"></i> Swetank Nasha Mukti Kendra | नई सोच नई आशा, यह है एहसास का वादा !
            </div>
            <div class="col-12 col-md-3">
                <i class="bi bi-envelope"></i> Swetankgroup2015@gmail.com
            </div>
        </div>
    </div>
</section> -->

<!-- ================= Navbar ================= -->
<header>
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container p-0">
            <!-- 1. Logo -->
            <a class="navbar-brand me-auto" href="<?= $base_url ?>">
                <img src="<?= $base_url ?>assets/images/logo/logo.jpg" alt="Swetank Logo" class="img-fluid" style="width: 45px;">
            </a>

            <!-- 2. WhatsApp Button (Text Only) & 3. Call Button (Number Only) -->
            <div class="d-lg-none d-flex align-items-center gap-2 me-2">
                <a href="https://wa.me/917352447232" target="_blank" class="btn btn-sm btn-success fw-bold px-2 py-1" style="font-size: 10px; border-radius: 4px;">
                    WhatsApp
                </a>
                <a href="tel:+917352447232" class="btn btn-sm btn-danger fw-bold px-2 py-1" style="font-size: 10px; border-radius: 4px;">
                    73524 47232
                </a>
            </div>
            
            <!-- 4. Toggle Button -->
            <button class="navbar-toggler toggle-icon p-0 border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="bi bi-list fs-1" style="color: var(--primary-color);"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>about-us">About</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/alcohol-addiction.php">Alcohol Addiction Treatment</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/drugs-addiction.php">Drug Addiction Treatment</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/marijuana-addiction.php">Marijuana Addiction Treatment</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/whitener-addiction.php">Whitener Addiction Treatment</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/heroin-addiction.php">Heroin Addiction Treatment</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/cocaine-addiction.php">Cocaine Addiction Treatment</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/detoxification.php">Detoxification Treatment</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/depression-treatment.php">Depression Treatment</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/mental-health.php">Mental Health Treatment</a></li>
                        </ul>
                    </li>

                     <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>blogs">Blogs</a></li> 
                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>contact-us">Contact Us</a></li>
                </ul>

                <ul class="list-inline mb-0">
                    <li class="nav-item"><a class=" btn-pro text-white" href="<?= $base_url ?>book-now.php">Book Now</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- ================= Scroll Effect Script ================= -->
<script>
    window.addEventListener("scroll", function () {
        const header = document.querySelector("header");
        if (window.scrollY > 20) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
</script>