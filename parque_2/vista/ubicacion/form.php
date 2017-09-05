<div class="container">
 <form class="form-horizontal" action="<?php echo BASE_URL;?>">
  <fieldset>
    <legend>Nuevo</legend>
    <div class="form-group">
      <label for="inputnombre" class="col-md-2 control-label">nombre</label>
      

      <div class="col-md-10">
        <input type="text" name="nombre" value="<?php echo $obj->nombre;?>" class="form-control" id="inputnombre" placeholder="nombre">
      </div>
    </div>
    <div class="form-group">
      <label for="inputdireccion" class="col-md-2 control-label">direccion</label>

      <div class="col-md-10">
        <input type="text" name="direccion" value="<?php echo $obj->direccion;?>" class="form-control" id="inputdireccion" placeholder="direccion">
      </div>
    </div>   
  <div class="form-group">
      <label for="inputdireccion" class="col-md-2 control-label">horarios</label>

      <div class="col-md-10">
        <input type="text" name="horarios" value="<?php echo $obj->horarios;?>" class="form-control" id="inputdireccion" placeholder="horarios">
      </div>
    </div>   

     
    
    

    
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="button" class="btn btn-default" onClick="location.href='<?php echo BASE_URL;?>ubicacion'">Cancel</button>
        <button type="submit" class="btn btn-primary">guardar</button>
      </div>
    </div>
  </fieldset>
</form>
</div>

  <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="button" class="btn btn-default" onClick="location.href='<?php echo BASE_URL;?>complejo'">Tabla complejo</button>
      </div>
    </div>
  </fieldset>
</form>
</div>