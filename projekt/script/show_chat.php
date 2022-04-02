<?php
    require_once('../script/connect.php');
    $sql =  "SELECT czat.autor as a, czat.tresc as t, czat.pesel_klienta as p FROM czat JOIN uzytkownicy on uzytkownicy.pesel = czat.pesel_klienta WHERE uzytkownicy.login = $_SESSION[user]";
    $result = $connect->query($sql);
    while($wiersz = $result->fetch_assoc())
    {
        if($wiersz['a'] ==$wiersz['p'])
        {
            echo <<< TEXT
            <div class="direct-chat-msg right">            
                <div class="direct-chat-text">
                    $wiersz[t]
                </div>
            </div>
            
            TEXT;
        }
        else
        {
            echo <<< TEXT
            <div class="direct-chat-msg button">            
                <div class="direct-chat-text">
                    $wiersz[t]
                </div>
            </div>
            TEXT;
        }
    }  
?>