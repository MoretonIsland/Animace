<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>CSS</title>
    
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
    color: white; /* Bílý text */
    background-color: #414f9e; /* Modrá barva odpovídající nadpisu */
    padding: 8px 12px;
    border-radius: 0px;
    transition: background-color 0.3s ease;
}

a:hover {
    background-color: #363f88; /* Mírně tmavší modrá při najetí myší */
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

<a href="Animace28.php">← Zpět</a>

<h2>CSS</h2>

<pre><code class="language-css">
/* Styl pro celé tělo stránky */
body {  
    margin: 0; /* Odstraní vnější okraje stránky, aby nezačínala s mezerami */
    animation: backgroundAnimation 10s infinite ease-in-out; /* Spouští animaci změny pozadí */
}

/* Definice animace změny barvy pozadí */
@keyframes backgroundAnimation {  
    0% { background-color: rgb(250, 230, 200); } /* Počáteční barva - světle béžová */  
    33% { background-color: rgb(235, 210, 150); } /* Po třetině cyklu - jemná meruňková */  
    66% { background-color: rgb(220, 190, 130); } /* Po dvou třetinách - světle oranžová */  
    100% { background-color: rgb(240, 220, 170); } /* Konec cyklu - krémově broskvová */  
}

</code></pre>

<br><br>

<div class="explanation">
    <strong>ease-in-out:</strong><br>
    ease-in-out znamená, že animace se zpomalí na začátku a na konci, což vytváří plynulý přechod mezi jednotlivými barvami pozadí.
    
    <br><br><strong>jiné možnosti:</strong><br>
    ease-in - Animace začíná pomalu, ale pak se zrychlí.<br>
    ease-out - Animace začíná rychle, ale pak se zpomalí.<br>
    linear - Animace probíhá rovnoměrně po celou dobu, bez zpomalování či zrychlování.
    
    <br><br><strong>příklady:</strong><br>
    animation: backgroundAnimation 10s linear; /* Animace trvá 10 sekund */<br>
    animation: backgroundAnimation 10s ease-in-out; /* Animace trvá 10 sekund */<br>
    animation-iteration-count: 3; /* Animace proběhne třikrát a pak se zastaví */
    
    <br><br><strong>infinite:</strong><br>
    Znamená, že se animace bude neustále opakovat.
</div>

<br><br>

</body>
</html>
