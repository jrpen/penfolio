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
    html {
        scroll-behavior: smooth;
    }

    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: consolas;
    }

    .Deelnemers_h1 {
        display: flex;
        justify-content: center;
        margin-top: 15px;
        margin-bottom: 5px;
    }

    .Deelnemers {
        display: flex;
        justify-content: center;
        align-items: center;
        border: none;
    }

    .body-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
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
        width: 475px;
        height: 775px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: 20px 30px;
        transition: 0.5s;
        border: 1px solid black;
        box-shadow: 5px 10px;
    }

    td:hover {
        transform: translateY(-3px);
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

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 3px;
        text-align: center;
    }

    .table_spelers tr:nth-child(even) {
        background-color: #dddddd;
    }

    .table_spelers {
        width: 101%;
        height: 50%;
        margin-left: -2px;
    }

    .TL {
        display: flex;
        flex-direction: row;
        margin-bottom: 10px;
        margin-top: 10px;
        margin-left: 5px;
        text-align: center;
        justify-content: center;
    }

    .vlaggen {
        width: 50px;
        height: 50px;
        border: 1px solid black;
    }

    .spelers {
        width: 50px;
        height: 50px;
        border-radius: 25px;
    }

    img[src="work_in_progress.png"] {
        margin-top: 100px;
        width: 450px;
    }

    a {
        color: black;
    }
    </style>
</head>

