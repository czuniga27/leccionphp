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
  if (isset($_SESSION['MiSesion'])){

  echo "<p> Hola Usuario:(". $_SESSION['MiSesion']. ")
  	[<a href='salir.php'>Salir</a>]";

include_once("DemoCollector.php");
$id =1;
$DemoCollectorObj = new DemoCollector();

echo "<a href='formularioDemoInsert.php'>NUEVO OBJETO</a>";
?>

<?php

foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
  echo "<a href='formularioDemoEditar.php?id=".$c->getIdDemo()."'>PERFIL</a>";
  echo $c->getIdDemo() . "  && " .$c->getNombre(). "  && " .$c->getTipo(). "  && " .$c->getFechanacimiento(). "  && " .$c->getFoto(); 

  //echo "<a href='formularioDemoEditar.php?id=".$c->getIdDemo()."'>Ver</a>";
  //echo "<a href='eliminar.php?id=".$c->getIdDemo()."'>eliminar</a>";                                  
  echo "</div>"; 
}
 
  }
	else{
	?>

	<form action="login.php" method="post">

	<fieldset>

	  <label>Usuario: </label>
	  <input type="text" name="usuario"/><br/>

	  <label>Clave: </label>
	  <input type="text" name="clave"/><br/>

	 <input type="submit" value="Enviar" />
	</form>
   <?php } ?>
 
</body>
</html>


