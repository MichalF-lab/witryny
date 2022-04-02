<?php
    require_once('../script/connect.php');
    $sql =  "UPDATE uzytkownicy SET uzytkownicy.ile_nieprzeczytanych = 0 WHERE uzytkownicy.login = $_SESSION[user]";
    $result = $connect->query($sql);
?>