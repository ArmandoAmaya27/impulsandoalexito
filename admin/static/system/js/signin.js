function usuarios(){
	$('html,body').animate({scrollTop: 0}, 100);
	var success = '<span class="fa fa-check-circle"></span>',
		loading = '<span class="fa fa-spinner fa-pulse fa-fw"></span>',
		error = '<span class="fa fa-times-circle"></span>';

	$('#ajax_signin').removeClass('alert-danger');
	$('#ajax_signin').addClass('alert-warning');
	$('#ajax_signin').html(loading + '<b> Procesando... </b>');
	$('#ajax_signin').removeClass('hide');

	$.ajax({
		type: 'POST',
		url: 'app/ajax/signin',
		data: $('#sign_in').serialize(),
		success: function(response){
			var resp = $.parseJSON(response);
			if (resp.success == true) {
				$('#ajax_signin').removeClass('alert-warning');
				$('#ajax_signin').removeClass('alert-danger');
				$('#ajax_signin').addClass('alert-success');
				$('#ajax_signin').html(success + ' ' + resp.msg);
				setTimeout(function(){
					location.reload();
				}, 1000);
			}else{
				$('#ajax_signin').removeClass('alert-warning');
				$('#ajax_signin').addClass('alert-danger');
				$('#ajax_signin').html(error + ' ' + resp.msg);
			}
		},
		error: function(){
			alert('##ERROR##');
		}
	});

}


if (document.getElementById('signin_submit')) {
	document.getElementById('signin_submit').addEventListener('click', function(){
		$(window).scrollTop(0);
		usuarios();
	});
}

if (document.getElementById('sign_in')) {
	document.getElementById('sign_in').addEventListener('keypress', function(e){
		if (!e) e = window.event;
		var k = e.keyCode || e.which;
		if (k == '13') {
			usuarios();
		}
	});
}