<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["Nombre"];
    $email = $_POST["email"];
    $asunto = $_POST["Asunto"];
    $mensaje = $_POST["Mensaje"];

    // Configura el destinatario y el asunto del correo electrónico
    $destinatario = "osiel.morales.chavez@gmail.com";
    $asuntoCorreo = "Nuevo mensaje de contacto: $asunto";

    // Contenido del correo electrónico
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Asunto: $asunto\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    // Envía el correo electrónico
    mail($destinatario, $asuntoCorreo, $contenido);

    // Redirige después de enviar el formulario
    header("Location: formulario.php?status=success");
    exit();
}
?>
