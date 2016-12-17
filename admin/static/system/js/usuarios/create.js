function usuarios(){
	$('html,body').animate({scrollTop: 0}, 100);
	var success = '<span class="fa fa-check-circle"></span>',
		loading = '<span class="fa fa-spinner fa-pulse fa-fw"></span>',
		error = '<span class="fa fa-times-circle"></span>';

	$('#ajax_usuarios').removeClass('alert-danger');
	$('#ajax_usuarios').addClass('alert-warning');
	$('#ajax_usuarios').html(loading + '<b> Procesando... </b>');
	$('#ajax_usuarios').removeClass('hide');

	$.ajax({
		type: 'POST',
		url: 'app/ajax/usuarios_create',
		data: $('#usuarios_form').serialize(),
		success: function(response){
			var resp = $.parseJSON(response);
			if (resp.success == true) {
				$('#ajax_usuarios').removeClass('alert-warning');
				$('#ajax_usuarios').removeClass('alert-danger');
				$('#ajax_usuarios').addClass('alert-success');
				$('#ajax_usuarios').html(success + ' ' + resp.msg);
				setTimeout(function(){
					location.reload();
				}, 1000);
			}else{
				$('#ajax_usuarios').removeClass('alert-warning');
				$('#ajax_usuarios').addClass('alert-danger');
				$('#ajax_usuarios').html(error + ' ' + resp.msg);
			}
		},
		error: function(){
			alert('##ERROR##');
		}
	});

}


if (document.getElementById('usuarios_submit')) {
	document.getElementById('usuarios_submit').addEventListener('click', function(){
		$(window).scrollTop(0);
		usuarios();
	});
}

if (document.getElementById('usuarios_form')) {
	document.getElementById('usuarios_form').addEventListener('keypress', function(e){
		if (!e) e = window.event;
		var k = e.keyCode || e.which;
		if (k == '13') {
			usuarios();
		}
	});
}