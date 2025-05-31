const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const bubbles = [];
let mouse = { x: null, y: null };

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

        // Pokud bublina dosáhne horního okraje, vytvoří novou dole
        if (this.y + this.radius < 0) {
            this.x = Math.random() * (canvas.width - this.radius * 2) + this.radius;
            this.y = canvas.height - this.radius;
            this.speedY = Math.random() * -2 - 1; // Pohyb nahoru
            this.color = getRandomColor();
        }

        this.draw();
    }
}

function getRandomColor() {
    const colors = [
        'rgba(70, 130, 180, 1)', 
    ];
    return colors[Math.floor(Math.random() * colors.length)];
}

function init() {
    for (let i = 0; i < 50; i++) {
        const radius = 15; // Stejná velikost bublin
        const x = Math.random() * (canvas.width - radius * 2) + radius;
        const y = canvas.height - radius; // Start dole
        const speedX = (Math.random() - 0.5) * 2;
        const speedY = Math.random() * -2 - 1; // Vzlétají nahoru
        const color = getRandomColor();

        bubbles.push(new Bubble(x, y, radius, color, speedX, speedY));
    }
}

function animate() {
    requestAnimationFrame(animate);
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    bubbles.forEach(bubble => bubble.update());
}

canvas.addEventListener('mousemove', function(event) {
    mouse.x = event.clientX;
    mouse.y = event.clientY;
});

canvas.addEventListener('mouseleave', function() {
    mouse.x = null;
    mouse.y = null;
});

init();
animate();
