<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animace 1</title>
<style>

.image-row {
    display: flex;
    justify-content: center;
    gap: 40px; /* mezery mezi obrázky */
    padding: 0 50px; /* mezery od krajů stránky */
    margin-bottom: 50px;
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
    background-color:rgba(255, 140, 0, 0.6) ;
    border: none;
   
    padding: 15px 0;
    text-align: center;
    text-decoration: none;
    display: block;
    font-size: 18px;
    font-family: Arial, sans-serif;
    cursor: pointer;
    border-radius: 8px;
    opacity: 0;
    transition: opacity 0.3s;
    font-weight: bold;
    color:rgba(0, 0, 0, 0.86);
    width: 100%;
    margin-top: 5px;
}

.image-container:hover .button-overlay {
    opacity: 1;
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
        <button class="button-overlay">Příjemný interiér</button>
    </div>
    <div class="image-container">
        <img src="Cup2.jpg" alt="Cup2">
        <button class="button-overlay">Indická káva</button>
    </div>
    <div class="image-container">
        <img src="Cup3.jpg" alt="Cup3">
        <button class="button-overlay">Brazilská káva</button>
    </div>
</div>

<div class="image-row">
    <!-- Druhá řada obrázků -->
    <div class="image-container">
        <img src="Cup4.jpg" alt="Cup4">
        <button class="button-overlay">Vídeňská káva</button>
    </div>
    <div class="image-container">
        <img src="Cup5.jpg" alt="Cup5">
        <button class="button-overlay">Medový čaj</button>
    </div>
    <div class="image-container">
        <img src="Cup6.jpg" alt="Cup6">
        <button class="button-overlay">Káva v kelímku</button>
    </div>
</div>

<div class="image-row">
    <!-- Třetí řada obrázků -->
    <div class="image-container">
        <img src="Cup7.jpg" alt="Cup7">
        <button class="button-overlay">Espresso</button>
    </div>
    <div class="image-container">
        <img src="Cup8.jpg" alt="Obrázek Cup8">
        <button class="button-overlay">Káva se šlehačkou</button>
    </div>
    <div class="image-container">
        <img src="Obr57.jpg" alt="Obrázek Cup9">
        <button class="button-overlay">Sladké pečivo</button>
    </div>
</div>

<script>

// Získání všech obrázků a jejich tlačítek
const imageButtons = document.querySelectorAll('.button-overlay');

// Přidání události pro každé tlačítko
imageButtons.forEach(button => {
    // Při najetí myší na tlačítko
    button.addEventListener('mouseenter', () => {
        button.classList.add('active'); // Přidání třídy pro zobrazení tlačítka
    });

    // Při opuštění myši z tlačítka
    button.addEventListener('mouseleave', () => {
        button.classList.remove('active'); // Odebrání třídy pro skrytí tlačítka
    });
});

</script>
<div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>