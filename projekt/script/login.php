<?php
    require_once('../script/connect.php');
    $sql =  "SELECT uzytkownicy.hasło as pas FROM uzytkownicy WHERE uzytkownicy.login = '$_POST[user]'";
    $result = $connect->query($sql);
    while($wiersz = $result->fetch_assoc())
    {
        $klient = $wiersz['pas'];
        echo "<br>";
        $server = sha1($_POST['pass']);
        $a = 80;
        echo strlen ($klient)." ";
        echo strlen ($server);
        #echo [$a];
        if($klient == $server)
        {
            $_SESSION['user'] = $_POST['user'];
            header("location: ..\guest\index.php");
            exit;
        }
    }
    #eader("location: ..\log_in\index.php");    
?>