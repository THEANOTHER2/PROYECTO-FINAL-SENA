<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <script src="public/js/jquery-3.3.1.js"></script>
<!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>-->
  <script src="public/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="public/css/login.css">
  <script src="public/js/ej.js"></script>
</head>
<body>

	<div class="modal-dialog text-center">
		<div class="col-sm-8 main-section">
			<div class="modal-content">

  			 <div class="col-12 user-img">
  			 	<img src="public/img/perfil.png" alt="">
  			 </div>

  			 <form class="col-12 btnAjax" id="formLogin">
  			   <input type="hidden" name="c" value="inicio">
  			   <input type="hidden" name="a" value="login">
  			 	<div class="form-group">
  			 		<input type="text" class="form-control" placeholder="Nombre De Usuario" name="username" required>	
  			 	</div>
  			 	<div class="form-group">
  			 		<input type="password" class="form-control" placeholder="Contraseña" name="pass" required>	
  			 	</div>
  			 	<button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i>Ingresar</button>
  			 </form>

  			 <div class="col-12 forgot">
               <a href="#">Olvido Su Contraseña?</a> 	
  			 </div>

  			</div>
  		</div>
  	</div>

<!-------------------------------------------Modal mensaje------------------------------------------------------->

<div class="modal fade" id="msjModal">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color:white">
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

</body>
</html>
























