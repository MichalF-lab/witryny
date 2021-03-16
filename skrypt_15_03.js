let guzik = document.querySelectorAll("button");

guzik[0].addEventListener("click",zmiana1);

function zmiana1(){
    let menu = document.querySelector("ul");
    
    menubar.classList.toggle("zmiana");
}

guzik[1].addEventListener("dblclick", function(){
    let lista = document.querySelectorAll("li");
    lista[1].style.backgroundColor = "yellow";
    lista[4].style[backgroundColor-color] = "red";
})

guzik[2].addEventListener("click", ()=>{
    let lista = document.querySelectorAll9("li");
    for (zmiana_czcionki of lista){
        zmianna_czcionki.classList.toggle("czcionka");
    } 
})