<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Animace 5</title>
  <style>

    .panorama-container {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-bottom: 40px;
}

.panorama-container img {
    width: 100%;
    height: auto;
    display: block;
}


    .image-row {
      display: flex;
      justify-content: center;
      gap: 40px;
      padding: 0 50px;
      margin-bottom: 40px;
    }

    .image-container {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 300px;
    }

    .image-container img {
      width: 100%;
      height: auto;
      display: block;
    }

    .img-zoom-lens {
      position: absolute;
      border: 1px solid #d4d4d4;
      width: 80px;
      height: 80px;
      cursor: crosshair;
    }

    .img-zoom-result {
      border: 1px solid #d4d4d4;
      width: 300px;
      height: 300px;
      margin-top: 10px;
      background-repeat: no-repeat;
    }

    .img-zoom-result {
    image-rendering: crisp-edges;
    image-rendering: -webkit-optimize-contrast;
}

    #resultPanorama {
    display: block;
    margin: 10px auto; /* Automatické zarovnání do středu */
    width: 300px;
    height: 300px;
}


    .footer-divider {
      height: 20px;
      background-color: transparent;
      margin-bottom: 40px;
    }
  </style>
</head>
<body>

<?php include 'header-skaly.php'; ?>
<br><br>

<div class="panorama-container">
    <div class="img-zoom-container">
        <img id="panorama" src="Obr10c.jpg" alt="Panorama">
        <div id="resultPanorama" class="img-zoom-result"></div>
    </div>
</div>

<div class="image-row">
    <div class="image-container">
        <div class="img-zoom-container">
            <img id="img1" src="Obr1c.jpg" alt="Obr1c">
            <div id="result1" class="img-zoom-result"></div>
        </div>
    </div>
    <div class="image-container">
        <div class="img-zoom-container">
            <img id="img2" src="Obr2c.jpg" alt="Obr2c">
            <div id="result2" class="img-zoom-result"></div>
        </div>
    </div>
    <div class="image-container">
        <div class="img-zoom-container">
            <img id="img3" src="Obr3c.jpg" alt="Obr3c">
            <div id="result3" class="img-zoom-result"></div>
        </div>
    </div>
</div>

<div class="image-row">
    <div class="image-container">
        <div class="img-zoom-container">
            <img id="img4" src="Obr4c.jpg" alt="Obr4c">
            <div id="result4" class="img-zoom-result"></div>
        </div>
    </div>
    <div class="image-container">
        <div class="img-zoom-container">
            <img id="img5" src="Obr5c.jpg" alt="Obr5c">
            <div id="result5" class="img-zoom-result"></div>
        </div>
    </div>
    <div class="image-container">
        <div class="img-zoom-container">
            <img id="img6" src="Obr6c.jpg" alt="Obr6c">
            <div id="result6" class="img-zoom-result"></div>
        </div>
    </div>
</div>

<div class="image-row">
    <div class="image-container">
        <div class="img-zoom-container">
            <img id="img7" src="Obr7c.jpg" alt="Obr7c">
            <div id="result7" class="img-zoom-result"></div>
        </div>
    </div>
    <div class="image-container">
        <div class="img-zoom-container">
            <img id="img8" src="Obr8c.jpg" alt="Obr8c">
            <div id="result8" class="img-zoom-result"></div>
        </div>
    </div>
    <div class="image-container">
        <div class="img-zoom-container">
            <img id="img9" src="Obr9c.jpg" alt="Obr9c">
            <div id="result9" class="img-zoom-result"></div>
        </div>
    </div>
</div>

<script>
// Funkce pro zoom obrázků
function imageZoom(imgID, resultID) {
    var img = document.getElementById(imgID);
    var result = document.getElementById(resultID);

    if (!img || !result || img.naturalWidth === 0) {
        console.warn("Obrázek není načten nebo neexistuje: " + imgID);
        return;
    }

    var lens = document.createElement("DIV");
    lens.setAttribute("class", "img-zoom-lens");
    img.parentElement.insertBefore(lens, img);

    var cx = result.offsetWidth / lens.offsetWidth;
    var cy = result.offsetHeight / lens.offsetHeight;

    result.style.backgroundImage = "url('" + img.src + "')";
    result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
    

    lens.addEventListener("mousemove", moveLens);
    img.addEventListener("mousemove", moveLens);
    lens.addEventListener("touchmove", moveLens);
    img.addEventListener("touchmove", moveLens);

    function moveLens(e) {
        e.preventDefault();
        var pos = getCursorPos(e);
        var x = pos.x - (lens.offsetWidth / 2);
        var y = pos.y - (lens.offsetHeight / 2);

        if (x > img.width - lens.offsetWidth) x = img.width - lens.offsetWidth;
        if (x < 0) x = 0;
        if (y > img.height - lens.offsetHeight) y = img.height - lens.offsetHeight;
        if (y < 0) y = 0;

        lens.style.left = x + "px";
        lens.style.top = y + "px";
        result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
    }

    function getCursorPos(e) {
        var a = img.getBoundingClientRect();
        var x = e.pageX - a.left - window.pageXOffset;
        var y = e.pageY - a.top - window.pageYOffset;
        return { x: x, y: y };
    }
}

// Po načtení stránky aktivuje zoom na panoramatický obrázek
window.onload = function() {
    imageZoom("panorama", "resultPanorama");

    // Aktivuje zoom pro galerii obrázků
    for (let i = 1; i <= 9; i++) {
        const img = document.getElementById("img" + i);
        const resultID = "result" + i;

        if (img.complete) {
            imageZoom(img.id, resultID);
        } else {
            img.onload = function () {
                imageZoom(img.id, resultID);
            };
        }
    }
};

</script>

<div class="footer-divider"></div>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>