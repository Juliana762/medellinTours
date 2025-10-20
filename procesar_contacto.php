<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    
    // Dirección de correo destino
    $destinatario = "medellintours2025@gmail.com";
    $asunto = "Nuevo mensaje de contacto - Medellín Tours";
    
    // Construir el cuerpo del mensaje
    $cuerpoMensaje = "Has recibido un nuevo mensaje de contacto:\n\n";
    $cuerpoMensaje .= "Nombre: " . $nombre . "\n";
    $cuerpoMensaje .= "Correo: " . $correo . "\n";
    $cuerpoMensaje .= "Mensaje:\n" . $mensaje . "\n";
    
    // Cabeceras del correo
    $headers = "From: " . $correo . "\r\n";
    $headers .= "Reply-To: " . $correo . "\r\n";
    
    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpoMensaje, $headers)) {
        // Redirigir a una página de éxito
        header("Location: contacto_exitoso.html");
        exit();
    } else {
        // Redirigir a una página de error
        header("Location: contacto_error.html");
        exit();
    }
} else {
    // Si alguien intenta acceder directamente al archivo
    header("Location: index.html");
    exit();
}

$destinatario = "medellintours2025@gmail.com"; 
?>