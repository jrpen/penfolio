<?php
if (isset($_POST['delete'])) {
    $sql = "DELETE FROM gebruikers WHERE gebruikersnaam=:gebruikersnaam";
    $delete = $conn->prepare($sql);
    $delete->bindParam(':gebruikersnaam', $_SESSION["gebruiker"]);

    $delete->execute();

    session_unset();
    session_destroy();
    
    echo '<script>
    window.location.reload(true);
    </script>';
}
?>