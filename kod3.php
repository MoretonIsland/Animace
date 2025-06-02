<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Kód1</title>

 <!-- Odkaz na Open Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Highlight.js CSS styl (vs - Visual Studio styl) -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/vs.min.css">
    <style>
       body {
    background-color: #ffffff;
    font-family: 'Open Sans', sans-serif; /* Nový font */
    color: #555; /* Lepší kontrastní barva textu */
    padding: 20px;
    line-height: 1.6; /* Přidáno řádkování pro lepší čitelnost */
}

h2 {
    font-family: 'Open Sans', sans-serif;
    color: #414f9e; /* Modrá barva nadpisu odpovídající stylu animace pozadí */
    margin-bottom: 15px; /* Menší mezera pod nadpisem */
}


pre {
    font-size: 18px; /* velikost písma pro kód */
    padding: 20px;
    border: 1px solid #ccc;
    overflow-x: auto;
    border-radius: 5px;
    font-family: 'Courier New', monospace;
    background-color: #f9f9f9;
}

        a {
    display: inline-block;
    margin-bottom: 20px;
    text-decoration: none;
    font-family: 'Open Sans', sans-serif;
    color: white; 
    background-color: #414f9e; 
    padding: 8px 12px;
    border-radius: 0px;
    transition: background-color 0.3s ease;
}

a:hover {
    background-color: #363f88; 
}

.explanation {  
    font-family: 'Open Sans', sans-serif;
    font-size: 18px;  
    color: #555;  
    line-height: 1.6;  
}

    </style>
    <!-- Highlight.js knihovna -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
</head>
<body>

<a href="KnihovnaThree.php">← Zpět</a>

<h2>JavaScript</h2>

<pre><code class="language-javascript">

 src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js">


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
</code></pre>

<br><br>

</body>
</html>
