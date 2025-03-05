<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST['nombre'];
  $email = $_POST['email'];
  $subject = $_POST['asunto'];
  $message = $_POST['mensaje'];

  $to = 'jespinodaza@gmail.com';

  $headers = "From: $email" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8";

  $body = "Has recibido un nuevo mensaje desde tu portfolio:\n\n";
  $body .= "Nombre: $name\n";
  $body .= "Correo: $email\n";
  $body .= "Asunto: $subject\n";
  $body .= "Mensaje:\n$message\n";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Mensaje enviado correctamente.';
  } else {
    echo 'Error al enviar el mensaje.';
  }

} else {
  echo 'Acceso no permitido.';
}
?>