<body>
    <h1 class="Deelnemers_h1">Deelnemers WK 2022</h1>
    <table class="Deelnemers">
        <tr>
            <td><img src="vlaggen/vlag_of_qatar.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#qatar">Qatar</a>
            </td>
            <td><img src="vlaggen/Duitsland.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#duitsland">Duitsland</a>
            </td>
            <td><img src="vlaggen/denemarken.png" alt="vlaggen" class="vlaggen">&ensp;<a
                    href="#denemarken">Denemarken</a>
            </td>
            <td><img src="vlaggen/brazilië.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#brazilië">Brazilië</a>
            </td>
            <td><img src="vlaggen/belgië.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#belgië">België</a>
            </td>
            <td><img src="vlaggen/frankrijk.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#frankrijk">Frankrijk</a>
            </td>
            <td><img src="vlaggen/kroatië.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#kroatië">Kroatië</a>
            </td>
        </tr>
        <tr>
            <td><img src="vlaggen/spanje.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#spanje">Spanje</a>
            </td>
            <td><img src="vlaggen/servië.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#servië">Servië</a>
            </td>
            <td><img src="vlaggen/engeland.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#engeland">Engeland</a>
            </td>
            <td><img src="vlaggen/zwitserland.png" alt="vlaggen" class="vlaggen">&ensp;<a
                    href="#zwitserland">Zwitserland</a>
            </td>
            <td><img src="vlaggen/vlag_of_nederland.png" alt="vlaggen" class="vlaggen">&ensp;<a
                    href="#nederland">Nederland</a>
            </td>
            <td><img src="vlaggen/argentinië.png" alt="vlaggen" class="vlaggen">&ensp;<a
                    href="#argentinië">Argentinië</a>
            </td>
            <td><img src="vlaggen/iran.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#iran">Iran</a>
            </td>
        </tr>
        <tr>
            <td><img src="vlaggen/zuid-korea.png" alt="vlaggen" class="vlaggen">&ensp;<a
                    href="#zuid-korea">Zuid-Korea</a>
            </td>
            <td><img src="vlaggen/japan.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#japan">Japan</a>
            </td>
            <td><img src="vlaggen/saoedi-arabië.png" alt="vlaggen" class="vlaggen">&ensp;<a
                    href="#saudi-arabië">Saudi-Arabië</a>
            </td>
            <td><img src="vlaggen/vlag_of_ecuador.png" alt="vlaggen" class="vlaggen">&ensp;<a
                    href="#ecuador">Ecuador</a>
            </td>
            <td><img src="vlaggen/uruguay.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#uruguay">Uruguay</a>
            </td>
            <td><img src="vlaggen/canada.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#canada">Canada</a>
            </td>
        </tr>
        <tr>
            <td><img src="vlaggen/ghana.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#ghana">Ghana</a>
            </td>
            <td><img src="vlaggen/vlag_of_senegal.png" alt="vlaggen" class="vlaggen">&ensp;<a
                    href="#senegal">Senegal</a>
            </td>
            <td><img src="vlaggen/portugal.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#portugal">Portugal</a>
            </td>
            <td><img src="vlaggen/polen.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#polen">Polen</a>
            </td>
            <td><img src="vlaggen/marokko.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#marokko">Marokko</a>
            </td>
            <td><img src="vlaggen/tunesië.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#tunesië">Tunesië</a>
            </td>
        </tr>
        <tr>
            <td><img src="vlaggen/kameroen.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#kameroen">Kameroen</a>
            </td>
            <td><img src="vlaggen/mexico.svg" alt="vlaggen" class="vlaggen">&ensp;<a href="#mexico">Mexico</a>
            </td>
            <td><img src="vlaggen/verenigde-staten.png" alt="vlaggen" class="vlaggen">&ensp;<a
                    href="#verenigde-staten">Verenigde
                    Staten</a>
            </td>
            <td><img src="vlaggen/wales.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#wales">Wales</a>
            </td>
            <td><img src="vlaggen/australië.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#australië">Australië</a>
            </td>
            <td><img src="vlaggen/costa-rica.png" alt="vlaggen" class="vlaggen">&ensp;<a href="#costa-rica">Costa
                    Rica</a>
            </td>
        </tr>
        </tr>
    </table>
    <div class="body-container">
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="qatar"></div>
                    <h1 class="TL"><img src="vlaggen/vlag_of_qatar.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Qatar
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="duitsland"></div>
                    <h1 class="TL"><img src="vlaggen/Duitsland.png" alt="vlaggen" class="vlaggen">&ensp;Elftal Duitsland
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="denemarken"></div>
                    <h1 class="TL"><img src="vlaggen/denemarken.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Denemarken
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="brazilië"></div>
                    <h1 class="TL"><img src="vlaggen/brazilië.png" alt="vlaggen" class="vlaggen">&ensp;Elftal Brazilië
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="belgië"></div>
                    <h1 class="TL"><img src="vlaggen/belgië.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        België
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="frankrijk"></div>
                    <h1 class="TL"><img src="vlaggen/frankrijk.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Frankrijk
                    </h1>
                    <table class="table_spelers">
                        <tr>
                            <th>Speler</th>
                            <th>Naam</th>
                            <th>Positie</th>
                            <th>Land</th>
                        </tr>

                        <tr>
                            <td><img src="spelers/Lloris.png" alt="spelers" class="spelers"></td>
                            <td>Hugo Lloris</td>
                            <td>Doelman</td>
                            <td><img src="vlaggen/frankrijk.png" alt="vlaggen" class="vlaggen">&ensp;Frankrijk
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/pavard.png" alt="spelers" class="spelers"></td>
                            <td>Benjamin Pavard</td>
                            <td>verdediger</td>
                            <td><img src="vlaggen/frankrijk.png" alt="vlaggen" class="vlaggen">&ensp;Frankrijk
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/konate.png" alt="spelers" class="spelers"></td>
                            <td>Ibrahima Konaté</td>
                            <td>verdediger</td>
                            <td><img src="vlaggen/frankrijk.png" alt="vlaggen" class="vlaggen">&ensp;Frankrijk
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/kimpembe.png" alt="spelers" class="spelers"></td>
                            <td>Presnel Kimpembe</td>
                            <td>verdediger</td>
                            <td><img src="vlaggen/frankrijk.png" alt="vlaggen" class="vlaggen">&ensp;Frankrijk
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/kounde.png" alt="spelers" class="spelers"></td>
                            <td>Jules Koundé</td>
                            <td>verdediger</td>
                            <td><img src="vlaggen/frankrijk.png" alt="vlaggen" class="vlaggen">&ensp;Frankrijk
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/rabiot.png" alt="spelers" class="spelers"></td>
                            <td>Adrien Rabiot</td>
                            <td>Middenvelder</td>
                            <td><img src="vlaggen/frankrijk.png" alt="vlaggen" class="vlaggen">&ensp;Frankrijk
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/fofana.png" alt="spelers" class="spelers"></td>
                            <td>Youssouf Fofana</td>
                            <td>Middenvelder</td>
                            <td><img src="vlaggen/frankrijk.png" alt="vlaggen" class="vlaggen">&ensp;Frankrijk
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/guendouzi.png" alt="spelers" class="spelers"></td>
                            <td>Mattéo Guendouzi</td>
                            <td>Middenvelder</td>
                            <td><img src="vlaggen/frankrijk.png" alt="vlaggen" class="vlaggen">&ensp;Frankrijk
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/benzema.png" alt="spelers" class="spelers"></td>
                            <td>Karim Benzema</td>
                            <td>Aanvaller</td>
                            <td><img src="vlaggen/frankrijk.png" alt="vlaggen" class="vlaggen">&ensp;Frankrijk
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/griezmann.png" alt="spelers" class="spelers"></td>
                            <td>Antoine Griezmann</td>
                            <td>Aanvaller</td>
                            <td><img src="vlaggen/frankrijk.png" alt="vlaggen" class="vlaggen">&ensp;Frankrijk
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/dembele.png" alt="spelers" class="spelers"></td>
                            <td> Ousmane Dembélé</td>
                            <td>Aanvaller</td>
                            <td><img src="vlaggen/frankrijk.png" alt="vlaggen" class="vlaggen">&ensp;Frankrijk
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="kroatië"></div>
                    <h1 class="TL"><img src="vlaggen/kroatië.png" alt="vlaggen" class="vlaggen">&ensp;Elftal Kroatië
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="spanje"></div>
                    <h1 class="TL"><img src="vlaggen/spanje.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        spanje
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="servië"></div>
                    <h1 class="TL"><img src="vlaggen/servië.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Servië
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="engeland"></div>
                    <h1 class="TL"><img src="vlaggen/engeland.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Engeland
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="zwitserland"></div>
                    <h1 class="TL"><img src="vlaggen/zwitserland.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Zwitserland
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="nederland"></div>
                    <h1 class="TL"><img src="vlaggen/vlag_of_nederland.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Nederland
                    </h1>
                    <table class="table_spelers">
                        <tr>
                            <th>Speler</th>
                            <th>Naam</th>
                            <th>Positie</th>
                            <th>Land</th>
                        </tr>

                        <tr>
                            <td><img src="spelers/Noppert.png" alt="spelers" class="spelers"></td>
                            <td>Andries Noppert</td>
                            <td>Doelman</td>
                            <td><img src="vlaggen/vlag_of_nederland.png" alt="vlaggen" class="vlaggen">&ensp;Nederland
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/Dumfries.png" alt="spelers" class="spelers"></td>
                            <td>Denzel Dumfries</td>
                            <td>verdediger</td>
                            <td><img src="vlaggen/vlag_of_nederland.png" alt="vlaggen" class="vlaggen">&ensp;Nederland
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/Timber.png" alt="spelers" class="spelers"></td>
                            <td>Jurriën Timber</td>
                            <td>verdediger</td>
                            <td><img src="vlaggen/vlag_of_nederland.png" alt="vlaggen" class="vlaggen">&ensp;Nederland
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/DeLigt.png" alt="spelers" class="spelers"></td>
                            <td>Matthijs de Ligt</td>
                            <td>verdediger</td>
                            <td><img src="vlaggen/vlag_of_nederland.png" alt="vlaggen" class="vlaggen">&ensp;Nederland
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/VanDijk.png" alt="spelers" class="spelers"></td>
                            <td>Virgil van Dijk</td>
                            <td>verdediger</td>
                            <td><img src="vlaggen/vlag_of_nederland.png" alt="vlaggen" class="vlaggen">&ensp;Nederland
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/DeJong.png" alt="spelers" class="spelers"></td>
                            <td>Frenkie de Jong</td>
                            <td>Middenvelder</td>
                            <td><img src="vlaggen/vlag_of_nederland.png" alt="vlaggen" class="vlaggen">&ensp;Nederland
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/Berghuis.png" alt="spelers" class="spelers"></td>
                            <td>Steven Berghuis</td>
                            <td>Middenvelder</td>
                            <td><img src="vlaggen/vlag_of_nederland.png" alt="vlaggen" class="vlaggen">&ensp;Nederland
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/Klaassen.png" alt="spelers" class="spelers"></td>
                            <td>Davy Klaassen</td>
                            <td>Middenvelder</td>
                            <td><img src="vlaggen/vlag_of_nederland.png" alt="vlaggen" class="vlaggen">&ensp;Nederland
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/Bergwijn.png" alt="spelers" class="spelers"></td>
                            <td>Steven Bergwijn</td>
                            <td>Aanvaller</td>
                            <td><img src="vlaggen/vlag_of_nederland.png" alt="vlaggen" class="vlaggen">&ensp;Nederland
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/Gakpo.png" alt="spelers" class="spelers"></td>
                            <td>Cody Gakpo</td>
                            <td>Aanvaller</td>
                            <td><img src="vlaggen/vlag_of_nederland.png" alt="vlaggen" class="vlaggen">&ensp;Nederland
                            </td>
                        </tr>

                        <tr>
                            <td><img src="spelers/Depay.png" alt="spelers" class="spelers"></td>
                            <td>Memphis Depay</td>
                            <td>Aanvaller</td>
                            <td><img src="vlaggen/vlag_of_nederland.png" alt="vlaggen" class="vlaggen">&ensp;Nederland
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="argentinië"></div>
                    <h1 class="TL"><img src="vlaggen/argentinië.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Argentinië
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="iran"></div>
                    <h1 class="TL"><img src="vlaggen/iran.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Iran
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="zuid-korea"></div>
                    <h1 class="TL"><img src="vlaggen/zuid-korea.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Zuid-Korea
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="japan"></div>
                    <h1 class="TL"><img src="vlaggen/japan.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Japan
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="saudi-arabië"></div>
                    <h1 class="TL"><img src="vlaggen/saoedi-arabië.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Saudi-Arabië
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="ecuador"></div>
                    <h1 class="TL"><img src="vlaggen/vlag_of_ecuador.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Ecuador
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="uruguay"></div>
                    <h1 class="TL"><img src="vlaggen/uruguay.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Uruguay
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="canada"></div>
                    <h1 class="TL"><img src="vlaggen/canada.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Canada
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="ghana"></div>
                    <h1 class="TL"><img src="vlaggen/ghana.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Ghana
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="senegal"></div>
                    <h1 class="TL"><img src="vlaggen/vlag_of_senegal.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Senegal
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="portugal"></div>
                    <h1 class="TL"><img src="vlaggen/portugal.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Portugal
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="polen"></div>
                    <h1 class="TL"><img src="vlaggen/polen.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Polen
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="marokko"></div>
                    <h1 class="TL"><img src="vlaggen/marokko.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Marokko
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="tunesië"></div>
                    <h1 class="TL"><img src="vlaggen/tunesië.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Tunesië
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="kameroen"></div>
                    <h1 class="TL"><img src="vlaggen/kameroen.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Kameroen
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="mexico"></div>
                    <h1 class="TL"><img src="vlaggen/mexico.svg" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Mexico
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="verenigde-staten"></div>
                    <h1 class="TL"><img src="vlaggen/verenigde-staten.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Verenigde Staten
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="wales"></div>
                    <h1 class="TL"><img src="vlaggen/wales.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Wales
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="australië"></div>
                    <h1 class="TL"><img src="vlaggen/australië.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Australië
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div id="costa-rica"></div>
                    <h1 class="TL"><img src="vlaggen/costa-rica.png" alt="vlaggen" class="vlaggen">&ensp;Elftal
                        Costa Rica
                    </h1>
                    <img src="work_in_progress.png" alt="work_in_progress">
                </div>
            </div>
        </div>

    </div>
</body>

</html>

<?php 
    include 'php_relates/footer.php';
?>