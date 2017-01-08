function comentar(){
	var success = '<span class="fa fa-check-circle"></span>', 
	loading = '<span class="fa fa-spinner fa-pulse fa-fw"></span>',
	error = '<span class="fa fa-times-circle"></span>';
	 


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