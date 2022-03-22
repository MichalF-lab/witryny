<?php
    require_once('../script/connect.php');
    session_start();
    #sprawdzeniie czy uzytkownikma wystarczająco nakoncie
    $sql = "SELECT rachunek.stan_konta as rst FROM rachunek JOIN uzytkownicy on uzytkownicy.pesel = rachunek.pesel WHERE uzytkownicy.login = $_SESSION[user]" ;
    $result = $connect->query($sql);
    $wiersz = $result->fetch_assoc();
    if($wiersz['rst'] < $_POST['kwota'])
    {
        header("location: ..\guest\index.php?error=3");
        exit;
    }
    #pobieranie pieniędzy z konta
    $sql = "UPDATE `rachunek` JOIN uzytkownicy on uzytkownicy.pesel = rachunek.pesel SET `stan_konta` = `stan_konta` - $_POST[kwota] WHERE uzytkownicy.login = $_SESSION[user]";
    $result = $connect->query($sql);
    #przekazywanie pieniędzy na konto
    $sql = "UPDATE `rachunek` JOIN uzytkownicy on uzytkownicy.pesel = rachunek.pesel SET `stan_konta` = `stan_konta` + $_POST[kwota] WHERE uzytkownicy.login = '$_POST[adresat]'";
    $result = $connect->query($sql);
    #zapis operacji
    $sql = "SELECT uzytkownicy.Imie as nad, uzytkownicy.pesel as pes FROM uzytkownicy WHERE uzytkownicy.login = $_SESSION[user]";
    $result = $connect->query($sql);
    $wiersz = $result->fetch_assoc();
    $nad = $wiersz['nad'];
    $pnad = $wiersz['pes'];
    $sql = "SELECT uzytkownicy.Imie as odb, uzytkownicy.pesel as pes FROM uzytkownicy WHERE uzytkownicy.login = '$_POST[adresat]'";
    $result = $connect->query($sql);
    $wiersz = $result->fetch_assoc();
    $odb = $wiersz['odb'];
    $podb = $wiersz['pes'];
    $sql = "INSERT INTO `tranzakcje` (`id_tranzakcji`, `nadawca`, `odbiorca`, `ile`, `data`) VALUES (NULL, '$odb', '$nad', $_POST[kwota], current_timestamp())";
    $connect->query($sql);
    $sql = "INSERT INTO `nr_tranzakcji` (`pesel`, `id_trazakcji`, `pesel_nadawcy`) VALUES ('$podb', NULL, '$pnad')";
    $connect->query($sql);
    header("location: ..\guest\index.php?error=13");

?>