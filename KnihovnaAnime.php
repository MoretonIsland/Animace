<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Anime.js Animace</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script> <!-- Anime.js -->
    
    <style>
        body {
            background-color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: black;
        }

        .animation-wrapper {
            background-color: #222;
            color: white;
            min-height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
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
            margin-top: 100px; /* mezera nad textem */
            max-width: 600px;
            padding: 0 20px;
            font-family: 'Open Sans', sans-serif;
            font-size: 18px;
            line-height: 1.6;
        }

        .info h2 {
            font-family: 'Open Sans', sans-serif;
            color: #ddd;
            font-size: 24px;
            line-height: 1.6;
            margin-bottom: 10px;
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

<?php include 'header-KnihovnaAnime.php'; ?>
 <br>

<div class="animation-wrapper">

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
        <h2>Více o stagger ease v Anime.js</h2>
        <p>Tato animace využívá knihovnu Anime.js k vytvoření efektu pohybujících se čtverců. 
           Funkce stagger() umožňuje, aby se každý prvek animoval postupně, což vytváří efekt 
           pohybu. Níže je odkaz na dokumentaci v Anime.js.</p>
        <p><a href="https://animejs.com/documentation/stagger/stagger-parameters/stagger-ease" target="_blank">Otevřít stránku s dokumentací</a></p>
    </div>

</div>

<script src="script40.js"></script> <!-- Odkaz na tvůj JavaScript soubor -->
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>

</body>
</html>
