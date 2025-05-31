const canvas = document.getElementById('bubbleCanvas');
const ctx = canvas.getContext('2d');

const spaceWindow = document.querySelector('.space-window');

const particles = [];
const maxParticles = 60;

class Particle {
  constructor() {
    this.reset();
  }

  reset() {
    this.x = Math.random() * 400;
    this.y = Math.random() * 400;
    this.radius = Math.random() * 1.5 + 0.5; // menší částice
    this.dx = Math.random() * 0.4 - 0.2;
    this.dy = Math.random() * 0.4 - 0.2;
    const colors = ["rgba(255,255,255,", "rgba(180,200,255,", "rgba(255,220,150,"];
    this.color = colors[Math.floor(Math.random() * colors.length)] + (Math.random() * 0.4 + 0.4) + ")";
  }

  move() {
    this.x += this.dx;
    this.y += this.dy;

    // Odraz od okraje kruhu (okénka)
    const dx = this.x - 200;
    const dy = this.y - 200;
    const dist = Math.sqrt(dx * dx + dy * dy);
    if (dist > 200 - this.radius) {
      this.dx = -this.dx;
      this.dy = -this.dy;
    }
  }

  draw(ctx) {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
    ctx.fillStyle = this.color;
    ctx.fill();
  }
}

for (let i = 0; i < maxParticles; i++) {
  particles.push(new Particle());
}

let angle = 0;

function animate() {
  ctx.clearRect(0, 0, 400, 400);

  particles.forEach(p => {
    p.move();
    p.draw(ctx);
  });

  // Pomalá rotace vesmírného okénka
  angle += 0.05;
  spaceWindow.style.transform = `rotateY(${angle}deg)`;

  requestAnimationFrame(animate);
}

animate();
