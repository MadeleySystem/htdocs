<div class="container">
	<div class="jumbotron">
		<h1><?php echo $this->error;?></h1>
		<a role="button" class="btn btn-info" href="<?php echo BASE_URL.$mod;?>">Continuar...</a> 
		<script>
			setTimeout(
				function(){
					window.location="<?php echo BASE_URL.$mod?>";//Redireccionamos despues de 2 segundos a el list
				},5000 //Dos segundos para hacer la redirección
			);
		</script>
	</div>
</div>