<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animace 12</title>
    <style>
        
        .image-row {
            display: flex;
            justify-content: center;
            margin-bottom: 5px;
        }

        /* Obrázky začínají jako skryté */
        .image-row img {
            opacity: 0;
            transition: opacity 2s ease-in-out; /* Plynulé objevení */
        }

        .image-row img.visible {
            opacity: 1; /* Zobrazí se */
        }

        .image-container {
            position: relative;
            margin: 10px;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .image-container img {
            max-width: 80%;
            height: auto;
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
        <img src="Obr53.jpg" alt="Cup1">
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
        <img src="Cup9.jpg" alt="Cup9">
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Vybere **pouze první obrázek** místo všech
    var image = document.querySelector('.image-row img');

    // Po 0,7 sekunde zobrazí pouze první obrázek
    setTimeout(function () {
        image.classList.add('visible');
    }, 700); 
});
</script>
<div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>