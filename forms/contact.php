<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Aquí pones tu correo para recibir los mensajes
  $to = 'jespinodaza@gmail.com';

  // Cabecera para indicar quién envía el correo
  $headers = "From: $email" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8";

  // Cuerpo del mensaje
  $body = "Has recibido un nuevo mensaje desde tu portfolio:\n\n";
  $body .= "Nombre: $name\n";
  $body .= "Correo: $email\n";
  $body .= "Asunto: $subject\n";
  $body .= "Mensaje:\n$message\n";

  // Enviar el correo
  if (mail($to, $subject, $body, $headers)) {
    echo 'Mensaje enviado correctamente.';
  } else {
    echo 'Error al enviar el mensaje.';
  }

} else {
  echo 'Acceso no permitido.';
}
?>
