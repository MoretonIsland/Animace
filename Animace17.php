<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Animace 35</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .image-row {
      display: flex;
      justify-content: center;
      gap: 40px;
      padding: 0 50px;
      margin: 50px 0;
    }

    .image-container {
      position: relative;
      width: 300px;
      overflow: hidden;
      border-radius: 10px;
    }


    .image-container img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 1.5s ease-in-out; /* Plynulý přechod */
    transform-origin: center center;
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
    <img src="Obr14.png" alt="Obr14">
  </div>
  <div class="image-container">
    <img src="Obr16.png" alt="Obr16">
  </div>
  <div class="image-container">
    <img src="Obr17.png" alt="Obr17">
  </div>
</div>

<script>
document.querySelectorAll('.image-container img').forEach(img => {
    img.addEventListener('mousemove', (e) => {
        const bounds = e.target.getBoundingClientRect();
        const x = ((e.clientX - bounds.left) / bounds.width) * 100;
        const y = ((e.clientY - bounds.top) / bounds.height) * 100;
        e.target.style.transformOrigin = `${x}% ${y}%`;
        e.target.style.transform = "scale(1.7)";
    });

    img.addEventListener('mouseleave', () => {
        img.style.transform = "scale(1)";
        img.style.transformOrigin = "center center";
    });
});


</script>

<div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>