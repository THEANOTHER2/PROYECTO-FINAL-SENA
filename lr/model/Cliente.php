<?php

//require_once('model/Model.php');

class Cliente extends Model{
  private $id;
  private $nombre;
  private $correo;
  private $telefono;
  private $direccion;
  private $sexo;
  private $fecha_nac;
  
  function __construct(){
    parent::__construct('cliente');//Nombre de la tabla
  }
  
  function setId($id){
    $this->id = $id;
  }
  
  function setNombre($nombre){
    $this->nombre = $nombre;
  }
  
  function setCorreo($correo){
    $this->correo = $correo;
  }
  
  function setTelefono($telefono){
    $this->telefono = $telefono;
  }
  
  function setDireccion($direccion){
    $this->direccion = $direccion;
  }
  
  function setSexo($sexo){
    $this->sexo = $sexo;
  }
  
  function setFecha_nac($fecha_nac){
    $this->fecha_nac = $fecha_nac;
  }

  
  function guardar(){
    $campo="nombre,correo,telefono,direccion,sexo,fecha_nac";
    $valor="'$this->nombre','$this->correo','$this->telefono','$this->direccion','$this->sexo','$this->fecha_nac'";
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