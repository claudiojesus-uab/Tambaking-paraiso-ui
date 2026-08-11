const form = document.querySelector("#form-helados");
const aviso = document.querySelector("#aviso-helados");

function validarPedido(event) {
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;

    if (nombre === "" || correo === "") {
        aviso.textContent = "Ingrese su nombre - sin eso no puede hacer el pedido";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
        event.preventDefault();
    } else if (!correo.includes("@")) {
        aviso.textContent = "Ese correo no tiene @ - revisalo por favor.";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
        event.preventDefault();
    } else {
        aviso.textContent = "Pedido resivido - te atiende Claudio Jesus Flores";
        aviso.classList.add("exito");
        aviso.classList.remove("error");
    }
}

form.addEventListener("submit", validarPedido);