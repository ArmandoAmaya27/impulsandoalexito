$('.file-input-upload').change(function(){

	if (this.files && this.files[0]) {
		var reader = new FileReader(),
			imgName = this.files[0].name,
			url = $('#uploader').attr('action'),
			formData = new FormData($('#uploader')[0]);
			

		reader.onload = function(e){
			$('.file-preview > span').hide();
			$('.file-preview > img').attr('src', e.target.result);
			$('.file-preview > img').fadeIn();
			$('.file_uploader > .image-caption').fadeIn();
			$('.file_uploader > .image-caption > span').html(imgName);
		}

		reader.readAsDataURL(this.files[0]);

		sendAjax('app/ajax/upload', formData);

	}else{
		removeUpload();
		sendAjax('app/ajax/removeUpload', formData, false);
	}

	
});


$('.file-btn-remove').click(removeUpload);

function removeUpload(){
	var formData = new FormData($('#uploader')[0]);
	$('.file_uploader > .image-caption').fadeOut();
	$('.file-preview > img').fadeOut();
	$('.file-preview > span').show();
	$('#ajax_uploader').addClass('hide');
	sendAjax('app/ajax/removeUpload', formData, false);
}

$('.file-preview').click(function(){
	$('.file-input-upload').trigger('click');
});


function sendAjax(url, formDataa, ajaxmsg = true){
	var success = '<span class="fa fa-check"></span>',
		loading = '<span class="fa fa-spinner fa-pulse fa-fw"></span>',
		error = '<span class="fa fa-times-circle"></span>';

	if (ajaxmsg) {
		$('#ajax_uploader').removeClass('alert-danger');
		$('#ajax_uploader').addClass('alert-warning');
		$('#ajax_uploader').html(loading + ' <b>Cargando archivo...</b>');
		$('#ajax_uploader').removeClass('hide');
	}
	

	$.ajax({
		type: 'POST',
		url: url,
		data: formDataa,
		contentType: false,
		processData: false,
		success: function(data){
			if (ajaxmsg) {
				var data = $.parseJSON(data);
				if (data.success == true) {
					$('#ajax_uploader').removeClass('alert-danger');
					$('#ajax_uploader').removeClass('alert-warning');
					$('#ajax_uploader').addClass('alert-success');
					$('#ajax_uploader').html(success + ' '+data.msg);
				}else{
					$('#ajax_uploader').removeClass('alert-success');
					$('#ajax_uploader').removeClass('alert-warning');
					$('#ajax_uploader').addClass('alert-danger');
					$('#ajax_uploader').html(error + ' '+data.msg);
				}
			}else{
				console.log(data);
			}
			
		},
		error: function(){
			alert('##ERROR##');
		}
	});
}