<?php
    $destino = "yerma.araya@gmail.com";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    $contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nTeléfono: " . $tipo . "\nMensaje: " . $mensaje;

    mail($destino, $nombre . " | " . $telefono, $contenido);
?>
