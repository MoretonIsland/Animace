<!-- floating-back-button.php -->
<style>
    /* 
     * Plovoucí tlačítko "Zpět" - umístěné pod tlačítkem "Domů".
     * Vrací uživatele o jednu stránku zpět v historii prohlížeče.
     */
    .floating-back {
        position: fixed;               /* Fixace při scrollování */
        top: calc(50% + 60px);         /* O 60px níže než tlačítko Domů */
        left: 20px;                    /* Stejná vzdálenost od levého okraje */
        background-color: #555;        /* Barva pozadí */
        color: white;                  /* Barva textu */
        padding: 12px 24px;            /* Stejné rozměry jako Domů */
        text-decoration: none;         /* Bez podtržení */
        font-size: 18px;               /* Velikost písma */
        font-family: 'Open Sans', sans-serif; /* Webový font */
        transition: background-color 0.3s ease; /* Hover efekt */
        width: 48px;                 /* Stejná šířka */
        text-align: center;           /* Zarovnat text na střed */
        box-shadow: 0 2px 5px rgba(0,0,0,0.3);  /* Jemný stín */
        display: inline-block;         /* Korektní vykreslení */
        border-radius: 0px;            /* Ostré rohy */
        z-index: 9999; /* Zajistí, že je tlačítko navrchu */
    }

    .floating-back:hover {
        background-color: rgb(100, 100, 100);
    }
</style>

<!-- HTML tlačítko Zpět -->
<a href="javascript:history.back()" class="floating-back">Zpět</a>
