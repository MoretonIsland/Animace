<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animace 15</title>
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <style>

    h1 {
            text-align: center;
            font-family: 'Open Sans', sans-serif;
            color: #414f9e;
    }

    p {
            margin-left: 100px; 
            margin-right: 50px;
            font-family: 'Open Sans', sans-serif;
            font-size: 18px;
            line-height: 1.6;
            color: #555;
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

<h1>Dynamická animace koleček</h1>
<p> Dynamické pozadí určuje náladu a tón webu. Velikost koleček lze nastavit 
    jako konstantní nebo variabilní. 

   Příkladem kódu pro variabilní velikost je "const radius = Math.random() * 30 + 10;". 
   Tímto zápisem se generuje náhodný poloměr od 10 do 40 px.  V této animaci je 
   nastavena konstantní velikost 10 px kódem "const radius = 10;".  
</p>


<div class="container">
        <canvas id="canvas"></canvas>
    </div>
    
    <script>
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');

    // Nastavení velikosti canvasu na velikost okna
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    const bubbles = [];

    // Třída pro vytvoření bublin
    class Bubble {
        constructor(x, y, radius, color, speedX, speedY) {
            this.x = x;
            this.y = y;
            this.radius = radius;
            this.color = color;
            this.speedX = speedX;
            this.speedY = speedY;
        }

        // Metoda pro vykreslení bubliny
        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
            ctx.fillStyle = this.color;
            ctx.fill();
            ctx.closePath();
        }

        // Metoda pro aktualizaci pozice bubliny
        update() {
            this.x += this.speedX;
            this.y += this.speedY;

            // Odrážení od hran canvasu (odrazy na levé, pravé, horní a dolní straně)
            if (this.x + this.radius > canvas.width || this.x - this.radius < 0) {
                this.speedX = -this.speedX;
            }

            if (this.y + this.radius > canvas.height || this.y - this.radius < 0) {
                this.speedY = -this.speedY;
            }

            // Vykreslení bubliny
            this.draw();
        }
    }

    // Funkce pro inicializaci bublin
    function init() {
        for (let i = 0; i < 50; i++) { // Vytvoření 50 bublin
            const radius = 10; // Pevná velikost 10 px
            const x = Math.random() * (canvas.width - radius * 2) + radius; // Náhodná počáteční pozice X
            const y = Math.random() * (canvas.height - radius * 2) + radius; // Náhodná počáteční pozice Y
            const speedX = (Math.random() - 0.5) * 2; // Náhodná rychlost pohybu v ose X
            const speedY = (Math.random() - 0.5) * 2; // Náhodná rychlost pohybu v ose Y
            const color = ['#FFC0CB', '#90EE90', '#ADD8E6'][i % 3]; // Výběr barvy

            // Vytvoření bubliny a přidání do pole bublin
            bubbles.push(new Bubble(x, y, radius, color, speedX, speedY));
        }
    }

    // Funkce pro animaci bublin
    function animate() {
        requestAnimationFrame(animate); // Rekurzivní volání pro animaci
        ctx.clearRect(0, 0, canvas.width, canvas.height); // Vyčištění canvasu před každým novým vykreslením
        bubbles.forEach(bubble => bubble.update()); // Aktualizace pozice a vykreslení každé bubliny
    }

    init(); // Inicializace bublin
    animate(); // Začátek animace
    </script>
  <div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>