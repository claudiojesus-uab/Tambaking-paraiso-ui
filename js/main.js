const body = document.querySelector("body");
const buttonMode = document.querySelector("#btn-tema");

let esDeDia = false;

function alternarTema() {
    body.classList.toggle("modo-claro");
    esDeDia = !esDeDia;

    if(esDeDia) {
        buttonMode.textContent = "🌝 modo claro";
    } else {
        buttonMode.textContent = "🌚​ modo oscuro";
    }
}

buttonMode.addEventListener("click", alternarTema);


const boton = document.querySelector(".menu-toggle");
const menu = document.querySelector(".menu");

boton.addEventListener("click", () => {
    menu.classList.toggle("active");
});