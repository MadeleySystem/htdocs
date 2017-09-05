<div class="container">
	<a href="<?php echo parques_URL."tipodeparque/form";?>" 
	class="btn btn-raised btn-primary">Nuevo</a>
</div>
<section class="container">

	<div class="table-responsive">
	<table class="table table-striped table-hover table-condensed">
		<thead>
			<tr>
				<td>Nombre</td>
				<td>ubicacion</td>
				<td>horario</td>			
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