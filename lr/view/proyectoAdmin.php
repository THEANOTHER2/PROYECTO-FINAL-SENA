<!DOCTYPE html>
<html>
<head>
  <title>LR.Carpintería.SAS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/style.css">
  
<!--  Archivos JS-->
<!--  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
  <script src="public/js/jquery-3.3.1.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
<!--  <script src="public/js/jquery.gomap-1.3.3.min.js"></script>-->
  <script src="public/js/ej.js"></script>
  <style>
    body{
/*
      background-image:url(public/img/Fondox.net_textura-de-pared-de-madera_1366x768.jpg);
      background-size: cover;
*/
    }
    
    #t1, #t2{
      background-color: #8a2f2a;
      padding: 20px;
      border-radius: 50px;
      position: relative;
    }
    
    #div{
      height:6rem;
    }
    
    .parent-add{
      padding: 98px 49px;
      border: 1px solid #b6b6b6;
      border-radius: 5px;
      height: 396px;
    }
    
    .fa-plus{
      width: 200px;
      height: 200px;
      background-color: #363636;
      color: white;
      border-radius: 50%;
      font-size: 167px;
      text-align: center;
      padding: 14px;
      cursor: pointer;
      transition: all 600ms cubic-bezier(1,0,0,1);
    }
    
    .fa-plus:hover{
      transform: rotate(90deg);
    }
  </style>
</head>
<body>

<!-------------------------------------------Navbar-------------------------------------------------------------->
<nav class="navbar navbar-dark navbar-expand-md fixed-top" id="navbar">
  <a class="navbar-brand" onclick="to('#sobreN')">LR Carpintería</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav"> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?c=inicio&a=destroy">Cerrar sesión</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?c=cliente&a=index">Clientes</a>
      </li> 
    </ul>
  </div>  
</nav>

<!-------------------------Modal formulario--------------------------->
<!--  <form id="proyectoCreate" class="btnAjax" enctype="multipart/form-data">-->
<div class="modal fade" id="formModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Formulario para añadir proyectos</h3>
        <button type="button" data-dismiss="modal" class="close">
          <span>x</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="proyectoCreate" action="index.php?c=proyecto&a=store" enctype="multipart/form-data" method="post">
      <!--
          <input type="hidden" name="c" value="proyecto">
          <input type="hidden" name="a" value="store">  
      -->
          <div class="control-group form-group">
           <div class="controls">
             <label>Titulo:</label>
             <input type="text" class="form-control bg-light" id="title" name="title" required>
             <div class="help-block"> 
             </div>
           </div>
          </div>

          <div class="control-group form-group">
           <div class="controls">
             <label>Descripción:</label>
<!--             <input type="text" class="form-control bg-light" id="description" name="description" required>-->
             <textarea class="form-control bg-light" id="description" name="description" required></textarea>
             <div class="help-block"> 
             </div>
           </div>
          </div>

          <div class="control-group form-group">
           <div class="controls">
<!--             <label>Imagen:</label>-->
             <input type="button" class="btn btn-secondary load-image" value="Cargar imagen" style="display:block">
             <input type="file" class="form-control bg-light" id="image" name="image" style="display:none" required accept="image/*">
             <small class="form-text text-muted">El nombre de las imagenes deben ser alfanumérico y sin tildes</small>
             <small class="form-text text-muted">Todos los campos son obligatorios</small>
             <small class="form-text text-muted">Las imagenes subidas se redimensionarán</small>
             <div class="help-block"> 
             </div>
           </div>
          </div>

          <input type="submit" class="btn btn-success btn-block" id="enviarmensaje" value="Confirmar">
        </form>
      </div>
      <div class="modal-footer">
        <input type="button" class="btn btn-primary" value="Cerrar" data-dismiss="modal" autofocus>
      </div>
    </div>
  </div>
</div>
 
<!-------------------------Proyetos---------------------------------------->   
<div class="contenedor" style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;margin-top:71px" id="proyect">
  <div class="contenedor_tarjeta parent-add">
<!--  <img src="public/img/icons8_Plus_104px.png" alt="" class="add" data-toggle="modal" data-target="#formModal">-->
  <i class="fas fa-plus" data-toggle="modal" data-target="#formModal"></i>
  </div>
<?php //var_dump($dat);
//  var_dump($menu);
  if($dat!=false){
    foreach($dat as $key=>$value){ 
//        echo '<img src="'.$value->ruta.'">';

      echo '<div class="contenedor_tarjeta" style="margin-bottom:2.5rem">
        <button type="button" class="btn btn-info mb-2" onclick="editar('.$value->id.');">Editar</button>
        <button type="button" class="btn btn-danger mb-2" onclick="eliminar('.$value->id.')">Eliminar</button>
      <figure id="tarjeta">
        <img src="'.$value->ruta.'" class="frontal" alt="">
        <figcaption class="trasera">
          <h2 class="titulo">'.$value->titulo.'</h2>
          <hr>
          <p>'.$value->descripcion.'</p>
        </figcaption>
      </figure>
    </div>';
    }
  }else{
    echo '<p>No hay registros<p>';
  }

?>

</div>
  
<!-------------------------------------------Modal mensaje------------------------------------------------------->

<div class="modal fade" id="msjModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title"></h3>
        <button type="button" data-dismiss="modal" class="close">
          <span>x</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <input type="button" class="btn btn-primary" value="Cerrar" data-dismiss="modal" autofocus>
      </div>
    </div>
  </div>
</div>

<!------------------------------------------Modal de confirmacion------------------------------->

<div class="modal fade" id="confModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Confirmacion</h3>
          <button type="button" data-dismiss="modal" class="close">
            <span>x</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="btnAjax" id="formDel">
            <input type="hidden" name="c" value="proyecto">
            <input type="hidden" name="a" value="delete">
            <input type="hidden" name="id" id="id">
<!--            Desea eliminar el registro con el id: <span id="spanId"></span><br>-->
             ¿Seguro que desea eliminar este proyecto?<br>
            <input type="submit" class="btn btn-danger w-25 mt-4" value="Si">
            <input type="button" class="btn btn-primary w-25 mt-4" value="No" data-dismiss="modal">
          </form>
        </div>
<!--
        <div class="modal-footer">
          <input type="button" class="btn btn-primary" value="Cerrar" data-dismiss="modal">
        </div>
-->
      </div>
    </div>
  </div>
  
  <script>
    
    $(".load-image").on('click',function(){
      $('#image').click();
    });

  </script>  
</body>
</html>