<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Animace 9</title>
  <style>

.image-row {
    display: flex;
    justify-content: center;
    gap: 40px; /* menší mezery mezi obrázky */
    padding: 0 50px; /* větší mezery od krajů stránky */
    margin-bottom: 40px;
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
}

/* Popisek obrázku */
.text-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 17px 0; /* zvýšený prostor pro text */
  text-align: center;
  background-color: rgba(255, 255, 255, 0.8);
  color: rgb(34, 110, 172);
  font-weight: bold;
  font-family: Arial, sans-serif;
  transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
}

/* Změna vzhledu popisku při najetí myší */
.text-overlay:hover {
    background-color: rgba(70, 130, 180, 0.9); 
    color: rgba(255, 255, 255, 0.9);
    font-family: Arial, sans-serif; 
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
    <div class="image-container">
      <div class="image-inner">
        <img src="Cup1.jpg" alt="Cup1" />
        <div class="text-overlay">Kavárna</div>
      </div>
    </div>
    <div class="image-container">
      <div class="image-inner">
        <img src="Cup2.jpg" alt="Cup2" />
        <div class="text-overlay">Kavárna</div>
      </div>
    </div>
    <div class="image-container">
      <div class="image-inner">
        <img src="Cup3.jpg" alt="Cup3" />
        <div class="text-overlay">Kavárna</div>
      </div>
    </div>
  </div>

  <div class="image-row">
    <div class="image-container">
      <div class="image-inner">
        <img src="Cup4.jpg" alt="Cup4" />
        <div class="text-overlay">Kavárna</div>
      </div>
    </div>
    <div class="image-container">
      <div class="image-inner">
        <img src="Cup5.jpg" alt="Cup5" />
        <div class="text-overlay">Kavárna</div>
      </div>
    </div>
    <div class="image-container">
      <div class="image-inner">
        <img src="Cup6.jpg" alt="Cup6" />
        <div class="text-overlay">Kavárna</div>
      </div>
    </div>
  </div>

  <div class="image-row">
    <div class="image-container">
      <div class="image-inner">
        <img src="Cup7.jpg" alt="Cup7" />
        <div class="text-overlay">Kavárna</div>
      </div>
    </div>
    <div class="image-container">
      <div class="image-inner">
        <img src="Cup8.jpg" alt="Cup8" />
        <div class="text-overlay">Kavárna</div>
      </div>
    </div>
    <div class="image-container">
      <div class="image-inner">
        <img src="Cup9.jpg" alt="Cup9" />
        <div class="text-overlay">Kavárna</div>
      </div>
    </div>
  </div>
  <div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>
