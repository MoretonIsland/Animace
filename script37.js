const canvas = document.querySelector("#canvas");
const ctx = canvas.getContext("2d");

canvas.width = window.innerWidth;
canvas.height = document.querySelector(".container").clientHeight;

window.addEventListener("resize", () => {
  canvas.width = window.innerWidth;
  canvas.height = document.querySelector(".container").clientHeight;
});

class Element {
  constructor() {
    this.x = Math.random() * canvas.width;
    this.y = 0;
    this.size = Math.random() * 15 + 6;

    // Výběr ze 4 základních barev s neprůhledností 1
    const baseColors = [
      "rgba(255, 0, 0, 1)",     // Červená
      "rgba(0, 255, 0, 1)",     // Zelená
      "rgba(0, 0, 255, 1)",     // Modrá
      "rgba(255, 255, 0, 1)"    // Žlutá
    ];
    this.color = baseColors[Math.floor(Math.random() * baseColors.length)];

    this.vx = Math.random() * 5 - 1;
    this.vy = 5;
    this.gravity = 0.05;
    this.damping = 0.3;
    this.traction = 1;
    this.resting = false;
    this.shouldRemove = false;
  }

  update() {
    if (!this.resting) {
      this.vy += this.gravity;
      this.x += this.vx;
      this.y += this.vy;

      if (this.x + this.size >= canvas.width || this.x - this.size <= 0) {
        this.vx = -this.vx * this.damping;
      }

      if (this.y + this.size >= canvas.height) {
        this.y = canvas.height - this.size;
        this.vy = -this.vy * this.damping;
        this.vx *= this.traction;

        if (Math.abs(this.vy) < 0.1) {
          this.vy = 0;
          this.vx = 0;
          this.resting = true;

          setTimeout(() => {
            this.shouldRemove = true;
          }, 5000);
        }
      }
    }
  }

  draw() {
    ctx.beginPath();
    ctx.ellipse(this.x, this.y, this.size * 1.2, this.size * 0.8, 0, 0, Math.PI * 2);
    ctx.fillStyle = this.color;
    ctx.fill();
    ctx.closePath();
  }
}

const elements = [];
let frame = 0;

function handleElements() {
  for (let i = elements.length - 1; i >= 0; i--) {
    elements[i].update();
    elements[i].draw();

    if (elements[i].shouldRemove) {
      elements.splice(i, 1);
    }
  }

  if (frame % 12 === 0) {
    elements.push(new Element());
  }
}

function animate() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  frame++;
  handleElements();
  requestAnimationFrame(animate);
}

animate();
