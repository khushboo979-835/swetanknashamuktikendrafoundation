<meta charset="UTF-8" />
<meta name="google-site-verification" content="Pe_RCcJKM1wmoSdgss8FV3fwaCpD_1jsGmkPEj5sjfQ" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Favicon -->
<link rel="icon" href="assets/images/logo/logo.png" type="image/png">
<link rel="apple-touch-icon" href="assets/images/logo/logo.png">

<!-- Organization Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Swetank Nasha Mukti Kendra Mathura",
  "url": "https://swetanknashamuktikendrafoundation.in/",
  "logo": "https://swetanknashamuktikendrafoundation.in/assets/images/logo/logo.png",
  "sameAs": []
}
</script>

<!-- Title & SEO Meta -->
<?php
if (!isset($canonical_url)) {
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'swetanknashamuktikendrafoundation.in';
    $uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
    $canonical_url = "$protocol://$host$uri";
}
$default_title = "Swetank Nasha Mukti Kendra Mathura | Best De-Addiction Center";
$default_description = "Swetank Nasha Mukti Kendra in Mathura offers safe, effective addiction treatment with expert psychiatric care, counseling, and 24/7 recovery helpline: 9798354410.";
$default_keywords = "Swetank Nasha Mukti Kendra Mathura, Nasha Mukti Kendra Mathura, De-addiction centre Mathura, Rehabilitation Mathura, Best rehab centre Mathura, Alcohol de-addiction Mathura, Drug de-addiction Mathura";
$default_image = "assets/images/logo/logo.png";
?>
<title><?php echo isset($page_title) ? $page_title : $default_title; ?></title>
<meta name="description" content="<?php echo isset($page_description) ? $page_description : $default_description; ?>" />
<meta name="keywords" content="<?php echo isset($page_keywords) ? $page_keywords : $default_keywords; ?>" />
<meta name="author" content="Swetank Nasha Mukti Kendra Mathura" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="<?php echo $canonical_url; ?>" />
<!-- Open Graph (Facebook/LinkedIn) -->
<meta property="og:type" content="<?php echo isset($og_type) ? $og_type : 'website'; ?>">
<meta property="og:title" content="<?php echo isset($page_title) ? $page_title : $default_title; ?>">
<meta property="og:url" content="<?php echo $canonical_url; ?>">
<meta property="og:image" content="<?php echo isset($page_image) ? $page_image : $default_image; ?>">
<meta property="og:description" content="<?php echo isset($page_description) ? $page_description : $default_description; ?>">

<!-- Twitter Meta -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title : $default_title; ?>" />
<meta name="twitter:description" content="<?php echo isset($page_description) ? $page_description : $default_description; ?>" />
<meta name="twitter:image" content="<?php echo isset($page_image) ? $page_image : $default_image; ?>" />
<meta name="twitter:site" content="@Swetanknashamuktikendra" />
<?php include __DIR__ . "/chatbot.php"; ?>
