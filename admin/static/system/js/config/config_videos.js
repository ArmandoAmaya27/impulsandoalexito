function configuration(){
	$('html,body').animate({scrollTop: 0}, 100);
	var success = '<span class="fa fa-check-circle"></span>',
		loading = '<span class="fa fa-spinner fa-pulse fa-fw"></span>',
		error = '<span class="fa fa-times-circle"></span>';

	$('#ajax_config').removeClass('alert-danger');
	$('#ajax_config').addClass('alert-warning');
	$('#ajax_config').html(loading + ' <b>Procesando...</b>');
	$('#ajax_config').removeClass('hide');

	$.ajax({
		type: 'POST',
		url: 'app/ajax/config_videos',
		data: $('#config_form').serialize(),
		success: function(response){
			var resp = $.parseJSON(response);
			if (resp.success == true) {
				$('#ajax_config').removeClass('alert-warning');
				$('#ajax_config').addClass('alert-success');
				$('#ajax_config').html(success + ' '+ resp.msg);
				setTimeout(function(){
					location.reload();
				}, 1000);
			}else{
				$('#ajax_config').removeClass('alert-warning');
				$('#ajax_config').addClass('alert-danger');
				$('#ajax_config').html(error + ' '+ resp.msg);
			}
		},
		error: function(){
			alert('##ERROR##');
		}
	});
}
if (document.getElementById('config_submit')) {
	 document.getElementById('config_submit').addEventListener('click', function(){
	 	configuration();
	 });
}

if (document.getElementById('config_form')) {
	document.getElementById('config_form').addEventListener('keypress', function(e){
		if (!e) e = window.event;
		var k = e.keyCode || e.which;
		if (k == '13') {
			configuration();
		}
	});
}