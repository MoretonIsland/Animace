<!-- floating-menu-button.php -->
<style>
    /* 
     * Plovoucí tlačítko "Domů" - umístěné v levé části obrazovky, přibližně ve středu.
     * Slouží k návratu na hlavní stránku (index.php).
     */
    .floating-home {
        position: fixed;               /* Fixuje tlačítko při scrollování */
        top: 50%;                      /* Umístění do středu obrazovky (svisle) */
        left: 20px;                    /* Vzdálenost od levého okraje */
        background-color: #333;        /* Barva pozadí */
        color: white;                 /* Barva textu */
        padding: 12px 24px;            /* Vnitřní odsazení pro stejnou velikost jako u Zpět */
        text-decoration: none;         /* Bez podtržení */
        font-size: 18px;               /* Velikost písma */
        font-family: 'Open Sans', sans-serif; /* Webový font */
        transition: background-color 0.3s ease; /* Efekt při hoveru */
        width: 48px;                 /* Stejná šířka */
        text-align: center;           /* Zarovnat text na střed */
        box-shadow: 0 2px 5px rgba(0,0,0,0.3);  /* Jemný stín */
        display: inline-block;         /* Pro správné zobrazení */
        border-radius: 0px;            /* Ostré rohy */
        z-index: 9999; /* zajistí, že je tlačítko navrchu */
    }

    .floating-home:hover {
        background-color: rgb(168, 86, 4);
    }
</style>

<!-- HTML tlačítko Domů -->
<a href="index.php" class="floating-home">Domů</a>
