<?php
    require_once('../script/connect.php');
    session_start();
    $sql =  "SELECT uzytkownicy.pesel as pesel FROM uzytkownicy WHERE uzytkownicy.login = $_SESSION[user]";
    $result = $connect->query($sql);
    $wiersz = $result->fetch_assoc();
    $sql =  "INSERT INTO `czat` (`pesel_klienta`, `autor`, `tresc`, `id`) VALUES ('$_POST[pes]', $wiersz[pesel], '$_POST[message]', NULL); ";
    $result = $connect->query($sql);
    header("location: ../support/index.php?error=14");
    exit;
    
?>