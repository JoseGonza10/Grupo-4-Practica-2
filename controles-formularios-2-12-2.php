<?php
/**
 * Controles en formularios (2) 12-2 - controles-formularios-2-12-2.php
 *
 * @author Sebastian Vindas Hernandez
 *
 */

    $tamano = isset($_GET['lado']) ? intval($_GET['lado']) : 50;
    $forma = isset($_GET['forma']) ? $_GET['forma'] : '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Círculo o cuadrado Cuadrado (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Círculo o cuadrado (Resultado)</h1>

<?php

    if ($forma == 'cuadrado') {
      echo "<svg width=\"{$tamano}px\" height=\"{$tamano}px\">";
      echo "<rect width=\"{$tamano}px\" height=\"{$tamano}px\" style=\"fill:red;\" />";
      echo "</svg>";
  } elseif ($forma == 'circulo') {
      $radio = $tamano / 2;
      echo "<svg width=\"{$tamano}px\" height=\"{$tamano}px\">";
      echo "<circle cx=\"{$radio}px\" cy=\"{$radio}px\" r=\"{$radio}px\" style=\"fill:red;\" />";
      echo "</svg>";
  } else {
      echo "<p class=\"aviso\">Por favor, elija una forma y un tamaño para la figura.</p>";
  }

?>

  <p><a href="controles-formularios-2-12-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Sebastian Vindas Hernandez - Grupo 4</p>
  </footer>
</body>
</html>
