<?php

class Personal extends Model{
  private $id;
  private $nombre;
  private $cargo;
  private $perfil;
  private $ruta;
    
  function __construct(){    
    parent::__construct('personal');//Nombre de la tabla
  }
  
  function setId($id){
    $this->id = $id;
  }
  
  function setNombre($nombre){
    $this->nombre = $nombre;
  }
  
  function setCargo($cargo){
    $this->cargo = $cargo;
  }
  
  function setPerfil($perfil){
    $this->perfil = $perfil;
  }
  
  function setRuta($ruta){
    $this->ruta = $ruta;
  }
  
  function actualizar1(){
    $datos = 'nombre="'.$this->nombre.'", cargo="'.$this->cargo.'", perfil="'.$this->perfil.'"';
    return $this->update($datos,$this->id);
  }
  
  function actualizar2(){
    $datos = 'nombre="'.$this->nombre.'", cargo="'.$this->cargo.'", perfil="'.$this->perfil.'", ruta="'.$this->ruta.'"';
    return $this->update($datos,$this->id);
  }
}