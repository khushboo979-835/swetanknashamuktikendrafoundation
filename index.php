<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("common/config.php"); ?>
    <?php 
        $page_title = "Best Nasha Mukti Kendra in Patna | Rehab Center in Patna";
        $page_description = "Searching for the best Nasha Mukti Kendra in Patna? Swetank Nasha Mukti Kendra offers trusted drug and alcohol de-addiction services in Patna. Call now!";
        $page_keywords = "nasha mukti kendra, nasha mukti kendra patna, nasha mukti kendra in patna, best nasha mukti kendra in patna, rehab center in patna, drug de addiction center patna";
    ?>
    <?php include("common/head.php"); ?>
    <?php include("common/plugins.php"); ?>
    <style>
        .hero {
            position: relative;
            max-height: 550px;
            overflow: hidden;
            background: #000;
        }

        .carousel-item img {
            height: 550px;
            object-fit: cover;
            object-position: center;
            filter: brightness(0.8);
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 10;
            background: rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 20px;
        }

        .hero-text-top {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }

        .hero-text-main {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 25px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.9);
        }

        .hero-text-call {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .hero-call-btn {
            background: #62d2e4;
            color: white !important;
            font-size: 3rem;
            font-weight: 900;
            padding: 20px 60px;
            border-radius: 25px;
            text-decoration: none;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
            border: 4px solid white;
        }

        .hero-call-btn:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        @media (max-width: 992px) {
            .hero-text-main { font-size: 2.5rem; }
            .hero-call-btn { font-size: 2.2rem; padding: 15px 40px; }
        }

        @media (max-width: 768px) {
            .hero-text-top { font-size: 1rem; }
            .hero-text-main { font-size: 1.8rem; margin-bottom: 15px; }
            .hero-text-call { font-size: 1.3rem; }
            .hero-call-btn { font-size: 1.6rem; padding: 12px 30px; border-radius: 15px; border-width: 3px; }
            .hero-overlay { padding: 10px; }
        }
    </style>
</head>

<body>
    <?php include("common/header.php"); ?>
    <!-- ==================================== -->
    <section class="hero">
        <div class="hero-overlay">
            <div class="hero-text-top">सबसे Affordable और सुरक्षित केंद्र in Patna</div>
            <div class="hero-text-main">Swetank Nasha Mukti Kendra</div>
            <div class="hero-text-call">📞 संपर्क करें</div>
            <a href="tel:+917352447232" class="hero-call-btn">73524 47232</a>
        </div>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/gallery/abc.jpg" class="d-block w-100" alt="Swetank Nasha Mukti Kendra Patna">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/gallery/abc2.jpg" class="d-block w-100" alt="Swetank Nasha Mukti Kendra Patna">
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>


    <!-- =============================================================== -->
    <section class="py-5 about-us ">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="head-title text-center mb-3">
                    <h1>Nasha Mukti Kendra in Patna</h1>
                </div>



                <div class="col-md-6">
                    <p class="text-muted">
                        <strong class="text-muted">Swetank Life Care Treatments & Mental Rehabilitation Centre</strong>
                        is
                        one of the leading centers in Patna, trusted as the <strong class="text-muted">best nasha
                            mukti kendra patna</strong>
                        facility for those struggling with addiction. We are committed to helping individuals and
                        families
                        overcome the challenges of substance abuse with compassion, expertise, and a structured recovery
                        process. As a premier <a href="<?= $base_url ?>nasha-mukti-kendra-patna" class="text-decoration-none fw-bold" style="color: var(--primary-color);">rehab center in patna</a>, 
                        serving areas like <a href="<?= $base_url ?>nasha-mukti-kendra-danapur" class="text-decoration-none">Danapur</a>, 
                        <a href="<?= $base_url ?>nasha-mukti-kendra-kankarbagh" class="text-decoration-none">Kankarbagh</a>, 
                        <a href="<?= $base_url ?>nasha-mukti-kendra-boring-road" class="text-decoration-none">Boring Road</a>, 
                        <a href="<?= $base_url ?>nasha-mukti-kendra-bailey-road" class="text-decoration-none">Bailey Road</a>, 
                        and <a href="<?= $base_url ?>nasha-mukti-kendra-rajendra-nagar" class="text-decoration-none">Rajendra Nagar</a>, 
                        we provide life-changing support to those in need.
                    </p>
 
                    <p class="text-muted">
                        Our <strong class="text-muted">nasha mukti kendra patna</strong> is designed to provide a safe and
                        healing
                        environment where patients feel supported at every step. From medically supervised detox
                        programs to
                        personalized counseling, therapy sessions, and wellness activities, we ensure complete physical,
                        emotional, and psychological care. Each recovery journey is guided by experienced doctors,
                        therapists, and counselors who are dedicated to long-term healing at our <strong class="text-muted">rehab center in patna</strong>.
                    </p>
 
                    <p class="text-muted">
                        At Swetank, we follow a holistic approach that not only addresses addiction but also promotes
                        positive lifestyle changes. Our treatment plans include group therapy, one-to-one counseling,
                        yoga, meditation, and continuous family support. By combining medical expertise with mental and
                        emotional rehabilitation, our <strong class="text-muted">rehabilitation centre patna</strong>
                        empowers
                        individuals to regain self-confidence and live a healthier, addiction-free life. If you are 
                        looking for the most effective <strong class="text-muted">nasha mukti kendra patna</strong>, 
                        we are here to help.
                    </p>
 
                    <p class="text-muted">
                        We believe that recovery is not just about quitting addiction but building a new path filled
                        with
                        hope, positivity, and personal growth. If you are searching for a trusted <strong class="text-muted">nasha mukti kendra patna</strong>,
                        Swetank stands as your reliable partner in transformation – where every recovery is possible and every
                        life is valued. Our <strong class="text-muted">rehab center in patna</strong> is dedicated to 
                        your success.
                    </p>

                    <div class="py-1">
                        <a href="about-us.php" class="btn-pro">
                            Read More
                        </a>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <img src="<?= $base_url ?>/assets/images/about/1.jpg" alt="Nasha Mukti Kendra Bailey Road" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================================ -->
    <section class="py-5 services">
        <div class="container">
            <div class="row">
                <div class="head-title mb-4 text-center">
                    <h2>Our <span>Nasha Mukti Services & Treatments in Patna</span></h2>
                    <p class="text-muted">
                        At <strong>Swetank Nasha Mukti Kendra</strong>, we provide effective and
                        result-oriented <strong>addiction treatments</strong> and
                        <strong>mental health care</strong> to help individuals recover and live a healthier life.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Alcohol Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/1.jpg" class="card-img-top"
                                alt="Alcohol Addiction Treatment in Patna">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/alcohol-addiction.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Alcohol Addiction Treatment</h5>
                            <p class="card-text">Comprehensive recovery programs for <strong>alcohol addiction</strong>
                                including medical detox, therapy sessions, and counseling for long-term sobriety.</p>
                        </div>
                    </div>
                </div>

                <!-- Drug Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/2.jpg" class="card-img-top"
                                alt="Drug Addiction Treatment in Patna">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/drugs-addiction.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Drug Addiction Treatment</h5>
                            <p class="card-text">Specialized programs for <strong>drug addiction</strong> including
                                heroin,
                                cocaine, and other substances, with structured therapy and rehab care.</p>
                        </div>
                    </div>
                </div>

                <!-- Marijuana Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/3.jpg" class="card-img-top"
                                alt="Marijuana Addiction Rehabilitation Patna">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/marijuana-addiction.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Marijuana Addiction Treatment</h5>
                            <p class="card-text">Tailored recovery plans for individuals struggling with
                                <strong>marijuana addiction</strong>, focusing on behavioral therapy and relapse
                                prevention.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Whitener Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/4.jpg" class="card-img-top"
                                alt="Whitener Addiction Treatment in Patna">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/whitener-addiction.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Whitener Addiction Treatment</h5>
                            <p class="card-text">Effective therapy and counseling sessions to overcome
                                <strong>whitener addiction</strong> and promote healthier coping mechanisms.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Heroin Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/5.jpg" class="card-img-top"
                                alt="Heroin Addiction Treatment in Patna">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/heroin-addiction.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Heroin Addiction Treatment</h5>
                            <p class="card-text">A combination of <strong>detoxification</strong>, therapy, and medical
                                supervision to help patients recover from <strong>heroin addiction</strong>.</p>
                        </div>
                    </div>
                </div>

                <!-- Cocaine Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/6.png" class="card-img-top"
                                alt="Cocaine Addiction Treatment in Patna">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/cocaine-addiction.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cocaine Addiction Treatment</h5>
                            <p class="card-text">Structured recovery plans for <strong>cocaine addiction</strong>, with
                                therapy, counseling, and relapse prevention techniques.</p>
                        </div>
                    </div>
                </div>

                <!-- Detoxification -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/7.jpg" class="card-img-top"
                                alt="Detoxification Treatment in Patna">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/detoxification.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Detoxification Programs</h5>
                            <p class="card-text">Safe and medically supervised <strong>detoxification</strong>
                                treatments
                                to cleanse the body and prepare individuals for rehabilitation.</p>
                        </div>
                    </div>
                </div>

                <!-- Depression Treatment -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/8.jpg" class="card-img-top"
                                alt="Depression Treatment in Patna">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/depression-treatment.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Depression Treatment</h5>
                            <p class="card-text">Professional therapy and medical support to manage and recover from
                                <strong>depression</strong>, ensuring emotional and mental well-being.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mental Health -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/9.jpg" class="card-img-top"
                                alt="Mental Health Treatment in Patna">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/mental-health.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mental Health Counseling</h5>
                            <p class="card-text text-muted">Holistic <strong>mental health treatment</strong> and
                                counseling
                                sessions
                                to build positivity, emotional strength, and long-term recovery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================================================ -->
    <?php include("slider.php"); ?>
    <!-- ============================================================== -->
    <!-- =============================================================== -->
    <section class="why-choose py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Image -->
                <div class="col-md-5 mb-1 mb-md-0">
                    <div class="col-12 mb-2 image-2">
                        <img src="<?= $base_url ?>/assets/images/about/about.jpg" alt="Why Choose Swetank Nasha Mukti Kendra in Patna"
                            class="img-fluid ">
                    </div>
                </div>

                <!-- Right Side Content -->
                <div class="col-md-7">
                    <div class="head-title mb-2">
                        <h2>Why Choose <span>Swetank Nasha Mukti Kendra</span>?</h2>
                    </div>
                    <p>
                        At <strong>Swetank Nasha Mukti Kendra in Patna</strong>, we are committed to providing
                        ethical, compassionate, and effective care for individuals struggling with
                        <strong>alcohol addiction</strong>, <strong>drug addiction</strong>,
                        and <strong>mental health challenges</strong>.
                        Our team of experienced doctors, counselors, and therapists create
                        personalized recovery plans for each patient.
                    </p>
                    <p>
                        With structured programs including <strong>detoxification</strong>,
                        <strong>counseling sessions</strong>, <strong>yoga and meditation</strong>,
                        and <strong>12-step recovery programs</strong>, we ensure a holistic approach
                        that focuses on the physical, mental, and emotional well-being of every individual.
                    </p>


                </div>
            </div>
        </div>
    </section>

    <!-- ================================================================ -->
    <?php include("testimonials.php"); ?>
    <!-- ================================================================ -->

    <!-- ================================================================ -->
    <!-- ================= OUR LOCATIONS SECTION (Image Style) ================= -->
    <section class="our-locations-new py-5 bg-white border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2 class="fw-bold text-uppercase" style="letter-spacing: 1px; color: #000; font-size: 2.5rem;">OUR LOCATIONS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a href="<?= $base_url ?>nasha-mukti-kendra-patna" class="text-decoration-none d-flex align-items-center location-link-new">
                                <i class="bi bi-check-lg me-3 text-primary"></i> Nasha Mukti Kendra In Patna
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="<?= $base_url ?>nasha-mukti-kendra-danapur" class="text-decoration-none d-flex align-items-center location-link-new">
                                <i class="bi bi-check-lg me-3 text-primary"></i> Nasha Mukti Kendra In Danapur
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="<?= $base_url ?>nasha-mukti-kendra-kankarbagh" class="text-decoration-none d-flex align-items-center location-link-new">
                                <i class="bi bi-check-lg me-3 text-primary"></i> Nasha Mukti Kendra In Kankarbagh
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a href="<?= $base_url ?>nasha-mukti-kendra-boring-road" class="text-decoration-none d-flex align-items-center location-link-new">
                                <i class="bi bi-check-lg me-3 text-primary"></i> Nasha Mukti Kendra In Boring Road
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="<?= $base_url ?>nasha-mukti-kendra-bailey-road" class="text-decoration-none d-flex align-items-center location-link-new">
                                <i class="bi bi-check-lg me-3 text-primary"></i> Nasha Mukti Kendra In Bailey Road
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="<?= $base_url ?>nasha-mukti-kendra-rajendra-nagar" class="text-decoration-none d-flex align-items-center location-link-new">
                                <i class="bi bi-check-lg me-3 text-primary"></i> Nasha Mukti Kendra In Rajendra Nagar
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <style>
    .location-link-new {
        color: #34495e;
        font-size: 1.2rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    .location-link-new:hover {
        color: var(--primary-color);
        padding-left: 10px;
    }
    .location-link-new i {
        font-size: 1.4rem;
        -webkit-text-stroke: 1px;
    }
    </style>
    <!-- =============================================================== -->
    <?php include("faq.php"); ?>
    <!-- ================================================================ -->
    <?php include("contact.php"); ?>
    <!-- ================================================================ -->
    <?php include("common/footer.php"); ?>
</body>
<script>
    (function () {
        'use strict';
        const form = document.getElementById('appointmentForm');

        form.addEventListener('submit', function (event) {
            event.preventDefault();
            if (!form.checkValidity()) {
                event.stopPropagation();
            } else {
                // Collect form data
                const name = document.getElementById('name').value.trim();
                const number = document.getElementById('number').value.trim();
                const service = document.getElementById('service').value;
                const date = document.getElementById('date').value;
                const time = document.getElementById('time').value;

                // WhatsApp number (country code without +)
                const whatsappNumber = '917352447232';

                // WhatsApp message format
                const whatsappMessage =
                    `*New Appointment Request*\n\n` +
                    `*Name:* ${name}\n` +
                    `*Mobile:* ${number}\n` +
                    `*Service:* ${service}\n` +
                    `*Date:* ${date}\n` +
                    `*Time:* ${time}`;

                // Encode and open WhatsApp
                const encodedMessage = encodeURIComponent(whatsappMessage);
                window.open(`https://wa.me/${whatsappNumber}?text=${encodedMessage}`, '_blank');
            }

            form.classList.add('was-validated');
        });
    })();
</script>

</html>