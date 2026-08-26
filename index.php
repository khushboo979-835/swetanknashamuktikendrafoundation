<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("common/config.php"); ?>
    <?php 
        $page_title = "Swetank Nasha Mukti Kendra Mathura | Best De-Addiction & Rehab Center";
        $page_description = "Swetank Nasha Mukti Kendra in Mathura offers safe, effective addiction treatment, certified medical detox, psychiatric counseling, and 24/7 recovery helpline: 9798354410.";
        $page_keywords = "swetank nasha mukti kendra mathura, nasha mukti kendra mathura, rehab center mathura, de-addiction center mathura, best nasha mukti kendra mathura";
    ?>
    <?php include("common/head.php"); ?>
    <?php include("common/plugins.php"); ?>
    <style>
        /* Hero Split Section */
        .hero-split {
            position: relative;
            background: linear-gradient(135deg, rgba(7, 26, 39, 0.92) 0%, rgba(10, 37, 64, 0.88) 100%),
                        url('assets/images/banner/1.jpg') center center/cover no-repeat;
            padding: 60px 0 70px;
            color: #ffffff;
            overflow: hidden;
        }

        .hero-split::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at top right, rgba(34, 197, 94, 0.15), transparent 50%),
                        radial-gradient(circle at bottom left, rgba(2, 132, 199, 0.15), transparent 50%);
            pointer-events: none;
        }

        .hero-tag-badge {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: #fef08a;
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 13.5px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 12px;
        }

        .hero-main-title {
            font-size: clamp(28px, 4vw, 44px);
            font-weight: 800;
            line-height: 1.2;
            color: #ffffff;
            margin-bottom: 12px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
        }

        .hero-main-title span.text-highlight {
            color: #4ade80;
        }

        .hero-sub-text {
            font-size: clamp(15px, 2vw, 18px);
            color: #cbd5e1;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .hero-cta-group {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .hero-btn-call {
            background: linear-gradient(135deg, #e11d48 0%, #be123c 100%);
            color: #ffffff !important;
            font-size: 18px;
            font-weight: 800;
            padding: 12px 26px;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 8px 20px rgba(225, 29, 72, 0.35);
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .hero-btn-call:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(225, 29, 72, 0.45);
        }

        .hero-btn-wa {
            background: #25D366;
            color: #ffffff !important;
            font-size: 15px;
            font-weight: 700;
            padding: 12px 22px;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 8px 20px rgba(37, 211, 102, 0.3);
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .hero-btn-wa:hover {
            transform: translateY(-2px);
            background: #1ebd5a;
        }

        .hero-badges-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 10px;
            margin-top: 10px;
        }

        .hero-badge-pill {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            color: #f1f5f9;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .hero-badge-pill i {
            color: #4ade80;
        }

        /* Hero Right Form Card */
        .hero-form-box {
            background: #ffffff;
            border-radius: 16px;
            padding: 28px 24px;
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
            border-top: 5px solid #16a34a;
            color: #0f172a;
        }

        .form-header-title {
            text-align: center;
            margin-bottom: 18px;
        }

        .form-header-title h4 {
            font-size: 20px;
            font-weight: 800;
            color: #071a27;
            margin-bottom: 3px;
        }

        .form-header-title p {
            font-size: 12.5px;
            color: #64748b;
            margin-bottom: 0;
        }

        .hero-form-box .form-control,
        .hero-form-box .form-select {
            border: 1.5px solid #cbd5e1;
            border-radius: 8px;
            padding: 10px 12px;
            font-size: 13.5px;
            background: #f8fafc;
        }

        .hero-form-box .form-control:focus,
        .hero-form-box .form-select:focus {
            border-color: #16a34a;
            background: #ffffff;
            box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.15);
        }

        .btn-submit-hero-form {
            background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
            color: #ffffff;
            font-weight: 700;
            font-size: 15px;
            border-radius: 8px;
            padding: 12px;
            border: none;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(22, 163, 74, 0.3);
            transition: all 0.3s ease;
        }

        .btn-submit-hero-form:hover {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            transform: translateY(-2px);
        }

        /* Emergency strip */
        .emergency-banner {
            background: #fef2f2;
            border-bottom: 1px solid #fee2e2;
            padding: 12px 15px;
            text-align: center;
            font-size: 14px;
            color: #991b1b;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <?php include("common/header.php"); ?>

    <!-- ================= HERO SECTION WITH SPLIT LAYOUT ================= -->
    <section class="hero-split">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center gy-4">
                
                <!-- Left Hero Content -->
                <div class="col-lg-7 text-start">
                    <div class="hero-tag-badge">
                        <i class="bi bi-shield-fill-check text-warning"></i> 100% Confidential &amp; Safe Care
                    </div>
                    
                    <h1 class="hero-main-title">
                        Swetank <span class="text-highlight">नशा मुक्ति केंद्र</span>, मथुरा
                        <br>
                        <span style="font-size: 0.85em; font-weight: 700;">A Fresh Start to an Addiction-Free Life</span>
                    </h1>
                    
                    <p class="hero-sub-text">
                        मथुरा का विश्वसनीय नशा मुक्ति एवं पुनर्वास मार्गदर्शन केंद्र। शराब, ड्रग्स एवं मानसिक तनाव से सुरक्षित व स्थायी मुक्ति। 24/7 मेडिकल परामर्श व मनोवैज्ञानिक देखभाल।
                    </p>

                    <div class="hero-cta-group">
                        <a href="tel:+919798354410" class="hero-btn-call">
                            <i class="bi bi-telephone-fill"></i> 9798354410 (24x7 Call)
                        </a>
                        <a href="https://wa.me/919798354410?text=Hello%20Swetank%20Nasha%20Mukti%20Kendra%20Mathura,%20I%20need%20admission%20help." target="_blank" class="hero-btn-wa">
                            <i class="bi bi-whatsapp"></i> WhatsApp Help
                        </a>
                    </div>

                    <div class="hero-badges-grid">
                        <div class="hero-badge-pill">
                            <i class="bi bi-check-circle-fill"></i> 24/7 Helpline &amp; Admissions
                        </div>
                        <div class="hero-badge-pill">
                            <i class="bi bi-check-circle-fill"></i> Experienced Counselors
                        </div>
                        <div class="hero-badge-pill">
                            <i class="bi bi-check-circle-fill"></i> Safe &amp; Homely Environment
                        </div>
                        <div class="hero-badge-pill">
                            <i class="bi bi-check-circle-fill"></i> Yoga &amp; Mind Healing
                        </div>
                    </div>
                </div>

                <!-- Right Hero Form Fill -->
                <div class="col-lg-5">
                    <div class="hero-form-box">
                        <div class="form-header-title">
                            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 mb-2">24x7 Immediate Assistance</span>
                            <h4>निःशुल्क परामर्श फॉर्म</h4>
                            <p>Immediate Confidential Callback from Specialists</p>
                        </div>

                        <form id="heroQuickForm" onsubmit="handleHeroFormSubmit(event)">
                            <div class="mb-3">
                                <label for="hname" class="form-label fw-semibold text-dark" style="font-size: 13px;">Full Name / आपका नाम <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="hname" placeholder="Enter Full Name" required>
                            </div>

                            <div class="mb-3">
                                <label for="hphone" class="form-label fw-semibold text-dark" style="font-size: 13px;">Mobile Number / मोबाइल नंबर <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="hphone" placeholder="उदा. 9798354410" pattern="[0-9]{10}" required>
                            </div>

                            <div class="mb-3">
                                <label for="hcity" class="form-label fw-semibold text-dark" style="font-size: 13px;">City / शहर (Location)</label>
                                <input type="text" class="form-control" id="hcity" placeholder="Mathura, UP" value="Mathura">
                            </div>

                            <div class="mb-3">
                                <label for="hservice" class="form-label fw-semibold text-dark" style="font-size: 13px;">Treatment Required / सेवा चयन</label>
                                <select class="form-select" id="hservice">
                                    <option value="Alcohol Addiction Treatment">Alcohol / शराब नशा मुक्ति</option>
                                    <option value="Drugs Addiction Treatment">Drugs / ड्रग्स व स्मैक</option>
                                    <option value="Marijuana Addiction Treatment">Marijuana &amp; Ganja / गांजा</option>
                                    <option value="Whitener Addiction Treatment">Whitener &amp; Inhalants / व्हाइटनर</option>
                                    <option value="Heroin Addiction Treatment">Heroin / हेरोइन</option>
                                    <option value="Psychological & Family Counseling">Family Counseling / परामर्श</option>
                                </select>
                            </div>

                            <button type="submit" class="btn-submit-hero-form">
                                <i class="bi bi-send-fill"></i> तुरंत परामर्श प्राप्त करें (Send Inquiry)
                            </button>

                            <div class="text-center mt-2" style="font-size: 11.5px; color: #64748b;">
                                <i class="bi bi-lock-fill text-success"></i> 100% Confidential &amp; Safe Guidance
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Emergency Strip -->
    <div class="emergency-banner">
        <div class="container d-flex justify-content-center align-items-center flex-wrap gap-2">
            <span class="badge bg-danger text-white text-uppercase px-2 py-1">Emergency Admission</span>
            <span>क्या आपका कोई अपना गंभीर नशे की समस्या से पीड़ित है? तुरंत कॉल करें:</span>
            <a href="tel:+919798354410" class="text-danger fw-bold text-decoration-underline">+91 9798354410</a>
        </div>
    </div>

    <!-- ================= ABOUT US ================= -->
    <section class="py-5 about-us bg-light">
        <div class="container">
            <div class="row justify-content-center align-items-center gy-4">
                <div class="head-title text-center mb-3">
                    <h2>About <span>Swetank Nasha Mukti Kendra Mathura</span></h2>
                </div>

                <div class="col-md-6">
                    <p class="text-muted">
                        <strong class="text-dark">Swetank Life Care Treatments &amp; Mental Rehabilitation Centre</strong>
                        is a premier institution dedicated to providing compassionate, scientific, and ethical de-addiction services in <strong>Mathura, Uttar Pradesh</strong>. We are committed to helping individuals and families overcome the challenges of substance abuse with structured recovery programs.
                    </p>
 
                    <p class="text-muted">
                        Our center provides a safe, disciplined, and nurturing environment where patients receive 24/7 medical supervision, individualized psychological counseling, and holistic therapies including daily yoga and meditation.
                    </p>
 
                    <p class="text-muted">
                        We believe that recovery is not just about quitting addiction but building a new path filled with hope, self-respect, and personal growth.
                    </p>

                    <div class="py-1">
                        <a href="about-us.php" class="btn btn-primary fw-bold px-4 py-2" style="border-radius: 8px;">
                            Read More About Us
                        </a>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <img src="<?= $base_url ?>/assets/images/about/1.jpg" alt="Swetank Nasha Mukti Kendra Mathura" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- ================= SERVICES ================= -->
    <section class="py-5 services">
        <div class="container">
            <div class="row">
                <div class="head-title mb-4 text-center">
                    <h2>Our <span>De-Addiction Services &amp; Treatments</span></h2>
                    <p class="text-muted">
                        At <strong>Swetank Nasha Mukti Kendra</strong>, we provide effective, result-oriented <strong>addiction treatments</strong> and <strong>mental health care</strong>.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Alcohol Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm border-0">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/1.jpg" class="card-img-top" alt="Alcohol Addiction Treatment">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/alcohol-addiction.php" class="btn btn-overlay">Read More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Alcohol Addiction Treatment</h5>
                            <p class="card-text text-muted">Comprehensive recovery programs for alcohol addiction including medical detox, therapy sessions, and relapse prevention counseling.</p>
                        </div>
                    </div>
                </div>

                <!-- Drug Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm border-0">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/2.jpg" class="card-img-top" alt="Drug Addiction Treatment">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/drugs-addiction.php" class="btn btn-overlay">Read More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Drug Addiction Treatment</h5>
                            <p class="card-text text-muted">Specialized programs for substance abuse including heroin, cocaine, smack, and prescription drugs with structured rehab care.</p>
                        </div>
                    </div>
                </div>

                <!-- Marijuana Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm border-0">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/3.jpg" class="card-img-top" alt="Marijuana Addiction Treatment">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/marijuana-addiction.php" class="btn btn-overlay">Read More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Marijuana &amp; Ganja Treatment</h5>
                            <p class="card-text text-muted">Tailored recovery plans focusing on cognitive behavioral therapy, motivation enhancement, and psychological stability.</p>
                        </div>
                    </div>
                </div>

                <!-- Whitener Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm border-0">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/4.jpg" class="card-img-top" alt="Whitener Addiction Treatment">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/whitener-addiction.php" class="btn btn-overlay">Read More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Whitener &amp; Inhalants Treatment</h5>
                            <p class="card-text text-muted">Empathetic therapy and counseling sessions to overcome inhalant addiction and build healthy lifestyle habits.</p>
                        </div>
                    </div>
                </div>

                <!-- Heroin Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm border-0">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/5.jpg" class="card-img-top" alt="Heroin Addiction Treatment">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/heroin-addiction.php" class="btn btn-overlay">Read More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Heroin &amp; Smack Protocol</h5>
                            <p class="card-text text-muted">Medically assisted withdrawal management, individual counseling, and family rehabilitation support.</p>
                        </div>
                    </div>
                </div>

                <!-- Detoxification -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm border-0">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/7.jpg" class="card-img-top" alt="Detoxification Treatment">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/detoxification.php" class="btn btn-overlay">Read More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Detoxification Programs</h5>
                            <p class="card-text text-muted">Safe and medically supervised detoxification to cleanse the body safely and prepare individuals for sustainable recovery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= SLIDER / GALLERY ================= -->
    <?php include("slider.php"); ?>

    <!-- ================= WHY CHOOSE US ================= -->
    <section class="why-choose py-5 bg-white">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-md-5">
                    <img src="<?= $base_url ?>/assets/images/about/about.jpg" alt="Why Choose Swetank Nasha Mukti Kendra" class="img-fluid rounded shadow">
                </div>

                <div class="col-md-7">
                    <div class="head-title mb-3 text-start">
                        <h2>Why Choose <span>Swetank Nasha Mukti Kendra</span>?</h2>
                    </div>
                    <p class="text-muted">
                        At <strong>Swetank Nasha Mukti Kendra Mathura</strong>, we are committed to providing ethical, compassionate, and effective care for individuals struggling with alcohol addiction, drug dependence, and behavioral health challenges.
                    </p>
                    <p class="text-muted">
                        With structured programs including <strong>medical detoxification</strong>, <strong>1-on-1 counseling</strong>, <strong>daily yoga &amp; meditation</strong>, and <strong>family support meetings</strong>, we ensure a holistic approach that restores physical health and peace of mind.
                    </p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="tel:+919798354410" class="btn btn-danger fw-bold px-4 py-2" style="border-radius: 8px;">
                            <i class="bi bi-telephone-fill"></i> Call 9798354410
                        </a>
                        <a href="https://wa.me/919798354410" target="_blank" class="btn btn-success fw-bold px-4 py-2" style="border-radius: 8px;">
                            <i class="bi bi-whatsapp"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= TESTIMONIALS & FAQ ================= -->
    <?php include("testimonials.php"); ?>
    <?php include("faq.php"); ?>
    <?php include("contact.php"); ?>
    <?php include("common/footer.php"); ?>

    <!-- Form Script -->
    <script>
        function handleHeroFormSubmit(event) {
            event.preventDefault();
            const name = document.getElementById('hname').value.trim();
            const phone = document.getElementById('hphone').value.trim();
            const city = document.getElementById('hcity').value.trim();
            const service = document.getElementById('hservice').value;

            if(!name || !phone) {
                alert('कृपया अपना नाम और मोबाइल नंबर दर्ज करें।');
                return;
            }

            const message = `Hello Swetank Nasha Mukti Kendra Mathura,%0A%0A*New Website Inquiry:*%0A👤 *Name:* ${encodeURIComponent(name)}%0A📱 *Phone:* ${encodeURIComponent(phone)}%0A📍 *City:* ${encodeURIComponent(city)}%0A🩺 *Service:* ${encodeURIComponent(service)}`;
            
            window.open(`https://wa.me/919798354410?text=${message}`, '_blank');
            alert('धन्यवाद! आपकी इन्क्वायरी प्राप्त हो गई है। हमारी टीम आपसे जल्द संपर्क करेगी।');
            document.getElementById('heroQuickForm').reset();
        }
    </script>
</body>
</html>