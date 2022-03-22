<?php
    require_once('../script/connect.php');
    $sql =  "SELECT tranzakcje.nadawca as nad, tranzakcje.odbiorca as odb, tranzakcje.ile as ile, tranzakcje.data as dat, uzytkownicy.Imie as imie FROM `tranzakcje` JOIN nr_tranzakcji on nr_tranzakcji.id_trazakcji = tranzakcje.id_tranzakcji JOIN uzytkownicy on (uzytkownicy.pesel = nr_tranzakcji.pesel or uzytkownicy.pesel = nr_tranzakcji.pesel_nadawcy) WHERE uzytkownicy.login = $_SESSION[user] ORDER BY tranzakcje.id_tranzakcji DESC LIMIT 8; ";
    $result = $connect->query($sql);
    while($wiersz = $result->fetch_assoc())
    {
        if($wiersz['nad'] == $wiersz['imie'])
        {
            $icon = "<small class='text-success mr-1'><i class='fas fa-arrow-down'></i></small>";
        }
        else
        {
            $icon = "<small class='text-danger mr-1'><i class='fas fa-arrow-up'></i></small>";
        }
        echo <<< L
            <tr>
                <td>
                    $wiersz[odb]
                </td>
                <td>
                    $wiersz[nad]
                </td>
                <td>
                    $icon $wiersz[ile] zł
                </td>
                <td>
                    $wiersz[dat]
                </td>
            </tr>
        L;
    }
?>