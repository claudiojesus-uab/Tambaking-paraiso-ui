const formularioPedido = document.querySelector("#form-contacto");
const avisoPedido = document.querySelector("#error-pedido");

function revisarPedido(event) {
    
    const nombre = document.querySelector("#nombre").value;
    const email = document.querySelector("#email").value;
    if (nombre === "" ){
        event.preventDefault();
        avisoPedido.textContent = "Por favor, ingrese su nombre.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");

    } else if (email.includes("@") === false) {
        event.preventDefault();
        avisoPedido.textContent = "Por favor, ingrese un correo electrónico válido.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    } else {
        
        avisoPedido.textContent = "¡Formulario enviado con éxito!";
        avisoPedido.classList.add("exito");
        avisoPedido.classList.remove("error");
    }
}

formularioPedido.addEventListener("submit", revisarPedido);