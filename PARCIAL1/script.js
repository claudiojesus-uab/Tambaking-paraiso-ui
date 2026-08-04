const btnConfirmar = document.querySelector("#btn-confirmar");

function confirmarPedido() {
    const mensaje = document.querySelector("#mensaje-respuesta");
    mensaje.textContent = "Pedido recibido - te atiende Claudio Jesus Flores";
    mensaje.classList.remove("oculto");
}

btnConfirmar.addEventListener("click", confirmarPedido);