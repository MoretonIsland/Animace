<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animace 26</title>
    <style>
        body {
            margin: 0;
            background-color: #87CEEB; /* Světle modrá barva jako obloha */
        }
        .home-link {
            margin: 10px;
            font-family: Arial, sans-serif;
            text-decoration: underline;
            color: #000;
            border: none;
            background: none;
            padding: 0;
            box-shadow: none;
        }
        .container {
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }
        canvas {
            display: block;
        }
    </style>
</head>
<body>
     <?php include 'header.php'; ?>
    <br><br>
    
    <div class="container">
        <canvas id="canvas"></canvas>
    </div>
    <script src="script16.js"></script>
   <div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>