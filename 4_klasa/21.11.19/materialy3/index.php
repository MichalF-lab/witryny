<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8"> 
        <title>Dane o zwierzętach</title>
        <link rel="stylesheet" href="styl3.css">
    </head>
    <body>
        <header>
            <h1>Atlas zwierząt</h1>
        </header>
        <div id="formularz">            
            <h2>Gromady</h2>
            <ol>
                <li>Ryby</li>
                <li>Płazy</li>
                <li>Gady</li>
                <li>Ptaki</li>
                <li>Ssaki</li>
            </ol>
            <form method="POST">
                Wybierz gromade <input type="number" name="gromada">
                <input type="submit" value="Wyslij">
            </form>
        </div>
        <main>
            <div class="main"><img src="zwierzeta.jpg" alt="dzikie zwierzęta"></div>
            <div id="mid">
                <!-- skrypt 1 -->
                <?php
                if(isset($_POST['gromada']))
                {   
                    $connect = new mysqli("localhost","root","","baza");
                    
                    $sql = "SELECT nazwa FROM gromady WHERE gromady.id = $_POST[gromada]";
                    $result = $connect->query($sql);
                    while($wynik = $result->fetch_assoc()) echo "<h2>$wynik[nazwa]</h2><br>";
                    
                    
                    $sql = "SELECT gatunek, wystepowanie FROM zwierzeta WHERE zwierzeta.Gromady_id = $_POST[gromada]";
                    $result = $connect->query($sql);
                    while($wynik = $result->fetch_assoc())
                    {
                        echo <<< L
                            $wynik[gatunek], $wynik[wystepowanie] <br><br>
                        L;
                    }
                    $connect->close();
                }
                ?>
            </div>
            <div class="main">
                <h2>Wszystkie zwierzeta w bazie</h2>
                <!-- skrypt 2 -->
                <?php
                    $connect = new mysqli("localhost","root","","baza");
                    $sql = "SELECT zwierzeta.id as id, gatunek, gromady.nazwa as nazwa FROM zwierzeta JOIN gromady on zwierzeta.Gromady_id = gromady.id";
                    $result = $connect->query($sql);
                    while($wynik = $result->fetch_assoc())
                    {
                        echo "<br> $wynik[id], $wynik[gatunek], $wynik[nazwa]";
                    }
                ?>
            </div>
        </main>
        <footer>
            <a link="atlas-zwierzat.pl" target="blank">
                Poznajmy inne strony o zwierzętach
            </a>
            Autor atlasu zwierząt:4D Michał Frąckowiak
        </footer>
    </body>
</html>

