$(document).ready(function() {
    


	$("#form").submit(function(e){

			var fields  = $(this).serialize();
			$.post("validarmiformulario",fields,function(data){

					if (data.valid !== undefined) {
						$("#result").html("En hora buena formulario enviado correctamente");
						$("#form")[0].reset();
						$("#error_nombre").html('');
							$("#error_email").html('');
					}else{
							$("#error_nombre").html('');
							$("#error_email").html('');
						if (data.nombre !== undefined) {
							$("#error_nombre").html(data.nombre);
						}
						if(data.email !== undefined){
							$("#error_email").hrml(data.email);
						}
					}

			});


			return false;
	});



});