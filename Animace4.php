<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animace 4</title>
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
    width: 100%; /* zabere 100 % kontejneru */
    height: auto;
    display: block;
}
        

        .button-overlay {
            position: absolute;
            bottom: 60px;
            left: 50%;
            transform: translate(-50%, 100%);
            transition: 1s; /* Originální animace */
            padding: 15px;
            width: 60px;
            background-color: #489fff; /* Originální modré pozadí */
            color: white; /* Originální bílý text */
            text-decoration: none;
            font-size: 20px;
            font-family: Arial, sans-serif;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .image-container:hover .button-overlay {
            bottom: 50%; /* Originální posunutí tlačítka při hoveru */
            transform: translate(-50%, -50%);
        }
         .footer-divider {
    height: 20px;
    background-color: transparent;
    margin-bottom: 0px;
}
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <br><br>

    <div class="image-row">
        <!-- První řada obrázků -->
        <div class="image-container">
            <img src="Cup1.jpg" alt="Cup1">
            <a href="#" class="button-overlay">Kavárna</a>
        </div>
        <div class="image-container">
            <img src="Cup2.jpg" alt="Cup2">
            <a href="#" class="button-overlay">Kavárna</a>
        </div>
        <div class="image-container">
            <img src="Cup3.jpg" alt="Cup3">
            <a href="#" class="button-overlay">Kavárna</a>
        </div>
    </div>

    <div class="image-row">
        <!-- Druhá řada obrázků -->
        <div class="image-container">
            <img src="Cup4.jpg" alt="Cup4">
            <a href="#" class="button-overlay">Kavárna</a>
        </div>
        <div class="image-container">
            <img src="Cup5.jpg" alt="Cup5">
            <a href="#" class="button-overlay">Kavárna</a>
        </div>
        <div class="image-container">
            <img src="Cup6.jpg" alt="Cup6">
            <a href="#" class="button-overlay">Kavárna</a>
        </div>
    </div>

    <div class="image-row">
        <!-- Třetí řada obrázků -->
        <div class="image-container">
            <img src="Cup7.jpg" alt="Cup7">
            <a href="#" class="button-overlay">Kavárna</a>
        </div>
        <div class="image-container">
            <img src="Cup8.jpg" alt="Cup8">
            <a href="#" class="button-overlay">Kavárna</a>
        </div>
        <div class="image-container">
            <img src="Obr57.jpg" alt="Cup9">
            <a href="#" class="button-overlay">Kavárna</a>
        </div>
    </div>
   <div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>
