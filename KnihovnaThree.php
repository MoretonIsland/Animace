<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSAP Animace</title>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <style>

        body {
            margin: 0; 
            font-family: 'Open Sans', sans-serif; 
        }

        h1 {
            text-align: center; 
            color: #414f9e; 
        }
       
        p {
            margin-left: 150px; /* Odsazení zleva */
            margin-right: 50px; /* Odsazení zprava */
            font-size: 18px; /* Velikost písma */
            line-height: 1.6; /* Řádkování textu */
            color: #555; /* Šedá barva textu */
        }

       /* Styl tlačítka */
        .button-container a button {
            padding: 10px 20px; /* Velikost vnitřního odsazení tlačítka */
            font-size: 16px; 
            background-color: #414f9e; /* barva pozadí */
            color: white; 
            border: none; /* Odstranění okraje */
            border-radius: 0; /* Hranaté tlačítko */
            cursor: pointer; /* Změna kurzoru na ručičku při přejetí myší */
        }

          /* Kontejner pro tlačítko */
        .button-container {
            margin-left: 150px;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        
           .footer-divider {
            height: 20px;
            background-color: transparent; 
            margin-bottom: 40px; 
        }

    </style>
</head>
<body>

 <?php include 'header.php'; ?>

  <h1>3D animace s využitím knihovny Three.js</h1>

<p>
    Na stránce je zobrazena webová animace rotující krychle. 
    Animace je vytvořena pomocí knihovny Three.js, která slouží k tvorbě 3D grafiky 
    ve webovém prostředí.
</p>



   
 <div class="button-container">
        <a href="kod3.php">
            <button>JavaScript</button>
        </a>
    </div>

    <div id="three-container" style="position: fixed; top: 0; left: 0; z-index: -1; width: 100vw; height: 100vh;"></div>

    <script>
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth/window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer();
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.body.appendChild(renderer.domElement);

        const geometry = new THREE.BoxGeometry();
        const material = new THREE.MeshBasicMaterial({ color: 0x00ff00 });
        const cube = new THREE.Mesh(geometry, material);
        scene.add(cube);
        camera.position.z = 5;

        function animate() {
            requestAnimationFrame(animate);
            cube.rotation.x += 0.01;
            cube.rotation.y += 0.01;
            renderer.render(scene, camera);
        }
        animate();
    </script>

<div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>

</body>
</html>
