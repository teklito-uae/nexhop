<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description"
        content="<?php echo isset($pageDescription) ? $pageDescription : 'Flash Fix Technologies - Professional IT infrastructure, networking, and hardware solutions provider in Dubai, UAE'; ?>">
    <meta name="keywords"
        content="IT solutions Dubai, networking experts, IT infrastructure, Flash Fix Technologies, Hiba Computer Group, IT services UAE, server installation, structured cabling, CCTV systems, IT support">
    <meta name="author" content="Flash Fix Technologies">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title"
        content="<?php echo isset($pageTitle) ? $pageTitle : 'Flash Fix Technologies | IT Solutions & Networking Experts Dubai'; ?>">
    <meta property="og:description"
        content="<?php echo isset($pageDescription) ? $pageDescription : 'Professional IT infrastructure, networking, and hardware solutions provider in Dubai.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:site_name" content="Flash Fix Technologies">

    <title>
        <?php echo isset($pageTitle) ? $pageTitle : 'Flash Fix Technologies | IT Solutions & Networking Experts Dubai'; ?>
    </title>

    <link rel="icon" type="image/x-icon" href="/assets/icons/favicon.ico">

    <!-- Google Fonts: Poppins + Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Tailwind CSS v4 Static Build -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Theme Script (runs before paint to prevent flash) -->
    <script>
        (function () {
            var theme = localStorage.getItem('theme') || 'dark';
            if (theme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        })();
    </script>

    <!-- Schema.org -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Flash Fix Technologies",
        "description": "Professional IT infrastructure, networking, and hardware solutions provider in Dubai, UAE",
        "url": "https://flashfix.ae",
        "telephone": "+9714XXXXXXX",
        "email": "info@flashfix.ae",
        "address": {"@type":"PostalAddress","addressLocality":"Dubai","addressCountry":"AE","addressRegion":"Dubai"},
        "geo": {"@type":"GeoCoordinates","latitude":25.2048,"longitude":55.2708},
        "openingHoursSpecification": {"@type":"OpeningHoursSpecification","dayOfWeek":["Saturday","Sunday","Monday","Tuesday","Wednesday","Thursday"],"opens":"09:00","closes":"18:00"},
        "sameAs": ["https://www.linkedin.com/company/flash-fix-technologies"]
    }
    </script>

    <!-- SEO -->
    <meta name="copyright" content="Flash Fix Technologies">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="7 days">
    <meta name="language" content="EN">
    <meta name="geo.region" content="AE-DU">
    <meta name="geo.placename" content="Dubai">
    <meta name="geo.position" content="25.2048;55.2708">
    <meta name="ICBM" content="25.2048, 55.2708">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"
        content="<?php echo isset($pageTitle) ? $pageTitle : 'Flash Fix Technologies | IT Solutions & Networking Experts Dubai'; ?>">
    <meta name="twitter:description"
        content="<?php echo isset($pageDescription) ? $pageDescription : 'Professional IT infrastructure, networking, and hardware solutions provider in Dubai.'; ?>">
    <link rel="canonical" href="<?php echo 'https://flashfix.ae' . $_SERVER['REQUEST_URI']; ?>">
    <link rel="alternate" hreflang="en-ae" href="https://flashfix.ae<?php echo $_SERVER['REQUEST_URI']; ?>">
    <link rel="alternate" hreflang="x-default" href="https://flashfix.ae<?php echo $_SERVER['REQUEST_URI']; ?>">
</head>

<body
    class="bg-gray-50 text-gray-800 dark:bg-base dark:text-text-primary overflow-x-hidden transition-colors duration-300">
    <!-- GTM -->
    <!-- Page Loader -->
    <div id="page-loader" class="page-loader">
        <div class="spinner">
            <div class="spinnerin"></div>
        </div>
    </div>
    <script>
        window.addEventListener('load', function () {
            var loader = document.getElementById('page-loader');
            if (loader) {
                setTimeout(function () {
                    loader.style.opacity = '0';
                    setTimeout(function () { loader.style.display = 'none'; }, 200);
                }, 300);
            }
        });
    </script>