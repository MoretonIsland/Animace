<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Animace 3</title>
  <style>

body {
  margin: 0;
  background: radial-gradient(ellipse at center, #000010 0%, #000000 100%);
  height: 100vh; /* přidá výšku a stránka se bude rolovat */
}

    .planet-container {
  position: relative;
  width: 250px;
  height: 250px;
  margin: 150px auto; 
  border-radius: 50%;
  background: radial-gradient(circle at 40% 40%, #d2b48c, #8b7355);
  box-shadow: 0 0 60px #c2a168, inset 0 0 40px #b79d78;
  animation: rotatePlanet 60s linear infinite;
  overflow: hidden;
  z-index: 2;
}



    @keyframes rotatePlanet {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(360deg);
      }
    }

    .particle {
      position: absolute;
      border-radius: 50%;
    }

    .space-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      z-index: 1;
      pointer-events: none;
    }

    .space-particle {
      position: absolute;
      width: 3px;
      height: 3px;
      border-radius: 50%;
      background: white;
      opacity: 0.5;
      animation: floatParticle 10s infinite ease-in-out;
    }

    @keyframes floatParticle {
      0% {
        transform: translate(0, 0) scale(1);
        opacity: 0.3;
      }
      50% {
        transform: translate(20px, -30px) scale(1.2);
        opacity: 0.8;
      }
      100% {
        transform: translate(-10px, 20px) scale(1);
        opacity: 0.3;
      }
    }

     .footer-divider {
    height: 40px;
    background-color: white;
    margin-bottom: 0px;
} 
  </style>
</head>
<body>

<?php include 'header.php'; ?>
<br><br>
<div class="space-container" id="space"></div>

<div class="planet-container" id="planet">
  <!-- statické skvrny uvnitř planety -->
</div>

<script>
  const planet = document.getElementById("planet");

  // Přidání statických skvrn na povrch planety
  const particleCount = 35;
  const colors = [
    'rgba(100, 80, 60, 0.4)',   // hnědá
    'rgba(90, 90, 90, 0.4)',    // šedá
    'rgba(60, 50, 40, 0.5)',    // tmavě hnědá
    'rgba(110, 110, 110, 0.3)'  // světlá šedá
  ];

  for (let i = 0; i < particleCount; i++) {
    const p = document.createElement("div");
    p.classList.add("particle");

    const size = 6 + Math.random() * 12;
    p.style.width = `${size}px`;
    p.style.height = `${size}px`;

    p.style.left = `${Math.random() * (300 - size)}px`;
    p.style.top = `${Math.random() * (300 - size)}px`;

    const color = colors[Math.floor(Math.random() * colors.length)];
    p.style.background = color;
    p.style.boxShadow = `0 0 6px ${color}`;

    planet.appendChild(p);
  }

  // Přidání smetí kolem planety
  const space = document.getElementById("space");
  const spaceParticleCount = 80;

  for (let i = 0; i < spaceParticleCount; i++) {
    const p = document.createElement("div");
    p.classList.add("space-particle");

    p.style.left = `${Math.random() * window.innerWidth}px`;
    p.style.top = `${Math.random() * window.innerHeight}px`;

    p.style.animationDuration = `${8 + Math.random() * 10}s`;
    p.style.backgroundColor = `hsl(${Math.floor(Math.random() * 360)}, 100%, 80%)`;
    p.style.opacity = 0.3 + Math.random() * 0.5;

    space.appendChild(p);
  }
</script>
 <div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>