<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSAP Animace</title>
    
    <!-- Odkaz na GSAP knihovnu -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/SplitText.min.js"></script>

    <!-- CSS přímo v <head> -->
    <style>
        body {
          height: 100vh;
          overflow: hidden;
          padding: 2rem;
          background: radial-gradient(129% 99% at 112% 85%, rgb(223, 220, 255) 20%, rgb(166, 158, 255) 90%),    
            url('https://assets.codepen.io/16327/noise-e82662fe.png');  
          background-blend-mode: color-dodge;
        }

        .split {
          -webkit-transform: translate3d(0, 0, 0);
          font-size: 24px;
          line-height: 36px;
          color: #dedede;
          margin: 50px auto;
          width: 800px;
          visibility: hidden;
        }

        .split div {
          border-radius: 4px;
          background: #414f9e;
          padding: 0 8px;
          margin: 4px 0;
          -webkit-font-smoothing: antialiased;
          -moz-font-smoothing: antialiased;
          color: var(--color-just-black);
          font-weight: semibold;
          box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }
    </style>
</head>
<body>
    
<div class="split" id="quote">Webové animace CSS JavaScript SVG Three.js Anime GSAP</div>
<div class="split" id="decoys">hover scroll slideshow parallax transition animation 
@keyframes transform setTimeout() setInterval() linear-gradient requestAnimationFrame 
opacity index timeline rotate animation-duration animation-delay animation-iteration-count 
infinite perspective spring effect mousemove mix-blend-mode clip-path hover-effects will-change 
transform-style animation-play-state</div>  
 
    
       <!-- Připojení JS souboru -->
    <script src="script39.js"></script>
<?php include 'floating-menu-button.php'; ?>
<?php include 'floating-back-button.php'; ?>

</body>
</html>
