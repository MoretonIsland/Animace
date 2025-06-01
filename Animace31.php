<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Animace 31</title> 

    
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <style>
        /* Nastavení základního stylu pro stránku */
        body {
            margin: 0; 
            font-family: 'Open Sans', sans-serif; 
        }

        h1 {
            text-align: center; 
            color: #414f9e; 
        }
       
        p {
            margin-left: 150px; /* Odsazení zleva */
            margin-right: 50px; /* Odsazení zprava */
            font-size: 18px; /* Velikost písma */
            line-height: 1.6; /* Řádkování textu */
            color: #555; /* Šedá barva textu */
        }

        /* Kontejner pro tlačítko */
        .button-container {
            margin-left: 150px;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        /* Styl tlačítka */
        .button-container a button {
            padding: 10px 20px; /* Velikost vnitřního odsazení tlačítka */
            font-size: 16px; 
            background-color: #414f9e; /* barva pozadí */
            color: white; 
            border: none; /* Odstranění okraje */
            border-radius: 0; /* Hranaté tlačítko */
            cursor: pointer; /* Změna kurzoru na ručičku při přejetí myší */
        }

        /* Styl pro kreslící plátno */
        #canvas {
            display: block; /* Změna prvku na blokový, tím zabere celou šířku svého rodičovského 
                kontejneru - odstraní výchozí mezery, které mají některé prvky. Výchozí 
                nastavení některých HTML prvků je display: inline - zobrazují se vedle sebe 
                a respektují mezeru mezi prvky. */
            width: 100%; /* Plátno se roztáhne na celou šířku */
        }

        /* Oddělovač mezi obsahem a footerem */
        .footer-divider {
            height: 20px;
            background-color: transparent; 
            margin-bottom: 40px; 
        }
    </style>
</head>
<body>
    <!-- Vložení hlavičky stránky -->
    <?php include 'header.php'; ?>

    <h1>Interaktivní animace</h1>

    <p>
        Na stránce se pohybují náhodnými směry kolečka různých barev a velikostí.
        Při najetí myší se změní barva koleček na růžovou.
        Jedná se o interaktivní dynamickou webovou animaci.
    </p>

    <div class="button-container">
        <a href="kod1.php">
            <button>JavaScript</button>
        </a>
    </div>

    <!-- Plátno pro animaci -->
    <canvas id="canvas"></canvas>

    <script>
        // Získání reference na prvek <canvas> a jeho 2D kontext pro kreslení
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');

        // Nastavení rozměrů plátna na velikost okna
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight - 300;

        const bubbles = []; // Pole obsahující všechny bubliny

        // Třída Bubble reprezentující jednu bublinu
        class Bubble {
            constructor(x, y, radius, color, speedX, speedY) {
                this.x = x; // X-ová souřadnice
                this.y = y; // Y-ová souřadnice
                this.radius = radius; // Velikost bubliny
                this.color = color; // Barva bubliny
                this.speedX = speedX; // Horizontální rychlost
                this.speedY = speedY; // Vertikální rychlost
                this.alpha = 0.5 + Math.random() * 0.5; // Průhlednost
            }

            // Metoda pro vykreslení bubliny
            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(${this.color}, ${this.alpha})`;
                ctx.fill();
                ctx.closePath();
            }

            // Metoda pro aktualizaci pozice bubliny
            update() {
                this.x += this.speedX;
                this.y += this.speedY;

                // Pokud bublina narazí na okraj plátna, změní směr
                if (this.x + this.radius > canvas.width || this.x - this.radius < 0) {
                    this.speedX = -this.speedX;
                }

                if (this.y + this.radius > canvas.height || this.y - this.radius < 0) {
                    this.speedY = -this.speedY;
                }

                this.draw();

                // Náhodná změna velikosti bubliny v malém rozsahu
                this.radius += Math.random() * 0.2 - 0.1;
                if (this.radius < 10) this.radius = 10;
                if (this.radius > 50) this.radius = 50;
            }
        }

        // Funkce vracející náhodnou barvu
        function getRandomColor() {
            const colors = [
                '255, 99, 71',
                '255, 215, 0',
                '255, 105, 180',
                '0, 206, 209',
                '50, 205, 50',
            ];
            return colors[Math.floor(Math.random() * colors.length)];
        }

        // Inicializace bublin
        function init() {
            for (let i = 0; i < 50; i++) {
                const radius = Math.random() * 30 + 10;
                const x = Math.random() * (canvas.width - radius * 2) + radius;
                const y = Math.random() * (canvas.height - radius * 2) + radius;
                const speedX = (Math.random() - 0.5) * 2;
                const speedY = (Math.random() - 0.5) * 2;
                const color = getRandomColor();
                bubbles.push(new Bubble(x, y, radius, color, speedX, speedY));
            }
        }

        // Hlavní funkce animace
        function animate() {
            requestAnimationFrame(animate);
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            bubbles.forEach(bubble => bubble.update());
        }

        // Funkce pro změnu barvy bublin při přejetí myší
        function changeBubbleColorOnHover() {
            canvas.addEventListener('mousemove', () => {
                bubbles.forEach(bubble => bubble.color = '241, 160, 200'); // Růžová barva
            });
            canvas.addEventListener('mouseleave', () => {
                bubbles.forEach(bubble => bubble.color = getRandomColor()); // Návrat k původní barvě
            });
        }

        init();
        animate();
        changeBubbleColorOnHover();
    </script>

<div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>

</body>
</html>
