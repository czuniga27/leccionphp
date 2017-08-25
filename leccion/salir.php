<?php
  session_start();
?>
<!DOCTYPE Html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Salir PHP</title>
</head>
<body>
  
<?php

  if (isset($_SESSION['MiSesion'])){
  session_destroy();
  echo "Se ha destruido la session exitosamente <br/>";
  echo "<a href='index.php'>Volver</a>";
  }	
 ?>
 
</body>
</html>


