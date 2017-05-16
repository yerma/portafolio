<?php
    $destino = "yerma.araya@gmail.com";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $tipo = $_POST["tipo"];
    $mensaje = $_POST["mensaje"];

    $contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nTipo de mensaje: " . $tipo . "\nMensaje: " . $mensaje;

    mail($destino, $nombre . " | " . $tipo, $contenido);
?>
