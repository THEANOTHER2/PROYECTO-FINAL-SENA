<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cliente</title>
  
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/style.css">
  
<!--  Archivos JS-->
<!--  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
  <script src="public/js/jquery-3.3.1.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
<!--  <script src="public/js/jquery.gomap-1.3.3.min.js"></script>-->
  <script src="public/js/ej.js"></script> 
  <script src="public/js/main.js"></script> 
<!--  <script src="public/js/script.js"></script>-->

  <style>
    #titulo{
      background-color: #484747;
      color: white;
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
      <li class="nav-item">
        <a class="nav-link" href="index.php?c=personal&a=index">Personal</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="index.php?c=proyecto&a=index">Proyectos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['user']; ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" data-toggle="modal" data-target="#modalPss">Cambiar contraseña</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?c=inicio&a=destroy">Cerrar sesión</a>
        </div>
      </li> 
    </ul>
  </div>  
</nav>

<div class="formulario" style="margin-top:100px">
<!--  <label for="caja_busqueda">Buscar</label>-->
  <input type="text" class="form-control bg-light m-auto text-center" name="caja_busqueda" id="caja_busqueda" placeholder="Buscar" style="max-width:500px">	
</div>

<div class="table-responsive mt-4" id="datos"></div>
<!--
<div class="table-responsive mt-4">
  <table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Telefono</th>
      <th>Dirección</th>
      <th>Sexo</th>
      <th>Fecha de nacimiento</th>
    </tr>
  </thead>
  <tbody>

<?php //var_dump($dat);
//  var_dump($menu);
  if($dat!=false){
    foreach($dat as $key=>$value){ 
      echo '<tr><td>'.$value->id.'</td><td>'.$value->nombre.'</td><td>'.$value->correo.'</td><td>'.$value->telefono.'</td><td>'.$value->direccion.'</td><td>'.$value->sexo.'</td><td>'.$value->fecha_nac.'</td></tr>';
  
    }
  }else{
    echo '<tr><td class="text-center" colspan="3">No hay registros</td></td>';
  }
  
?>

  </tbody>

</table>  
</div>
-->


<!-------------------------------Modal Cambio contra-------------------------->

<div class="modal fade" id="modalPss">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Cambio de contraseña</h3>
        <button type="button" data-dismiss="modal" class="close">
          <span>x</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formPass" class="btnAjax">
        
          <input type="hidden" name="c" value="inicio">
          <input type="hidden" name="a" value="cambioP">

          <div class="control-group form-group">
           <div class="controls">
             <label>Contraseña actual:</label>
             <input type="password" class="form-control bg-light" id="passA" name="passA" required>
             <div class="help-block"> 
             </div>
           </div>
          </div>

          <div class="control-group form-group">
           <div class="controls">
             <label>Contraseña nueva:</label>
             <input type="password" class="form-control bg-light" id="passN" name="passN" required>
             <div class="help-block"> 
             </div>
           </div>
          </div>
          
          <div class="control-group form-group">
           <div class="controls">
             <label>Confirmar contraseña:</label>
             <input type="password" class="form-control bg-light" id="passN2" name="passN2" required>
             <small id="error" class="form-text text-danger" style="display:none">Las dos contraseñas no coinciden</small>
             <div class="help-block"> 
             </div>
           </div>
          </div>

          <input type="submit" class="btn btn-success btn-block" value="Cambiar" id="cambBtn">
        </form>
      </div>
      <div class="modal-footer">
        <input type="button" class="btn btn-primary" value="Cerrar" data-dismiss="modal" autofocus>
      </div>
    </div>
  </div>
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

<script>
  $(document).on('submit','#formPass',function(e){
    console.log('Hiiiii');
    $('#modalPss').modal('hide');
  });
  $("#passN2").change(function(){
    if(($("#passN2").val()) != $("#passN").val()){
      $("#cambBtn").prop("disabled",true);
      $("#error").show();
    }else{
      $("#cambBtn").prop("disabled",false);
      $("#error").hide();
    }
  });
</script>

</body>
</html>