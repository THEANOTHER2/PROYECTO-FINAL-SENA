<?php

//require_once('model/Model.php');

class Administrador extends Model{
  private $id;
  private $nombre;
  private $contrasena;
  
  function __construct(){
    parent::__construct('administrador');//Nombre de la tabla
  }
  
  function setId($id){
    $this->id = $id;
  }
  
  function setNombre($nombre){
    $this->nombre = $nombre;
  }
  
  function setContrasena($contrasena){
    $this->contrasena = $contrasena;
  }

  function guardar(){
    $campo="nombre,contrasena";
    $valor="'$this->nombre','$this->contrasena'";
    return $this->insert($campo,$valor);
  }
  
//  function actualizar(){
//    $datos = 'nombre="'.$this->nombre.'", documento='.$this->doc;
//    return $this->update($datos,$this->id);
//  }
  
//  Consulta multitabla
//  function itemUsuario(){
//    $sql = "SELECT item.nombre, item.controlador, item.accion
//            FROM usuario
//            JOIN `usuario-item` ON usuario.id = `usuario-item`.usuario_id
//            JOIN item ON item.id = `usuario-item`.item_id
//            WHERE usuario.id = $this->id";
//    return $this->sql($sql);
//    
//  }
}