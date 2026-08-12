<?php
echo "<h1>Pedido recibido en Heladeria Doña Nieve</h1>";

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$sabores = $_POST['sabores'];

echo "<p>Nombre: " . $nombre . "</p>";
echo "<p>Correo: " . $correo . "</p>";
echo "<p>Sabores: " . $sabores . "</p>";

$carta = ["Cono simple - Bs 8", "Copa doble - Bs 15", "Litro para llevar - Bs 35"];

echo "<ul>";
foreach ($carta as $item) {
    echo "<li>" . $item . "</li>";
}
echo "</ul>";

echo "<p>Te atiende Claudio Jesus Flores</p>";
?>