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
    }

    draw() {
        // Vytvoření radiálního gradientu pro bublinu, aby měla střed světlejší a okraje tmavší
        const gradient = ctx.createRadialGradient(this.x, this.y, 0, this.x, this.y, this.radius);
        gradient.addColorStop(0, 'rgba(255, 255, 255, 1)'); // Světlejší střed (průhledný)
        gradient.addColorStop(1, this.color); // Tmavší okraj (barevný)

        // Kreslení bubliny jako kruhu s jemným okrajem
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
        ctx.fillStyle = gradient;
        ctx.fill();
        ctx.closePath();
    }

    update() {
        this.x += this.speedX;
        this.y += this.speedY;

        // Odrážení od hran canvasu
        if (this.x + this.radius > canvas.width || this.x - this.radius < 0) {
            this.speedX = -this.speedX;
        }

        if (this.y + this.radius > canvas.height || this.y - this.radius < 0) {
            this.speedY = -this.speedY;
        }

        this.draw();
    }
}

function getRandomColor() {
    const colors = [
    'rgb(173, 216, 230)', 
];

    return colors[Math.floor(Math.random() * colors.length)];
}
function init() {
    for (let i = 0; i < 50; i++) {
        const radius = Math.random() * 30 + 10; // Náhodná velikost bubliny
        const x = Math.random() * (canvas.width - radius * 2) + radius; // Náhodná pozice X
        const y = Math.random() * (canvas.height - radius * 2) + radius; // Náhodná pozice Y
        const speedX = (Math.random() - 0.5) * 2; // Náhodná rychlost v ose X
        const speedY = (Math.random() - 0.5) * 2; // Náhodná rychlost v ose Y
        const color = getRandomColor(); // Náhodná barva
        bubbles.push(new Bubble(x, y, radius, color, speedX, speedY)); // Vytvoření nové bubliny
    }
}

function animate() {
    requestAnimationFrame(animate); // Rekurzivní volání - funkce animate() se volá sama opět 
                                    // a opět. Iterace je jednotlivý průchod nějakého opakujícího 
                                    // se procesu – například jeden snímek animace. V animacích 
                                    // (requestAnimationFrame) je iterace každý snímek.

    ctx.clearRect(0, 0, canvas.width, canvas.height); // Vyčištění canvasu před každým vykreslením 
                                    // bublin - aby se bubliny nekreslily přes sebe
    bubbles.forEach(bubble => bubble.update()); // Aktualizace pozice a vykreslení každé bubliny. 
}

init(); // Inicializace bublin - nastaví počáteční stav všech bublin na plátně - vytvoření 
                                // bublin před začátkem animace
animate(); // Spuštění animace
