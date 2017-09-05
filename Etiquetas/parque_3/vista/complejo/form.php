<div class="container">
 <form class="form-horizontal" action="<?php echo BASE_URL;?>complejo/Guardar" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputClave" class="col-md-2 control-label">id</label>
        <div class="col-md-10">
        <input type="text" name="clave" value="<?php echo $obj->id_complejo;?>" class="form-control" id="inputClave" placeholder="id">
      </div>
    </div>
      
<div class="form-group">
      <label for="inputClave" class="col-md-2 control-label">Tparque</label>
      <div class="col-md-10">
        <input type="text" name="clave" value="<?php echo $obj->Tparque;?>" class="form-control" id="inputClave" placeholder="Tipo de parque">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">administracion</label>

      <div class="col-md-10">
       <div class="col-md-10">
        <input type="text" name="administracion" value="<?php echo $obj->administracion;?>" class="form-control" id="inputAdministracion" placeholder=" Administracion">
      </div>
        

      </div>
    </div>
    
        <div class="form-group">
      <label class="col-md-2 control-label">activo   </label>

      <div class="col-md-10">
       <div class="col-md-10">
        <input type="text" name="clave" value="<?php echo $obj->activos;?>" class="form-control" id="inputActivos" placeholder=" ">
      </div>
    
    
  
    
    
    
    
    
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="button" class="btn btn-default" onClick="location.href='<?php echo BASE_URL;?>complejo'">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  

 