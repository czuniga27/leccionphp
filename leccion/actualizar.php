<?php
  session_start();
?>
<!DOCTYPE Html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Formulario Actualizar</title>
</head>
<body>
  
<?php
$nombre=$_POST["nombre"];
$iddemo=$_POST["iddemo"];
$tipo=$_POST["tipo"];
$fechanacimiento=$_POST["fechanacimiento"];
$foto=$_POST["foto"];


echo "Edicion en proceso </br>";

include_once("DemoCollector.php");

$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj->updateDemo($iddemo,$nombre,$tipo,$fechanacimiento,$foto);

echo "id :".$iddemo."actualizando a: ".$nombre.",".$tipo.",".$fechanacimiento.",".$foto."</br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
 
</body>
</html>


