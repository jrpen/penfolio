<!-- Gemaakt door Joran Pen -->
<?php
include 'php_relates/top_bar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: consolas;
    }

    h1 {
        text-align: center;
        margin-top: 10px;
        text-shadow: 1px 1px black;

    }

    .vlaggen {
        width: 40px;
        height: 30px;
        border: 1px solid black;
    }

    .winnaars {
        table-layout: fixed;
        width: 50%;
        margin: auto;
        color: whitesmoke;
        -webkit-text-stroke: 0.8px black;

    }

    .winnaars,
    th,
    td {
        padding: 20px;
    }

    .winnaars thead {
        background-color: brown;
        -webkit-text-stroke: 0px black;
    }

    .winnaars td {
        text-align: center;
        border-right: 3px solid brown;
    }

    .winnaars td:last-of-type {
        border: none;
    }

    .winnaars tbody tr:hover {
        transform: translateY(-10px);
        box-shadow: 1px 1px 3px 3px brown;
    }
    </style>
</head>

<body>
    <h1>Winaars Wk 1930 t/m 2018</h1>
    <table class="winnaars">
        <thead>
            <tr>
                <th>Jaar</th>
                <th>Land</th>
                <th>Beker</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1930</td>
                <td><img src="vlaggen/uruguay.png" alt="vlaggen" class="vlaggen">&ensp;Uruguay</td>
                <td>Jules Rimet-beker</td>
            </tr>
            <tr>
                <td>1934</td>
                <td><img src="vlaggen/italië.png" alt="vlaggen" class="vlaggen">&ensp;Italië</td>
                <td>Jules Rimet-beker</td>
            </tr>
            <tr>
                <td>1938</td>
                <td><img src="vlaggen/italië.png" alt="vlaggen" class="vlaggen">&ensp;Italië</td>
                <td>Jules Rimet-beker</td>
            </tr>
            <tr>
                <td>1950</td>
                <td><img src="vlaggen/uruguay.png" alt="vlaggen" class="vlaggen">&ensp;Uruguay</td>
                <td>Jules Rimet-beker</td>
            </tr>
            <tr>
                <td>1954</td>
                <td><img src="vlaggen/Duitsland.png" alt="vlaggen" class="vlaggen">&ensp;West-Duitsland</td>
                <td>Jules Rimet-beker</td>
            </tr>
            <tr>
                <td>1958</td>
                <td><img src="vlaggen/brazilië.png" alt="vlaggen" class="vlaggen">&ensp;Brazilië</td>
                <td>Jules Rimet-beker</td>
            </tr>
            <tr>
                <td>1962</td>
                <td><img src="vlaggen/brazilië.png" alt="vlaggen" class="vlaggen">&ensp;Brazilië</td>
                <td>Jules Rimet-beker</td>
            </tr>
            <tr>
                <td>1966</td>
                <td><img src="vlaggen/engeland.png" alt="vlaggen" class="vlaggen">&ensp;Engeland</td>
                <td>Jules Rimet-beker</td>
            </tr>
            <tr>
                <td>1970</td>
                <td><img src="vlaggen/brazilië.png" alt="vlaggen" class="vlaggen">&ensp;Brazilië</td>
                <td>Jules Rimet-beker</td>
            </tr>
            <tr>
                <td>1974</td>
                <td><img src="vlaggen/Duitsland.png" alt="vlaggen" class="vlaggen">&ensp;West-Duitsland</td>
                <td>FIFA-wereldbeker</td>
            </tr>
            <tr>
                <td>1978</td>
                <td><img src="vlaggen/argentinië.png" alt="vlaggen" class="vlaggen">&ensp;Argentinië</td>
                <td>FIFA-wereldbeker</td>
            </tr>
            <tr>
                <td>1982</td>
                <td><img src="vlaggen/italië.png" alt="vlaggen" class="vlaggen">&ensp;Italië</td>
                <td>FIFA-wereldbeker</td>
            </tr>
            <tr>
                <td>1986</td>
                <td><img src="vlaggen/argentinië.png" alt="vlaggen" class="vlaggen">&ensp;Argentinië</td>
                <td>FIFA-wereldbeker</td>
            </tr>
            <tr>
                <td>1990</td>
                <td><img src="vlaggen/Duitsland.png" alt="vlaggen" class="vlaggen">&ensp;West-Duitsland</td>
                <td>FIFA-wereldbeker</td>
            </tr>
            <tr>
                <td>1994</td>
                <td><img src="vlaggen/brazilië.png" alt="vlaggen" class="vlaggen">&ensp;Brazilië</td>
                <td>FIFA-wereldbeker</td>
            </tr>
            <tr>
                <td>1998</td>
                <td><img src="vlaggen/frankrijk.png" alt="vlaggen" class="vlaggen">&ensp;Frankrijk</td>
                <td>FIFA-wereldbeker</td>
            </tr>
            <tr>
                <td>2004</td>
                <td><img src="vlaggen/brazilië.png" alt="vlaggen" class="vlaggen">&ensp;Brazilië</td>
                <td>FIFA-wereldbeker</td>
            </tr>
            <tr>
                <td>2006</td>
                <td><img src="vlaggen/italië.png" alt="vlaggen" class="vlaggen">&ensp;Italië</td>
                <td>FIFA-wereldbeker</td>
            </tr>
            <tr>
                <td>2010</td>
                <td><img src="vlaggen/spanje.png" alt="vlaggen" class="vlaggen">&ensp;Spanje</td>
                <td>FIFA-wereldbeker</td>
            </tr>
            <tr>
                <td>2014</td>
                <td><img src="vlaggen/Duitsland.png" alt="vlaggen" class="vlaggen">&ensp;Duitsland</td>
                <td>FIFA-wereldbeker</td>
            </tr>
            <tr>
                <td>2018</td>
                <td><img src="vlaggen/frankrijk.png" alt="vlaggen" class="vlaggen">&ensp;Frankrijk</td>
                <td>FIFA-wereldbeker</td>
            </tr>
        </tbody>
    </table>
</body>

</html>