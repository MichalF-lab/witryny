let tab = [6, 13, 18, 24, 125, 46, 57];

tab.forEach(element => {
    document.getElementById("Danetablica").innerHTML += element + ",";
});

document.getElementById("Danetablica").innerHTML += "<br><br>";

tab = [6, 13, 18, 24, 125, 46, 57];

console.log(tab);

//dodaj 2 liczby  33 i 44
tab.push(33, 44);

//wypisz dlugosc
console.log(tab.length)

// wypisz zawartosc
console.log(tab)

//----------------------------------
let osoby = ["Jan Kozaczej", "Zygfryd Sztosik", "Stefan Uczciwy", "Ewa Mocna", "Mariusz Wiercipietek"];

osoby.reverse();

console.log(osoby);

//----------------------------------
let tablica = ['Zenek', 'Tomasz', 'Adam', 'Ewa', 'Krzysiek'];
tablica.sort();

console.log(tablica)

//----------------------------------
osoby.forEach(element => {
    document.getElementById("Danetablica").innerHTML += element + ",";
});

document.getElementById("Danetablica").innerHTML += "<br>";

//----------------------------------
osoby.forEach(element => {
    document.getElementById("Danetablica").innerHTML += "<p>" + element + "</p>";
});

//----------------------------------
let samochody = ["skoda", "fiat", "marcedes", "volvo", "kia", "opel", "citroen"];

samochody.forEach(element => {
    if (element == samochody[1] || element == samochody[2]) console.log("tajne");
    else console.log(element);
});

//----------------------------------

let tekst = "Javascript zostal opracowany przez firme Netscape w polowie 90 lat a jego tworca jest ziomek Eich";