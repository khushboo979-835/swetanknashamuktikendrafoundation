<style>
    /* ================= Top Header ================= */
    .top-header {
        background: #071a27;
        font-size: 13.5px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
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
        position: sticky;
        top: 0;
        width: 100%;
        z-index: 1020;
        background: #ffffff;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .navbar {
        transition: all 0.3s ease;
        background: #ffffff;
        padding: 8px 15px;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
        text-decoration: none;
    }

    .brand-logo-img {
        width: 52px;
        height: 52px;
        object-fit: contain;
        border-radius: 8px;
        border: 1px solid #e2e8f0;
        background: #fff;
        padding: 2px;
    }

    .brand-text-wrapper {
        display: flex;
        flex-direction: column;
        line-height: 1.2;
    }

    .brand-main-title {
        font-size: 18px;
        font-weight: 800;
        color: #071a27;
        letter-spacing: -0.3px;
    }

    .brand-hindi-badge {
        color: #15803d;
        font-weight: 800;
        font-size: 12px;
        background: #f0fdf4;
        padding: 1px 7px;
        border-radius: 4px;
        border: 1px solid #bbf7d0;
        display: inline-block;
        margin-top: 2px;
    }

    .navbar .nav-item {
        margin: 0 4px;
    }

    .navbar .nav-link {
        color: #1e293b;
        font-weight: 600;
        font-size: 14.5px;
        padding: 8px 12px !important;
        transition: all 0.25s ease;
        border-radius: 6px;
    }

    .navbar .nav-link:hover,
    .navbar .nav-link.active {
        color: #071a27;
        background: #f1f5f9;
    }

    /* ================= Dropdown ================= */
    .navbar-nav .dropdown-menu {
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        background: #ffffff;
        box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
        padding: 8px 0;
    }

    .navbar .dropdown-item {
        color: #334155;
        font-weight: 500;
        font-size: 14px;
        padding: 8px 18px;
        transition: all 0.2s ease;
    }

    .navbar .dropdown-item:hover {
        background: #071a27;
        color: #ffffff;
    }

    .btn-header-wa {
        background: #25D366;
        color: #ffffff !important;
        font-weight: 700;
        font-size: 13.5px;
        border-radius: 8px;
        padding: 8px 16px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        text-decoration: none;
        box-shadow: 0 4px 10px rgba(37, 211, 102, 0.25);
        transition: all 0.25s ease;
    }

    .btn-header-wa:hover {
        background: #1ebd5a;
        transform: translateY(-2px);
        box-shadow: 0 6px 14px rgba(37, 211, 102, 0.35);
    }

    .btn-header-call {
        background: #e11d48;
        color: #ffffff !important;
        font-weight: 700;
        font-size: 13.5px;
        border-radius: 8px;
        padding: 8px 16px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        text-decoration: none;
        box-shadow: 0 4px 10px rgba(225, 29, 72, 0.25);
        transition: all 0.25s ease;
    }

    .btn-header-call:hover {
        background: #be123c;
        transform: translateY(-2px);
        box-shadow: 0 6px 14px rgba(225, 29, 72, 0.35);
    }

    @media (max-width: 991px) {
        .navbar .collapse {
            background: #ffffff;
            border-top: 1px solid #e2e8f0;
            padding: 15px 10px;
            margin-top: 8px;
        }

        .navbar .nav-link {
            padding: 10px 12px !important;
            border-bottom: 1px solid #f1f5f9;
        }
    }
</style>

<!-- ================= Top Header ================= -->
<section class="top-header py-2 text-white">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-12 col-md-4 mb-1 mb-md-0">
                <i class="bi bi-geo-alt-fill text-danger"></i> Mathura, Uttar Pradesh - 281001
            </div>
            <div class="col-12 col-md-5 mb-1 mb-md-0 fw-semibold text-center">
                <i class="bi bi-shield-check text-success"></i> Swetank Nasha Mukti Kendra (24/7 Helpline)
            </div>
            <div class="col-12 col-md-3 text-md-end">
                <a href="tel:+919798354410" class="text-warning fw-bold text-decoration-none">
                    <i class="bi bi-telephone-fill"></i> +91 9798354410
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ================= Navbar ================= -->
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- 1. Logo & Formatted Nasha Mukti Kendra Text -->
            <a class="navbar-brand me-auto gap-2" href="<?= $base_url ?>">
                <img src="<?= $base_url ?>assets/images/logo/logo.jpg" alt="Swetank Nasha Mukti Kendra Logo" class="brand-logo-img">
                <div class="brand-text-wrapper text-start">
                    <span class="brand-main-title">Swetank</span>
                    <span class="brand-hindi-badge">नशा मुक्ति केंद्र, मथुरा</span>
                </div>
            </a>

            <!-- 2. Mobile Quick Buttons (WhatsApp & Call) -->
            <div class="d-lg-none d-flex align-items-center gap-2 me-2">
                <a href="https://wa.me/919798354410?text=Hello%20Swetank%20Nasha%20Mukti%20Kendra,%20I%20need%20information." target="_blank" class="btn btn-sm btn-success fw-bold px-2 py-1" style="font-size: 11px; border-radius: 6px;">
                    <i class="bi bi-whatsapp"></i> Chat
                </a>
                <a href="tel:+919798354410" class="btn btn-sm btn-danger fw-bold px-2 py-1" style="font-size: 11px; border-radius: 6px;">
                    <i class="bi bi-telephone-fill"></i> 9798354410
                </a>
            </div>
            
            <!-- 3. Toggle Button -->
            <button class="navbar-toggler p-1 border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="bi bi-list fs-2 text-dark"></span>
            </button>

            <!-- Menu Links & Desktop CTA Buttons -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center me-lg-3">
                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>about-us.php">About Us</a></li>

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

                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>contact-us.php">Contact Us</a></li>
                </ul>

                <div class="d-none d-lg-flex align-items-center gap-2">
                    <a href="https://wa.me/919798354410?text=Hello%20Swetank%20Nasha%20Mukti%20Kendra,%20I%20need%20information%20about%20admission." target="_blank" class="btn-header-wa">
                        <i class="bi bi-whatsapp"></i> WhatsApp
                    </a>
                    <a href="tel:+919798354410" class="btn-header-call">
                        <i class="bi bi-telephone-fill"></i> 9798354410
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>