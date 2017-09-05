<div class="container">
 <form class="form-horizontal" action="<?php echo BASE_URL;?>complejo/Guardar" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputId_complejo" class="col-md-2 control-label">Id</label>
      

      <div class="col-md-10">
        <input type="text" name="id_complejo" value="<?php echo $obj->id_complejo;?>" class="form-control" id="inputid_complejo" placeholder="ID">
      </div>
    </div>
    <div class="form-group">
      <label for="inputNombre" class="col-md-2 control-label">Tipo de parque</label>

      <div class="col-md-10">
        <input type="text" name="Tparque" value="<?php echo $obj->Tparque;?>" class="form-control" id="inputTparque" placeholder="Tipo de parque">

        
      </div>
    </div>
    <div class="form-group">
      <label for="inputfecha_nac" class="col-md-2 control-label">Nombre</label>

      <div class="col-md-10">
        <input type="text" name="administracion" value="<?php echo $obj->administracion;?>" class="form-control" id="inputadministracion" placeholder="Escriba nombre del parque">

        
      </div>
    </div>
    
    
    
    <div class="form-group">
      <label class="col-md-2 control-label">Estado</label>

      <div class="col-md-10">
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="activos" id="optionsRadios1" value="0" <?php echo ($obj->activos=='0')?'checked=checked':' ';?>> 
            Desactivado
          </label>
        </div>
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="activos" id="optionsRadios2" value="1" <?php echo ($obj->activos=='1')?'checked=checked':' ';?>>
            Activado
          </label>
        </div>
      </div>
    </div>
    
    
    
    
    
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="button" class="btn btn-default" onClick="location.href='<?php echo BASE_URL;?>complejo'">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
</div>