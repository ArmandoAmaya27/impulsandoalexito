$(document).ready(function(){
	$('.form-group:has(span.caracteres_contador) textarea').keyup(contar_textarea);
	$('.tabpg').click(user_edit_tophd);
});


function contar_textarea(){
	var chars = $(this).val().length,
		all_chars = 500,
		descontar = all_chars - chars;

	$(this).parent().parent().children('.caracteres_contador').text(descontar);
	
}

function user_edit_tophd(){
	var lipain = $(this).parent().index();
	if (lipain == 1) {
		$('.user-info-profile .tophd button').fadeIn();
	}else{
		$('.user-info-profile .tophd button').fadeOut();
	}
}

