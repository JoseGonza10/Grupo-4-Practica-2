<?php
/**
 * Controles en formularios (2) 1-2 - controles-formularios-2-01-2.php
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos personales 1 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Datos personales 1 (Resultado)</h1>

<?php

$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];


print "<p>Su nombre es " . $nombre . "</p>";

print "<p>Sus apellidos son " . $apellidos . "</p>";

?>

  <p><a href="controles-formularios-2-01-1.php">Volver al formulario.</a></p>

  <footer>
    <p>José Pablo González Salazar</p>
  </footer>
</body>
</html>
