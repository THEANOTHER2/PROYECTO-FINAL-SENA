<!DOCTYPE html>
<html>
<head>
  <title>LR.Carpintería.SAS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/style.css">
  
<!--	<link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>-->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
<!--  Archivos JS-->
<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
<!--	<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>-->
  <script src="public/js/jquery-3.3.1.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
<!--  <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>-->
  <script src="public/js/ej.js"></script>  
  <script src="public/js/script.js"></script>
</head>
<body>

<!-------------------------------------------Navbar-------------------------------------------------------------->
<nav class="navbar navbar-dark navbar-expand-lg fixed-top" id="navbar">
  <a class="navbar-brand" onclick="to('#sobreN')">LR Carpintería</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" onclick="to('#sobreN')">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="to('#SNV')">Sobre nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="to('#personal')" id="personal-link">Personal</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" onclick="to('.proyectos')">Proyecto</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" onclick="to('.contacto')">Contacto</a>
      </li> 
      <li class="nav-item">
          <a class="nav-link" href="#suscripcion" data-toggle="modal" style="color: #EACE9E">Suscripción</a>
      </li>
    </ul>
  </div>  
</nav>

<!-------------------------------------------Banner-------------------------------------------------------------->
<div style="z-index: 2;padding: 0 !important; margin:0 !important;">
  <div class="" id="sobreN" style="position: relative; padding: 50px 0">
    <div style="width: 100%" class="banner" id="banner">
      <div class="d-none d-md-block">LE DAMOS VIDA A SUS SUEÑOS Y USTED LOS DISFRUTA<br>
<!--        <button class="btn btn-lg" onclick="to('.sobreN')">Empezar</button>-->
<!--        <img src="public/img/icons8_Sort_Down_96px.png" onclick="to('#SNV')" alt="Down" style="cursor: pointer">-->
     <i class="fas fa-caret-down" style="font-size:70px;cursor: pointer" onclick="to('#SNV')"></i>
      </div>
    </div>
    
    <!-------------------------------------------Sobre Nosotros-------------------------------------------------->
    <div style="padding-top: 3%">
      <div class="container" id="SNV">
        <h2 style="text-align: center; margin-bottom: 3%;color: #8A2F2A">SOBRE NOSOTROS</h2>
        
        <div  class="row" style="margin-bottom:3%">
           <div class=" col-2 d-none d-md-block" >
             <img class="img-fluid logos" src="public/img/H.png" >
            </div>
            <div class="col-12 col-md-10">
              <h3 class="d-block d-md-none text-center" style="color: #9b9b9b">Historia</h3>
              <p>LR. CARPINTERIA S.AS. Es una empresa creada el 6 de mayo de 2016 debido al gran auge de las empresas constructoras en Ibagué y contando con una experiencia de más de 30 años en el ramo de la carpintería y en especial en la fabricación de cocinas integrales, closets, muebles de baño, puertas y todo lo relacionado con este ramo.

              Después de tantos años trabajando para varias empresas dedicadas a este ramo de la carpintería y por solicitud de uno de los dueños de estas constructoras se toma de decisión de independizarse y crear “L.R. CARPINTERIA S.A.S”.

              Hasta el momento hemos contado con varios contratos en donde se ha dada cabal cumplimiento con calidad y en donde contamos con el personal calificado para cumplir las metas trazadas.

              L.R. CARPINTERIA S.A.S. Es una empresa con muchos deseos de crecer y de posicionarse como una de las mejores empresas caracterizadas por su cumplimiento y calidad.
              </p>
            </div>
          </div>
    
        <div class="row" style="margin-bottom: 3%">
          <div class="col-12 col-md-10">
            <h3 class="d-block d-md-none text-center" style="color: #9b9b9b">Misión</h3>
            <p style="text-align: right;">Somos una empresa especializada en fabricación de cocinas integrales, muebles para baño, closets, muebles para t.v., computador, equipo de sonido y todo lo relacionado con este ramo.
            Nuestros productos están diseñados y fabricados con las mejores materias primas del mercado para el confort y bienestar  de nuestra clientela.</p>
          </div>
        
          <div class=" col-2 d-none d-md-block">
            <img class="img-fluid logos" src="public/img/M.png" alt="">         
          </div>
        </div>


        <div class="row" style="margin-bottom: 3%">
          <div class="d-none d-md-block col-2 ">
            <img class="img-fluid logos" src="public/img/V.png" alt="">
          </div>
          <div class="col-12 col-md-10">
            <h3 class="d-block d-md-none text-center" style="color: #9b9b9b">Visión</h3>
            <p style="text-align: justify;" id="txt">En el año 2024 ser una empresa líder dentro y fuera de la ciudad de Ibagué, dedicada a la fabricación y comercialización de muebles en madera,  creados a base de diseños innovadores y exclusivos para que nuestros clientes se sientan satisfechos en la decoración de sus espacios,  convirtiéndonos en una importante opción en el mercado por nuestra calidad, eficiencia, cumplimiento y rentabilidad. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-------------------------------------------Personal------------------------------------------------------------>
