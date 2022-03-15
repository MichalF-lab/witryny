<?php
    session_start();
    require_once('../script/connect.php');
    $sql =  "SELECT Imie, Nazwisko FROM uzytkownicy WHERE login = $_SESSION[user]";
    $result = $connect->query($sql);
    while($wiersz = $result->fetch_assoc())
    {
    echo $wiersz['Imie']." ".$wiersz['Nazwisko'];
}
?>