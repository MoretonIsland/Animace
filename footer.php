<footer>
    <!-- Načtení fontu Open Sans (pokud už není v <head>, může být i zde) -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <style>
        footer {
            width: 100%;
            background-color: #414f9e;
            color: white;
            text-align: center;
            padding: 5px;
            margin-top: auto;
            font-family: 'Open Sans', sans-serif;
            line-height: 1.5; /* mezera mezi řádky */
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px 10px 20px; /* nahoře vpravo dole vlevo */
        }

        .footer-content {
            margin: 0 20px;
            text-align: left;
        }

        .footer-content h3 {
            margin-top: 12px;
            margin-bottom: 5px;
        }

        .footer-content p {
            margin: 0;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
        }

        .contact-info span {
            display: inline-block;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            margin-bottom: 5px;
        }

        ul li a {
            color: white;
            text-decoration: none;
        }

        .animace {
            color: #f6f6f6;
        }

        .footer-css,
        .footer-js,
        .footer-svg {
            color: #f6f6f6;
            margin: 0;
            margin-right: 10px;
        }

        /* Mezera mezi span v kontaktech */
        .contact-info span {
            margin-bottom: 6px;
        }

        /* Footer copyright - font a line-height */
        .copyright p {
            font-family: 'Open Sans', sans-serif;
            line-height: 1.5;
            margin: 10px 0 0 0;
        }
    </style>

    <div class="footer-container">
        <div class="footer-content">
            <h3>Kontakt</h3>
            <div class="contact-info">
                <span>Email: info@weatherapp.com</span>
                <span>Telefon: +123 456 789</span>
            </div>
        </div>
        <div class="footer-content">
            <h3><span class="animace">Animace</span></h3>
            <p class="footer-css">CSS</p>
            <p class="footer-js">JavaScript</p>
            <p class="footer-svg">SVG</p>
        </div>
    </div>

    <div class="copyright">
        <p>&copy; 2024 Website/Animace</p>
    </div>
</footer>