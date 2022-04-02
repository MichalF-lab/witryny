<?php
    require_once('../script/connect.php');
    $sql =  "SELECT rachunek.stan_konta as siano FROM rachunek JOIN uzytkownicy ON uzytkownicy.pesel = rachunek.pesel WHERE uzytkownicy.login = '$login'";
    $result = $connect->query($sql);
    while($wiersz = $result->fetch_assoc())
    {    
        $temp = number_format($wiersz['siano'],2);
        echo <<< LABEL
            <span class="text-bold text-lg">
            $temp zł
            </span>
        LABEL;
    }
?>