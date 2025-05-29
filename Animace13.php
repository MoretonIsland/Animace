<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animace 8</title>
    <style>
     
     .image-row {
    display: flex;
    justify-content: center;
    gap: 40px; /* menší mezery mezi obrázky */
    padding: 0 50px; /* větší mezery od krajů stránky */
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
          transition: opacity 0.3s ease;
      }

      .image-container .overlay {
    position: absolute;
    top: 0;
    left: 0; /* Změna na 0, aby začínal na levém okraji obrázku */
    width: 100%; /* Overlay bude přesně tak široký jako obrázek */
    height: 100%; /* Overlay bude přesně tak vysoký jako obrázek */
    background-color: rgba(255, 255, 255, 0.8); /* Lehce průhledné bílé pozadí */
    opacity: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #808080;
    font-size: 18px; /* Mírně menší text pro lepší čitelnost */
    font-family: Arial, sans-serif;
    padding: 10px;
    text-align: center;
    border-radius: 8px;
    box-sizing: border-box;
    transition: opacity 0.3s ease;
    white-space: wrap; /* Povolení automatického zalomení textu */
    overflow: hidden; /* Zabrání přesahování textu mimo obrázek */
}

.image-container:hover .overlay {
    opacity: 1;
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
        <div class="overlay">Medový čaj je lahodný nápoj, který kombinuje příjemnou chuť čajových lístků s jemnou sladkostí přírodního medu. V naší kavárně si jej můžete vychutnat ve variantách zeleného čaje s medem a citronem, černého čaje s medem a citronem, osvěžujícího mátového čaje s medem, uklidňujícího lipového čaje s medem, relaxačního meduňkového čaje s medem, sladkého ovocného čaje s medem z lesních plodů nebo prohřívajícího zázvorového čaje s medem a citronem.</div>
    </div>
    <div class="image-container">
        <img src="Cup2.jpg" alt="Cup2">
        <div class="overlay">Medový čaj je lahodný nápoj, který kombinuje příjemnou chuť čajových lístků s jemnou sladkostí přírodního medu. V naší kavárně si jej můžete vychutnat ve variantách zeleného čaje s medem a citronem, černého čaje s medem a citronem, osvěžujícího mátového čaje s medem, uklidňujícího lipového čaje s medem, relaxačního meduňkového čaje s medem, sladkého ovocného čaje s medem z lesních plodů nebo prohřívajícího zázvorového čaje s medem a citronem.</div>
    </div>
    <div class="image-container">
        <img src="Cup3.jpg" alt="Cup3">
        <div class="overlay">Medový čaj je lahodný nápoj, který kombinuje příjemnou chuť čajových lístků s jemnou sladkostí přírodního medu. V naší kavárně si jej můžete vychutnat ve variantách zeleného čaje s medem a citronem, černého čaje s medem a citronem, osvěžujícího mátového čaje s medem, uklidňujícího lipového čaje s medem, relaxačního meduňkového čaje s medem, sladkého ovocného čaje s medem z lesních plodů nebo prohřívajícího zázvorového čaje s medem a citronem.</div>
    </div>
</div>

<div class="image-row">
    <!-- Druhá řada obrázků -->
    <div class="image-container">
        <img src="Cup4.jpg" alt="Cup4">
        <div class="overlay">Medový čaj je lahodný nápoj, který kombinuje příjemnou chuť čajových lístků s jemnou sladkostí přírodního medu. V naší kavárně si jej můžete vychutnat ve variantách zeleného čaje s medem a citronem, černého čaje s medem a citronem, osvěžujícího mátového čaje s medem, uklidňujícího lipového čaje s medem, relaxačního meduňkového čaje s medem, sladkého ovocného čaje s medem z lesních plodů nebo prohřívajícího zázvorového čaje s medem a citronem.</div>
    </div>
    <div class="image-container">
        <img src="Cup5.jpg" alt="Cup5">
        <div class="overlay">Medový čaj je lahodný nápoj, který kombinuje příjemnou chuť čajových lístků s jemnou sladkostí přírodního medu. V naší kavárně si jej můžete vychutnat ve variantách zeleného čaje s medem a citronem, černého čaje s medem a citronem, osvěžujícího mátového čaje s medem, uklidňujícího lipového čaje s medem, relaxačního meduňkového čaje s medem, sladkého ovocného čaje s medem z lesních plodů nebo prohřívajícího zázvorového čaje s medem a citronem.</div>
    </div>
    <div class="image-container">
        <img src="Cup6.jpg" alt="Cup6">
        <div class="overlay">Medový čaj je lahodný nápoj, který kombinuje příjemnou chuť čajových lístků s jemnou sladkostí přírodního medu. V naší kavárně si jej můžete vychutnat ve variantách zeleného čaje s medem a citronem, černého čaje s medem a citronem, osvěžujícího mátového čaje s medem, uklidňujícího lipového čaje s medem, relaxačního meduňkového čaje s medem, sladkého ovocného čaje s medem z lesních plodů nebo prohřívajícího zázvorového čaje s medem a citronem.</div>
    </div>
</div>

<div class="image-row">
    <!-- Třetí řada obrázků -->
    <div class="image-container">
        <img src="Cup7.jpg" alt="Cup7">
        <div class="overlay">Medový čaj je lahodný nápoj, který kombinuje příjemnou chuť čajových lístků s jemnou sladkostí přírodního medu. V naší kavárně si jej můžete vychutnat ve variantách zeleného čaje s medem a citronem, černého čaje s medem a citronem, osvěžujícího mátového čaje s medem, uklidňujícího lipového čaje s medem, relaxačního meduňkového čaje s medem, sladkého ovocného čaje s medem z lesních plodů nebo prohřívajícího zázvorového čaje s medem a citronem.</div>
    </div>
    <div class="image-container">
        <img src="Cup8.jpg" alt="Cup8">
        <div class="overlay">Medový čaj je lahodný nápoj, který kombinuje příjemnou chuť čajových lístků s jemnou sladkostí přírodního medu. V naší kavárně si jej můžete vychutnat ve variantách zeleného čaje s medem a citronem, černého čaje s medem a citronem, osvěžujícího mátového čaje s medem, uklidňujícího lipového čaje s medem, relaxačního meduňkového čaje s medem, sladkého ovocného čaje s medem z lesních plodů nebo prohřívajícího zázvorového čaje s medem a citronem.</div>
    </div>
    <div class="image-container">
        <img src="Obr57.jpg" alt="Cup9">
        <div class="overlay">Medový čaj je lahodný nápoj, který kombinuje příjemnou chuť čajových lístků s jemnou sladkostí přírodního medu. V naší kavárně si jej můžete vychutnat ve variantách zeleného čaje s medem a citronem, černého čaje s medem a citronem, osvěžujícího mátového čaje s medem, uklidňujícího lipového čaje s medem, relaxačního meduňkového čaje s medem, sladkého ovocného čaje s medem z lesních plodů nebo prohřívajícího zázvorového čaje s medem a citronem.</div>
    </div>
</div>
<div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>