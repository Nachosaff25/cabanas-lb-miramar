<?php
    // Get datas
    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    // Make data to send
    $from = "cabanas_lb@c1571892.ferozo.com";
    $to = "nachosaffer@gmail.com";
    $subject = "Contacto desde nuestra web";
    $message = "De: $nombre\nCorreo: $correo\nTelefono: $telefono\nMensaje: $mensaje";
    $headers = "From: Krilín Flores <$from>";
    // Send mail
    mail($to, $subject, $message, $headers);
    // Return to home
    header('Location:index.html');
?>