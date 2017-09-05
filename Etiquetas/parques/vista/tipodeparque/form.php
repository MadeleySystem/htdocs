<div class="container">
 <form class="form-horizontal" action="<?php echo BASE_URL;?>">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputnombre" class="col-md-2 control-label">Nombre</label>
      

      <div class="col-md-10">
        <input type="text" name="nombre" value="<?php echo $obj->Nombre;?>" class="form-control" id="inputNombre" placeholder="Nombre">
      </div>
    </div>
    <div class="form-group">
      <label for="inputTipoParque" class="col-md-2 control-label">TipoParque</label>

      <div class="col-md-10">
        <input type="text" name="tipoparque" value="<?php echo $obj->TipoParque;?>" class="form-control" id="inputTipoParque" placeholder="Tipoparque">

        
      </div>
    </div>
    
    
    
    
    <div class="form-group">
      <label class="col-md-2 control-label">Sexo</label>

      <div class="col-md-10">
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="sexo" id="optionsRadios1" value="h" <?php echo ($obj->sexo=='h')?'checked=checked':' ';?>> 
            Masculino
          </label>
        </div>
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="sexo" id="optionsRadios2" value="m" <?php echo ($obj->sexo=='m')?'checked=checked':' ';?>>
            Femenino
          </label>
        </div>
      </div>
    </div>
    
  
    
    <div class="form-group">
      <label for="carrera" class="col-md-2 control-label">Carrera</label>

      <div class="col-md-10">
        <select name="carrera" id="carrera" class="form-control">
        
        <?php
			if($obj->carrera==null){
				echo "<option value='' selected=selected >Seleccione una carrera</option>";
			} else {
				echo "<option value=''  >Seleccione una carrera</option>";
			}
			$carr=$this->carreras;
			foreach($carr as $c)	{
				echo "<option value='".$c->clave."' >".$c->nombre."</option>";
				
			}
			
		?>
        </select>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="button" class="btn btn-default" onClick="location.href='<?php echo BASE_URL;?>alumno'">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
</div>