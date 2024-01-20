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

    .body-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        width: 1875px;
        margin-left: -30px;
    }

    .container {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 0;
    }

    .container .box {
        position: relative;
        width: 400px;
        height: 480px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: 20px 30px;
        transition: 0.5s;
        border: 1px solid black;
        box-shadow: 5px 10px;
    }

    .container .box:hover {
        transform: translateY(-20px);
    }

    .container .box::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .vlaggen {
        width: 40px;
        height: 30px;
        border: 1px solid black;
    }

    table,
    th {
        border-bottom: 1px solid black;
        border-top: 1px solid black;
    }

    .styled-table {
        border-collapse: collapse;
        margin: 10px 0;
        font-size: 0.9em;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        height: 88%;
    }

    .styled-table thead tr {
        background-color: brown;
        color: #ffffff;
        text-align: left;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 5px solid brown;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: lightgray;
    }
    </style>
</head>

<body>
    <h1 class="hoofdtekst">Standen WK 2022</h1>
    <div class="body-container">
        <div class="container">
            <div class="box">
                <div class="content">
                    <h1>Groep A</h1>
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Land</th>
                                <th>GS</th>
                                <th>W</th>
                                <th>G</th>
                                <th>V</th>
                                <th>DS</th>
                                <th>PT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="vlaggen/vlag_of_qatar.png" alt="vlaggen" class="vlaggen">&ensp;Qatar</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/vlag_of_ecuador.png" alt="vlaggen" class="vlaggen">&ensp;Ecuador
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/vlag_of_senegal.png" alt="vlaggen" class="vlaggen">&ensp;Senegal
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/vlag_of_nederland.png" alt="vlaggen"
                                        class="vlaggen">&ensp;Nederland
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="box">
                <div class="content">
                    <h1>Groep B</h1>
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Land</th>
                                <th>GS</th>
                                <th>W</th>
                                <th>G</th>
                                <th>V</th>
                                <th>DS</th>
                                <th>PT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="vlaggen/engeland.png" alt="vlaggen" class="vlaggen">&ensp;Engeland</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/iran.png" alt="vlaggen" class="vlaggen">&ensp;Iran
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/verenigde-staten.png" alt="vlaggen"
                                        class="vlaggen">&ensp;verenigde Staten
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/wales.png" alt="vlaggen" class="vlaggen">&ensp;Wales
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <h1>Groep C</h1>
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Land</th>
                                <th>GS</th>
                                <th>W</th>
                                <th>G</th>
                                <th>V</th>
                                <th>DS</th>
                                <th>PT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="vlaggen/argentinië.png" alt="vlaggen" class="vlaggen">&ensp;Argentinië
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/saoedi-arabië.png" alt="vlaggen"
                                        class="vlaggen">&ensp;Saudi-Arabië
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/mexico.svg" alt="vlaggen" class="vlaggen">&ensp;Mexico
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/polen.png" alt="vlaggen" class="vlaggen">&ensp;Polen
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <h1>Groep D</h1>
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Land</th>
                                <th>GS</th>
                                <th>W</th>
                                <th>G</th>
                                <th>V</th>
                                <th>DS</th>
                                <th>PT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="vlaggen/frankrijk.png" alt="vlaggen" class="vlaggen">&ensp;frankrijk</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/australië.png" alt="vlaggen" class="vlaggen">&ensp;Australië
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/denemarken.png" alt="vlaggen" class="vlaggen">&ensp;Denemarken
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/tunesië.png" alt="vlaggen" class="vlaggen">&ensp;Tunesië
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <h1>Groep E</h1>
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Land</th>
                                <th>GS</th>
                                <th>W</th>
                                <th>G</th>
                                <th>V</th>
                                <th>DS</th>
                                <th>PT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="vlaggen/spanje.png" alt="vlaggen" class="vlaggen">&ensp;Spanje</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/costa-rica.png" alt="vlaggen" class="vlaggen">&ensp;Costa Rica
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/Duitsland.png" alt="vlaggen" class="vlaggen">&ensp;Duitsland
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/japan.png" alt="vlaggen" class="vlaggen">&ensp;Japan
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <h1>Groep F</h1>
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Land</th>
                                <th>GS</th>
                                <th>W</th>
                                <th>G</th>
                                <th>V</th>
                                <th>DS</th>
                                <th>PT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="vlaggen/belgië.png" alt="vlaggen" class="vlaggen">&ensp;België</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/canada.png" alt="vlaggen" class="vlaggen">&ensp;Canada
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/marokko.png" alt="vlaggen" class="vlaggen">&ensp;Marokko
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/kroatië.png" alt="vlaggen" class="vlaggen">&ensp;Kroatië
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <h1>Groep G</h1>
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Land</th>
                                <th>GS</th>
                                <th>W</th>
                                <th>G</th>
                                <th>V</th>
                                <th>DS</th>
                                <th>PT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="vlaggen/brazilië.png" alt="vlaggen" class="vlaggen">&ensp;Brazilië</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/servië.png" alt="vlaggen" class="vlaggen">&ensp;Servië
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/zwitserland.png" alt="vlaggen" class="vlaggen">&ensp;Zwitserland
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/kameroen.png" alt="vlaggen" class="vlaggen">&ensp;Kameroen
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <h1>Groep H</h1>
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Land</th>
                                <th>GS</th>
                                <th>W</th>
                                <th>G</th>
                                <th>V</th>
                                <th>DS</th>
                                <th>PT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="vlaggen/portugal.png" alt="vlaggen" class="vlaggen">&ensp;Portugal</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/ghana.png" alt="vlaggen" class="vlaggen">&ensp;Ghana
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/uruguay.png" alt="vlaggen" class="vlaggen">&ensp;Uruguay
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><img src="vlaggen/zuid-korea.png" alt="vlaggen" class="vlaggen">&ensp;Zuid-Korea
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>