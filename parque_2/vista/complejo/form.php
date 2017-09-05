<div class="container">
 <form class="form-horizontal" action="<?php echo BASE_URL;?>">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputClave" class="col-md-2 control-label">idcomplejo</label>
      
      <div class="col-md-10">
        <input type="text" name="clave" value="<?php echo $obj->idcomplejo;?>" class="form-control" id="inputClave" placeholder="idcomplejo">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputClave" class="col-md-2 control-label">Tparque</label>
      
      <div class="col-md-10">
        <input type="text" name="clave" value="<?php echo $obj->Tparque;?>" class="form-control" id="inputClave" placeholder="Tparque">
      </div>
    </div>

    <div class="form-group">
      <label for="inputClave" class="col-md-2 control-label">Ubicacion</label>
      

      <div class="col-md-10">
        <input type="text" name="clave" value="<?php echo $obj->Ubicacion;?>" class="form-control" id="inputClave" placeholder="Ubicacion">
      </div>
    </div>
    
        <div class="form-group">
      <label for="inputClave" class="col-md-2 control-label">activo</label>
      

      <div class="col-md-10">
        <input type="text" name="clave" value="<?php echo $obj->activo;?>" class="form-control" id="inputClave" placeholder="activo">
      </div>
    </div>
    
   
     <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="button" class="btn btn-default" onClick="location.href='<?php echo BASE_URL;?>complejo'">Cancel</button>
        <button type="submit" class="btn btn-primary">guardar</button>
      </div>
     
    </div>
  </fieldset>
</form>
</div>

 <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="button" class="btn btn-default" onClick="location.href='<?php echo BASE_URL;?>ubicacion'">Tabla Ubicacion</button>
        
      </div>
    </div>
    
  </fieldset>
</form>
</div>