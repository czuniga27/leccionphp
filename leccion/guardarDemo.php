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
$valor=$_POST["nombre"];

// echo 'hola'.htmlspecialchars($valor).'!';
include_once("DemoCollector.php");

$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj->createDemo($valor);

echo "Valor Agregado </br>";
	
 ?>
 <div><a href="index.php">Volver</a></div>
 
</body>
</html>


