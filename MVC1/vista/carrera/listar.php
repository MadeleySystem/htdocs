<div class="container">
	<a href="<?php echo BASE_URL."carrera/nuevo";?>" 
	class="btn btn-raised btn-primary">Nuevo</a>
</div>
<section class="container">

	<div class="table-responsive">
	<table class="table table-striped table-hover table-condensed">
		<thead>
			<tr>
				<td>clave</td>
				<td>Nombre</td>
				<td>activo</td>			
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($data as $d){
			?>
			<tr>
				<td>
				<a href="<?php echo BASE_URL;?>carrera/actualizar/<?php echo $d->clave ;?>">
				<?php echo $d->clave;?>
				   </a>
				</td>
				<td><?php echo $d->nombre;?></td>
				<td><?php echo $d->activo;?>
					<a class="btn btn-primary" href="<?php echo BASE_URL;?>carrera/actualizar/<?php echo $d->clave ;?>">
						Editar
				   </a>
				   
					<a class="btn btn-primary" href="<?php echo BASE_URL;?>carrera/eliminar/<?php echo $d->clave ;?>">
						Eliminar
				   </a>
				</td>
				</td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
	</div>
</section>