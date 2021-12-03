<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>grzybobranie</title>
        <link rel="stylesheet" href="styl5.css">
    </head>
    <body>
        <header>
            <div id="a"><img src="borowik-miniaturka.png" alt="Grzybobranie"></div>
            <div id="b"><h1>Idziemy na grzyby!</h1></div>
        </header>
        <main>
            <div id="l">
                <!-- skrypt 1 -->
                <?php
                    $connect = new mysqli("localhost","root","","dane2");
                    $sql = "select grzyby.nazwa_pliku, grzyby.potoczna from `grzyby`";
                    $result=$connect->query($sql);
                    while($wiersz = $result->fetch_assoc())
                    {
                        echo <<< LABEL
                        <img src=$wiersz[nazwa_pliku] title=$wiersz[potoczna]>
                        LABEL;
                    }
                    $connect->close();
                ?>
                
            </div>
            <div id="p">
                <h2>Grzyby jadalne</h2>
                <!-- skrypt 2 -->
                <?php
                    $connect = new mysqli("localhost","root","","dane2");
                    $sql = "select grzyby.nazwa, grzyby.potoczna from grzyby WHERE grzyby.jadalny = true";
                    $result=$connect->query($sql);
                    while($wiersz =$result->fetch_assoc())
                    {
                        echo <<< L
                            $wiersz[nazwa] ($wiersz[potoczna])<br>
                        L;
                    }
                    $connect->close();
                ?>
                <h2>Polecamy do sosów</h2>
                <!-- skrypt 3 -->
                <?php
                    $connect = new mysqli("localhost","root","","dane2");
                    $sql = "select grzyby.nazwa as gnazwa, grzyby.potoczna, rodzina.nazwa from grzyby JOIN rodzina ON rodzina.id = grzyby.rodzina_id JOIN potrawy on grzyby.potrawy_id = potrawy.id WHERE potrawy.nazwa ='sos'";
                    $result=$connect->query($sql);
                    echo '<ol>';
                    while($wiersz =$result->fetch_assoc())
                    {
                        echo <<< L
                            <li>$wiersz[gnazwa]($wiersz[potoczna]),rodzia: $wiersz[nazwa]</li>
                        L;
                    }
                    echo '</ol>';
                    $connect->close();
                ?>
            </div>
        </main>
        <footer>
            <a>Autor 02299376533</a>
        </footer>
    </body>
</html>