function contacto(){
    var success = '<span class="fa fa-check-circle"></span>',
	loading = '<span class="fa fa-spinner fa-pulse fa-fw"></span>',
	error = '<span class="fa fa-times-circle"></span>';

    $('#ajax_contacto').removeClass('alert-danger');
	$('#ajax_contacto').addClass('alert-warning');
	$('#ajax_contacto').html(loading + '<b>Enviando Mensaje...</b>');
	$('#ajax_contacto').removeClass('hide');
    $.ajax({
        type: 'POST',
        url: 'app/ajax/contacto',
        data: $('#contacto_form').serialize(),
        success: function(respuesta){
            console.log(respuesta);
            var obj = $.parseJSON(respuesta);
            if (obj.success == true) {
                $('#ajax_contacto').removeClass('alert-warning');
                $('#ajax_contacto').removeClass('alert-danger'); 
                $('#ajax_contacto').addClass('alert-success');
                $('#ajax_contacto').html(success + ' ' + obj.msg);
                setTimeout(function(){
                    location.reload();
                }, 100); 
            }else{
                $('#ajax_contacto').removeClass('alert-warning');
                $('#ajax_contacto').addClass('alert-danger'); 
                $('#ajax_contacto').html(error + ' ' + obj.msg);
            }
        },
        error: function(){
            alert('#ERROR#');
        }
    });
}

if (document.getElementById('contacto_submit')) {
    document.getElementById('contacto_submit').addEventListener('click', function(){
        contacto();
    });
}
if (document.getElementById('contacto_form')) {
    document.getElementById('contacto_form').addEventListener('submit', function(e){ e.preventDefault(); return false; });
    document.getElementById('contacto_form').addEventListener('keypress', function(e){
        if(!e) e = window.event;
        var k = e.keyCode || e.which;
        if (k == 13) {
            contacto();
        }
    });
}
