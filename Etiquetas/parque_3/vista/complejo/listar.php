<div class="container">
	<a href="<?php echo BASE_URL."complejo/nuevo";?>" 
	class="btn btn-raised btn-primary">Nuevo</a>
</div>
<section class="container">

	<div class="table-responsive">
	<table class="table table-striped table-hover table-condensed">
		<thead>
			<tr>
            <td>id</td>
                <td>Tipo de parque</td>
                <td>administracion</td>
				<td>activo</td>			
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($data as $d){
			?>
			<tr>
				<td>
				<a href="<?php echo BASE_URL;?>complejo/actualizar/<?php echo $d->id_complejo;?>">
				<?php echo $d->id_complejo;?>
				   </a>
				</td>
                
				<td><?php echo $d->Tparque;?></td>
				<td><?php echo $d->administracion;?>
                <td><?php echo $d->activos;?>
					<a class="btn btn-primary" href="<?php echo BASE_URL;?>complejo/actualizar/<?php echo $d->id_complejo;?>">
					Editar
				   </a>
				   
					<a class="btn btn-primary" href="#"  data-toggle="modal" data-target="#exampleModal" data-url="<?php echo BASE_URL;?>complejo/eliminar/<?php echo $d->id_complejo;?>">
					Eliminar
				   </a>
				</td>
				
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
	</div>
</section>

<!--Inicio codigo modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Sistema</h4>
      </div>
      <div class="modal-body">
        <form>
         	<h4>¿Desea eliminar el registro?</h4>
          <div class="form-group">
            <span class="info-delete"  class="control-label">Recipient:</span>
            
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary enviar">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!--Fin codigo modal-->