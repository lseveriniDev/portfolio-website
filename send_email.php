<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $project = htmlspecialchars($_POST['project']);

    // Tu dirección de correo
    $to = "severini.lucila@gmail.com";
    $subject = "Nuevo mensaje de contacto de " . $name;

    // Construir el cuerpo del correo
    $message = "Nombre: " . $name . "\n";
    $message .= "Correo: " . $email . "\n\n";
    $message .= "Descripción del proyecto:\n" . $project . "\n";

    // Encabezados adicionales
    $headers = "From: " . $email;

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "El mensaje ha sido enviado con éxito.";
    } else {
        echo "Lo siento, ha ocurrido un error y el mensaje no se pudo enviar.";
    }
} else {
    echo "Acceso denegado.";
}
?>
