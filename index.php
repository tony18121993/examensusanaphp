<!DOCTYPE html>
<html>
<head>
  <title>Formulario de datos bancarios</title>
</head>
<body>
  <form action="procesar.php" method="post">
    <label for="numero_tarjeta">Número de tarjeta</label>
    <input type="text" name="numero_tarjeta" id="numero_tarjeta">
    <br>
    <label for="dni">DNI</label>
    <input type="text" name="dni" id="dni">
    <br>
    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" id="usuario">
    <br>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>