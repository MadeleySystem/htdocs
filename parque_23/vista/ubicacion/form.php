<div class="container">
 <form class="form-horizontal" action="<?php echo BASE_URL;?>ubicacion/Guardar" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>Nuevo</legend>
     <div class="form-group">
      <label for="inputId_ubicacion" class="col-md-2 control-label">ID</label>
      

      <div class="col-md-10">
        <input type="text" name="id_ubicacion" value="<?php echo $obj->id_ubicacion;?>" class="form-control" id="inputId" placeholder="ID">
      </div>
    </div>
      <br>
      <br>
      <br>
      
   		
      <div class="form-group">
      <label for="inputClave" class="col-md-2 control-label">Nombre</label>
      

      <div class="col-md-10">
        <input type="text" name="nombre" value="<?php echo $obj->nombre;?>" class="form-control" id="inputName" placeholder="Escriba el nombre">
      </div>
    <br>
    <br>
    </div>
    <div class="form-group">
      <label for="inputNombre" class="col-md-2 control-label">Direccion</label>

      <div class="col-md-10">
        <input type="text" name="direccion" value="<?php echo $obj->direccion;?>" class="form-control" id="inputDireccion" placeholder="Ingrese la Direccion">

        
      </div>
    </div>
    <br>
    
     <div class="form-group">
      <label for="inputNombre" class="col-md-2 control-label">Horarios</label>

      <div class="col-md-10">
        <input type="text" name="horarios" value="<?php echo $obj->horarios;?>" class="form-control" id="inputHorarios" placeholder="Ingrese su Horario">

        
      </div>
      
      
      
      
      
      
      
    </div>  

     
    
    

    
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="button" class="btn btn-default" onClick="location.href='<?php echo BASE_URL;?>ubicacion'">Cancel</button>
        <button type="submit" class="btn btn-primary">guardar</button>
      </div>
    </div>
  

 