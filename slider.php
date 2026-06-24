<!-- 1. Swiper + Fancybox CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

<!-- 2. Gallery Section -->
<section class="service-slider" id="gallery">
    <div class="container">
        <div class="head-title text-center mb-5">
            <h2>Our <span>Gallery</span></h2>
            <p class="text-muted">A glimpse into <strong>Swetank Nasha Mukti Kendra</strong> – where healing begins and
                transformations happen.</p>
        </div>

        <div class="swiper serviceSwiper">
            <div class="swiper-wrapper">


<div class="swiper-slide">
    <a data-fancybox="gallery" href="<?= $base_url ?>/assets/images/gallery/vid.mp4">
        <div class="gallery-card video-thumb">
            <video src="<?= $base_url ?>/assets/images/gallery/vid.mp4" poster="<?= $base_url ?>/assets/images/gallery/1.jpg" alt="Gallery Video" muted loop playsinline onmouseover="this.play()" onmouseout="this.pause()" />
        </div>
    </a>
</div>
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <a data-fancybox="gallery" href="<?= $base_url ?>/assets/images/gallery/1.jpg">
                        <div class="gallery-card">
                            <img src="<?= $base_url ?>/assets/images/gallery/1.jpg" alt="Gallery 1" />
                        </div>
                    </a>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <a data-fancybox="gallery" href="<?= $base_url ?>/assets/images/gallery/2.jpg">
                        <div class="gallery-card">
                            <img src="<?= $base_url ?>/assets/images/gallery/2.jpg" alt="Gallery 2" />
                        </div>
                    </a>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <a data-fancybox="gallery" href="<?= $base_url ?>/assets/images/gallery/3.jpg">
                        <div class="gallery-card">
                            <img src="<?= $base_url ?>/assets/images/gallery/3.jpg" alt="Gallery 3" />
                        </div>
                    </a>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <a data-fancybox="gallery" href="<?= $base_url ?>/assets/images/gallery/4.jpg">
                        <div class="gallery-card">
                            <img src="<?= $base_url ?>/assets/images/gallery/4.jpg" alt="Gallery 4" />
                        </div>
                    </a>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide">
                    <a data-fancybox="gallery" href="<?= $base_url ?>/assets/images/gallery/5.jpg">
                        <div class="gallery-card">
                            <img src="<?= $base_url ?>/assets/images/gallery/5.jpg" alt="Gallery 5" />
                        </div>
                    </a>
                </div>
                
                <div class="swiper-slide">
                    <a data-fancybox="gallery" href="<?= $base_url ?>/assets/images/gallery/6.jpg">
                        <div class="gallery-card">
                            <img src="<?= $base_url ?>/assets/images/gallery/6.jpg" alt="Gallery 6" />
                        </div>
                    </a>
                </div>
                
                <div class="swiper-slide">
                    <a data-fancybox="gallery" href="<?= $base_url ?>/assets/images/gallery/12.jpg">
                        <div class="gallery-card">
                            <img src="<?= $base_url ?>/assets/images/gallery/12.jpg" alt="Gallery 12" />
                        </div>
                    </a>
                </div>
                
                <div class="swiper-slide">
                    <a data-fancybox="gallery" href="<?= $base_url ?>/assets/images/gallery/7.jpg">
                        <div class="gallery-card">
                            <img src="<?= $base_url ?>/assets/images/gallery/7.jpg" alt="Gallery 7" />
                        </div>
                    </a>
                </div>
                
                <div class="swiper-slide">
                    <a data-fancybox="gallery" href="<?= $base_url ?>/assets/images/gallery/8.jpg">
                        <div class="gallery-card">
                            <img src="<?= $base_url ?>/assets/images/gallery/8.jpg" alt="Gallery 8" />
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- 3. Custom Styling -->
<style>
    .service-slider {
        padding: 80px 20px;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.7), rgba(245, 245, 245, 0.7)),
            url("assets/images/background/1.jpg") center/cover fixed;
        border-radius: 25px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .service-slider .gallery-card {
        background: #fff;
        border-radius: 10% 10% 0 0 / 10% 10% 0 0;
        overflow: hidden;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        transition: all 0.35s ease;
    }

    .service-slider .gallery-card img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: transform 0.4s ease;
        border: 5px solid var(--tertiary-color);
        border-radius: 10% 10% 0 0 / 10% 10% 0 0;
    }
    
    .service-slider .gallery-card video {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: transform 0.4s ease;
        border: 5px solid var(--tertiary-color);
        border-radius: 10% 10% 0 0 / 10% 10% 0 0;
    }

    .service-slider .gallery-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.18);
        border-radius: 10% 10% 10% 10% / 10% 10% 10% 10%;
    }

    .service-slider .gallery-card:hover img {
        transform: scale(1.07);
        border-radius: 10% 10% 0 0 / 10% 10% 0 0;
    }

    /* Swiper Nav Buttons */
    .swiper-button-next,
    .swiper-button-prev {
        color: var(--primary-color);
        background: #fff;
        border-radius: 50%;
        width: 44px;
        height: 44px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 18px;
        font-weight: bold;
    }

    /* Pagination Dots */
    .swiper-pagination-bullet {
        background: var(--secondary-color);
        opacity: 0.5;
        transition: all 0.3s ease;
    }

    .swiper-pagination-bullet-active {
        background: var(--primary-color);
        opacity: 1;
        transform: scale(1.2);
    }
</style>

<!-- 4. Swiper + Fancybox JS -->
<script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<script>
    // Swiper init
    const slider = new Swiper(".serviceSwiper", {
        loop: true,
        autoplay: { delay: 4000, disableOnInteraction: false },
        speed: 800,
        breakpoints: {
            0: { slidesPerView: 1, spaceBetween: 12 },
            768: { slidesPerView: 2, spaceBetween: 20 },
            1200: { slidesPerView: 3, spaceBetween: 24 }
        },
        pagination: { el: ".swiper-pagination", clickable: true },
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" }
    });

    // Fancybox init
    Fancybox.bind("[data-fancybox='gallery']", {
        Thumbs: true,
        Toolbar: { display: ["zoom", "slideshow", "thumbs", "close"] },
        theme: "dark"
    });
</script>