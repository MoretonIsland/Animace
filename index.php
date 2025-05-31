<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domů</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800;900&display=swap" rel="stylesheet">

    <style>
        html, body {
            margin: 0;
            padding: 0;
            max-width: 100%;
            overflow-x: hidden;
            font-family: Arial, sans-serif;
            height: 100%;
            background-color: #ffffff;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-y: auto;
            font-family: 'Open Sans', sans-serif;
}
        
        .main-container {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .footer-divider {
            height: 40px;
            width: 100%;
            background: none;
        }

        .content {
            display: flex;
            flex: 1;
            margin-top: 10px; /* Zvětšení mezery mezi nadpisem a obdélníkem */
        }

  .rectangle {
    position: relative;
    width: 50%;
    background-color: #414f9e;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    padding: 60px 20px 20px 80px;
    box-sizing: border-box;
    min-height: 510px;
    font-family: 'Open Sans', sans-serif;
}


.first-row {
    display: flex; /* první dva nadpisy vedle sebe */
    gap: 60px; /* vzdálenost mezi nimi */
    margin-top: 5spx; /* Odsazení od horního okraje */
    margin-left: 0px; /* Zarovnání nadpisů na stejnou úroveň */
}

.second-row {
    margin-top: 20px; /* Mezera mezi řádky */
    margin-left: 0px; /* Zarovnání třetího nadpisu stejně jako první řadu */
}
.gallery-button {
    position: absolute;
    bottom: 160px;
    padding: 14px 28px;
    background-color: white;
    color: #1a3cb3; /* tmavě modrá */
    border: 2px solid white;
    text-decoration: none;
    font-weight: bold;
    font-size: 25px;
    border-radius: 0;
    box-shadow: 0 3px 8px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px; /* mezera mezi textem a šipkou */
}

.gallery-button:hover .underline-text {
    text-decoration: underline; /* v tlačítku podtržené pouze slovo Více */
}

.text-content {
    width: 50%;
    background-color: #414f9e;
    color: white;
    font-weight: normal;
    font-size: 17px;
    min-height: 510px;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0 0 70px 0; /* padding dole = modrý prostor */
    font-family: 'Open Sans', sans-serif;
}
           
/* Nová sekce pro obrázky */
.image-section {
    background-color: white;
    padding: 40px 20px;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
    justify-items: center;
    position: relative;
    z-index: 0;
}

   .image-section img {
    width: 100%;
    height: auto;
    max-width: 250px;
    border: 5px solid rgb(255, 255, 255);
    border-radius: 8px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Efekt při najetí myší */
.image-section img:hover {
    transform: scale(1.05);
   box-shadow: 
        0 0 12x #e6e9eb,  
        0 8px 8px rgba(0, 0, 0, 0.2); /* stín pod obrázek */
}

    </style>
</head> 
<body>

<?php include 'header.php'; ?>

<div class="main-container">
    <div class="content">
        <div class="rectangle">
    <div class="first-row">
        <h1><b>CSS</b></h1>
        <h1><b>JavaScript</b></h1>
    </div>
    <div class="second-row">
        <h1><b>SVG</b></h1>
    </div>

   <a href="galerie.php" class="gallery-button">
    <span class="underline-text">Více</span> &#129030;
</a>

</div>
   
         <div class="text-content">
    <iframe src="Animace20iframe.php" style="width: 100%; height: 510px; border: none;"></iframe>
       </div>
    </div>
</div>


    <!-- Dolní část s obrázky -->
    <div class="image-section">
        <img src="Obr29.png" alt="Obrázek 1">
        <img src="Obr15.png" alt="Obrázek 2">
        <img src="Obr14.png" alt="Obrázek 3">
        <img src="Obr58.png" alt="Obrázek 4">
        <img src="Obr32.png" alt="Obrázek 5">
        <img src="Obr70.png" alt="Obrázek 6">
    </div>

    <div class="footer-divider"></div>
</div>
 <?php include 'floating-menu-button.php'; ?>

<?php include 'footer.php'; ?>

</body>
</html>