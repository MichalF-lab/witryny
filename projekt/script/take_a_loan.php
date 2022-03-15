<?php
    require_once('../script/connect.php');
    session_start();
    $sql =  "SELECT COUNT(kredyt.Id_kredytu)as ilosc FROM kredyt JOIN uzytkownicy on uzytkownicy.pesel = kredyt.pesel WHERE uzytkownicy.login = $_SESSION[user] AND kredyt.pozostalo_do_spalacenia != 0;";
    $result = $connect->query($sql);
    while($wiersz = $result->fetch_assoc())
    {    
        if($wiersz['ilosc'] > 0)
        {
            header("location: ..\guest\index.php?error=1");
            exit;
        }
    }
    $temp = "SELECT uzytkownicy.pesel as pesel, uzytkownicy.Imie as imie FROM uzytkownicy WHERE uzytkownicy.login = $_SESSION[user]";
    $temp2 = $connect->query($temp);
    while($pesel = $temp2->fetch_assoc())
    {
        $do_zaplaty = 1.1 * $_POST['kwota'];
        $rata = $do_zaplaty / $_POST['raty'];
        $sql = "INSERT INTO `kredyt` (`pesel`, `rata`, `pozostalo_rat`, `pozostalo_do_spalacenia`) VALUES ($pesel[pesel], $rata, $_POST[raty], $do_zaplaty)";   
        $connect->query($sql);
        $sql = "UPDATE `rachunek` SET `stan_konta` = `stan_konta` + $_POST[kwota] WHERE `rachunek`.`pesel` = $pesel[pesel]";
        $connect->query($sql);
        $sql = "INSERT INTO `tranzakcje` (`id_tranzakcji`, `nadawca`, `odbiorca`, `ile`, `data`) VALUES (NULL, '$pesel[imie]','NBank', $_POST[kwota], current_timestamp())";
        $connect->query($sql);
        $sql = "INSERT INTO `nr_tranzakcji` (`pesel`, `id_trazakcji`) VALUES ($pesel[pesel], NULL)";
        $connect->query($sql);
        header("location: ..\guest\index.php?error=11");
        exit;
    }
?>