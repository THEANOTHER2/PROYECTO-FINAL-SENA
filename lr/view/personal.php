<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Personal</title>
  
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/style.css">
  
<!--  Archivos JS-->
<!--  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
  <script src="public/js/jquery-3.3.1.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
<!--  <script src="public/js/jquery.gomap-1.3.3.min.js"></script>-->
  <script src="public/js/ej.js"></script>  
<!--  <script src="public/js/script.js"></script>-->
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
          <?php echo $_SESSION['user']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" data-toggle="modal" data-target="#modalPss">Cambiar contraseña</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?c=inicio&a=destroy">Cerrar sesión</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?c=proyecto&a=index">Proyectos</a>
      </li> 
    </ul>
  </div>  
</nav>

<!--------------------------------Empleados--------------------------------->

<div class="father">
  <div class="personal container-fluid" id="personal" style="margin-top:80px;">
    <div class="contenedor">
      <h2 style="text-align: center;color: #8A2F2A">PERSONAL</h2>
      <span class="form-text text-muted text-center mb-4">De click en cualquier tarjeta para editarla</span>
      
      <div class="row justify-content-center">
      <?php
        $x=1;
        if($dat!=false){
          foreach($dat as $key=>$value){
            
            echo '<div class="col-12 col-sm-4 text-center">
              <div class="card" onclick="editarPer('.$value->id.')" style="cursor:pointer">
                <img class="card-img-top" src="'.$value->ruta.'" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Nombre: '.$value->nombre.'<br>
                  Cargo: '.$value->cargo.'<br>
                  Perfil:  '.$value->perfil.'</p>
                </div>
              </div>
            </div>';
            
            if($x==2){
              echo '</div><div class="row">';
            }
     
            $x++;
          }
        }else{
          echo '<p>No hay registros<p>';
        }
      
      ?>
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
  
  function editarPer(id){
//  console.log(id);
  
    $.ajax({
      url:'index.php',
      data:{c:'personal',a:'edit',id:id},
      type:'POST'
    })
    .done(function(res){
      var oRes = {salida:'modal',
                 msj:res,title:'Editar'}
      salida(oRes);
      console.log('success\n'+res)
    })
    .fail(function(res){
      console.log('error\n'+res);
    })
    .always(function(res){
      console.log('complete\n'+res);
    });
  }
   
  

</script>

</body>
</html>