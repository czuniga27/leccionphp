<?php

class Perfil
{
    private $idperfil;
    private $nombre;
    private $tipo;
    private $fechanacimiento;
    private $foto;
    
     function __construct($iddemo, $nombre, $tipo, $fechanacimiento, $foto) {
       $this->iddemo = $iddemo;
       $this->nombre = $nombre;
       $this->tipo = $tipo;
       $this->fechanacimiento = $fechanacimiento;
       $this->foto = $foto;
     }
    
     function setIdDemo($iddemo){
       $this->iddemo = $iddemo;
     } 
     function getIdDemo(){
       return $this->iddemo;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     } 
     function setFechanacimiento($fechanacimiento){
       $this->fechanacimiento = $fechanacimiento;
     } 
     function getFechanacimiento(){
       return $this->fechanacimiento;
     } 
     function setFoto($foto){
       $this->foto = $foto;
     } 
     function getFoto(){
       return $this->foto;
     } 
}

?> 
