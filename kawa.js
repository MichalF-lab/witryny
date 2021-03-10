document.getElementById("btn").onclick = function(){
    let nr_kawy = Number(document.getElementById("kawa").value);
    let waga_kawy = Number(document.getElementById("dag").value);

    nr_kawy == 1 || nr_kawy == 2 || nr_kawy == 3 ?
     document.getElementById("wynik").innerHTML
     = (nr_kawy + 4) * waga_kawy + " zł" 
     : alert("Nie ma takiej kawy");
}