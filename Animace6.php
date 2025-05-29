<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animace 5</title>
    <style>

        .image-row {
    display: flex;
    justify-content: center;
    gap: 40px; /* mezery mezi obrázky */
    padding: 0 50px; /* mezery od krajů stránky */
    margin-bottom: 40px;
}
        

.image-row img {
    max-width: 100%;
    height: auto;
    margin: 0 10px;
    /* Světlejší zelený tón podobný lípovým listům */
    filter: sepia(3%) hue-rotate(60deg) saturate(95%) brightness(1.1);
    transition: filter 3s;
}


.image-row img.visible {
    filter: none; /* Normální barvy po zviditelnění */
}
     
.image-container {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 300px; /* pevná velikost kontejneru */
}      

.image-container img {
    width: 100%; /* zabere 100 % kontejneru */
    height: auto;
    display: block;
}

        .footer-divider {
            height: 20px;
            background-color: transparent;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>

 <?php include 'header.php'; ?>
    <br><br>

<div class="image-row">
    <div class="image-container">
        <img src="Cup1.jpg" alt="Cup1">
    </div>
    <div class="image-container">
        <img src="Cup2.jpg" alt="Cup2">
    </div>
    <div class="image-container">
        <img src="Cup3.jpg" alt="Cup3">
    </div>
</div>

<div class="image-row">
    <div class="image-container">
        <img src="Cup4.jpg" alt="Cup4">
    </div>
    <div class="image-container">
        <img src="Cup5.jpg" alt="Cup5">
    </div>
    <div class="image-container">
        <img src="Cup6.jpg" alt="Cup6">
    </div>
</div>

<div class="image-row">
    <div class="image-container">
        <img src="Cup7.jpg" alt="Cup7">
    </div>
    <div class="image-container">
        <img src="Cup8.jpg" alt="Cup8">
    </div>
    <div class="image-container">
        <img src="Obr57.jpg" alt="Cup9">
    </div>
</div>

<script>
// Zviditelnění obrázků při scrollování
function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

function hasClass(element, className) {
    return (' ' + element.className + ' ').indexOf(' ' + className + ' ') > -1;
}

function checkImagesVisibility() {
    var images = document.querySelectorAll('.image-row img');
    images.forEach(function(image) {
        if (isElementInViewport(image) && !hasClass(image, 'visible')) {
            image.classList.add('visible');
        }
    });
}

window.addEventListener('scroll', function() {
    checkImagesVisibility();
});

window.addEventListener('load', function() {
    checkImagesVisibility();
});
</script>

<div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>