<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mensaje recibido</title>
  </head>
  <body>
    <p>Recibiste un mensaje de: {{ $msj['nombre'] }} - {{ $msj['email'] }}</p>
    <p><strong>Asunto: </strong>{{ $msj['asunto'] }}</p>
    <p><strong>Mensaje: </strong>{{ $msj['mensaje'] }}</p>

  </body>
</html>
