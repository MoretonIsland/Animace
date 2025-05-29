<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Animace 27</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      display: flex;
      flex-direction: column;
      background-color: #000010; /* tmavé pozadí jako vesmír */
      color: white;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container {
  min-height: calc(100vh - 80px - 90px); /* výška mezi headerem a footerem */
  flex: 1 1 auto;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(to bottom, rgba(0, 16, 32, 0.5), #000010);
  position: relative;
  perspective: 800px; /* perspektiva pro 3D rotaci */
}

    .space-window {
      width: 400px;
      height: 400px;
      border-radius: 50%;
      background: radial-gradient(circle at 50% 50%, #000010, #000000);
      box-shadow: 0 0 20px #0033ff, 0 0 40px #000000 inset;
      overflow: hidden;
      position: relative;
      transform-style: preserve-3d;
      transition: transform 0.1s linear;
    }

    canvas {
      width: 100%;
      height: 100%;
      display: block;
      pointer-events: none;
    }

    /* Text dole vlevo */
    .space-label {
      position: absolute;
      bottom: 10px;
      left: 10px;
      font-size: 1.4em;
    color: #66ccff;
  text-shadow:
    0 0 5px #66ccff,
    0 0 10px #99ddff,
    0 0 20px #cceeff,
    0 0 40px #ffffff;
      user-select: none;
      pointer-events: none;
    }

    .footer-divider {
      height: 20px;
      background-color: white;
      margin-bottom: 40px;
    }
  </style>
</head>
<body>
   <?php include 'header.php'; ?>
  

  <div class="container">
    <div class="space-window">
      <canvas id="bubbleCanvas" width="400" height="400"></canvas>
    </div>
    <div class="space-label">Pohled na vesmír</div>
  </div>

  <div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>

  <script src="script17.js"></script>
</body>
</html>