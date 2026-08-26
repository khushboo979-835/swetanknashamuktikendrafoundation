<!-- Bootstrap 5.3.3 JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Footer CSS -->
<style>
    /* Enhanced Footer */
    footer.site-footer-main {
        background: #071a27;
        color: #e2e8f0;
        padding: 55px 0 25px;
        font-family: 'Plus Jakarta Sans', "Segoe UI", sans-serif;
        position: relative;
        border-top: 4px solid #16a34a;
    }

    .footer-logo-wrap {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 15px;
    }

    .footer-logo {
        width: 55px;
        height: 55px;
        object-fit: contain;
        background: #fff;
        padding: 3px;
        border-radius: 8px;
    }

    .footer-brand-title {
        color: #ffffff;
        font-size: 18px;
        font-weight: 800;
        line-height: 1.2;
    }

    .footer-brand-badge {
        color: #4ade80;
        font-size: 12px;
        font-weight: 700;
    }

    footer.site-footer-main h3 {
        font-size: 18px;
        margin-bottom: 18px;
        font-weight: 700;
        color: #fff;
        position: relative;
        padding-bottom: 8px;
    }

    footer.site-footer-main h3::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 35px;
        height: 3px;
        background: #16a34a;
        border-radius: 2px;
    }

    footer.site-footer-main p,
    footer.site-footer-main a {
        font-size: 14px;
        line-height: 1.7;
        color: #cbd5e1;
        text-decoration: none;
        transition: all 0.25s ease;
    }

    footer.site-footer-main a:hover {
        color: #4ade80;
        text-decoration: none;
    }

    /* Quick Links */
    .footer-links-list {
        list-style: none;
        padding-left: 0;
    }

    .footer-links-list li {
        margin-bottom: 8px;
    }

    .footer-links-list li a::before {
        content: "› ";
        color: #f59e0b;
        font-weight: bold;
        margin-right: 4px;
    }

    /* Social Icons */
    .social-icons a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-right: 8px;
        font-size: 16px;
        color: #fff;
        background: rgba(255, 255, 255, 0.12);
        width: 36px;
        height: 36px;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .social-icons a:hover {
        background: #16a34a;
        color: #fff;
        transform: translateY(-3px);
    }

    /* Bottom Footer */
    .bottom-footer {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        text-align: center;
        font-size: 13.5px;
        padding-top: 20px;
        margin-top: 35px;
        color: #94a3b8;
    }

    .ddis-credit-link {
        color: #38bdf8 !important;
        font-weight: 700;
        text-decoration: none;
    }

    .ddis-credit-link:hover {
        color: #ffffff !important;
        text-decoration: underline;
    }
</style>

<!-- Footer HTML -->
<footer class="site-footer-main">
    <div class="container">
        <div class="row gy-4">
            <!-- About -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-logo-wrap">
                    <img src="<?= $base_url ?>assets/images/logo/logo.jpg" alt="Swetank Nasha Mukti Kendra Logo" class="footer-logo">
                    <div>
                        <div class="footer-brand-title">Swetank</div>
                        <div class="footer-brand-badge">Nasha Mukti Kendra, Mathura</div>
                    </div>
                </div>
                <p class="text-justify text-muted-light">
                    Swetank Nasha Mukti Kendra Mathura is dedicated to providing compassionate, medical, and psychological rehabilitation for individuals struggling with addiction. Empowering individuals and families towards a bright, healthy future.
                </p>
                <div class="social-icons d-flex mt-3">
                    <a href="https://www.facebook.com/" target="_blank" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/swetanknashamuktikendra/" target="_blank" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.youtube.com/" target="_blank" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h3>Quick Links</h3>
                <ul class="footer-links-list">
                    <li><a href="<?= $base_url ?>index.html">Home</a></li>
                    <li><a href="<?= $base_url ?>about-us.html">About Us</a></li>
                    <li><a href="<?= $base_url ?>gallery.html">Gallery</a></li>
                    <li><a href="<?= $base_url ?>contact-us.html">Contact Us</a></li>
                    <li><a href="<?= $base_url ?>faq.html">FAQs</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="col-lg-3 col-md-6">
                <h3>Our Services</h3>
                <ul class="footer-links-list">
                    <li><a href="<?= $base_url ?>services/alcohol-addiction.html">Alcohol Addiction Treatment</a></li>
                    <li><a href="<?= $base_url ?>services/drugs-addiction.html">Drug Addiction Treatment</a></li>
                    <li><a href="<?= $base_url ?>services/marijuana-addiction.html">Marijuana Addiction Treatment</a></li>
                    <li><a href="<?= $base_url ?>services/whitener-addiction.html">Whitener Addiction Treatment</a></li>
                    <li><a href="<?= $base_url ?>services/heroin-addiction.html">Heroin Addiction Treatment</a></li>
                    <li><a href="<?= $base_url ?>services/detoxification.html">Detoxification</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h3>Contact &amp; Location</h3>
                <p>
                    <i class="bi bi-geo-alt-fill text-danger me-1"></i>
                    <strong>Address:</strong> Mathura, Uttar Pradesh - 281001 (Nasha Mukti Kendra, Mathura)
                </p> 
                <p>
                    <i class="bi bi-telephone-fill text-warning me-1"></i>
                    <strong>Helpline:</strong> <a href="tel:+919798354410" class="text-warning fw-bold">+91 9798354410</a>
                </p>
                <p>
                    <i class="bi bi-whatsapp text-success me-1"></i>
                    <strong>WhatsApp:</strong> <a href="https://wa.me/919798354410" target="_blank" class="text-success fw-bold">+91 9798354410</a>
                </p>
                <p>
                    <i class="bi bi-clock-fill text-info me-1"></i>
                    <strong>Admissions:</strong> 24x7 Available
                </p>
            </div>
        </div>

        <!-- Copyright -->
        <div class="bottom-footer">
            <p class="mb-0">
                &copy; <script>document.write(new Date().getFullYear());</script> Swetank Nasha Mukti Kendra (Mathura). All Rights Reserved. | 
                Designed &amp; Managed by <a href="https://www.digitalinfinityddis.com/" class="ddis-credit-link" target="_blank" rel="noopener">DDIS</a>
            </p>
        </div>
    </div>
</footer>