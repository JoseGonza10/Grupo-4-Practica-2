<?php

/**
 * Controles en formularios (2) 2-2 - controles-formularios-2-02-2.php
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
    Datos personales 2 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Datos personales 2 (Resultado)</h1>
  <table class="conborde">
    
    <tr>
      <th>Edad</th>
      <th>Peso</th>
    </tr>
<tr>
  <td><?php echo $_GET['edad']; ?></td>
  <td><?php echo $_GET['peso']; ?></td>
</tr>

  </table>

  <p><a href="controles-formularios-2-02-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>

</html>
