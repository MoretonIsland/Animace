<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 20px;
            padding: 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: none;
        }

        li {
            float: left;
        }

        li a {
            display: inline-block;
            color: #0054a8;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            width: 120px;
        }

        li a:hover {
            background-color: white;
            color: #0054a8;
            text-decoration: underline;
        }

        /* Speciálně pro tlačítko Home */
        li:first-child a {
            background: none;
            font-size: 18px;
            color: #0054a8;
            padding: 14px 20px;
        }

        li:first-child a:hover {
            background-color: white;
            color: black;
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <ul>
        <!-- Tlačítko Menu (Home) -->
        <li><a href="index.php">Home</a></li>
    </ul>
</div>

</body>
</html>
