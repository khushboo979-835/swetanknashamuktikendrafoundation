<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("common/config.php"); ?>
    <?php 
        $location_name = "Bailey Road";
        $page_title = "Best Nasha Mukti Kendra in Bailey Road | Top Rehab Center in Bailey Road";
        $page_description = "Looking for the best Nasha Mukti Kendra in Bailey Road? Swetank Nasha Mukti Kendra provides professional drug and alcohol de-addiction services in Bailey Road, Patna. Call now!";
        $page_keywords = "nasha mukti kendra bailey road, nasha mukti kendra in bailey road, best nasha mukti kendra in bailey road, rehab center in bailey road, de addiction center bailey road";
    ?>
    <?php include("common/head.php"); ?>
    <?php include("common/plugins.php"); ?>
    <style>
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('<?= $base_url ?>assets/images/background/4.jpg') no-repeat center center/cover;
            padding: 160px 0 100px;
            color: white;
            text-align: center;
        }
        .about-section { padding: 80px 0; background: #fff; }
        .services-section { padding: 80px 0; background: #f9f9f9; }
        .service-item {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            height: 100%;
            transition: transform 0.3s ease;
            text-align: center;
        }
        .service-item:hover { transform: translateY(-10px); }
        .service-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }
        .section-title {
            font-weight: 800;
            margin-bottom: 40px;
            position: relative;
            display: inline-block;
        }
        .section-title::after {
            content: '';
            width: 60px;
            height: 4px;
            background: var(--secondary-color);
            position: absolute;
            bottom: -10px;
            left: 0;
            border-radius: 2px;
        }
        .text-center .section-title::after { left: 50%; transform: translateX(-50%); }
    </style>
</head>
<body>
    <?php include("common/header.php"); ?>

    <section class="hero-section">
        <div class="container">
            <h1 class="display-3 fw-bold mb-4">Nasha Mukti Kendra in Bailey Road</h1>
            <p class="lead mb-0 mx-auto" style="max-width: 800px;">
                Leading rehabilitation services in Bailey Road, Patna, providing expert de-addiction 
                treatment, medically supervised detox, and compassionate recovery support.
            </p>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="section-title">About Our Bailey Road Center</h2>
                    <p class="lead text-muted mb-4">
                        Swetank Nasha Mukti Kendra in Bailey Road is a leading rehabilitation center providing advanced de-addiction 
                        services in one of Patna's most accessible locations. Our Bailey Road center is designed to offer a 
                        supportive and clinical environment where individuals can overcome substance abuse with the help of medical 
                        experts. We specialize in comprehensive detoxification and long-term rehabilitation programs for alcohol 
                        and various drug addictions.
                    </p>
                    <p class="text-muted mb-0">
                        At our Bailey Road facility, we prioritize patient comfort and clinical excellence. Our treatment plans are 
                        customized to meet the unique challenges of every individual, combining modern psychiatric care with 
                        traditional wellness practices. As a trusted nasha mukti kendra in Bailey Road, we are dedicated to helping 
                        our patients achieve sustainable recovery and reintegrate successfully into their families and society. 
                        Our rehabilitation center in Bailey Road is here for you.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Specialized Services</h2>
                <p class="text-muted">Comprehensive addiction treatment programs in Bailey Road.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="service-icon"><i class="bi bi-droplet-half"></i></div>
                        <h4>Alcohol De-addiction</h4>
                        <p class="text-muted">Structured programs to overcome alcohol dependency safely and effectively.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="service-icon"><i class="bi bi-capsule"></i></div>
                        <h4>Drug Rehabilitation</h4>
                        <p class="text-muted">Expert care for drug addiction including heroin, cocaine, and pharmaceutical abuse.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="service-icon"><i class="bi bi-people"></i></div>
                        <h4>Counseling & Therapy</h4>
                        <p class="text-muted">Individual and group therapy sessions to address psychological aspects of addiction.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="service-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Detox Treatment</h4>
                        <p class="text-muted">Medically supervised detoxification to ensure a safe withdrawal process.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="service-icon"><i class="bi bi-clock-history"></i></div>
                        <h4>24x7 Care</h4>
                        <p class="text-muted">Round-the-clock medical and emotional support for all our patients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("common/footer.php"); ?>
</body>
</html>
