<div class="container">
	<a href="<?php echo BASE_URL."alumno/nuevo";?>" 
	class="btn btn-raised btn-primary">Nuevo</a>
</div>
<section class="container">

	<div class="table-responsive">
	<table class="table table-striped table-hover table-condensed">
		<thead>
			<tr>
				<td>Matricula</td>
				<td>Nombre</td>
				<td>Fecha de Nacimiento</td>			
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($data as $d){
			?>
			<tr>
				<td><?php echo $d->matricula;?></td>
				<td><?php echo $d->nombre;?></td>
				<td><?php echo $d->fecha_nac;?></td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
	</div>
</section>