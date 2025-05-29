<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Animace 5</title>
    <style>
        .image-row {
            display: flex;
            justify-content: center;
            gap: 40px; /* mezery mezi obrázky */
            padding: 0 50px; /* mezery od krajů stránky */
            margin-bottom: 40px;
        }

        .image-container {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px; /* pevná velikost kontejneru */
        }

        .image-container img {
            width: 100%; /* zabere 100 % kontejneru */
            height: auto;
            display: block;
            cursor: zoom-in;
        }

        /* Styl lupy */
        .img-magnifier-glass {
            position: absolute;
            border: 3px solid #000;
            border-radius: 50%;
            cursor: none;
            /* Velikost lupy */
            width: 160px;
            height: 160px;
            box-shadow: 0 0 8px rgba(0,0,0,0.5);
            display: none; /* skrytá, dokud není aktivní */
            z-index: 10;
            background-repeat: no-repeat;
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
<br /><br />

<div class="image-row">
    <div class="image-container">
        <img id="img1" src="Cup1.jpg" alt="Cup1" />
    </div>
    <div class="image-container">
        <img id="img2" src="Cup2.jpg" alt="Cup2" />
    </div>
    <div class="image-container">
        <img id="img3" src="Cup3.jpg" alt="Cup3" />
    </div>
</div>

<div class="image-row">
    <div class="image-container">
        <img id="img4" src="Cup4.jpg" alt="Cup4" />
    </div>
    <div class="image-container">
        <img id="img5" src="Cup5.jpg" alt="Cup5" />
    </div>
    <div class="image-container">
        <img id="img6" src="Cup6.jpg" alt="Cup6" />
    </div>
</div>

<div class="image-row">
    <div class="image-container">
        <img id="img7" src="Cup7.jpg" alt="Cup7" />
    </div>
    <div class="image-container">
        <img id="img8" src="Cup8.jpg" alt="Cup8" />
    </div>
    <div class="image-container">
        <img id="img9" src="Obr57.jpg" alt="Cup9" />
    </div>
</div>

<script>
// Lupa podle w3schools, upravená pro více obrázků
function magnify(img, zoom) {
    var glass, w, h, bw;
    // vytvoříme lupa element
    glass = document.createElement("DIV");
    glass.setAttribute("class", "img-magnifier-glass");

    // vložíme lupa před obrázek
    img.parentElement.insertBefore(glass, img);

    // nastavíme pozadí lupy na zdroj obrázku zvětšený zoomem
    glass.style.backgroundImage = "url('" + img.src + "')";
    glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
    bw = 3;
    w = glass.offsetWidth / 2;
    h = glass.offsetHeight / 2;

    // když myš vstoupí na obrázek, zobrazíme lupu
    img.addEventListener("mouseenter", function() {
        glass.style.display = "block";
    });

    // když myš odejde, skryjeme lupu
    img.addEventListener("mouseleave", function() {
        glass.style.display = "none";
    });

    // pohyb lupou při pohybu myši nad obrázkem nebo lupou
    glass.addEventListener("mousemove", moveMagnifier);
    img.addEventListener("mousemove", moveMagnifier);
    glass.addEventListener("touchmove", moveMagnifier);
    img.addEventListener("touchmove", moveMagnifier);

    function moveMagnifier(e) {
        var pos, x, y;
        e.preventDefault();

        pos = getCursorPos(e);
        x = pos.x;
        y = pos.y;

        // omezení lupy uvnitř obrázku
        if (x > img.width - (w / zoom)) { x = img.width - (w / zoom); }
        if (x < w / zoom) { x = w / zoom; }
        if (y > img.height - (h / zoom)) { y = img.height - (h / zoom); }
        if (y < h / zoom) { y = h / zoom; }

        // umístění lupy
        glass.style.left = (x - w) + "px";
        glass.style.top = (y - h) + "px";

        // nastavení pozadí lupy (část obrázku, kterou lupa "ukazuje")
        glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
    }

    function getCursorPos(e) {
        var a, x = 0, y = 0;
        e = e || window.event;
        a = img.getBoundingClientRect();

        // Souřadnice kurzoru vůči obrázku
        x = e.pageX - a.left - window.pageXOffset;
        y = e.pageY - a.top - window.pageYOffset;
        return { x: x, y: y };
    }
}

// Zapnout lupu pro všechny obrázky ve stránce
window.addEventListener("load", function() {
    var imgs = document.querySelectorAll(".image-container img");
    imgs.forEach(function(img) {
        magnify(img, 2); // zoom 2x
    });
});
</script>

<div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>