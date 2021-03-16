let guzik = document.querySelectorAll("button");

guzik[0].addEventListener("click",zmiana1);

function zmiana1(){
    let menu = document.querySelector("ul");
    menu.classList.toggle("zmiana");
}

guzik[1].addEventListener("click", function(){
    let lista = document.querySelectorAll("li");
    lista[1].style.backgroundColor = "yellow";
    lista[4].style.backgroundColor = "red";
})


guzik[2].addEventListener("click", ()=>{
    let lista = document.querySelectorAll("li");
    for (zmienna of lista){
        zmienna.classList.add("czcionka");
    } 
})