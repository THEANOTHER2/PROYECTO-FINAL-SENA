<?php

class InicioController extends Controller{
  
  function __construct(){
    parent::__construct();//Cargar todos los models
//    $temp = $this->x();
  }
  
  function index(){
    
//    $model = new Administrador;
//    $admin = $model->getAll();
    $proyecto = new Proyecto; 
    $pro = $proyecto->getAll();
    $this->view('inicio',['dat'=>$pro]);
  }
  
  function proyectos(){
//    $this->view('proyectos');
    $proyecto = new Proyecto; 
    $dat = $proyecto->getAll(); 
    $this->view('proyectos',['dat'=>$dat]);
  }
  
//  function addAdmin(){
//    $model = new Model('administrador');
////    $this->model->construct('administrador');
////    $temp = ;
//    $model->insert('nombre,contrasena','"Admin","'.crypt("XD").'"');
////    echo "Bien";
//  }
  
  function loginView(){
    $this->view('login');
  }
  
  function login(){
//        echo json_encode(['salida' => 'modal',
//                     'c' => 'proyecto',
//                    'a' => 'index']);
    $model = new Administrador;
    $user = $model->getBy('nombre',$this->username);
    
    if(hash_equals($user[0]->contrasena, crypt($this->pass, $user[0]->contrasena))){
      $_SESSION['login']=true;
      $_SESSION['user']=$this->username;
//      $_SESSION['usuario']=$user;
      
//      $this->usuario->setId($user[0]->id);
//      $_SESSION['menu'] = $this->usuario->itemUsuario();
      
      echo json_encode(['salida'=>'redirect',
                      'c'=>'inicio',
                     'a'=>'indexLogin']);
    }else{
      echo json_encode(['salida'=>'modal',
                      'msj'=>'El usuario o constraseña son icorrectos',
                     'title'=>'Mensaje']);
    }
  }
  
  function destroy(){
    unset($_SESSION['login']);
    unset($_SESSION['user']);
    session_destroy();
    $this->view('login');
  }
  
  function cambioP(){
    $model = new Administrador;
    $admin = $model->getAll();
    
    if(hash_equals($admin[0]->contrasena, crypt($this->passA, $admin[0]->contrasena))){
      $datos='contrasena="'.crypt($this->passN).'"';
      $model->update($datos,3);
      
      echo json_encode(['salida'=>'modal',
                        'msj'=>'La contraseña ha sido modificada',
                       'title'=>'Mensaje']);
    }else{ 
      echo json_encode(['salida'=>'modal',
                        'msj'=>'La constraseña ingresada es incorrecta',
                       'title'=>'Mensaje']);
    }
    
  }
  
  function indexLogin(){
    $this->view('indexAdmin');
  }
  
  function contact(){
    $destino ="alejoali2018@gmail.com";
//    $nombre = $_POST ['nombre'];
//    $correo = $_POST ['correo'];
//    $mensaje = $_POST ['mensaje'];

    $cabecera = 'From:' .$this->correo. ''."r\n".
                'Replay-To:' .$this->correo. ''."r\n".
                'X-Mailer: PHP/' .phpversion();

    $contenido = "Nombre: ".$this->nombre."\nCorreo: ".$this->correo."\nMensaje: ".$this->mensaje;

    mail($destino,"Respuesta del formulario de contacto",$contenido,$cabecera);
//    header("Location: ../index.php");
    echo json_encode(['salida'=>'contact',
                        'msj'=>'XD']);
  }
  
  function buscar(){

    $model=new Model('cliente');

    $salida = "";
    $query = "SELECT * FROM cliente ORDER By id";

    if (isset($this->consulta)) {
      $query = "SELECT id,nombre,correo,telefono,direccion,sexo,fecha_nac FROM cliente WHERE id LIKE '%" .$this->consulta."%' OR nombre LIKE '%" .$this->consulta."%' OR correo LIKE '%" .$this->consulta."%' OR telefono LIKE '%" .$this->consulta."%' OR direccion LIKE '%" .$this->consulta."%' OR sexo LIKE '%" .$this->consulta."%' OR fecha_nac LIKE '%" .$this->consulta."%' ";
    }

    $resultado = $model->sql($query);

    if ($resultado!=false) {
      $salida.="<table class='tabla_datos table table-striped'>
              <thead>
                  <tr id='titulo'>
                      <th>ID</th>
                      <th>NOMBRE</th>
                      <th>CORREO</th>
                      <th>TELEFONO</th>
                      <th>DIRECCION</th>
                      <th>SEXO</th>
                      <th>FECHA NACIMIENTO</th>
                  </tr>

              </thead>


      <tbody>";

      foreach($resultado as $key=>$value){
          $salida.="<tr>
                      <td>".$value->id."</td>
                      <td>".$value->nombre."</td>
                      <td>".$value->correo."</td>
                      <td>".$value->telefono."</td>
                      <td>".$value->direccion."</td>
                      <td>".$value->sexo."</td>
                      <td>".$value->fecha_nac."</td>
                  </tr>";

      }
      $salida.="</tbody></table>";
    }else{
      $salida.="NO HAY DATOS :(";
    }

    echo $salida;

  }

}