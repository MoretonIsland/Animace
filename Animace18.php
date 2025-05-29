<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <title>Animace 2</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: radial-gradient(ellipse at center, #000022 0%, #000000 100%);
      height: 100vh;
    }

    .container {
      position: relative;
      width: 100vw;
      height: 90vh;
    }

    .planet {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 250px;
      height: 250px;
      background: radial-gradient(circle at 30% 30%, #4169e1, #000080);
      border-radius: 50%;
      box-shadow: 0 0 80px rgba(173, 216, 230, 0.5);
      z-index: 1;
    }

    .particle {
      position: absolute;
      border-radius: 50%;
      animation: move 20s linear infinite;
      z-index: 2;
    }

    @keyframes move {
      0% {
        transform: translate(0, 0);
      }
      50% {
        transform: translate(20px, -30px);
      }
      100% {
        transform: translate(0, 0);
      }
    }

    /* Příklad jedné částice - ostatní budou mít různé pozice a barvy */
    .particle:nth-child(2) {
      top: 20%;
      left: 40%;
      width: 4px;
      height: 4px;
      background: #ffffff;
      animation-duration: 15s;
      animation-delay: 2s;
    }
    .footer-divider {
      height: 40px;
      background-color: white;
      margin-bottom: 0px;
    }
  </style>
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="container">
    <div class="planet"></div>

    <!-- 30 různorodých částic uvnitř planety -->
    <div class="particle" style="top: 10%; left: 15%; width: 3px; height: 3px; background: #ffffff; animation-duration: 14s; animation-delay: 1s;"></div>
    <div class="particle" style="top: 20%; left: 25%; width: 5px; height: 5px; background: #ccccff; animation-duration: 18s; animation-delay: 2s;"></div>
    <div class="particle" style="top: 30%; left: 35%; width: 4px; height: 4px; background: #9999ff; animation-duration: 20s; animation-delay: 0.5s;"></div>
    <div class="particle" style="top: 40%; left: 45%; width: 6px; height: 6px; background: #ffccff; animation-duration: 16s; animation-delay: 1.2s;"></div>
    <div class="particle" style="top: 50%; left: 55%; width: 2px; height: 2px; background: #ddffff; animation-duration: 22s; animation-delay: 0s;"></div>
    <div class="particle" style="top: 60%; left: 65%; width: 5px; height: 5px; background: #aaccff; animation-duration: 24s; animation-delay: 1.5s;"></div>
    <div class="particle" style="top: 70%; left: 75%; width: 3px; height: 3px; background: #ffffff; animation-duration: 19s; animation-delay: 3s;"></div>
    <div class="particle" style="top: 80%; left: 85%; width: 6px; height: 6px; background: #bbccdd; animation-duration: 21s; animation-delay: 1s;"></div>
    <div class="particle" style="top: 90%; left: 95%; width: 4px; height: 4px; background: #eeeeff; animation-duration: 17s; animation-delay: 2.2s;"></div>
    <div class="particle" style="top: 12%; left: 22%; width: 3px; height: 3px; background: #ffffff; animation-duration: 23s; animation-delay: 3.4s;"></div>
    <div class="particle" style="top: 18%; left: 32%; width: 5px; height: 5px; background: #ccddee; animation-duration: 15s; animation-delay: 1.7s;"></div>
    <div class="particle" style="top: 28%; left: 42%; width: 2px; height: 2px; background: #eeeeee; animation-duration: 20s; animation-delay: 0.7s;"></div>
    <div class="particle" style="top: 38%; left: 52%; width: 4px; height: 4px; background: #e0e0ff; animation-duration: 14s; animation-delay: 2.1s;"></div>
    <div class="particle" style="top: 48%; left: 62%; width: 3px; height: 3px; background: #ffeeff; animation-duration: 22s; animation-delay: 0.9s;"></div>
    <div class="particle" style="top: 58%; left: 72%; width: 5px; height: 5px; background: #fafafa; animation-duration: 18s; animation-delay: 1.1s;"></div>
    <div class="particle" style="top: 68%; left: 82%; width: 2px; height: 2px; background: #d0f0ff; animation-duration: 20s; animation-delay: 2.4s;"></div>
    <div class="particle" style="top: 78%; left: 92%; width: 3px; height: 3px; background: #f9f9ff; animation-duration: 19s; animation-delay: 1.9s;"></div>
    <div class="particle" style="top: 88%; left: 12%; width: 4px; height: 4px; background: #cceeff; animation-duration: 13s; animation-delay: 2.3s;"></div>
    <div class="particle" style="top: 20%; left: 18%; width: 6px; height: 6px; background: #ddeeff; animation-duration: 25s; animation-delay: 0.4s;"></div>
    <div class="particle" style="top: 34%; left: 28%; width: 2px; height: 2px; background: #f0f0f0; animation-duration: 15s; animation-delay: 2.8s;"></div>
    <div class="particle" style="top: 46%; left: 38%; width: 3px; height: 3px; background: #eeeeee; animation-duration: 17s; animation-delay: 0.6s;"></div>
    <div class="particle" style="top: 56%; left: 48%; width: 5px; height: 5px; background: #dedefe; animation-duration: 16s; animation-delay: 1.8s;"></div>
    <div class="particle" style="top: 66%; left: 58%; width: 2px; height: 2px; background: #dffcff; animation-duration: 18s; animation-delay: 2.6s;"></div>
    <div class="particle" style="top: 76%; left: 68%; width: 6px; height: 6px; background: #ffffff; animation-duration: 21s; animation-delay: 3.3s;"></div>
    <div class="particle" style="top: 86%; left: 78%; width: 3px; height: 3px; background: #b0c0ff; animation-duration: 14s; animation-delay: 0.2s;"></div>
    <div class="particle" style="top: 96%; left: 88%; width: 4px; height: 4px; background: #ccddee; animation-duration: 19s; animation-delay: 2.5s;"></div>
    <div class="particle" style="top: 15%; left: 10%; width: 5px; height: 5px; background: #d4d4ff; animation-duration: 23s; animation-delay: 1.4s;"></div>
    <div class="particle" style="top: 25%; left: 20%; width: 3px; height: 3px; background: #ebebeb; animation-duration: 17s; animation-delay: 2.1s;"></div>
    <div class="particle" style="top: 35%; left: 30%; width: 4px; height: 4px; background: #ddeeff; animation-duration: 22s; animation-delay: 0.7s;"></div>

    <!-- Přidané bílé částice vlevo dole -->
    <div class="particle" style="top: 98%; left: 2%; width: 4px; height: 4px; background: #ffffff; animation-duration: 20s; animation-delay: 1.0s;"></div>
    <div class="particle" style="top: 95%; left: 5%; width: 3px; height: 3px; background: #dddddd; animation-duration: 18s; animation-delay: 1.8s;"></div>

    <!-- Přidané bílé částice vpravo nahoře -->
    <div class="particle" style="top: 7%; left: 95%; width: 4px; height: 4px; background: #ffffff; animation-duration: 22s; animation-delay: 0.5s;"></div>
    <div class="particle" style="top: 9%; left: 92%; width: 3px; height: 3px; background: #bbbbbb; animation-duration: 19s; animation-delay: 1.2s;"></div>
  </div>
  <div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>
