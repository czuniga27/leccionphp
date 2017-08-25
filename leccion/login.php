<?php
  session_start();
?>
<?php
$_SESSION['MiSesion'] = $_POST['usuario'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
echo "Usuario = ". $usuario. " Clave = ". $clave;
echo "<a href='index.php'>Volver</a>";
?>
