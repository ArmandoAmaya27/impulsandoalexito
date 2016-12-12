function conferencistas(){
	var success = '<span class="fa fa-check"></span>',
		loading = '<span class="fa fa-spinner fa-pulse fa-fw"></span>',
		error = '<span class="fa fa-times-circle"></span>';

	$('#ajax_conferencistas').removeClass('alert-danger');
	$('#ajax_conferencistas').addClass('alert-warning');
	$('#ajax_conferencistas').html(loading + ' <b>Procesando...</b>');
	$('#ajax_conferencistas').removeClass('hide');

	$.ajax({
		type: 'POST',
		url: 'app/ajax/conferencistas_edit',
		data: $('#conferencistas_form').serialize(),
		success: function(response){
			var resp = $.parseJSON(response);
			if (resp.success == true) {
				$('#ajax_conferencistas').removeClass('alert-warning');
				$('#ajax_conferencistas').addClass('alert-success');
				$('#ajax_conferencistas').html(success + ' '+ resp.msg);
				setTimeout(function(){
					location.reload();
				}, 1000);
			}else{
				$('#ajax_conferencistas').removeClass('alert-warning');
				$('#ajax_conferencistas').addClass('alert-danger');
				$('#ajax_conferencistas').html(error + ' '+ resp.msg);
			}
		},
		error: function(){
			alert('##ERROR##');
		}
	});
}
if (document.getElementById('conferencistas_submit')) {
	 document.getElementById('conferencistas_submit').addEventListener('click', function(){
	 	conferencistas();
	 });
}

if (document.getElementById('conferencistas_form')) {
	document.getElementById('conferencistas_form').addEventListener('keypress', function(e){
		if (!e) e = window.event;
		var k = e.keyCode || e.which;
		if (k == '13') {
			conferencistas();
		}
	});
}