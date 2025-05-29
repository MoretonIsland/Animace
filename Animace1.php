<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Animace 33 - Fade Slideshow</title>
    <style>
        /* 1) Základní styl stránky */
        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.4;
            background: #fff;
        }

        /* 2) Slideshow s fade efektem */
        .slideshow-container {
            position: relative;
            width: 100%;
            height: 70vh; /* výška kontejneru */
            overflow: hidden;
            margin-bottom: 65px;
        }

        .slide {
            position: absolute;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.8s ease-in-out;
            z-index: 0;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
        }

        .slide.active {
            opacity: 1;
            z-index: 1;
        }

        /* 3) Panorama (pod slideshow) */
        .panorama-container {
            width: 100%;
            position: relative;
            z-index: 0;
            margin-bottom: 60px;
            overflow: hidden;
        }

        .panorama-container img {
            display: block;
            width: 100%;
            height: auto;
        }

        /* 4) Plovoucí tlačítka */
        .floating-home,
        .floating-back {
            position: fixed;
            z-index: 9999 !important;
        }

        /* 5) Footer spacer */
        .footer-divider {
            height: 60px;
            background-color: transparent;
        }
    </style>
</head>
<body>
<?php include 'header-hrad.php'; ?>
<br><br>

<!-- SLIDESHOW s fade -->
<div class="slideshow-container">
    <div class="slide active"><img src="Obr1a.jpg" alt="Cup1" /></div>
    <div class="slide"><img src="Obr2a.jpg" alt="Cup2" /></div>
    <div class="slide"><img src="Obr3a.jpg" alt="Cup3" /></div>
    <div class="slide"><img src="Obr4a.jpg" alt="Cup4" /></div>
    <div class="slide"><img src="Obr5a.jpg" alt="Cup5" /></div>
    <div class="slide"><img src="Obr6a.jpg" alt="Cup6" /></div>
    <div class="slide"><img src="Obr7a.jpg" alt="Cup7" /></div>
    <div class="slide"><img src="Obr8a.jpg" alt="Cup8" /></div>
    <div class="slide"><img src="Obr9a.jpg" alt="Cup9" /></div>
</div>

<!-- Panorama pod slideshow -->
<div class="panorama-container">
    <img src="Obr10a.jpg" alt="Panorama výhled z hradu" />
</div>

<script>
    let slideIndex = 0;
    const slides = document.querySelectorAll('.slide');

    function showSlides() {
        slides.forEach(slide => slide.classList.remove('active'));
        slideIndex++;
        if (slideIndex > slides.length) slideIndex = 1;
        slides[slideIndex - 1].classList.add('active');
        setTimeout(showSlides, 4000);
    }

    showSlides();
</script>

<div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>