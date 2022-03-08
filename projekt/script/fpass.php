<?php
    require_once('../script/connect.php');
    $sql =  "SELECT uzytkownicy.hasło as pas FROM uzytkownicy WHERE uzytkownicy.login = '$_POST[user]'";
    $result = $connect->query($sql);
    while($wiersz = $result->fetch_assoc())
    {
        echo $wiersz['pas'];
        echo "<br>";
        echo sha1($_POST['pass']);
        if(sha1($_POST['pass']) == $wiersz['pas'])
        {
            $_SESSION['user'] = $_POST['user'];
            #header("location: ..\guest\index.php");
            exit;
        }
    }
    #header("location: ..\log_in\index.php");    
?>