<?php

class Proyecto extends Model{
  private $id;
  private $titulo;
  private $descripcion;
  private $ruta;
  private $adminId;
    
  function __construct(){    
    parent::__construct('proyecto');//Nombre de la tabla
  }
  
  function setId($id){
    $this->id = $id;
  }
  
  function setTitulo($titulo){
    $this->titulo = $titulo;
  }
  
  function setDescripcion($descripcion){
    $this->descripcion = $descripcion;
  }
  
  function setRuta($ruta){
    $this->ruta = $ruta;
  }
  
  function setAdminId($adminId){
    $this->adminId = $adminId;
  }
  
  function guardar(){
    $campo="titulo,descripcion,ruta,administrador_id";
    $valor="'$this->titulo','$this->descripcion','$this->ruta',$this->adminId";
    return $this->insert($campo,$valor);
  }
  
  function actualizar1(){
    $datos = 'titulo="'.$this->titulo.'", descripcion="'.$this->descripcion.'"';
    return $this->update($datos,$this->id);
  }
  
  function actualizar2(){
    $datos = 'titulo="'.$this->titulo.'", descripcion="'.$this->descripcion.'",ruta="'.$this->ruta.'"';
    return $this->update($datos,$this->id);
  }
}