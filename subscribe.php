<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php
if (isset($_POST['subscribe'])) {
  $email = $_POST['email']; // Obtener el correo electrónico ingresado en el formulario

  // Validar el correo electrónico (puedes agregar validaciones más complejas aquí si lo deseas)

  // Guardar el correo electrónico en un archivo de texto o en una base de datos
  $file = 'subscribed_emails.txt'; // Nombre del archivo donde se almacenarán los correos electrónicos
  $current = file_get_contents($file);
  $current .= $email . "\n";
  file_put_contents($file, $current);

  // Enviar el correo electrónico al correo de destino
  $to = 'aessnasaspace@gmail.com'; // Dirección de correo donde se enviará el correo
  $subject = 'New Subscriber'; // Asunto del correo
  $message = 'A new subscriber has joined the newsletter: ' . $email; // Cuerpo del correo
  $headers = 'From: ' . $email; // Cabeceras del correo

  // Envía el correo
  mail($to, $subject, $message, $headers);

  // Redirige al usuario a una página de confirmación o muestra un mensaje de éxito
  header('Location: confirmation.html'); // Cambia "confirmation.html" por la página que desees mostrar después de suscribirse
  exit();
}
?>
