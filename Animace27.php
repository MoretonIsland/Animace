<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Animace 29</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .container {
      flex: 1;
      position: relative;
      background: linear-gradient(to bottom, #0af, #0077be);
      overflow: hidden;
    }

    .water-container {
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      line-height: 0;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
    }

    .water-row {
      position: relative;
      width: 100%;
      height: 16.666%; /* 100% / 6 */
    }

    .water-svg {
      position: absolute;
      width: 200%;
      height: 100%;
      animation: water-move 60s linear infinite;
    }

    @keyframes water-move {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }

    .footer-divider {
      height: 40px;
      background-color: #fff;
      margin-bottom: 0;
    }
  </style>
</head>
<body>
 <?php include 'header.php'; ?>
    <br><br>

<div class="container">
  <div class="water-container">
    <?php
      // Definujeme dvě různé cesty – jednu pro liché, jednu pro sudé řady
      $pathA = 'M0,20 
                Q5,10 10,20 
                Q15,30 20,20 
                Q25,10 30,20 
                Q35,30 40,20 
                Q45,10 50,20 
                Q55,30 60,20 
                Q65,10 70,20 
                Q75,30 80,20 
                Q85,10 90,20 
                Q95,30 100,20 
                Q105,10 110,20 
                Q115,30 120,20 
                Q125,10 130,20 
                Q135,30 140,20 
                Q145,10 150,20 
                Q155,30 160,20 
                Q165,10 170,20 
                Q175,30 180,20 
                Q185,10 190,20 
                Q195,30 200,20 
                Q205,10 210,20 
                Q215,30 220,20 
                Q225,10 230,20 
                Q235,30 240,20 
                V20 H0 Z';

      $pathB = 'M0,20 
                Q5,30 10,20 
                Q15,10 20,20 
                Q25,30 30,20 
                Q35,10 40,20 
                Q45,30 50,20 
                Q55,10 60,20 
                Q65,30 70,20 
                Q75,10 80,20 
                Q85,30 90,20 
                Q95,10 100,20 
                Q105,30 110,20 
                Q115,10 120,20 
                Q125,30 130,20 
                Q135,10 140,20 
                Q145,30 150,20 
                Q155,10 160,20 
                Q165,30 170,20 
                Q175,10 180,20 
                Q185,30 190,20 
                Q195,10 200,20 
                Q205,30 210,20 
                Q215,10 220,20 
                Q225,30 230,20 
                Q235,10 240,20 
                V20 H0 Z';

      for ($i = 1; $i <= 6; $i++):
        $isOdd = $i % 2 !== 0;
        $path = $isOdd ? $pathA : $pathB;
    ?>
      <div class="water-row">
        <svg viewBox="0 0 240 28" preserveAspectRatio="none" class="water-svg">
          <path d="<?= $path ?>" fill="rgba(255,255,255,0.3)" />
        </svg>

        <svg viewBox="0 0 240 28" preserveAspectRatio="none" class="water-svg">
          <path d="<?= $path ?>" fill="rgba(173,216,230,0.4)" />
        </svg>
      </div>
    <?php endfor; ?>
  </div>
</div>

<div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>