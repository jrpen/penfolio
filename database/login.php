<?php
if (isset($_POST['i-naam']) && isset($_POST['i-wachtwoord'])) {
    $sql = "SELECT * FROM gebruikers WHERE gebruikersnaam=:gebruikersnaam AND wachtwoord=:wachtwoord";
    $login = $conn->prepare($sql);
    $login->bindParam(":gebruikersnaam", $inloggen_gebruikersnaam);
    $login->bindParam(":wachtwoord", $inloggen_wachtwoord);

    $inloggen_gebruikersnaam = $_POST['i-naam'];
    $inloggen_wachtwoord = $_POST['i-wachtwoord'];

    $login->execute();

    $inloggen_countGebruikers = $login->rowCount();

    if ($inloggen_countGebruikers == 1) {
        $_SESSION["gebruiker"] = $_POST['i-naam'];
    }
}
?>