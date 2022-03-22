<?php
    require_once('../script/connect.php');
    $sql ="SELECT czat.pesel_klienta as pes FROM `czat` WHERE czat.nowa = 1 LIMIT 1";
    $result = $connect->query($sql);
    if($pesguest = $result->fetch_assoc())
    {   
        $sql =  "SELECT czat.autor as a, czat.tresc as t, czat.pesel_klienta as p FROM czat WHERE czat.pesel_klienta = '$pesguest[pes]'";
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
        $sql2 ="SELECT uzytkownicy.login as logi FROM uzytkownicy WHERE uzytkownicy.pesel = '$pesguest[pes]'";
        $result = $connect->query($sql2);
        $temp = $result->fetch_assoc();
        $login = $temp['logi'];
    }
    else 
    {
        echo 'Nikt nie potrzebuje pomocy :)';
    }
?>