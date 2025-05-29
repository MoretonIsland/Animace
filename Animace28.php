<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animace 28</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">  
   
<style>
body {
    margin: 0;
    animation: backgroundAnimation 10s infinite ease-in-out;
    min-height: 130vh; /* Zvýší výšku stránky, aby bylo nutné rolování */
    display: flex;
    flex-direction: column;
    font-family: 'Open Sans', sans-serif;
    color: #555;
    line-height: 1.6;
}


@keyframes backgroundAnimation {
  0% { background-color: rgb(250, 230, 200); } 
  33% { background-color: rgb(235, 210, 150); } 
  66% { background-color: rgb(220, 190, 130); } 
  100% { background-color: rgb(240, 220, 170); } 
}

h1 {
    margin-left: 150px;
    margin-bottom: 0px;
    font-family: 'Open Sans', sans-serif;
    color: #414f9e; /* Stejná tmavě modrá jako v předchozím souboru */
}

p {
    margin-left: 150px;
    margin-right: 50px;
    font-family: 'Open Sans', sans-serif;
    font-size: 18px;
}

.button-container {
    text-align: left;
    margin-left: 150px;
    margin-top: 10px;
    margin-bottom: 20px;
}

.button-container a button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #414f9e; /* Modrá barva tlačítka podle vzoru z druhého souboru */
    color: white;
    border: none;
    border-radius: 0; /* Hranaté tlačítko */
    cursor: pointer;
}

.button-container a button:hover {
    background-color: #363f88; /* Mírně tmavší modrá při hoveru */
}

.footer-divider {
    height: 20px;
    background-color: transparent;
    margin-bottom: 0px;
}
</style>
</head>
<body>
 <?php include 'header.php'; ?>
    <br><br>

<h1>Animované pozadí stránky</h1>
<p>Tato stránka mění své pozadí rovnoměrně mezi několika odstíny.</p>

<div class="button-container">
<a href="kod2.php">
   <button>CSS</button>
</a>
</div>

<div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>