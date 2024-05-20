<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $nombre = $_POST['name'];
    $telefono = $_POST['phone'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    // Correo electrónico al que se enviará el formulario
    $destinatario = "aguerrerosolaez1@gmail.com"; // Reemplaza con tu dirección de correo electrónico
    
    // Asunto del correo
    $asunto = "Mensaje desde el formulario de contacto";
    
    // Cuerpo del correo
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Teléfono: $telefono\n";
    $cuerpoMensaje .= "Correo electrónico: $email\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje\n";
    
    // Cabeceras del correo
    $cabeceras = "From: $nombre <$email>";
    
    // Envía el correo electrónico
    if (mail($destinatario, $asunto, $cuerpoMensaje, $cabeceras)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
