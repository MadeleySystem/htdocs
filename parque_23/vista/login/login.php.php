<div class="container">
 <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data"<?php echo BASE_URL;?>">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputnombre" class="col-md-2 control-label">nombre</label>
      

      <div class="col-md-10">
        <input type="text" name="nombre" value="<?php echo $obj->matricula;?>" class="form-control" id="inputnombre" placeholder="nombre">
      </div>
    </div>
    <div class="form-group">
      <label for="inputpassword" class="col-md-2 control-label">password</label>

      <div class="col-md-10">
        <input type="password" name="password" value="<?php echo $obj->nombre;?>" class="form-control" id="inputpassword" placeholder="Nombre">

        
      </div>
    </div>
    
    
	
		
			
		?>
        </select>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="button" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary" id="enviar">iniciar sesion</button>
      </div>
    </div>
  </fieldset>
</form>
</div>