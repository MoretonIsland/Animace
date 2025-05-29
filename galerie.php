<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Galerie animací</title>

    <!-- Přidán Google Fonts link s požadovanými váhami -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800;900&display=swap" rel="stylesheet">

    <style>
        /* Obecné nastavení stránky */
        body {
            font-family: 'Open Sans', sans-serif;  /* změněný font */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            margin-bottom: 20px;  
        }

        h1 {
            font-size: 40px;
            color: #414f9e;
            margin-top: 20px;
            text-align: center;
            font-weight: 700;  
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            column-gap: 40px;
            row-gap: 80px;
            padding: 30px;
            max-width: 80%;
            margin: auto;
            flex-grow: 1;
        }

        .gallery-item {
            text-align: center;
            text-decoration: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            font-weight: 700; /* můžeš nastavit i váhu textu zde */
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 
                0 0 20px rgba(255, 255, 255, 0.8),
                0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            max-width: 250px;
            border: 5px solid rgb(255, 255, 255);
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .caption {
            margin-top: 8px;
            font-size: 16px;
            font-weight: 700;  /* tu také můžeš použít font-weight */
            color: #414f9e;
            padding: 12px 0;
            transition: color 0.3s ease;
            display: inline-block;
            font-family: 'Open Sans', sans-serif; /* zajistit font i zde */
        }

        .gallery-item:hover .caption {
            color: #414f9e;
        }

        .footer-divider {
            height: 40px;
            width: 100%;
            background: none;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>



<div class="gallery-grid">
    <a href="Animace1.php" class="gallery-item">
        <img src="Obr61.png" alt="Animace 1">
        <span class="caption">Animace 1</span>
    </a>
    <a href="Animace2.php" class="gallery-item">
        <img src="Obr62.png" alt="Animace 2">
        <span class="caption">Animace 2</span>
    </a>
    <a href="Animace3.php" class="gallery-item">
        <img src="Obr29.png" alt="Animace 3">
        <span class="caption">Animace 3</span>
    </a>
    <a href="Animace4.php" class="gallery-item">
        <img src="Obr26.png" alt="Animace 4">
        <span class="caption">Animace 4</span>
    </a>
    <a href="Animace5.php" class="gallery-item">
        <img src="Obr32.png" alt="Animace 5">
        <span class="caption">Animace 5</span>
    </a>
    <a href="Animace6.php" class="gallery-item">
        <img src="Obr5.png" alt="Animace 6">
        <span class="caption">Animace 6</span>
    </a>
    <a href="Animace7.php" class="gallery-item">
        <img src="Obr4.png" alt="Animace 7">
        <span class="caption">Animace 7</span>
    </a>
    <a href="Animace8.php" class="gallery-item">
        <img src="Obr60.png" alt="Animace 8">
        <span class="caption">Animace 8</span>
    </a>
    <a href="Animace9.php" class="gallery-item">
        <img src="Obr28.png" alt="Animace 9">
        <span class="caption">Animace 9</span>
    </a>
    <a href="Animace10.php" class="gallery-item">
        <img src="Obr54.jpg" alt="Animace 10">
        <span class="caption">Animace 10</span>
    </a>
    <a href="Animace11.php" class="gallery-item">
        <img src="Obr50.jpg" alt="Animace 11">
        <span class="caption">Animace 11</span>
    </a>
    <a href="Animace12.php" class="gallery-item">
        <img src="Obr53.jpg" alt="Animace 12">
        <span class="caption">Animace 12</span>
    </a>
    <a href="Animace13.php" class="gallery-item">
        <img src="Obr31.png" alt="Animace 13">
        <span class="caption">Animace 13</span>
    </a>
    <a href="Animace14.php" class="gallery-item">
        <img src="Obr63.png" alt="Animace 14">
        <span class="caption">Animace 14</span>
    </a>
    <a href="Animace15.php" class="gallery-item">
        <img src="Obr64.png" alt="Animace 15">
        <span class="caption">Animace 15</span>
    </a>
    <a href="Animace16.php" class="gallery-item">
        <img src="Obr65.png" alt="Animace 16">
        <span class="caption">Animace 16</span>
    </a>
    <a href="Animace17.php" class="gallery-item">
        <img src="Obr66.png" alt="Animace 17">
        <span class="caption">Animace 17</span>
    </a>
    <a href="Animace18.php" class="gallery-item">
        <img src="Obr67.png" alt="Animace 18">
        <span class="caption">Animace 18</span>
    </a>
    <a href="Animace19.php" class="gallery-item">
        <img src="Obr14.png" alt="Animace 19">
        <span class="caption">Animace 19</span>
    </a>
    <a href="Animace20.php" class="gallery-item">
        <img src="Obr17.png" alt="Animace 20">
        <span class="caption">Animace 20</span>
    </a>
    <a href="Animace21.php" class="gallery-item">
        <img src="Obr18.png" alt="Animace 21">
        <span class="caption">Animace 21</span>
    </a>
    <a href="Animace22.php" class="gallery-item">
        <img src="Obr37.png" alt="Animace 22">
        <span class="caption">Animace 22</span>
    </a>
    <a href="Animace23.php" class="gallery-item">
        <img src="Obr38.png" alt="Animace 23">
        <span class="caption">Animace 23</span>
    </a>
    <a href="Animace24.php" class="gallery-item">
        <img src="Obr41.png" alt="Animace 24">
        <span class="caption">Animace 24</span>
    </a>
    <a href="Animace25.php" class="gallery-item">
        <img src="Obr58.png" alt="Animace 25">
        <span class="caption">Animace 25</span>
    </a>
    <a href="Animace26.php" class="gallery-item">
        <img src="Obr36.png" alt="Animace 26">
        <span class="caption">Animace 26</span>
    </a>
    <a href="Animace27.php" class="gallery-item">
        <img src="Obr15.png" alt="Animace 27">
        <span class="caption">Animace 27</span>
    </a>
    <a href="Animace28.php" class="gallery-item">
        <img src="Obr68.png" alt="Animace 28">
        <span class="caption">Animace 28</span>
    </a>
    <a href="Animace29.php" class="gallery-item">
        <img src="Obr8.png" alt="Animace 29">
        <span class="caption">Animace 29</span>
    </a>
     <a href="Animace30.php" class="gallery-item">
        <img src="Obr75.png" alt="Animace 30">
        <span class="caption">Animace 30</span>
    </a>
     <a href="Animace31.php" class="gallery-item">
        <img src="Obr33.png" alt="Animace 31">
        <span class="caption">Animace 31</span>
    </a>
    <a href="Animace32.php" class="gallery-item">
        <img src="Obr71.png" alt="Animace 32">
        <span class="caption">Animace 32</span>
    </a>
    <a href="Animace33.php" class="gallery-item">
        <img src="Obr72.png" alt="Animace 33">
        <span class="caption">Animace 33</span>
    </a>
     <a href="Animace34.php" class="gallery-item">
        <img src="Obr70.png" alt="Animace 34">
        <span class="caption">Animace 34</span>
    </a>
     <a href="Animace35.php" class="gallery-item">
        <img src="Obr73.png" alt="Animace 35">
        <span class="caption">Animace 35</span>
    </a>
     <a href="Animace36.php" class="gallery-item">
        <img src="Obr69.png" alt="Animace 36">
        <span class="caption">Animace 36</span>
    </a>
     <a href="Animace37.php" class="gallery-item">
        <img src="Obr74.png" alt="Animace 37">
        <span class="caption">Animace 37</span>
    </a>
     <a href="Animace38.php" class="gallery-item">
        <img src="Obr19.png" alt="Animace 38">
        <span class="caption">Animace 38</span>
    </a>
</div>
<div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>

</html>