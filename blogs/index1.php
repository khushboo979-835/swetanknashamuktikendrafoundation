<?php
include("../admin/common/config.php");   // For Database Connection
include("../common/config.php");         // For $baseURL

$slug = $_GET['slug'] ?? '';
$valid_slug = false;

if (!empty($slug)) {
    $stmt = $conn->prepare("SELECT google_tag, page_title, slug, meta_title, meta_description, meta_keywords, canonical_url, og_title, og_description, og_image, og_alt FROM blogs WHERE slug = ? AND status = 'published' LIMIT 1");
    $stmt->bind_param("s", $slug);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $ogImageUrl = $base_url . 'admin/uploads/blogs/' . htmlspecialchars($row['og_image'] ?: '');
        
        $page_title = htmlspecialchars($row['page_title'] ?: $row['og_title']);
        $page_description = htmlspecialchars($row['meta_description'] ?: $row['og_description']);
        $page_keywords = htmlspecialchars($row['meta_keywords'] ?: '');
        $page_image = $ogImageUrl;
        $og_type = 'article';
        if (!empty($row['canonical_url'])) {
            $canonical_url = htmlspecialchars($row['canonical_url']);
        }
        $valid_slug = true;
    } else {
        $page_title = "Blog Not Found";
    }
} else {
    $page_title = "No Blog Selected";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
    
    <?php if (isset($row['google_tag']) && $row['google_tag']) echo $row['google_tag']; ?>
    
    <?php if (isset($row['og_alt']) && $row['og_alt']): ?>
        <meta property="og:image:alt" content="<?= htmlspecialchars($row['og_alt']) ?>">
    <?php endif; ?>
</head>

<body>

    <?php include("../common/header.php"); ?>

    <style>
        /* Fixing the Absolute Header Issue for Blog Page */
        header .navbar {
            position: relative !important;
            top: 0 !important;
        }

        /* Banner Section - Full Width Professional */
        .blog-hero {
            position: relative;
            background: #fff;
            margin: 0;
            padding: 0;
            width: 100%;
            overflow: hidden;
            border-top: 1px solid #eee;
        }

        .blog-hero img {
            width: 100%;
            height: auto;
            border-radius: 0;
            display: block;
            margin: 0;
            padding: 0;
        }

        /* Professional Blog Content Styling */
        .blog-content-container {
            margin-top: 0;
            position: relative;
            z-index: 10;
        }

        /* Main Content Card - Professional Spacing */
        .blog-section-card {
            background: #ffffff;
            padding: 35px 40px;
            border-radius: 8px;
            box-shadow: 0 6px 25px rgba(0,0,0,0.08);
            line-height: 1.8;
            font-size: 1.05rem;
            color: #333;
            margin-bottom: 25px;
            border: none;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
        }
        
        .blog-section-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 35px rgba(0,0,0,0.12);
        }

        .blog-section-card::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 5px;
            height: 0;
            background: var(--primary-color, #198754);
            transition: height 0.4s ease;
        }

        .blog-section-card:hover::before {
            height: 100%;
        }

        /* Headings - Professional Spacing */
        .blog-section-card h1 {
            color: #1a1a1a;
            font-weight: 900;
            font-size: 2rem;
            margin: 0 0 16px 0;
            font-family: 'Merriweather', serif;
            line-height: 1.3;
            letter-spacing: -0.5px;
        }

        .blog-section-card h2 {
            color: #1a1a1a;
            font-weight: 800;
            font-size: 1.7rem;
            margin: 20px 0 14px 0;
            font-family: 'Merriweather', serif;
            line-height: 1.3;
            letter-spacing: -0.3px;
        }

        .blog-section-card h3 {
            color: #1a1a1a;
            font-weight: 700;
            font-size: 1.5rem;
            margin: 18px 0 12px 0;
            font-family: 'Merriweather', serif;
            line-height: 1.3;
            letter-spacing: -0.2px;
        }

        .blog-section-card h4 {
            color: #222;
            font-weight: 700;
            font-size: 1.25rem;
            margin: 15px 0 10px 0;
            font-family: 'Merriweather', serif;
            line-height: 1.3;
        }

        /* Paragraphs - Professional Spacing */
        .blog-section-card p {
            margin: 0 0 14px 0;
            padding: 0;
            font-size: 1.05rem;
            line-height: 1.8;
            color: #333;
        }

        .blog-section-card p:last-child {
            margin-bottom: 0;
        }

        /* Title Section - Professional */
        .section-title-main {
            font-family: 'Merriweather', serif;
            color: #1a1a1a;
            font-weight: 900;
            background: #fff;
            padding: 45px 45px 30px 45px;
            border-radius: 8px 8px 0 0;
            margin-bottom: 0 !important;
            box-shadow: 0 6px 25px rgba(0,0,0,0.08);
            border: none;
        }

        .section-title-main h1 {
            font-size: 2.5rem;
            margin: 0 0 15px 0 !important;
            font-weight: 900;
            line-height: 1.2;
            color: #1a1a1a;
            letter-spacing: -0.5px;
        }

        .title-underline {
            width: 80px;
            height: 5px;
            background: var(--primary-color, #198754);
            border-radius: 3px;
            margin: 0;
        }

        /* Animation Styles */
        .blog-section-card {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s cubic-bezier(0.25, 1, 0.5, 1);
            border-left: 5px solid var(--primary-color, #198754);
            border-top: none;
            border-right: none;
            border-bottom: none;
        }

        .blog-section-card:hover {
            transform: translateY(-4px) !important;
            box-shadow: 0 10px 35px rgba(0,0,0,0.12);
        }

        .blog-section-card.slide-left {
            transform: translateX(-40px) translateY(20px);
        }

        .blog-section-card.slide-right {
            transform: translateX(40px) translateY(20px);
        }

        .blog-section-card.show {
            opacity: 1;
            transform: translateX(0) translateY(0);
        }

        /* Lists - Professional Spacing */
        .blog-section-card ul {
            padding-left: 25px;
            margin: 14px 0;
            list-style: none;
        }

        .blog-section-card li {
            position: relative;
            list-style-type: none;
            padding-left: 28px;
            margin: 0 0 10px 0;
            font-size: 1.05rem;
            line-height: 1.8;
            color: #333;
        }

        .blog-section-card li::before {
            content: "✓";
            position: absolute;
            left: 0;
            top: 0;
            color: var(--primary-color, #198754);
            font-weight: bold;
            font-size: 1.2rem;
        }

        .blog-section-card li:last-child {
            margin-bottom: 0;
        }

        /* Animations */
        .fade-in-up { 
            animation: fadeInUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards; 
            opacity: 0; 
        }
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .sidebar-wrapper {
            margin-top: 0;
            position: relative;
            z-index: 10;
        }

        /* Responsive Design */
        @media screen and (max-width: 1024px) {
            .section-title-main {
                padding: 35px 35px 25px 35px;
            }
            .section-title-main h1 {
                font-size: 2.2rem;
            }
            .blog-section-card {
                padding: 30px 35px;
            }
        }

        @media screen and (max-width: 991px) {
            .blog-content-container, .sidebar-wrapper {
                margin-top: 0;
            }
            .blog-section-card {
                padding: 28px 32px;
                margin-bottom: 20px;
            }
            .section-title-main {
                padding: 30px 30px 22px 30px;
                border-radius: 8px 8px 0 0;
            }
            .section-title-main h1 {
                font-size: 2rem;
                margin-bottom: 12px !important;
            }
        }

        @media screen and (max-width: 768px) {
            .section-title-main {
                padding: 25px 25px 18px 25px;
            }
            .section-title-main h1 {
                font-size: 1.7rem;
            }
            .blog-section-card {
                padding: 24px 28px;
                margin-bottom: 18px;
            }
            .blog-section-card h3 {
                font-size: 1.3rem;
            }
        }

        @media screen and (max-width: 576px) {
            .section-title-main {
                padding: 20px 20px 15px 20px;
                border-radius: 6px 6px 0 0;
            }
            .section-title-main h1 {
                font-size: 1.5rem;
            }
            .blog-section-card {
                padding: 20px 22px;
                margin-bottom: 15px;
                border-radius: 6px;
            }
            .blog-section-card h3 {
                font-size: 1.2rem;
            }
            .blog-section-card p {
                font-size: 1rem;
            }
        }
    </style>

    <?php
    if (!empty($slug) && $valid_slug) {
        $stmt_content = $conn->prepare("SELECT banner, banner_alt, content_title, long_content FROM blogs WHERE slug = ? LIMIT 1");
        $stmt_content->bind_param("s", $slug);
        $stmt_content->execute();
        $content_result = $stmt_content->get_result();
        $content = $content_result->fetch_assoc();
    } else {
        $content = false;
    }
    ?>

    <?php if ($content): ?>
        <!-- Full Width Banner Section -->
        <section class="blog-hero">
            <div class="single-banner fade-in-up">
                <?php if (!empty($content['banner'])): ?>
                    <img src="../admin/uploads/blogs/<?= htmlspecialchars($content['banner']); ?>" alt="<?= !empty($content['banner_alt']) ? htmlspecialchars($content['banner_alt']) : (!empty($content['content_title']) ? htmlspecialchars($content['content_title']) : 'Blog Banner'); ?>" title="<?= !empty($content['banner_alt']) ? htmlspecialchars($content['banner_alt']) : (!empty($content['content_title']) ? htmlspecialchars($content['content_title']) : 'Blog Banner'); ?>" />
                <?php else: ?>
                    <img src="../assets/images/default-banner.jpg" alt="<?= !empty($content['content_title']) ? htmlspecialchars($content['content_title']) . ' Banner' : 'Blog Banner'; ?>" />
                <?php endif; ?>
            </div>
        </section>

        <!-- Main Content Section - Professional Spacing -->
        <section class="bg-light" style="padding: 60px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog-content-container">
                            <div class="section-title-main fade-in-up">
                                <h1><?= htmlspecialchars($content['content_title']); ?></h1>
                                <div class="title-underline"></div>
                            </div>
                            
                            <div id="dynamic-blog-container" class="blog-sections">
                                <!-- Dynamic JS HTML parsing will render content here -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-wrapper fade-in-up delay-2">
                            <?php include 'blog-sidebar.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="py-5 text-center">
            <div class="container">
                <h2>Blog Not Found</h2>
                <p>The blog you're looking for doesn't exist or has been removed.</p>
            </div>
        </section>
    <?php endif; ?>

    <?php include("../common/footer.php"); ?>
    
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const rawContentHtml = <?= json_encode(html_entity_decode($content['long_content'] ?? '')) ?>;
        
        if (!rawContentHtml) return;

        const container = document.getElementById('dynamic-blog-container');
        
        // Check if content already has proper rich HTML tags
        let isRichHtml = rawContentHtml.includes('<p>') || rawContentHtml.includes('<h2') || rawContentHtml.includes('<h3');
        if (isRichHtml) {
             let div = document.createElement('div');
             div.className = 'blog-section-card slide-left show'; 
             div.innerHTML = rawContentHtml;
             container.appendChild(div);
             return;
        }

        // Clean up text - remove br tags and HTML
        const cleanedText = rawContentHtml.replace(/<br\s*[\/]?>/gi, '\n').replace(/<\/?[^>]+(>|$)/g, "");
        const rawLines = cleanedText.split('\n');

        let cards = [];
        let currentCardLines = [];

        // Group content into optimal sized cards with better logic
        for (let i = 0; i < rawLines.length; i++) {
            let line = rawLines[i].trim();
            if (line === "") {
                if (currentCardLines.length > 3) {
                    cards.push([...currentCardLines]);
                    currentCardLines = [];
                }
                continue;
            }
            
            currentCardLines.push(line);
            
            // Break into card when reaching good length
            if (currentCardLines.length >= 6 && (line.endsWith('.') || line.endsWith('"') || line.endsWith('"'))) {
                cards.push([...currentCardLines]);
                currentCardLines = [];
            }
        }
        
        if (currentCardLines.length > 0) {
            cards.push([...currentCardLines]);
        }

        // Generate dynamic HTML with professional formatting
        cards.forEach((cardLines, index) => {
            let div = document.createElement('div');
            div.className = 'blog-section-card ' + (index % 2 === 0 ? 'slide-left' : 'slide-right');
            
            let htmlStr = "";
            let inList = false;
            
            cardLines.forEach((line, idx) => {
                if (line.endsWith(':')) {
                    if (inList) { htmlStr += "</ul>"; inList = false; }
                    htmlStr += "<h4>" + line + "</h4>";
                } else if (!line.endsWith('.') && line.length > 5 && line.length < 150 && (idx > 0 && (cardLines[idx-1].endsWith(':') || inList))) {
                    if (!inList) { htmlStr += "<ul>"; inList = true; }
                    let cleanLine = line.replace(/^[\-\*\•\d\.]+\s*/, '').trim();
                    htmlStr += "<li>" + cleanLine + "</li>";
                } else {
                    if (inList) { htmlStr += "</ul>"; inList = false; }
                    if (line.length < 100 && !line.endsWith('.') && idx === 0 && !line.endsWith(':')) {
                         htmlStr += "<h3>" + line + "</h3>";
                    } else {
                         htmlStr += "<p>" + line + "</p>";
                    }
                }
            });
            
            if (inList) { htmlStr += "</ul>"; }
            div.innerHTML = htmlStr;
            container.appendChild(div);
        });

        // Intersection observer for scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.blog-section-card').forEach(card => observer.observe(card));
    });
    </script>
</body>

</html>