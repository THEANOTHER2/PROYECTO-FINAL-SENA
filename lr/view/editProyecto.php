<form class="" id="formEdit" enctype="multipart/form-data" action="index.php?c=proyecto&a=update" method="post">
<!--
  <input type="hidden" name="c" value="proyecto">
  <input type="hidden" name="a" value="update">
-->
  <input type="hidden" name="id" value="<?php echo $id; ?>">

  <div class="control-group form-group">
     <div class="controls">
       <label>Titulo:</label>
       <input type="text" class="form-control bg-light" id="titleEdit" name="titleEdit" required value="<?php echo $titulo ?>">
       <div class="help-block"> 
       </div>
     </div>
    </div>
    
    <div class="control-group form-group">
     <div class="controls">
       <label>Descripción:</label>
       <textarea class="form-control bg-light" id="descriptionEdit" name="descriptionEdit" required><?php echo $descripcion ?></textarea>
       <div class="help-block"> 
       </div>
     </div>
    </div>
    
    <div class="control-group form-group">
     <div class="controls">
<!--       <label>Imagen:</label>-->
       <input type="button" class="btn btn-secondary load-image" value="Cargar imagen" style="display:block">
       <input type="file" class="form-control bg-light" id="imageEdit" name="imageEdit" style="display:none" accept="image/*">
       <small class="form-text text-muted">El nombre de las imagenes deben ser alfanumérico y sin tildes</small>
       <small class="form-text text-muted">Las imagenes subidas se redimensionarán</small>
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