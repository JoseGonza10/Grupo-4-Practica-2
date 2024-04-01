<?php
/**
 * Controles en formularios (2) 4-2 - controles-formularios-2-04-2.php
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
    Datos personales 4 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Datos personales 4 (Resultado)</h1>

<?php
$correo = $_GET['correo'];
$confirmacion = $_GET['correo2'];
$recibirCorreos = $_GET['recibir'];
$autorizacion = "";
if($correo !== $confirmacion){
  echo "<p>Los correos digitados no son correctos, por favor intentarlo de nuevo</p>";

  echo "<p>Correo electrónico digitado: " . $correo . "</p>";

  echo "<p>Correo de confirmación digitado: " . $confirmacion . "</p>";
}
else{
 switch($recibirCorreos)
{
  case 0:
    $autorizacion = "No";
    break;
  case 1:
    $autorizacion = "Sí";
    break;
}

echo "<p>El correo electrónico digitado es:" . $correo . "</p>";

echo "<p>¿El usuario queria recibir nuestros correos?: " . $autorizacion . "</p>";
}


?>

  <p><a href="controles-formularios-2-04-1.php">Volver al formulario.</a></p>

  <footer>
  <p>José Pablo González Salazar</p>
  </footer>
</body>
</html>
