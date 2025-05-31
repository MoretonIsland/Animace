const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const bubbles = [];

// Načtení obrázků pro bubliny
const sunImage = new Image();
sunImage.src = 'slunce5.jpg'; // Obrázek slunce

const cloudImage = new Image();
cloudImage.src = 'oblak.png'; // Obrázek oblaku

// Po načtení obrázků spuštění animace
sunImage.onload = cloudImage.onload = () => {
    init();
    animate();
};

class Bubble {
    constructor(x, y, radius, image, speedX, speedY) {
        this.x = x;
        this.y = y;
        this.radius = radius;
        this.image = image;
        this.speedX = speedX;
        this.speedY = speedY;
    }

    draw() {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
        ctx.save();
        ctx.clip(); // Oříznutí oblasti bubliny

        // Vykreslení obrázku uvnitř bubliny
        ctx.drawImage(
            this.image,
            this.x - this.radius,
            this.y - this.radius,
            this.radius * 2,
            this.radius * 2
        );

        ctx.restore(); // Obnovení původního stavu
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
    }
}


function init() {
    bubbles.length = 0;

    // První bublina s oblakem - Oblak vlevo
    bubbles.push(new Bubble(300, 200, 120, cloudImage, 0.1, 0.4));

    // Slunce uprostřed mezi oblaky
    bubbles.push(new Bubble(600, 280, 120, sunImage, 0.3, 0.2));

    // Druhá bublina s oblakem - Oblak vpravo
    bubbles.push(new Bubble(900, 430, 120, cloudImage, 0.3, 0.4));
}



function animate() {
    requestAnimationFrame(animate);
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    bubbles.forEach(bubble => bubble.update());
}

// Spuštění animace
animate();
