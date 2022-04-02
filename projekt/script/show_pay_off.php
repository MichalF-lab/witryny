<?php
    require_once('../script/connect.php');
    $sql =  "SELECT kredyt.rata as rata, kredyt.pozostalo_rat as poz FROM kredyt JOIN uzytkownicy on uzytkownicy.pesel = kredyt.pesel WHERE uzytkownicy.login = $_SESSION[user] AND kredyt.pozostalo_do_spalacenia != 0;";
    $result = $connect->query($sql);
    while($wiersz = $result->fetch_assoc())
    {    
        echo <<< admin
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h1 class="card-title">Spłać rate kredytu</h1>
            </div>
          </div>
          <div class="card-body">
            <!-- Skrypt -->
            <div class="d-flex justify-content-between">
        admin;
        echo <<< LABEL
        <span>rata kredytu: $wiersz[rata] zł</span>
        <span>zostało: $wiersz[poz] rat</span>
        LABEL; 
        echo '<a href=..\script\pay_off.php>';
        echo <<< LABEL
          <input type="submit" value="Splać rate" class="btn button">
        </a>
        LABEL;
        echo <<< admin
            </div>
          </div>
        </div>
        admin;
    }
?>