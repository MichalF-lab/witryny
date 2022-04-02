<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Filmoteka</title>
        <link rel="stylesheet" type="text/css" href="styl3.css">
        <script defer>

        </script>
    </head>
    <body>
        <header>
            <div><img src="image10.png" alt="Nasze filmy"></div>
            <div><h2>BAZA FILMOW</h2></div>
            <div>
                <br><br>
                <form method="POST">
                    <select name="gatunek">
                        <option value="Sci-fi">Sci-fi</option>
                        <option value="animacja">animacja</option>
                        <option value="dramat">dramat</option>
                        <option value="horror">horror</option>
                        <option value="komedia">komedia</option>
                    </select>
                <input type="submit" value="Filmy">
                </form>
            </div>
            <div><img src="image100.png" alt="szturmowcy"></div>
        </header>

        <main>
            <section>
                <h2>Wybrano filmy</h2>
                <?php
                    
                    if(isset($_POST['gatunek']))
                    {
                        $connect = new mysqli("localhost","root","","dane");
                        $sql = "SELECT filmy.tytul, filmy.rok, filmy.ocena FROM filmy JOIN gatunki ON filmy.gatunki_id = gatunki.id WHERE gatunki.nazwa='$_POST[gatunek]'";
                        $results = $connect->query($sql);
                        while($wiersz = $results->fetch_assoc())
                        {
                          echo <<< LABEL
                            Tytul: $wiersz[tytul], Rok produkcji: $wiersz[rok], Ocena: $wiersz[ocena]<br>
                          LABEL;
                        }
                        $connect->close();
                    }
                    else{echo "Wybierz kategorie"}  
                ?>
            </section>
            <section>
                <h2>Wszytskie filmy</h2>
                <?php
                    $connect = new mysqli("localhost","root","","dane");                        
                    $sql = "SELECT filmy.id, filmy.tytul, rezyserzy.imie, rezyserzy.nazwisko FROM filmy JOIN rezyserzy on rezyserzy.id = filmy.rezyserzy_id";
                    $results = $connect->query($sql);
                    while($wiersz = $results->fetch_assoc())
                    {
                        echo <<< LABEL
                            "$wiersz[id] $wiersz[tytul] reżyseria: $wiersz[imie] $wiersz[nazwisko]<br>    
                        LABEL;
                    }
                ?>
            </section>
        </main>

        <footer>
            <br>
            <div>Autor: Michal Frackowiak</div>
            <br>
            <span>
                <a href="">Zapytania do baz</a>
                <a href="https:\\filmy.pl" target="_blank">Przejdź do filmy.pl</a>
            </span>
        </footer>
        
    </body>
</html>