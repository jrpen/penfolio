<?php
if (isset($_POST['uitloggen'])) {
    session_unset();
    session_destroy();
    
    echo '<script>
    window.location.reload(true);
    </script>';
}
?>