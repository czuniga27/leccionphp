<?php
  session_start();
?>
<!DOCTYPE Html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Formulario Perfil Editar</title>
</head>
<body>
  
<?php
//obtner el valor de id que viene del medoto get a traves de http
$id=$_GET["id"];
//echo "valor de id es ".$id;
include_once("DemoCollector.php");
include_once("Demo.php");
$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->showDemo($id);
?>

<h2>PERFIL</h2>
<img src="<?php echo $ObjDemo->getFoto(); ?>" width="100" height="100" alt="">
<img src="src/chef22.jpg" width="100" height="100" alt="">

<form action="actualizar.php" method="post">
<p>
ID: <input type="text" name="iddemo" value="<?php echo $ObjDemo->getIdDemo(); ?>"readonly />
</p>

<p>
Nombre: <input type="text" name="nombre" value="<?php echo $ObjDemo->getNombre(); ?>" autofocus required />

</p>
<p>
Tipo: <input type="text" name="tipo" value="<?php echo $ObjDemo->getTipo(); ?>" autofocus required />

</p>
<p>
Fecha Nacimiento: <input type="text" name="fechanacimiento" value="<?php echo $ObjDemo->getFechanacimiento(); ?>" autofocus required />

</p>
<p>
Foto: <input type="text" name="foto" value="<?php echo $ObjDemo->getFoto(); ?>" autofocus required />

</p>

<a href="index.php">Home</a>
<input type="submit" value="Editar" />
<?php
$id=$_GET["id"];
echo "<a href='eliminar.php?id=".$id."'>Eliminar</a>";
?> 


</form>
 
</body>
</html>


