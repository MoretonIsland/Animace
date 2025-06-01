<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime.js Animace</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script> <!-- Anime.js -->
    
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #222;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .small.justified.row {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .square {
            width: 50px;
            height: 50px;
            background-color: #f39c12;
            display: inline-block;
        }

        .info {
            margin-bottom: 20px;
            margin-top: 100px; /* Zvýší mezeru mezi animací a textem */
            max-width: 600px; /* Maximální šířka odstavce */
            padding: 0 20px; /* Odsazení od levého a pravého okraje */
        }


        .info a {
            color: #f39c12;
            text-decoration: none;
            font-weight: bold;
        }

        .info a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="small justified row">
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
    </div>

    <div class="info">
        <h2>Více o `stagger ease` v Anime.js</h2>
        <p>Tato animace využívá knihovnu Anime.js k vytvoření efektu pohybujících se čtverců. 
           Funkce stagger() umožňuje, aby se každý prvek animoval postupně, což vytváří efekt 
           pohybu. Níže je odkaz na dokumentaci v Anime.js.</p>
        <p><a href="https://animejs.com/documentation/stagger/stagger-parameters/stagger-ease" 
           target="_blank">Otevřít stránku s dokumentací</a></p>
    </div>

<script src="script40.js"></script> <!-- Odkaz na tvůj JavaScript soubor -->
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
</body>
</html>
