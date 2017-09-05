<div class="container">
 <form class="form-horizontal" method="post" action="<?php echo BASE_URL."complejo/insertar";?>">
  <fieldset>
    <legend>Agregar nuevo Parque</legend>
    
    
<form>
   <div class="form-group">
      <label for="parque" class="col-md-2 control-label">parque</label>
      <div class="col-md-10">
        <input type="text" id="parque" name="parque" class="form-control"  placeholder="parque" required>
      </div>
    </div>
    
     
    <style>
    select:invalid { color: gray;  }
	
</style>
<div class="form-group">
      <label for="lugar" class="col-md-2 control-label" id="lugar">Lugar</label>
      <div class="col-md-10">
  <select name="Lugar"  class="form-control" id="lugar" placeholder="lugar" requiered>
        <option value="" disabled selected hidden>Seleccione colonia</option>
        <option value="Ejido">Ejido</option>
        <option value="villas del sol">villas del sol</option>
        <option value="centro">centro</option>
        <option value="federal">carretera federal</option>
        <option value="Ejido">Bellavista</option>
        <option value="Villamar1">villamar 1</option>
        <option value="ParquesXcaret">Zona Xcaret</option>
        <option value="otro">Otro</option>
        
   </select>
   </div>
 </div>
   

      
       <div class="form-group">
      <label for="ubicacion" class="col-md-2 control-label" id="ubicacion">Ubicacion</label>
      <div class="col-md-10">
  <select name="ubicacion"  class="form-control" id="ubicacion" placeholder="ubicacion" requiered>
        <option value="" disabled selected hidden>Seleccione Ubicacion</option>
        <option value="ubicacion1"></option>
        <option value="ubicacion2">puerto aventuras</option>
        <option value="ubicacion3"> Tulum</option>
        <option value="ubicacion4">Playa del carmen</option>
        <option value="ubicacion5">Cancun</option>
        <option value="ubicacion6">Otro</option>
   </select>
   </div>
 </div>
    </form>
      
     <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-default" onClick="location.href='<?php echo BASE_URL;?>complejo'">Cancel</button>
      </div>
    </div>
  </fieldset>
</form>
</div>