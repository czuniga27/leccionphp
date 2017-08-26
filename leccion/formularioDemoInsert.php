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
  

<h2>NUEVO PERFIL</h2>

<form action="guardarDemo.php" method="post">
<p>
Nombre: <input type="text" name="nombre" autofocus required />
</p>
<p>
Tipo: <input type="text" name="tipo" autofocus required />
</p>
<p>
Fecha Nacimiento: <input type="text" name="fechanacimiento" autofocus required />
</p>
<p>
Foto: <input type="text" name="foto" autofocus required />
</p>

<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar Nuevo Perfil" />
</form>
 
</body>
</html>


