<?php
    require_once('../script/connect.php');
    session_start();
    $sql =  "SELECT * FROM `kredyt` JOIN uzytkownicy on uzytkownicy.pesel = kredyt.pesel WHERE uzytkownicy.login = $_SESSION[user] AND kredyt.pozostalo_do_spalacenia != 0;";
    $result = $connect->query($sql);
    while($wiersz = $result->fetch_assoc())
    {    
        $sql = "SELECT rachunek.stan_konta as stan, uzytkownicy.pesel as pesel, uzytkownicy.Imie as imie FROM rachunek JOIN uzytkownicy ON uzytkownicy.pesel = rachunek.pesel WHERE uzytkownicy.login = $_SESSION[user]";
        $temp = $connect->query($sql);
        while($konto = $temp->fetch_assoc())
        {
            $pesel = $konto['pesel'];
            $imie = $konto['imie'];
            if($wiersz['rata'] > $konto['stan'])
            {
                header("location: ..\guest\index.php?error=2");
                exit;
            }
        }
        $sql = "UPDATE `rachunek` JOIN uzytkownicy on uzytkownicy.pesel = rachunek.pesel SET `stan_konta` = `stan_konta` - $wiersz[rata] WHERE uzytkownicy.login = $_SESSION[user]";
        $connect->query($sql);
        $sql = "INSERT INTO `tranzakcje` (`id_tranzakcji`, `nadawca`, `odbiorca`, `ile`, `data`) VALUES (NULL, 'NBank', '$imie',  $wiersz[rata], current_timestamp())";
        $connect->query($sql);
        $sql = "INSERT INTO `nr_tranzakcji` (`pesel`, `id_trazakcji`) VALUES ($pesel, NULL)";
        $connect->query($sql);
        $sql = "UPDATE `kredyt` SET `pozostalo_rat` = `pozostalo_rat`- 1, `pozostalo_do_spalacenia` = `pozostalo_do_spalacenia` - $wiersz[rata] WHERE `kredyt`.`Id_kredytu` = $wiersz[Id_kredytu]";
        $connect->query($sql);
        header("location: ..\guest\index.php?error=12");
        exit;
    }
?>