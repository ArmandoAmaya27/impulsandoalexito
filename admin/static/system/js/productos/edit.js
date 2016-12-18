function productos(){
	$('html,body').animate({scrollTop: 0}, 100);
	var success = '<span class="fa fa-check-circle"></span>',
		loading = '<span class="fa fa-spinner fa-pulse fa-fw"></span>',
		error = '<span class="fa fa-times-circle"></span>';

	$('#ajax_productos').removeClass('alert-danger');
	$('#ajax_productos').addClass('alert-warning');
	$('#ajax_productos').html(loading + ' <b>Procesando...</b>');
	$('#ajax_productos').removeClass('hide');

	$.ajax({
		type: 'POST',
		url: 'app/ajax/productos_edit',
		data: $('#productos_form').serialize(),
		success: function(response){
			var resp = $.parseJSON(response);
			if (resp.success == true) {
				$('#ajax_productos').removeClass('alert-warning');
				$('#ajax_productos').addClass('alert-success');
				$('#ajax_productos').html(success + ' '+ resp.msg);
				setTimeout(function(){
					location.reload();
				}, 1000);
			}else{
				$('#ajax_productos').removeClass('alert-warning');
				$('#ajax_productos').addClass('alert-danger');
				$('#ajax_productos').html(error + ' '+ resp.msg);
			}
		},
		error: function(){
			alert('##ERROR##');
		}
	});
}
if (document.getElementById('productos_submit')) {
	 document.getElementById('productos_submit').addEventListener('click', function(){
	 	productos();
	 });
}

if (document.getElementById('productos_form')) {
	document.getElementById('productos_form').addEventListener('keypress', function(e){
		if (!e) e = window.event;
		var k = e.keyCode || e.which;
		if (k == '13') {
			productos();
		}
	});
}