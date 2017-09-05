<div class="container">
 <form class="form-horizontal" action="<?php echo BASE_URL;?>alumno/Guardar" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputMatricula" class="col-md-2 control-label">Matricula</label>
      

      <div class="col-md-10">
        <input type="text" name="matricula" value="<?php echo $obj->matricula;?>" class="form-control" id="inputMatricula" placeholder="Matricula">
      </div>
    </div>
    <div class="form-group">
      <label for="inputNombre" class="col-md-2 control-label">Nombre</label>

      <div class="col-md-10">
        <input type="text" name="nombre" value="<?php echo $obj->nombre;?>" class="form-control" id="inputNombre" placeholder="Nombre">

        
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
      <label for="inputfecha_nac" class="col-md-2 control-label">Fecha de Nacimiento</label>

      <div class="col-md-10">
        <input type="date" name="fecha_nac" value="<?php echo $obj->fecha_nac;?>" class="form-control" id="inputfecha_nac" placeholder="Escriba su fecha de nacimiento">

        
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
			echo  "/n/r";
			$carr=$this->carreras;
			foreach($carr as $c)	{
				echo "<option value='".$c->clave."' ".(($obj->carrera==$c->clave)?'selected=selected':'').">".$c->nombre."</option>";
				
				echo  "/n/r";
				
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