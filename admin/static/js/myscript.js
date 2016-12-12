$(document).ready(function(){
	$('.form-group:has(span.caracteres_contador) textarea').keyup(contar_textarea);
});


function contar_textarea(){
	var chars = $(this).val().length,
		all_chars = 500,
		descontar = all_chars - chars;

	$(this).parent().parent().children('.caracteres_contador').text(descontar);
	
}