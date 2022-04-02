<?php
    require_once('../script/connect.php');
    $sql =  "SELECT uzytkownicy.hasło as pas FROM uzytkownicy WHERE uzytkownicy.login = '$_POST[user]'";
    $result = $connect->query($sql);
    while($wiersz = $result->fetch_assoc())
    {
        $klient = $wiersz['pas'];
        echo "<br>";
        $server = sha1($_POST['pass']);
        #$server = password_hash($_POST['pass'], PASSWORD_ARGON2ID);
        $y = (trim($klient));
        $x = (trim($server));
        if($y == $x)
        {
            session_start();
            $_SESSION["user"] = $_POST['user'];
            if($_POST['remember_me'] == true)
            {
                setcookie('nbanklogin', $_POST['user'], time() + (86400 * 14), "/");
            }
            $sql = "SELECT uzytkownicy.rodzaj_konta as upr FROM uzytkownicy WHERE uzytkownicy.login = $_SESSION[user]";
            $result3 = $connect->query($sql);
            $wiersz3 = $result3->fetch_assoc();
            if($wiersz3['upr'] == "client")
            {
                header("location: ..\guest\index.php");
                exit;
            }
            if($wiersz3['upr'] == "support")
            {
                header("location: ..\support\index.php");
                exit;
            }
            if($wiersz3['upr'] == "moderator")
            {
                header("location: ..\moderator\index.php");
                exit;
            }
            if($wiersz3['upr'] == "admin")
            {
                header("location: ..\admin\index.php");
                exit;
            }
        }
    }
    header("location: ..\log_in\index.php?error=5");    
?>