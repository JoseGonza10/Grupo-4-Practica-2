<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos personales 4 (Formulario).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">

</head>

<body>
  <h1>Datos personales 4 (Formulario)</h1>

  <form action="controles-formularios-2-04-2.php" method="get">
    <p><label>Indique su dirección de correo: <input type="email" name="correo" size="40" required></label></p>

    <p><label>Confirme su dirección de correo: <input type="email" name="correo2" size="40" required></label></p>

    <p>
      Indique si quiere recibir correos nuestros:
      <select name="recibir" required>
        <option value="-1">...</option>
        <option value="1">Sí</option>
        <option value="0">No</option>
      </select>
    </p>

    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
  <p>José Pablo González Salazar</p>
  </footer>

</body>
</html>
