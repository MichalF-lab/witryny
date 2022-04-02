<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Wycieczkii urlopy</title>
        <link rel="stylesheet" href="styl3.css">
    </head>
    <body>
        <header><h1>BIURO PODRóży</h1></header>
        <main>
            <div id="left">
                <h2>KONTAKT</h2>
                <a href="biuro@wycieczki.p">napisz do nas</a>
                <p>telefon: 555666777</p>
                <br>
                <form>
                    Podaj imie<input type="text" id="a"><br>
                    Podaj nazwisko<input type="text"><br>
                    Podaj email<input type="text"><br>
                    <button onclick=sprawdz()>sprawdz</button>
                </form>
            </div>
            <div id="mid">
                <h2>GALERIA</h2>
                <!-- srypt 1 -->
                <?php
                    $connect = new mysqli("localhost","root","","egzamin3");
                    $sql = "SELECT nazwaPliku,podpis FROM zdjecia ORDER BY podpis ASC";
                    $result = $connect->query($sql);
                    while($wynik = $result->fetch_assoc())
                    {
                        echo "<img src=$wynik[nazwaPliku] alt=$wynik[podpis]>";
                    }
                    
                ?>
            </div>
            <div id="right">
                <h3>PROMOCJE</h3>
                <table>
                    <tr>
                       <td>Jesień</td> 
                       <td>Grupa 4+</td> 
                       <td>Grupa 10+</td> 
                    </tr>
                    <tr>
                        <td>5%</td>
                        <td>10%</td>
                        <td>15%</td>
                    </tr>
                </table>
            </div>
        </main>
        <section>
            
            <h2>LISTA WYCIECZEK</h2>
            
            <!-- skrypt 2 -->
            <?php
                 $sql = "SELECT id, datawyjazdu, cel, cena FROM wycieczki WHERE dostepna = TRUE";
                 $result = $connect->query($sql);
                 echo '<table>';
                 echo '<tr><th>id</th><th>data wyjazdu</th><th>cel</th><th>cena</th>';
                 while($wynik = $result->fetch_assoc())
                 {
                     echo "<tr><td>$wynik[id]</td> <td>$wynik[datawyjazdu]</td> <td>$wynik[cel]</td> <td>$wynik[cena]</td>";
                 }
                 echo '<table>';
                 $connect->close();
            ?>
        </section>
        <footer>
            <p>Strone wyknał Michał Frąckowiak</p>
        </footer>
    </body>
</html>