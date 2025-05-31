<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSAP Animation</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/SplitText.min.js"></script>
</head>
<style>
body {
  font-family: Avenir, sans-serif;
  background-color: #0e100f;
  color: #fffce1;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  flex-direction: column;
  position: relative; /* Zajistí vlastní vrstvu nad stránkou */
 
}

p {
  max-width: 70ch;
  font-size: 1.4rem;
  text-align: center;
  line-height: 1.3;
}

h1 {
  opacity: 0;
}



 .footer-divider {
  height: 40px;
  background-color: white; 
  margin-bottom: 20;
}

</style>

<body>


<h1 id="heading">Vyšší odborná škola Varnsdorf</h1>
    
   
<p>Ukázkový kód animace je z webové stránky GSAP.  
<a href="https://gsap.com/" target="_blank">GSAP.com</a></p>

<p>Na této stránce je odkaz s demo ukázkami, kde jsou zveřejněny různé animace 
    využívající GSAP. 
<a href="https://gsap.com/demos/?tags=Draggable" target="_blank">GSAP Demos</a></p>

<p>Demo ukázka GSAP, která je prezentována na CodePen:  
<a href="https://codepen.io/GreenSock/pen/aYYOdN" target="_blank">CodePen animace</a></p>



<script src="script38.js"></script>


<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>


</body>
</html>

