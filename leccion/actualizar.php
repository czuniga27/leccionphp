<?php
  session_start();
?>
<!DOCTYPE Html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Formulario</title>
</head>
<body>
  
<?php
$nombre=$_POST["nombre"];
$iddemo=$_POST["iddemo"];

echo "Edicion en proceso </br>";

include_once("DemoCollector.php");
$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj->updateDemo($iddemo,$nombre);

echo "id :".$iddemo."actualizando a: ".$nombre." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
 
</body>
</html>


