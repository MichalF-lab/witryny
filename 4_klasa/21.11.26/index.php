<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Odżywianie zwierząt</title>
        <link rel="stylesheet" href="style4.css">
    </head>
    <body>
        <header><h2>DRAPIEŻNIKI I INNE</h2></header>
        <nav>
            <h3>
                Wybierz styl życia:
            </h3>
            <form method="POST">
                <select name="zycie">
                    <option value=1>Drapieżniki</option>
                    <option value=2>Roślinożerne</option>
                    <option value=3>Padlinożerne</option>
                    <option value=4>Wszystkożerne</option>
                </select>
                <input type="submit" value="Zobacz">    
            </form>
        </nav>
        <main>
            <div id="a">
                <h3>Lista zwierząt</h3>
                <div id="d">
                    <!--skrypt 1-->
                    <?php
                        $connect = new mysqli("localhost","root","","baza");
                        $sql = "SELECT zwierzeta.gatunek, odzywianie.rodzaj
                        FROM `zwierzeta`
                        JOIN `odzywianie` on odzywianie.id = zwierzeta.Odzywianie_id;";
                        $result = $connect->query($sql);
                        echo '<ui>';
                        $iterator = 0;
                        while($wiersz = $result->fetch_assoc())
                        {
                            foreach($wiersz as $wynik)
                            {
                                if($iterator%2==0) echo "<li>$wynik -> ";
                                if($iterator%2==1) echo "$wynik </li>";
                                $iterator++;
                            }
                        }
                        echo '</ui>';
                        $connect->close();
                    ?>
                </div>
            </div>
            <div id="b">
                <!--skrypt 2-->
                <?php
                    $connect = new mysqli("localhost","root","","baza");
                    $sql = "SELECT zwierzeta.id, gatunek, zwierzeta.wystepowanie 
                    FROM `zwierzeta` 
                    JOIN odzywianie on odzywianie.id = zwierzeta.Odzywianie_id 
                    WHERE odzywianie.id = $_POST[zycie]";
                    $result = $connect->query($sql);
                    $iterator = 0;
                    while($wiersz = $result->fetch_assoc())
                    {
                        foreach($wiersz as $wynik)
                        {
                            if($iterator%3==0) echo "$wynik ";
                            if($iterator%3==1) echo "$wynik ";
                            if($iterator%3==2) echo "$wynik<br>";
                            $iterator++;
                        }
                    }
                    $connect->close();
                ?>
            </div>
            <div id="c"><img src="drapieznik.jpg"></div>
        </main>
        <footer>
            <a href="pl.wikipedia.org">Poczytaj o zwierzętach na Wikipedii</a>
            <div>autor: Michal Frackowiak</div>
        </footer>
    </body>
</html>
<!--<ol>$wiersz[zwierzeta.gatunek]<ol> echo $wiersz['zwierzeta.'.'gatunek']; -->