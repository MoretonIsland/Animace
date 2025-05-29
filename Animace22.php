<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animace 21</title>
  
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
      height: 120px; /* Výška vody */
      overflow: hidden;
      line-height: 0;
    }

    .water {
      position: absolute;
      bottom: 0;
      display: block;
      width: 200%;
      height: 80px; /* Výška první vlnové vrstvy */
      animation: water-move 60s linear infinite;
    }

    .water-second {
      position: absolute;
      bottom: 0;
      display: block;
      width: 200%;
      height: 140px; /* Výška druhé vlnové vrstvy */
      animation: water-move 25s linear infinite; /* Rychlejší animace */
      transform: scaleY(1.8); /* Vyšší vlna */
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
      <!-- První vrstva vln - standardní -->
      <svg viewBox="0 0 240 28" preserveAspectRatio="none" class="water">
        <path d="M0,20 
                 Q10,10 20,20 
                 T40,20 T60,20 T80,20 
                 T100,20 T120,20 T140,20 
                 T160,20 T180,20 T200,20 
                 T220,20 T240,20 V60 H0 Z"
              fill="rgba(255,255,255,0.3)" />
      </svg>

      <!-- Druhá vrstva vln - vyšší, delší a rychlejší -->
      <svg viewBox="0 0 240 40" preserveAspectRatio="none" class="water-second">
        <path d="M0,30 
                 Q20,10 40,30 
                 T80,30 T120,30 T160,30 
                 T200,30 T240,30 V60 H0 Z"
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