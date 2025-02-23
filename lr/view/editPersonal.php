<form class="" id="formEdit" enctype="multipart/form-data" action="index.php?c=personal&a=update" method="post">
<!--
  <input type="hidden" name="c" value="proyecto">
  <input type="hidden" name="a" value="update">
-->
  <input type="hidden" name="id" value="<?php echo $id; ?>">

  <div class="control-group form-group">
     <div class="controls">
       <label>Nombre:</label>
       <input type="text" class="form-control bg-light" id="nombreEdit" name="nombreEdit" required value="<?php echo $nombre ?>">
       <div class="help-block"> 
       </div>
     </div>
    </div>
    
    <div class="control-group form-group">
     <div class="controls">
       <label>Cargo:</label>
       <input type="text" class="form-control bg-light" id="cargoEdit" name="cargoEdit" required value="<?php echo $cargo ?>">
       <div class="help-block"> 
       </div>
     </div>
    </div>
    
    <div class="control-group form-group">
     <div class="controls">
       <label>Perfil:</label>
       <textarea class="form-control bg-light" id="perfilEdit" name="perfilEdit" required><?php echo $perfil ?></textarea>
       <div class="help-block"> 
       </div>
     </div>
    </div>
    
    <div class="control-group form-group">
     <div class="controls">
<!--
       <label>Imagen:</label>
       <input type="file" class="form-control bg-light" id="imageEdit" name="imageEdit">
-->
       <input type="button" class="btn btn-secondary load-image" value="Cargar imagen" style="display:block">
       <input type="file" class="form-control bg-light" id="imageEdit" name="imageEdit" style="display:none" accept="image/*">
       <small class="form-text text-muted">El nombre de las imagenes deben ser alfanumérico y sin tildes</small>
       <small class="form-text text-muted">Las imagenes subidas deben ser cuadradas, mas no rectangulares</small>
       <div class="help-block"> 
       </div>
     </div>
    </div>
  
  <input type="submit" class="btn btn-success btn-block" value="Cambiar">
</form>

<script>
$(".load-image").on('click',function(){
  $('#imageEdit').click();
});
</script>