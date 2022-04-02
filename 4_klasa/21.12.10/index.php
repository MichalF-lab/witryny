<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl8.css">
        <title>Nasz sklep komputerowy</title>
    </head>
    <body>
        <header>
            <nav>
                <a href="index.php">Główna</a>
                <a href="procesory.html">Procesory</a>
                <a href="ram.html">ram</a>
                <a href="grafika.html">Grafika</a>
            </nav>
            <div>
                <h2>Podzesply komputerowe</h2>
            </div>
        </header>
        <main>
            <h1>Dzisiejsze promocje</h1>
            <table>
                <tr>
                    <th>Numer</th>
                    <th>Nazwa podzesoplu</th>
                    <th>Opis</th>
                    <th>Cena</th>
                </tr>
                <?php
                $conect = new mysqli("localhost", "root","","sklep");
                $sql = "SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena < 1000";
                $result = $conect->query($sql);
                while($wiersz = $result->fetch_assoc())
                {
                    echo <<< LABEL
                    <tr>
                        <td>$wiersz[id]</td>
                        <td>$wiersz[nazwa]</td>
                        <td>$wiersz[opis]</td>
                        <td class="cena">$wiersz[cena]</td>
                    </tr>
                    LABEL;
                }
                $conect->close();
                ?>
                <!--srypt-->
            </table>
        </main>
        <footer>
            <div class="fot"><img src="image10.png"></div>
            <div class="fot">
                <h4>Nasz sklep komputerowy</h4>
                <p>Współpracujemy z hurtownia <a href="http://www.edata.pl/">edata</a></p>
            </div>
            <div class="fot">zadzwon 601 602 603</div>
            <div class="fot">Strone wykonal 10 4D</div>
        </footer>
    </body>
</html>