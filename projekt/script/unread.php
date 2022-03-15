<?php
    require_once('../script/connect.php');
    $sql =  "SELECT uzytkownicy.ile_nieprzeczytanych as np FROM `uzytkownicy` WHERE uzytkownicy.login =  $_SESSION[user]";
    $result = $connect->query($sql);
    while($wiersz = $result->fetch_assoc())
    {
      if($wiersz['np'] != 0)
      {
        echo <<< L
        <span class="badge badge-info right">
        $wiersz[np]
        </span>
        L;
      }
    }  
?>