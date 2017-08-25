<?php
  session_start();
?>
<!DOCTYPE Html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Formulario Demo Insertar</title>
</head>
<body>
  

<h2>INSERTAR OBJETO DEMO</h2>

<form action="guardarDemo.php" method="post">
<p>

Nombre: <input type="text" name="nombre" autofocus required />
</p>

<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar Objeto Demo" />
</form>
 
</body>
</html>


