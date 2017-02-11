$(document).ready(function() {
    

$(function(){

	$("#form").submit(function(e){

			var fields  = $(this).serialize();
			$.post("validarmiformulario",fields,function(data){

					if (data.valid !== undefined) {
						$("#result").html("En hora buena formulario enviado correctamente");
						
					
					}else{
		
						if (data.nombre !== undefined) {
							$("#error_nombre").html(data.nombre);
						}
						if(data.correo !== undefined){
							$("#error_email").html(data.correo);
						}
					}

			});


			return false;
	});
})



});