<div class="father" style="z-index: 3">
  <div class="personal container-fluid" id="personal" style="position: relative;background-color: #f1f1f1; padding-top: 50px; padding-bottom: 50px;">
    <div class="contenedor">
      <h2 style="text-align: center; margin-bottom: 3%;color: #8A2F2A">PERSONAL</h2>
      <div class="row justify-content-center">
        <div class="col-12 col-sm-4 text-center">
          <div class="card">
            <img class="card-img-top" src="public/img/user_male.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Nombre:....<br>
              Cargo:....<br>
              Perfil:  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non fermentum lectus.</p>
            </div>
          </div>
        </div>
      
        <div class="col-12 col-sm-4 text-center">
          <div class="card">
            <img class="card-img-top" src="public/img/user_male.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Nombre:....<br>
              Cargo:....<br>
              Perfil:  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non fermentum lectus.</p>
            </div>
          </div>      
         </div>
        </div>
  
        <div class="row" style="margin-bottom: 5%">
          <div class="col-12 col-sm-4 text-center" style="text-align: justify;">
            <div class="card">
              <img class="card-img-top" src="public/img/user_male.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Nombre:....<br>
                Cargo:....<br>
                Perfil:  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non fermentum lectus.</p>
              </div>
            </div>  
          </div>
 
          <div class="col-12 col-sm-4 text-center" style="text-align: justify;">
            <div class="card">
              <img class="card-img-top" src="public/img/user_male.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Nombre:....<br>
                Cargo:....<br>
                Perfil:  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non fermentum lectus.</p>
              </div>
            </div>  
          </div>

          <div class="col-12 col-sm-4  text-center" style="text-align: justify;">
            <div class="card">
              <img class="card-img-top" src="public/img/user_male.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Nombre:....<br>
                Cargo:....<br>
                Perfil:  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non fermentum lectus.</p>
              </div>
            </div>  
          </div>
        </div>  
    </div>
  </div>
</div>

<!-------------------------------------------Proyectos------------------------------------------------------------>
<div class="father" style="z-index: 4">
  <div class="container-fluid proyectos" id="proyectos" style="background-color: #fff;padding-top: 50px;padding-bottom: 50px">
    <h2 style="text-align: center;color: #8A2F2A">PROYECTOS</h2>
