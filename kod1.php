<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Kód1</title>

 <!-- Odkaz na Open Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Highlight.js CSS styl (vs - Visual Studio styl) -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/vs.min.css">
    <style>
       body {
    background-color: #ffffff;
    font-family: 'Open Sans', sans-serif; /* Nový font */
    color: #555; /* Lepší kontrastní barva textu */
    padding: 20px;
    line-height: 1.6; /* Přidáno řádkování pro lepší čitelnost */
}

h2 {
    font-family: 'Open Sans', sans-serif;
    color: #414f9e; /* Modrá barva nadpisu odpovídající stylu animace pozadí */
    margin-bottom: 15px; /* Menší mezera pod nadpisem */
}


pre {
    font-size: 18px; /* velikost písma pro kód */
    padding: 20px;
    border: 1px solid #ccc;
    overflow-x: auto;
    border-radius: 5px;
    font-family: 'Courier New', monospace;
    background-color: #f9f9f9;
}

        a {
    display: inline-block;
    margin-bottom: 20px;
    text-decoration: none;
    font-family: 'Open Sans', sans-serif;
    color: white; /* Bílý text */
    background-color: #414f9e; /* Modrá barva odpovídající nadpisu */
    padding: 8px 12px;
    border-radius: 0px;
    transition: background-color 0.3s ease;
}

a:hover {
    background-color: #363f88; /* Mírně tmavší modrá při najetí myší */
}

.explanation {  
    font-family: 'Open Sans', sans-serif;
    font-size: 18px;  
    color: #555;  
    line-height: 1.6;  
}

    </style>
    <!-- Highlight.js knihovna -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
</head>
<body>

<a href="Animace31a.php">← Zpět</a>

<h2>JavaScript</h2>

<pre><code class="language-javascript">

const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

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
            bubble.color = '0, 127, 255';
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
</code></pre>

<br><br>

</body>
</html>
