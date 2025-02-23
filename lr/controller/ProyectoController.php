<?php

class ProyectoController extends Controller{
  function __construct(){
    parent::__construct();//Cargar modelos
    $this->proyecto = new Proyecto;    
  }
  
  function store(){
    $archivo = $_FILES['image']['tmp_name'];
    $destino = "public/img/" . $_FILES['image']['name'];
    move_uploaded_file($archivo,$destino);
    
    $this->proyecto->setTitulo($this->title);
    $this->proyecto->setDescripcion($this->description);
    $this->proyecto->setRuta($destino);
    $this->proyecto->setAdminId(3);
    
    $this->proyecto->guardar();
    
//    echo json_encode(['salida'=>'modal',
//                      'msj'=>'El proyecto se ha guardado exitosamente'.($_FILES['image']['name']),
//                     'title'=>'Mensaje']);
    header('Location: index.php?c=proyecto&a=index');
//    echo $_FILES['image']['name'];
//    
//    if(($_FILES['image']['name'])!=null){
//      echo 'bien';
//    }else{
//      echo 'mal';
//    }
  }
  
  function index(){
    
    if($_SESSION['login']==true){
      $dat = $this->proyecto->getAll(); 
      $this->view('proyectoAdmin',['dat'=>$dat]);
    }else{
      $this->view('inicio');
    }
    
  }
  
  function edit(){
    $datos = (array) $this->proyecto->getById($this->id);
    echo $this->view('editProyecto',$datos);
  }
  
  function update(){
    
    $this->proyecto->setId($this->id);
    $this->proyecto->setTitulo($this->titleEdit);
    $this->proyecto->setDescripcion($this->descriptionEdit);
    
    if(($_FILES['imageEdit']['name'])!=null){
      $archivo = $_FILES['imageEdit']['tmp_name'];
      $destino = "public/img/" . $_FILES['imageEdit']['name'];
      move_uploaded_file($archivo,$destino);
      $this->proyecto->setRuta($destino);
      $this->proyecto->actualizar2();
    }else{
      $this->proyecto->actualizar1();
    }
    
    header('Location: index.php?c=proyecto&a=index');
    
//    echo json_encode(['salida' => 'redirect',
//                     'c' => 'proyecto',
//                    'a' => 'index']);
  }
  
  function delete(){
    $this->proyecto->deleteById($this->id);
    echo json_encode(['salida' => 'redirect',
                     'c' => 'proyecto',
                    'a' => 'index']);
  }
}