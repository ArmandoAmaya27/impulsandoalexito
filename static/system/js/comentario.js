function comentar(){
	var success = '<span class="fa fa-check-circle"></span>', 
	loading = '<span class="fa fa-spinner fa-pulse fa-fw"></span>',
	error = '<span class="fa fa-times-circle"></span>';
	
	$('#ajax_comentario').removeClass('alert-danger'); 
	$('#ajax_comentario').addClass('alert-warning'); 
	$('#ajax_comentario').html(loading + '<b>procesando...</b>');
	$('#ajax_comentario').removeClass('hide'); 

	$.ajax({
		type: 'POST',
		url: 'app/ajax/comentar',
		data: $('#form_comentario').serialize(), 
		success: function(respuesta){
			console.log(respuesta);
			var obj = $.parseJSON(respuesta);
			if (obj.success == true) {
				$('#ajax_comentario').removeClass('alert-warning');
				$('#ajax_comentario').removeClass('alert-danger'); 
				$('#ajax_comentario').addClass('alert-success');
				$('#ajax_comentario').html(success + ' ' + obj.msg);
				setTimeout(function(){
				getdatos();
				}, 100); 
			}else{
				$('#ajax_comentario').removeClass('alert-warning');
				$('#ajax_comentario').addClass('alert-danger'); 
				$('#ajax_comentario').html(error + ' ' + obj.msg);
			}
		},
		error: function(){
			alert('ERROR'); 
		}

	});


}

if (document.getElementById('submit_comentario')) {

	document.getElementById('submit_comentario').addEventListener('click', function(){
		comentar();

	});
}

if (document.getElementById('form_comentario')) {

	document.getElementById('form_comentario').addEventListener('keypress', function(e){

		if (!e) e=window.event;

		var key = e.keyCode || e.which;
		if (key==13) {
			comentar();
		}
	});
}

 function getdatos(){

 	var coment = $('#id_coment').val(); 

 	$.ajax({
		type: 'POST',
		url: 'app/ajax/comentarios',
		data: 'id_coment='+coment,
		success: function(respuesta){
			console.log(respuesta);
		$('#comments-list').html(respuesta);
			
		},
		error: function(){
			alert('ERROR'); 
		}

	});


 }

 getdatos(); 