<?php

class ClienteController extends Controller{
  
  function __construct(){
    parent::__construct();//Cargar modelos
    $this->cliente = new Cliente;
  }
  
  function index(){
    if($_SESSION['login']==true){
      $dat = $this->cliente->getAll();
    
      $this->view('cliente',['dat'=>$dat]);
    }else{
      $this->view('inicio');
    }
    
  }
  
  function store(){
    $this->cliente->setNombre($this->name);
    $this->cliente->setCorreo($this->email);
    $this->cliente->setTelefono($this->phone);
    $this->cliente->setDireccion($this->direccion);
    $this->cliente->setSexo($this->sex);
    $this->cliente->setFecha_nac($this->fn);
    
    $this->cliente->guardar();
    echo json_encode(['salida'=>'modal',
                      'msj'=>'El usuario se ha guardado correctamente',
                     'title'=>'Mensaje']);
  }
}