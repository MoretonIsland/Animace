<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Animace 30</title>

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
      height: 200px;
      overflow: hidden;
      line-height: 0;
    }

    .water {
      position: relative;
      display: block;
      width: 200%;
      height: 100px;
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
      <!-- První vlna - obloučky nahoru -->
    
 <svg viewBox="0 0 240 28" preserveAspectRatio="none" class="water">
      
        <path d="M0,20 
                 Q5,10 10,20 
                 T20,20 
                 T30,20 
                 T40,20 
                 T50,20 
                 T60,20 
                 T70,20 
                 T80,20 
                 T90,20 
                 T100,20 
                 T110,20 
                 T120,20 
                 T130,20 
                 T140,20 
                 T150,20 
                 T160,20 
                 T170,20 
                 T180,20 
                 T190,20 
                 T200,20 
                 T210,20 
                 T220,20 
                 T230,20 
                 T240,20 
                 V60 H0 Z"
              fill="rgba(255,255,255,0.3)" />
</svg>

      <!-- Druhá vlna - obrácené obloučky -->
<svg viewBox="0 0 240 28" preserveAspectRatio="none" class="water">
 
        <path d="M0,20 
                 Q5,30 10,20 
                 T20,20 
                 T30,20 
                 T40,20 
                 T50,20 
                 T60,20 
                 T70,20 
                 T80,20 
                 T90,20 
                 T100,20 
                 T110,20 
                 T120,20 
                 T130,20 
                 T140,20 
                 T150,20 
                 T160,20 
                 T170,20 
                 T180,20 
                 T190,20 
                 T200,20 
                 T210,20 
                 T220,20 
                 T230,20 
                 T240,20 
                 V60 H0 Z"
              fill="rgba(173, 216, 230, 0.4)" />
      </svg>
    </div>
  </div>

  <div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>