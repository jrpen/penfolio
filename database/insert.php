<?php
$stmt = $conn->prepare("INSERT INTO gebruikers (gebruikersnaam, wachtwoord)
VALUES (:gebruikersnaam, :wachtwoord)");
$stmt->bindParam(':gebruikersnaam', $gebruikersnaam);
$stmt->bindParam(':wachtwoord', $wachtwoord);

if (isset($_POST['aa-naam']) && isset($_POST['aa-wachtwoord'])) {
    $sql = "SELECT * FROM gebruikers WHERE gebruikersnaam=:gebruikersnaam";
    $gebruikers = $conn->prepare($sql);
    $gebruikers->bindParam(":gebruikersnaam", $aa_gebruikersnaam);

    $aa_gebruikersnaam = $_POST['aa-naam'];

    $gebruikers->execute();

    $countGebruikers = $gebruikers->rowCount();

    if ($countGebruikers != 1) {
        $gebruikersnaam = $_POST['aa-naam'];
        $wachtwoord = $_POST['aa-wachtwoord'];
        $stmt->execute();

        $_SESSION["gebruiker"] = $gebruikersnaam;
    }
}
?>