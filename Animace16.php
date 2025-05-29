<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Animace 36</title>
    <style>
        .image-row {
            display: flex;
            justify-content: center;
            gap: 40px; /* mezery mezi obrázky */
            padding: 0 50px; /* mezery od krajů stránky */
            margin-bottom: 40px;
        }

        .image-container {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px; /* pevná velikost kontejneru */
        }

       .image-container img {
    width: 100%;
    height: auto;
    display: block;
    transition: filter 0.3s ease-in-out;
    filter: grayscale(100%); /* Obrázky jsou od začátku šedivé */
}

.image-container img:hover {
    filter: none; /* Po najetí myší se zobrazí v normální barvě */
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
        <img src="Obr53.jpg" alt="Cup1" />
    </div>
    <div class="image-container">
        <img src="Obr54.jpg" alt="Cup2" />
    </div>
    <div class="image-container">
        <img src="Obr48.jpg" alt="Cup3" />
    </div>
</div>

<div class="image-row">
    <div class="image-container">
        <img src="Obr44.jpg" alt="Cup4" />
    </div>
    <div class="image-container">
        <img src="Obr50.jpg" alt="Cup5" />
    </div>
    <div class="image-container">
        <img src="Obr46.jpg" alt="Cup6" />
    </div>
</div>

<div class="image-row">
    <div class="image-container">
        <img src="Obr47.jpg" alt="Cup7" />
    </div>
    <div class="image-container">
        <img src="Obr55.jpg" alt="Cup8" />
    </div>
    <div class="image-container">
        <img src="Obr42.jpg" alt="Cup9" />
    </div>
</div>

<div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>