<!--
    <div class="contenedor" style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;"> 
      <div class="contenedor_tarjeta">
        <figure id="tarjeta">
          <img src="public/img/1.jpeg" class="frontal" alt="">
          <figcaption class="trasera">
            <h2 class="titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, vero!</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis cupiditate voluptates ipsum suscipit, aspernatur eum, amet nemo architecto nihil corrupti.</p>
          </figcaption>
        </figure>
      </div>

      <div class="contenedor_tarjeta">
        <figure id="tarjeta">
          <img src="public/img/2.jpeg" class="frontal" alt="">
          <figcaption class="trasera">
            <h2 class="titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, vero!</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis cupiditate voluptates ipsum suscipit, aspernatur eum, amet nemo architecto nihil corrupti.</p>
          </figcaption>
        </figure>
      </div>

      <div class="contenedor_tarjeta">
        <figure id="tarjeta">
          <img src="public/img/3.jpeg" class="frontal" alt="">
          <figcaption class="trasera">
            <h2 class="titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, vero!</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis cupiditate voluptates ipsum suscipit, aspernatur eum, amet nemo architecto nihil corrupti.</p>
          </figcaption>
        </figure>
      </div>


      <div class="contenedor_tarjeta">
        <figure id="tarjeta">
          <img src="public/img/4.jpeg" class="frontal" alt="">
          <figcaption class="trasera">
            <h2 class="titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, vero!</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis cupiditate voluptates ipsum suscipit, aspernatur eum, amet nemo architecto nihil corrupti.</p>
          </figcaption>
        </figure>
      </div>

      <div class="contenedor_tarjeta">
        <figure id="tarjeta">
          <img src="public/img/5.jpeg" class="frontal" alt="">
          <figcaption class="trasera">
            <h2 class="titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, vero!</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis cupiditate voluptates ipsum suscipit, aspernatur eum, amet nemo architecto nihil corrupti.</p>
          </figcaption>
        </figure>
      </div>

      <div class="contenedor_tarjeta">
        <figure id="tarjeta">
          <img src="public/img/6.jpeg" class="frontal" alt="">
          <figcaption class="trasera">
            <h2 class="titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, vero!</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis cupiditate voluptates ipsum suscipit, aspernatur eum, amet nemo architecto nihil corrupti.</p>
          </figcaption>
        </figure>
      </div>

      <div class="contenedor_tarjeta">
        <figure id="tarjeta">
          <img src="public/img/7.jpeg" class="frontal" alt="">
          <figcaption class="trasera">
            <h2 class="titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, vero!</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis cupiditate voluptates ipsum suscipit, aspernatur eum, amet nemo architecto nihil corrupti.</p>
          </figcaption>
        </figure>
      </div>

      <div class="contenedor_tarjeta">
        <figure id="tarjeta">
          <img src="public/img/8.jpeg" class="frontal" alt="">
          <figcaption class="trasera">
            <h2 class="titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, vero!</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis cupiditate voluptates ipsum suscipit, aspernatur eum, amet nemo architecto nihil corrupti.</p>
          </figcaption>
        </figure>
      </div>

      <div class="contenedor_tarjeta">
        <figure id="tarjeta">
          <img src="public/img/9.jpeg" class="frontal" alt="">
          <figcaption class="trasera">
            <h2 class="titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, vero!</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis cupiditate voluptates ipsum suscipit, aspernatur eum, amet nemo architecto nihil corrupti.</p>
          </figcaption>
        </figure>
      </div>    
    </div>
-->
    <div class="contenedor" style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
     
      <?php //var_dump($dat);
      //  var_dump($menu);
        if($dat!=false){
    //      foreach($dat as $key=>$value){ 
          for($x=0;$x<9;$x++){
    //        echo '<img src="'.$value->ruta.'">';

            echo '<div class="contenedor_tarjeta" style="margin-bottom:2.5rem">
            <figure id="tarjeta">
              <img src="'.$dat[$x]->ruta.'" class="frontal" alt="">
              <figcaption class="trasera">
                <h2 class="titulo">'.$dat[$x]->titulo.'</h2>
                <hr>
                <p>'.$dat[$x]->descripcion.'</p>
              </figcaption>
            </figure>
          </div>';
          }
        }else{
          echo '<p>No hay registros<p>';
        }

      ?>

    </div>
<!--    <div class="mx-auto my-3" style="width: 80px">-->
      <button class="btn boton mx-auto my-3" onclick="location.href='index.php?c=inicio&a=proyectos'">Ver más</button>
<!--    </div>-->
  </div>
</div>

