// Získání reference na <canvas> element
const canvas = document.getElementById('canvas');

// Získání 2D kontextu pro kreslení na canvas
const ctx = canvas.getContext('2d');

// Nastavení šířky a výšky canvasu na velikost okna
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// Pole pro ukládání bublin (kroužků)
const bubbles = [];

// Objekt pro sledování pozice myši
let mouse = { x: null, y: null };

// Definice třídy Bubble (kroužek)
class Bubble {
    constructor(x, y, radius, speedX, speedY) {
        // Inicializace vlastností bubliny
        this.x = x;         // X souřadnice
        this.y = y;         // Y souřadnice
        this.radius = radius;   // Poloměr bubliny (velikost)
        this.speedX = speedX;   // Rychlost pohybu na ose X
        this.speedY = speedY;   // Rychlost pohybu na ose Y
    }

    draw() {
    // Vytvoření lineárního gradientu
    const gradient = ctx.createLinearGradient(this.x - this.radius, this.y - this.radius, this.x + this.radius, this.y + this.radius);
    
    // Světlejší modrá na začátku
    gradient.addColorStop(0, 'rgb(173, 216, 230)'); 
    
    // Tmavší modrá na konci
    gradient.addColorStop(1, 'rgb(70, 130, 180)'); 

    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
    ctx.strokeStyle = gradient; // Použití gradientu jako obrys kroužku
    ctx.lineWidth = 3;
    ctx.stroke();
    ctx.closePath();
}


    update() {
        // Detekce pozice myši - pokud je poblíž, kroužek se vzdálí
        if (mouse.x !== null && mouse.y !== null) {
            const dx = this.x - mouse.x; // Vzdálenost od myši na ose X
            const dy = this.y - mouse.y; // Vzdálenost od myši na ose Y
            const distance = Math.sqrt(dx * dx + dy * dy); // Výpočet vzdálenosti

            if (distance < 100) { // Pokud je vzdálenost menší než 100px
                const force = 0.6; // Síla odpuzování
                this.x += dx * force; // Posun kroužku dál od myši na ose X
                this.y += dy * force; // Posun kroužku dál od myši na ose Y
            }
        }

        // Pohyb kroužků podle jejich rychlosti
        this.x += this.speedX;
        this.y += this.speedY;

        // Odrážení od okrajů canvasu (horizontální)
        if (this.x + this.radius > canvas.width || this.x - this.radius < 0) {
            this.speedX = -this.speedX; // Obrácení směru pohybu
        }

        // Odrážení od okrajů canvasu (vertikální)
        if (this.y + this.radius > canvas.height || this.y - this.radius < 0) {
            this.speedY = -this.speedY; // Obrácení směru pohybu
        }

        // Vykreslení bubliny (kroužku)
        this.draw();
    }
}

// Funkce pro inicializaci bublin
function init() {
    for (let i = 0; i < 30; i++) { // Vytvoření 30 kroužků
        const radius = 50; // Velikost kroužku
        const x = Math.random() * (canvas.width - radius * 2) + radius; // Náhodná X pozice
        const y = Math.random() * (canvas.height - radius * 2) + radius; // Náhodná Y pozice
        const speedX = (Math.random() - 0.5) * 2; // Náhodná rychlost na ose X
        const speedY = (Math.random() - 0.5) * 2; // Náhodná rychlost na ose Y

        bubbles.push(new Bubble(x, y, radius, speedX, speedY)); // Vložení nové bubliny do pole
    }
}

// Funkce pro animaci bublin
function animate() {
    requestAnimationFrame(animate); // Zajištění nekonečné animace
    ctx.clearRect(0, 0, canvas.width, canvas.height); // Vymazání canvasu před každým snímkem
    bubbles.forEach(bubble => bubble.update()); // Aktualizace každé bubliny
}

// Detekce pohybu myši a uložení souřadnic
canvas.addEventListener('mousemove', function(event) {
    mouse.x = event.clientX;
    mouse.y = event.clientY;
});

// Pokud myš opustí oblast canvasu, souřadnice se resetují
canvas.addEventListener('mouseleave', function() {
    mouse.x = null;
    mouse.y = null;
});

// Spuštění inicializace bublin
init();

// Spuštění animace
animate();
