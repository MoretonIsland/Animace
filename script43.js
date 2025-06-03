import * as THREE from 'https://cdn.skypack.dev/three@0.152.2';

const canvas = document.getElementById("background");
const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera(
  75,
  (window.innerWidth * 0.5) / (window.innerHeight * 0.8),
  0.1,
  1000
);
camera.position.z = 5;

const renderer = new THREE.WebGLRenderer({
  canvas: canvas,
  antialias: true
});

function resizeRenderer() {
  const width = window.innerWidth * 0.5;  // 50% šířky obrazovky
  const height = window.innerHeight * 0.8; // 80% výšky obrazovky
  renderer.setSize(width, height);
  camera.aspect = width / height;
  camera.updateProjectionMatrix();
}
resizeRenderer();

window.addEventListener('resize', resizeRenderer);

// Vytvoření roviny (plane)
const geometry = new THREE.PlaneGeometry(10, 10, 50, 50);
const material = new THREE.MeshStandardMaterial({
  color: 0x00ffff,
  side: THREE.DoubleSide,
  wireframe: true
});
const plane = new THREE.Mesh(geometry, material);
scene.add(plane);

// Světlo
const light = new THREE.DirectionalLight(0xffffff, 1);
light.position.set(0, 1, 1).normalize();
scene.add(light);

// Vlnění
function animateWave(time) {
  const position = geometry.attributes.position;
  const count = position.count;

  for (let i = 0; i < count; i++) {
    const x = position.getX(i);
    const y = position.getY(i);
    const waveZ = Math.sin(x * 2 + time / 500) * 0.2 + Math.cos(y * 3 + time / 600) * 0.2;
    position.setZ(i, waveZ);
  }

  position.needsUpdate = true;
}

// Animace
function animate(time) {
  requestAnimationFrame(animate);
  animateWave(time);
  renderer.render(scene, camera);
}
animate();
