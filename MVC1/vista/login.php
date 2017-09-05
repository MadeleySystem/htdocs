<div class="container">
 <form class="form-horizontal" action="#" 
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputClave" class="col-md-2 control-label">Nombre</label>
      

      <div class="col-md-10">
        <input type="text" name="nombre" value="" class="form-control" id="inputNombre" placeholder="Nombre">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-md-2 control-label">Password</label>

      <div class="col-md-10">
        <input type="password" name="password" value="" class="form-control" id="inputPassword" placeholder="Password">

        
      </div>
    </div>
    
    
    
    
    <div class="form-group">
      <label class="col-md-2 control-label">Estado</label>

      <div class="col-md-10">
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="activo" id="optionsRadios1" value="h" <?php echo ($obj->activo==0)?'checked=checked':' ';?>> 
            Desactivado
          </label>
        </div>
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="activo" id="optionsRadios2" value="m" <?php echo ($obj->activo==1)?'checked=checked':' ';?>>
            Activado
          </label>
        </div>
      </div>
    </div>
    
    
    
    
    
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="button" class="btn btn-default" onClick="location.href='<?php echo BASE_URL;?>carrera'">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
    
    
  </fieldset>
</form>
</div>