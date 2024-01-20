<?php
include 'php_relates/top_bar.php';
// gemaakt door donny
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index_style.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <title>
        hoofd pagina
    </title>
</head>

<body>
    <header class="title">
        <H1>Het wk in qatar!</H1>
        <p>hier vind u informatie over al onze paginas over het wk in qatar van 2022!</p>
    </header>
    <div class="all_pages">
        <div class="page speelschema">
            <a href="speelschema.php" class="link"> click hier om naar het speelschema te gaan!</a>
            <p> op het speelschema zie je een overzichtelijk schema met vier lagen: 8efinale, kwartfinale, halve finale en finale. Ook bevat het landnaam, landvlag (afbeelding), datum en tijd van de wedstrijden van deze wedstrijden. </p>
        </div>

        <div class="page Spelers">
            <a href="spelers.php" class="link"> click hier om naar de spelers pagina te gaan!</a>
            <p> op deze pagina vind je informatie over spelers van een land. je zult vinden een foto van de speler, naam, positie in het veld (aanvaller, verdediger etc), landvlag (afb.) , landnaam.</p>
        </div>

        <div class="page standen">
            <a href="standen.php" class="link"> click hier om naar de standen pagina te gaan!</a>
            <p> een tabel met daarinper groep:Landnaam en landvlag, Aantal gespeeld, Aantal gewonnen, Aantal gelijkspel, Aantal verloren, Doelsaldo en de Totale punten van een land</p>

        </div>

        <div class="page WK_winnaars">
            <a href="winnaars.php" class="link"> click hier om naar de winnaars pagina te gaan!</a>
            <p> een tabel met daarin de landen die al eerder het wk gewonnen hebben, vanaf 1930 t/m 2018. Hierin komt: het jaar, landnaam, landvlag en de beker. </p>

        </div>

        <div class="page stadions">
            <a href="stadions.php" class="link"> click hier om naar de stadions pagina gaan!</a>
            <p> Maak een pagina met informatie over de 8 stadions in Qatar, met in elk geval: afbeelding, naam, plaats, capaciteit.</p>

        </div>
    </div>

    <div>
        <img src="/wk/img/Wk_header.png" alt="header" class='header' width="100%">
    </div>
    <?php 
    include 'php_relates/footer.php';
    ?>

</body>

</html>