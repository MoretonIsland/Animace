<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animace 7</title>
    <style>



        h1 {
             text-align: center;
             font-family: Arial, sans-serif;
        }

        p {
             margin-left: 100px; 
             margin-right: 50px; /* Nastaví odsazení od pravého okraje na 50 pixelů */
             font-family: Arial, sans-serif;
            }

        
        /* Styly pro každý řádek obrázků */
        .image-row {
            display: flex; /* Přepnutí na flexbox layout pro zarovnání obrázků */
            justify-content: center; /* Zarovnání obrázků na střed */
            margin-bottom: 20px; /* Mezera mezi jednotlivými řádky obrázků */
        }

        /* Styly pro jednotlivé obrázky */
        .thumbnail {
            width: 250px; /* Šířka miniatury obrázku */
            height: auto; /* Automatická výška pro zachování poměru stran */
            cursor: pointer; /* Přidání kurzoru pro možnost kliknutí */
        }

        .image-container {
            position: relative;
            margin: 5px;
        }  
        .image-container img {
            max-width: 100%;
            height: auto;
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

       /* Styly pro modální okno */
.modal {
    display: none; /* Modální okno je na začátku skryté */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.9);
}

.modal-content {
    margin: auto; /* Zajištění středování modálního obsahu */
    padding: 20px;
    width: 80%;
    max-width: 800px; /* Maximální šířka modálního obsahu */
    background-color: #fff;
    border-radius: 5px;
    position: relative;
    text-align: center; /* Zarovnání obsahu na střed */
}

.modal-content img {
    max-width: 100%;
    max-height: 90vh;
    height: auto;
    width: auto;
}

.close {
    color: #000;
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 30px;
    font-weight: bold;
    cursor: pointer;
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

    <h1>Interaktivní animace webové galerie</h1>
    <p>Webové animace na této stránce zahrnují interaktivní animaci typu hover, při které se po najetí 
        myší na obrázek zobrazí jeho popisek, a animaci, která po kliknutí na obrázek zpřístupní jeho 
        zvětšenou verzi v modálním okně. Popisek má černé poloprůhledné pozadí s bílým textem. Tento efekt je dosažen 
        pomocí CSS vlastnosti background-color: rgba(0, 0, 0, 0.5);, která nastavuje černou barvu s 50% průhledností. 
        Text má bílou barvu pomocí vlastnosti color: white;. Tímto způsobem je text čitelný, zatímco pozadí 
        je poloprůhledné.</p>

    
  
    <div class="image-row">
        <!-- První řada obrázků -->
        <div class="image-container">
            <img src="Cup1.jpg" alt="Cup1" class="thumbnail" onclick="openModal('Cup1.jpg', 'Kavárna')">
            <div class="text-overlay">Kavárna</div>
        </div>
        <div class="image-container">
            <img src="Cup2.jpg" alt="Cup2" class="thumbnail" onclick="openModal('Cup2.jpg', 'Kavárna')">
            <div class="text-overlay">Kavárna</div>
        </div>
        <div class="image-container">
            <img src="Cup3.jpg" alt="Cup3" class="thumbnail" onclick="openModal('Cup3.jpg', 'Kavárna')">
            <div class="text-overlay">Kavárna</div>
        </div>
    </div>

    <div class="image-row">
        <!-- Druhá řada obrázků -->
        <div class="image-container">
            <img src="Cup4.jpg" alt="Cup4" class="thumbnail" onclick="openModal('Cup4.jpg', 'Kavárna')">
            <div class="text-overlay">Kavárna</div>
        </div>
        <div class="image-container">
            <img src="Cup5.jpg" alt="Cup5" class="thumbnail" onclick="openModal('Cup5.jpg', 'Kavárna')">
            <div class="text-overlay">Kavárna</div>
        </div>
        <div class="image-container">
            <img src="Cup6.jpg" alt="Cup6" class="thumbnail" onclick="openModal('Cup6.jpg', 'Kavárna')">
            <div class="text-overlay">Kavárna</div>
        </div>
    </div>

    <div class="image-row">
        <!-- Třetí řada obrázků -->
        <div class="image-container">
            <img src="Cup7.jpg" alt="Cup7" class="thumbnail" onclick="openModal('Cup7.jpg', 'Kavárna')">
            <div class="text-overlay">Kavárna</div>
        </div>
        <div class="image-container">
            <img src="Cup8.jpg" alt="Cup8" class="thumbnail" onclick="openModal('Cup8.jpg', 'Kavárna')">
            <div class="text-overlay">Kavárna</div>
        </div>
        <div class="image-container">
            <img src="Obr57.jpg" alt="Obr57" class="thumbnail" onclick="openModal('Obr57.jpg', 'Kavárna')">
            <div class="text-overlay">Kavárna</div>
        </div>
    </div>

    <!-- Modální okno -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <img id="modal-image" src="" alt="">
            <div id="modal-caption"></div>
        </div>
    </div>

    <script>
        // Otevření modálního okna s obrázkem
        function openModal(imageSrc, caption) {
            var modal = document.getElementById("myModal");
            var modalImg = document.getElementById("modal-image");
            var captionText = document.getElementById("modal-caption");

            modal.style.display = "block";
            modalImg.src = imageSrc;
            captionText.innerHTML = caption;
        }

        // Zavření modálního okna
        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
    </script>
   <div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>
