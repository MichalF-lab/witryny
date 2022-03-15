<?php
    require_once('../script/connect.php');
    $sql =  "SELECT uzytkownicy.hasło as pas FROM uzytkownicy WHERE uzytkownicy.login = '$_POST[user]'";
    $result = $connect->query($sql);
    while($wiersz = $result->fetch_assoc())
    {
        $klient = $wiersz['pas'];
        echo "<br>";
        $server = sha1($_POST['pass']);
        $y = (trim($klient));
        $x = (trim($server));
        if($y == $x)
        {
            session_start();
            $_SESSION["user"] = $_POST['user'];
            header("location: ..\guest\index.php");
            exit;
        }
    }
    header("location: ..\log_in\index.php");    
?>