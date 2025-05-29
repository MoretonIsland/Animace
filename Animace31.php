<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animace 16</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
        }

        h1 {
            text-align: center;
            color: #414f9e;
        }

        p {
            margin-left: 100px;
            margin-right: 50px;
            font-size: 18px;
            line-height: 1.6;
            color: #555;
        }

        .button-container {
            margin-left: 100px;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .button-container a button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #414f9e; /* modrá */
            color: white;
            border: none;
            border-radius: 0; /* hranaté tlačítko */
            cursor: pointer;
        }


        #canvas {
            display: block;
            width: 100%;
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

<h1>Interaktivní animace webové galerie</h1>

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

<canvas id="canvas"></canvas>

<script>
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight - 300;

    const bubbles = [];

    class Bubble {
        constructor(x, y, radius, color, speedX, speedY) {
            this.x = x;
            this.y = y;
            this.radius = radius;
            this.color = color;
            this.speedX = speedX;
            this.speedY = speedY;
            this.alpha = 0.5 + Math.random() * 0.5;
        }

        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(${this.color}, ${this.alpha})`;
            ctx.fill();
            ctx.closePath();
        }

        update() {
            this.x += this.speedX;
            this.y += this.speedY;

            if (this.x + this.radius > canvas.width || this.x - this.radius < 0) {
                this.speedX = -this.speedX;
            }

            if (this.y + this.radius > canvas.height || this.y - this.radius < 0) {
                this.speedY = -this.speedY;
            }

            this.draw();

            this.radius += Math.random() * 0.2 - 0.1;
            if (this.radius < 10) this.radius = 10;
            if (this.radius > 50) this.radius = 50;
        }
    }

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

    function animate() {
        requestAnimationFrame(animate);
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        bubbles.forEach(bubble => bubble.update());
    }

    function changeBubbleColorOnHover() {
        canvas.addEventListener('mousemove', () => {
            bubbles.forEach(bubble => {
                bubble.color = '241, 160, 200';
            });
        });
        canvas.addEventListener('mouseleave', () => {
            bubbles.forEach(bubble => {
                bubble.color = getRandomColor();
            });
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