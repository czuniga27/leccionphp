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
$nombre=$_POST["nombre"];
$tipo=$_POST["tipo"];
$fechanacimiento=$_POST["fechanacimiento"];
$foto=$_POST["foto"];

// echo 'hola'.htmlspecialchars($valor).'!';
include_once("DemoCollector.php");

$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj->createDemo($nombre,$tipo,$fechanacimiento,$foto);

echo "Valor Agregado </br>";
	
 ?>
 <div><a href="index.php">Volver</a></div>
 
</body>
</html>


