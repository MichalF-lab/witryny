<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Odżywianie zwierząt</title>
        <link rel="stylesheet" href="style4.css">
        <script>function fun(){window.location.reload()}</script>
    </head>
    <body>
        <header><h2>DRAPIEŻNIKI I INNE</h2></header>
        <nav>
            <h3>
                Wybierz styl życia:
            </h3>
            <form method="POST" action="index.php">
                <select name="zycie">
                    <option value=1 onclick=fun()>Drapieżniki</option>
                    <option value=2 onclick=fun()>Roślinożerne</option>
                    <option value=3 onclick=fun()>Padlinożerne</option>
                    <option value=4 onclick=fun()>Wszystkożerne</option>
                </select>
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
                    $sql = "SELECT 'rodzaj' FROM `odzywianie`
                    WHERE id = "
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