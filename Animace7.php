<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animace 6</title>
    <style>

/* Styly pro každý řádek obrázků */
.image-row {
    display: flex;
    justify-content: center;
    gap: 40px; /* mezery mezi obrázky */
    padding: 0 50px; /* mezery od krajů stránky */
    margin-bottom: 40px;
}

        /* Styly pro jednotlivé obrázky */
        .image-row img {
            
            filter: blur(3px); /* Počáteční rozmazání obrázků */
            transition: filter 1.5s; /* Plynulý přechod rozmazání */
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


        .text-overlay {
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.5); /* Průhledné pozadí */
            color: white;
            padding: 5px 10px;
            opacity: 0; /* Text je na začátku skrytý */
            transition: opacity 0.3s; /* Plynulé přechody */
            /* Zvětšení výšky a šířky */
    width: 200px; /* Nová šířka */
    height: 30px; /* Nová výška */
    text-align: center; /* Zarovnání textu na střed */
    line-height: 1.5; /* Řádkování pro lepší čitelnost */
    font-size: 18px; /* Zvětšení velikosti písma */
    font-family: Arial, sans-serif;
        }

        .image-container:hover .text-overlay {
            opacity: 1; /* Při najetí myši na obrázek se text zobrazí */
        }

        /* Styly pro zobrazení textu i po opuštění myši */
        .text-overlay.active {
            opacity: 1; /* Aktivní text je viditelný */
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
        <!-- První řada obrázků -->
        <div class="image-container">
            <img src="Cup1.jpg" alt="Cup1">
            <div class="text-overlay">Kavárna</div>
        </div>
        <div class="image-container">
            <img src="Cup2.jpg" alt="Cup2">
            <div class="text-overlay">Kavárna</div>
        </div>
        <div class="image-container">
            <img src="Cup3.jpg" alt="Cup3">
            <div class="text-overlay">Kavárna</div>
        </div>
    </div>

    <div class="image-row">
        <!-- Druhá řada obrázků -->
        <div class="image-container">
            <img src="Cup4.jpg" alt="Cup4">
            <div class="text-overlay">Kavárna</div>
        </div>
        <div class="image-container">
            <img src="Cup5.jpg" alt="Cup5">
            <div class="text-overlay">Kavárna</div>
        </div>
        <div class="image-container">
            <img src="Cup6.jpg" alt="Cup6">
            <div class="text-overlay">Kavárna</div>
        </div>
    </div>

    <div class="image-row">
        <!-- Třetí řada obrázků -->
        <div class="image-container">
            <img src="Cup7.jpg" alt="Cup7">
            <div class="text-overlay">Kavárna</div>
        </div>
        <div class="image-container">
            <img src="Cup8.jpg" alt="Cup8">
            <div class="text-overlay">Kavárna</div>
        </div>
        <div class="image-container">
            <img src="Obr57.jpg" alt="Cup9">
            <div class="text-overlay">Kavárna</div>
        </div>
    </div>

    <script>
        // Funkce pro zjištění, zda je obrázek viditelný v okně prohlížeče
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Funkce pro zjištění, zda má obrázek třídu "visible", která značí, že je viditelný
        function hasClass(element, className) {
            return (' ' + element.className + ' ').indexOf(' ' + className + ' ') > -1;
        }

        // Funkce pro změnu obrázků na ostřejší, když jsou viditelné
        function checkImagesVisibility() {
            var images = document.querySelectorAll('.image-row img');
            images.forEach(function(image) {
                if (isElementInViewport(image) && !hasClass(image, 'visible')) {
                    image.style.filter = "blur(0px)"; // Odstranit rozmazání, když je obrázek viditelný
                }
            });
        }

        // Detekce události posunutí stránky a volání funkce pro kontrolu viditelných obrázků
        window.addEventListener('scroll', function() {
            checkImagesVisibility();
        });

        // Po načtení stránky zavolejte funkci pro kontrolu viditelných obrázků
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
