<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animace 24</title>
  
  <style>
   html, body {
  margin: 0;
  padding: 0;
  height: 100%;
  display: flex;
  flex-direction: column;
}

.container {
  flex: 1; /* zabírá všechnu výšku až k footeru */
  position: relative;
}

canvas {
  width: 100%;
  height: 100%;
  display: block;
  background: white; /* čistě bílé pozadí */
}

   
 .footer-divider {
  height: 40px;
  background-color: transparent; 
  margin-bottom: 0;
}
   
</style>
</head>
<body>
  
 <?php include 'header.php'; ?>
    <br><br>

  <!-- Kontejner pro animaci -->
  <div class="container">
    <canvas id="canvas"></canvas>
  </div>

  <script src="script12.js"></script>

 <div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>
