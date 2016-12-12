function videos(){
	var success = '<span class="fa fa-check"></span>',
		loading = '<span class="fa fa-spinner fa-pulse fa-fw"></span>',
		error = '<span class="fa fa-times-circle"></span>';

	$('#ajax_videos').removeClass('alert-danger');
	$('#ajax_videos').addClass('alert-warning');
	$('#ajax_videos').html(loading + ' <b>Procesando...</b>');
	$('#ajax_videos').removeClass('hide');

	$.ajax({
		type: 'POST',
		url: 'app/ajax/videos_create',
		data: $('#videos_form').serialize(),
		success: function(response){
			
			var resp = $.parseJSON(response);
			if (resp.success == true) {
				$('#ajax_videos').removeClass('alert-warning');
				$('#ajax_videos').addClass('alert-success');
				$('#ajax_videos').html(success + ' '+ resp.msg);
				setTimeout(function(){
					location.reload();
				}, 1000);
			}else{
				$('#ajax_videos').removeClass('alert-warning');
				$('#ajax_videos').addClass('alert-danger');
				$('#ajax_videos').html(error + ' '+ resp.msg);
			}
		},
		error: function(){
			alert('##ERROR##');
		}
	});
}
if (document.getElementById('videos_submit')) {
	 document.getElementById('videos_submit').addEventListener('click', function(){
	 	videos();
	 });
}

if (document.getElementById('videos_form')) {
	document.getElementById('videos_form').addEventListener('keypress', function(e){
		if (!e) e = window.event;
		var k = e.keyCode || e.which;
		if (k == '13') {
			videos();
		}
	});
}