<!-------------------------------------------Contacto------------------------------------------------------------>
<div class="father" style="z-index: 5">
  <div class="container-fluid contacto" style="background-color: #f1f1f1; padding-bottom: 5%;padding-top: 50px" id="contacto">
    <div class="contenedor">
      <h2 style="text-align: center; color: #8A2F2A; margin-bottom: 5%">CONTACTO</h2>

      <div class="row">
        <div class="col-md-6 col-12">
          <p><i class="fas fa-map-marker-alt"></i><b> Carrera 4a.Tamana 22-34 Barrio el carmen.</b></p>
          
          <p><i class="fas fa-mobile-alt"></i><b> 312-463-9802</b></p>
          
          <p><i class="fas fa-envelope"></i><b> lrcarpinteriasas@gmail.com</b></p>
        </div>
    
        <div class="col-md-6 col-12">
          <form action="config/contacto.php" method="post" accept-charset="utf-8" class="btnAjax" id="formContact">
            <input type="hidden" name="c" value="inicio">
            <input type="hidden" name="a" value="contact">
           
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="correo">Correo</label>
              <input type="text" name="correo" id="correo" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="mensaje">Mensaje</label>
              <textarea rows="5" name="mensaje" id="mensaje" class="form-control" required></textarea> 
            </div>
            
            <button id="button" class="enviar"></button>
            <input type="submit" class="btn" id="enviarBtn" style="display:none">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-------------------------------------------Mapa---------------------------------------------------------------->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1180.5639278045298!2d-75.23042475715114!3d4.439468800975676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38c493d678ca7f%3A0x723dfbed5089f696!2sCra.+4a+%2322-119%2C+Ibagu%C3%A9%2C+Tolima!5e0!3m2!1ses!2sco!4v1537281269815" height="450" frameborder="0" style="border:0; width:100%" allowfullscreen></iframe>

<!------------------------------------------Modal Suscripción----------------------------------------------------------->

<div id="suscripcion" class="modal fade" tabindex="-1">
  <div class="modal-dialog modal-lg">
   <div class="modal-content">
     <div class="modal-header bg-dark">
       <span class="modal-title text-light mb-3"><h3>Formulario Suscripción</h3>Digite sus datos para tener nuestros servicios y ofertas</span>
       <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">x</button>
            
     </div>       
     <form class="bg-dark text-light p-5 rounded btnAjax" name="EnviarMensaje" id="formulariodecontacto">
       <input type="hidden" name="c" value="cliente">
       <input type="hidden" name="a" value="store">  
          
       <div class="control-group form-group">
         <div class="controls">
           <label>Nombre Completo:</label>
           <input type="text" class="form-control bg-light" id="name" name="name" required>
           <div class="help-block"> 
           </div>
         </div>
       </div>

       <div class="control-group form-group">
         <div class="controls">
           <label>Correo Electrónico:</label>
           <input type="email" class="form-control bg-light" id="email" name="email" required>
           <div class="help-block"> 
           </div>
         </div>
       </div>

       <div class="control-group form-group">
         <div class="controls">
           <label>Número de Télefono:</label>
           <input type="tel" class="form-control bg-light" id="phone" name="phone" required>
           <div class="help-block"> 
           </div>
         </div>
       </div>

      <!-- <div class="control-group form-group">
         <div class="controls">
           <label>Ciudad:</label>
           <input type="text" class="form-control bg-light" id="cid" required>
           <div class="help-block"> 
           </div>
         </div>
       </div>-->

       <div class="control-group form-group">
         <div class="controls">
           <label>Dirección:</label>
           <input type="text" class="form-control bg-light" id="direccion" name="direccion" required>
           <div class="help-block"> 
           </div>
         </div>
       </div>

       <div class="control-group form-group">
         <div class="controls">
           <label>Sexo:</label>
           
           <select name="sex" id="sex" class="form-control bg-light">
              
             <option value="m">Masculino</option>
             <option value="f">Femenino</option>
           </select>
           <div class="help-block"> 
           </div>
         </div>
       </div>

       <div class="control-group form-group">
         <div class="controls">
           <label>Fecha de nacimiento:</label>
           <input type="date" class="form-control bg-light" id="fch" name="fn" required>
           <div class="help-block"> 
           </div>
         </div>
       </div>
       <div id="Success"></div><br>
       <input type="submit" class="btn btn-success" id="enviarmensaje" value="Confirmar">

      </form>
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



<!-------------------------------------------Footer-------------------------------------------------------------->
<footer>©Copyright 2018 LR Carpintería - Todos los derechos reservados</footer>

<script>
  $(".enviar").on('click',function(){
    $('#enviarBtn').click();
  });
</script>

</body>
</html>