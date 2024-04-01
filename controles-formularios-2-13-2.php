<?php
/**
 * Controles en formularios (2) 13-2 - controles-formularios-2-13-2.php
 *
 * @author Sebastian Vindas Hernandez
 *
 */

    $tamano = isset($_GET['lado']) ? intval($_GET['lado']) : 200; 
    $colorInicial = isset($_GET['inicial']) ? $_GET['inicial'] : '#ffffff';
    $colorFinal = isset($_GET['final']) ? $_GET['final'] : '#000000';

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Gradiente en cuadrado (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Gradiente en cuadrado (Resultado)</h1>

<?php

    $gradienteId = "gradienteColor" . uniqid();

    echo "<svg width=\"{$tamano}px\" height=\"{$tamano}px\" xmlns=\"http://www.w3.org/2000/svg\">
            <defs>
                <linearGradient id=\"{$gradienteId}\" x1=\"0%\" y1=\"0%\" x2=\"100%\" y2=\"100%\">
                    <stop offset=\"5%\" style=\"stop-color:{$colorInicial};\" />
                    <stop offset=\"95%\" style=\"stop-color:{$colorFinal};\" />
                </linearGradient>
            </defs>
            <rect width=\"100%\" height=\"100%\" fill=\"url(#{$gradienteId})\" />
          </svg>";

?>

<img src="imagenes/code.jpg" alt="código">
  <p><a href="controles-formularios-2-13-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Grupo 4</p>
  </footer>
</body>
</html>
