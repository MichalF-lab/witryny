<?php
    if(isset($_COOKIE['nbanklogin']))
        {
            echo 'mysle ze to dziala';
            session_start();
            $_SESSION["user"] = $_COOKIE['nbanklogin'];
            header("location: ..\guest\index.php");
            exit;
        }
?>