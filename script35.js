const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let bubbles = []; // Pole bublin

class Bubble {
    constructor(x, y, radius, color, speedX, speedY) {
        this.x = x;
        this.y = y;
        this.radius = radius;
        this.color = color;
        this.speedX = speedX;
        this.speedY = speedY;
    }

    draw() {
        const gradient = ctx.createRadialGradient(this.x, this.y, 0, this.x, this.y, this.radius);
        gradient.addColorStop(0, 'rgba(255, 255, 255, 0.4)');
        gradient.addColorStop(1, this.color);

        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
        ctx.fillStyle = gradient;
        ctx.fill();
        ctx.closePath();
    }

    update() {
        this.x += this.speedX;
        this.y += this.speedY;

        // Odrážení od stran canvasu
        if (this.x + this.radius > canvas.width || this.x - this.radius < 0) {
            this.speedX = -this.speedX;
        }

        // Bublina zmizí nahoře a odstraní se
        if (this.y + this.radius < 0) {
            bubbles = bubbles.filter(bubble => bubble !== this);
        }

        this.draw();
    }
}

function getRandomColor() {
    return 'rgba(70, 130, 180, 1)'; 
}

// Inicializace bublin
function init() {
    bubbles = []; // Vyčistí staré bubliny
    for (let i = 0; i < 40; i++) {
        const radius = 15; // Stejná velikost bublin
        const x = Math.random() * (canvas.width - radius * 2) + radius;
        const y = canvas.height - radius; // Start dole
        const speedX = (Math.random() - 0.5) * 2;
        const speedY = Math.random() * -2 - 1; // Pohyb nahoru
        const color = getRandomColor();

        bubbles.push(new Bubble(x, y, radius, color, speedX, speedY));
    }
}

// Animace bublin
function animate() {
    requestAnimationFrame(animate);
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    bubbles.forEach(bubble => bubble.update());

    // Vytvoření nových bublin po zmizení starých
    if (bubbles.length === 0) {
        init();
    }
}

init();
animate();
