<?php
if (isset($_POST['s-wachtwoord'])) {
    $sql = "UPDATE gebruikers SET wachtwoord=:wachtwoord WHERE gebruikersnaam=:gebruikersnaam";
    $update = $conn->prepare($sql);
    $update->bindParam(':gebruikersnaam', $get_gn);
    $update->bindParam(':wachtwoord', $update_ww);

    $get_gn = $_SESSION["gebruiker"];
    $update_ww = $_POST['s-wachtwoord'];

    $update->execute();
}
?>