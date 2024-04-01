<?php
/**
 * Controles en formularios (2) 3-2 - controles-formularios-2-03-2.php
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
    Datos personales 3 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Datos personales 3 (Resultado)</h1>

<?php

?>
<table class="conborde">
    
    <tr>
      <th>Genero</th>
      <th>Aficiones</th>
    </tr>
    
<tr>
  <td><?php echo $_GET['genero']; ?></td>
  <td>
  <?php 
  $literatura = $_GET['Literatura'] ?? null;
  if($literatura){

echo 'Literatura';

  }
  ?>
    <?php 
  $cine = $_GET['Cine'] ?? null;
  if($cine){

echo 'Cine';

  }
  ?>
  <?php 
  $Musica = $_GET['Música'] ?? null;
  if($Musica){

echo 'Música';

  }
  ?>
</td>



</tr>

  </table>

  <p><a href="controles-formularios-2-03-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
