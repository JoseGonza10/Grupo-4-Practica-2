<?php
/**
 * Controles en formularios (2) 11-2 - controles-formularios-2-11-2.php
 *
 * @author Sebastian Vindas Hernandez
 *
 */

  $tamano = isset($_GET['lado']) ? intval($_GET['lado']) : 100;
  $esquina = isset($_GET['esquina']) ? intval($_GET['esquina']) : 20;


?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Cuadrado con bordes redondeados (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Cuadrado con bordes redondeados (Resultado)</h1>

<?php
echo "<svg width=\"{$tamano}px\" height=\"{$tamano}px\">
        <rect width=\"{$tamano}px\" height=\"{$tamano}px\" rx=\"{$esquina}px\" ry=\"{$esquina}px\" style=\"fill:blue;\" />
      </svg>";
?>

  <p><a href="controles-formularios-2-11-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
