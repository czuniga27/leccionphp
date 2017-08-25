<?php
  session_start();
?>
<!DOCTYPE Html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Delete Demo</title>
</head>
<body>
  
<?php

//obtner el valor de id que viene del metodo get a traves de http
$id=$_GET["id"];

//incluir la libreria de Democolletor
include_once("DemoCollector.php");

//crea una instancia de democollector
$DemoCollectorObj = new DemoCollector();

//
$DemoCollectorObj->deleteDemo($id);


echo "valor id". ($id) . "ha sido eliminado correctamente";




 
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>


