<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Animace 25</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: black;
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
            position: relative;
        }

        canvas {
            width: 100%;
            height: 100%;
            display: block;
            background-color: black;
            z-index: -1;
}



        .footer-divider {
    height: 20px;
    background-color: white;
    margin-bottom: 40px;
    z-index: 10;
}
    </style>
</head>
<body>
 <?php include 'header.php'; ?>
    <br><br>

    <div class="container">
        <canvas id="canvas"></canvas>
    </div>

<div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>


    <script src="script1.js"></script>
</body>
</html>