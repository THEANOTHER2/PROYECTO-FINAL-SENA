<?php

class PersonalController extends Controller{
  function __construct(){
    parent::__construct();//Cargar modelos
    $this->personal = new Personal;    
  }
  
  function index(){
    
    if($_SESSION['login']==true){
      $dat = $this->personal->getAll(); 
      $this->view('personal',['dat'=>$dat]);
    }else{
      $this->view('inicio');
    }
    
  }
  
  function edit(){
    $datos = (array) $this->personal->getById($this->id);
    echo $this->view('editPersonal',$datos);
  }
  
  function update(){
    
    $this->personal->setId($this->id);
    $this->personal->setNombre($this->nombreEdit);
    $this->personal->setCargo($this->cargoEdit);
    $this->personal->setPerfil($this->perfilEdit);
    
    if(($_FILES['imageEdit']['name'])!=null){
      $archivo = $_FILES['imageEdit']['tmp_name'];
      $destino = "public/img/" . $_FILES['imageEdit']['name'];
      move_uploaded_file($archivo,$destino);
      $this->personal->setRuta($destino);
      $this->personal->actualizar2();
    }else{
      $this->personal->actualizar1();
    }
    
    header('Location: index.php?c=personal&a=index');
    
//    echo json_encode(['salida' => 'redirect',
//                     'c' => 'proyecto',
//                    'a' => 'index']);
  }
  
}