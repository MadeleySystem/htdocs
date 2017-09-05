// JavaScript Document
$(document).ready(function () {

	var LinkDlt = ''; //Se declará una variable global para guardar la URL que se desea eliminar
	var FilaSelect = ''; //Se almacenara la información de la fila a borrar
	$('#exampleModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget); // Se toma la información del boton que envio a llamar al modal
		LinkDlt = button.data('url'); // Se extrae la información del atributo data-*
		//Obtener los datos de las primeras dos columnas de la fila a eliminar
		FilaSelect = $(button).closest('.table tr').addClass('EliminaTR').index(); //Recuperamos el ID de la <TABLE>
		var col0=$(button).closest('.table tr').find('td:eq(0) a').html();//Obtenemos el ID que esta dentro
																		//del hipervinculo de la columna 0
		
		var col1=$(button).closest('.table tr').find('td:eq(1)').html().toUpperCase();//Obtenemos el contenido de la columna 1
		//toUpperCase lo convierte en mayúsculas

		//modal o ventana emergente
		var modal = $(this);//Se toma control del modal y se le coloca la información correspondiente del registro a eliminar
		modal.find('.info-delete').html('El Registro es: <b>' + col0+"</b>  "+col1);
		
	});
	//Evento Click del boton.Enviar del Modal-Bootstrap
	$('.enviar').click(function () {
		$.ajax({
				method: "POST",
				url: LinkDlt
			})
			.done(function (msg) { //Regresa el mensaje del modelo.class que se pudio
				//alert("Respuesta del controlador: " + msg);
				if(msg==1){ //Si regresa 1 debe desaparecer la fila
					$('.table tr:eq('+(FilaSelect+1)+')').addClass('danger').delay(2000).fadeOut(function(){
						$(this).remove(); // remueve el TR
						$('#exampleModal').modal('hide'); //Oculta el modal
						
					});
				} else { //No encontro la clave
					$('.info-delete').html('<span class="label label-danger">'+msg+'</span>').delay(1500,function(){
						$('#exampleModal').modal('hide'); //Oculta el modal
					});
				}
			});
	});


});