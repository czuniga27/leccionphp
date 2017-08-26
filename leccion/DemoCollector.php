<?php

include_once('Demo.php');
include_once('Collector.php');

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM demo ");        
    echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'iddemo'},$c{'nombre'},$c{'tipo'},$c{'fechanacimiento'},$c{'foto'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

function showDemo($id) {
    $row = self::$db->getRows("SELECT * FROM demo where iddemo = ? ", array("{$id}"));        
    $ObjDemo = new Demo($row[0]{'iddemo'},$row[0]{'nombre'},$row[0]{'tipo'},$row[0]{'fechanacimiento'},$row[0]{'foto'});
    return $ObjDemo;        
  }
function updateDemo($id,$nombre,$tipo,$fechanacimiento,$foto) {
  $insertrow = self::$db->updateRow
        ("UPDATE public.demo SET nombre = ?, tipo = ?, fechanacimiento = ?, foto = ? Where iddemo = ? ", array( "{$nombre}","{$tipo}","{$fechanacimiento}","{$foto}",$id));
}

function deleteDemo($id) {
  $deleterow = self::$db->deleteRow("DELETE FROM public.demo WHERE iddemo = ?", array( "{$id}"));
}

function createDemo($nombre,$tipo,$fechanacimiento,$foto) {
  $insertrow = self::$db->insertRow("INSERT INTO public.demo (nombre,tipo,fechanacimiento,foto) VALUES (?,?,?,?)", array("{$nombre}","{$tipo}","{$fechanacimiento}","{$foto}"));
}

}
?>
