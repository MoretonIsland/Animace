const canvas = document.getElementById('canvas'); // Získání HTML elementu <canvas> pomocí 
// jeho ID
const ctx = canvas.getContext('2d'); // Získání 2D vykreslovacího kontextu pro kreslení na plátno

canvas.width = window.innerWidth; // Nastavení šířky plátna podle aktuální šířky okna prohlížeče
canvas.height = window.innerHeight; // Nastavení výšky plátna podle aktuální výšky okna prohlížeče

let stars = []; // Vytvoření pole pro hvězdy

for (let i = 0; i < 100; i++) { // Generování 100 hvězd s náhodnými vlastnostmi
    stars.push({
        x: Math.random() * canvas.width, // Náhodná horizontální pozice
        y: Math.random() * canvas.height, // Náhodná vertikální pozice
        radius: Math.random() * 1.5, // Náhodný poloměr hvězdy
        speedX: (Math.random() - 0.5) * 0.3, // Náhodná horizontální rychlost
        speedY: (Math.random() - 0.5) * 0.3 // Náhodná vertikální rychlost
    });
}

let planetParticles = []; // Vytvoření pole částic uvnitř planety

for (let i = 0; i < 80; i++) { // Generování 80 částic s náhodnými vlastnostmi
    planetParticles.push({
        x: canvas.width / 2, // Výchozí X-ová souřadnice (střed)
        y: canvas.height / 2, // Výchozí Y-ová souřadnice (střed)
        angle: Math.random() * Math.PI * 2, // Náhodný počáteční úhel
        radius: Math.random() * 3 + 1, // Náhodný poloměr částice
        distance: Math.random() * 50 + 20, // Náhodná vzdálenost od středu
        speed: Math.random() * 0.001 + 0.0002 // Náhodná rychlost otáčení v radiánech na snímek
 
    });
}

function animate() { // Definice animační smyčky
    ctx.clearRect(0, 0, canvas.width, canvas.height); // Vymazání celého plátna

    ctx.fillStyle = 'rgb(5, 5, 20)'; // Nastavení barvy pozadí
    ctx.fillRect(0, 0, canvas.width, canvas.height); // Vykreslení pozadí

    ctx.fillStyle = 'white'; // Nastavení barvy pro hvězdy

    stars.forEach(star => { // Vykreslení a pohyb hvězd
        star.x += star.speedX; // Aktualizace horizontální pozice
        star.y += star.speedY; // Aktualizace vertikální pozice

        if (star.x < 0) star.x = canvas.width; // Obnovení pozice při opuštění levé hrany
        if (star.x > canvas.width) star.x = 0; // Obnovení pozice při opuštění pravé hrany
        if (star.y < 0) star.y = canvas.height; // Obnovení pozice při opuštění horní hrany
        if (star.y > canvas.height) star.y = 0; // Obnovení pozice při opuštění spodní hrany

        ctx.beginPath(); // Zahájení cesty pro kreslení hvězdy
        ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2); // Definice kruhu hvězdy
        ctx.fill(); // Vyplnění hvězdy
    });

    const centerX = canvas.width / 2; // Střed plátna X
    const centerY = canvas.height / 2 - 100; // Střed plátna Y, posun nahoru
    const planetRadius = Math.max(canvas.width * 0.08, 80); // Responzivní velikost, min. 80px

    let glowGradient = ctx.createRadialGradient(centerX, centerY, planetRadius, centerX, centerY, 
        planetRadius + 50); // Vytvoření radiálního přechodu pro záři
    glowGradient.addColorStop(0, 'rgba(102, 204, 255, 0.3)'); // Barva uprostřed
    glowGradient.addColorStop(1, 'rgba(0, 51, 102, 0)'); // Průhledná vnější barva
    ctx.fillStyle = glowGradient; // Nastavení stylu výplně
    ctx.beginPath(); // Zahájení kresby záře
    ctx.arc(centerX, centerY, planetRadius + 50, 0, Math.PI * 2); // Definice kruhu záře
    ctx.fill(); // Vyplnění záře

    // Vytvoření přechodu pro planetu
let gradient = ctx.createRadialGradient(centerX, centerY, 30, centerX, centerY, planetRadius);
gradient.addColorStop(0, '#3366ff');     // Střed – sytá modrá bez nádechu zelené
gradient.addColorStop(0.5, '#0066cc');   // Polovina – sytá střední modrá
gradient.addColorStop(1, '#001f4d');     // Okraj – tmavá modrá
ctx.fillStyle = gradient; // Nastavení přechodu jako výplň
ctx.beginPath(); // Zahájení cesty
ctx.arc(centerX, centerY, planetRadius, 0, Math.PI * 2); // Definice kruhu planety
ctx.fill(); // Vyplnění planety


    ctx.fillStyle = '#ffffff'; // Nastavení barvy pro částice uvnitř planety

    planetParticles.forEach(p => { // Vykreslení částic
        p.angle += p.speed; // Zvýšení úhlu částice
        const x = centerX + Math.cos(p.angle) * p.distance; // Výpočet X-ové pozice částice
        const y = centerY + Math.sin(p.angle) * p.distance; // Výpočet Y-ové pozice částice

        ctx.beginPath(); // Zahájení cesty
        ctx.arc(x, y, p.radius, 0, Math.PI * 2); // Definice kruhu částice
        ctx.fill(); // Vyplnění částice
    });

    requestAnimationFrame(animate); // Vyvolání dalšího snímku animace
}

animate(); // Spuštění animace

window.addEventListener('resize', () => { // Při změně velikosti okna
    canvas.width = window.innerWidth; // Aktualizace šířky plátna
    canvas.height = window.innerHeight; // Aktualizace výšky plátna
}); // Tento kód zajišťuje responzivitu canvasu – po změně velikosti okna (např. na mobilu) 
// se plátno automaticky přizpůsobí, aby zůstalo plně viditelné a správně vykreslené
