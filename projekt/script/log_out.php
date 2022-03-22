<?php
    session_start();
    setcookie('nbanklogin', $_SESSION['user'], time() - 1, "/");
    session_destroy();
    header("location: ..\log_in\index.php");
?>