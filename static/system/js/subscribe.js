function subscribe(){
    var success = '<span class="fa fa-check-circle"></span>',
	loading = '<span class="fa fa-spinner fa-pulse fa-fw"></span>',
	error = '<span class="fa fa-times-circle"></span>';

    $('#ajax_subscribe').removeClass('alert-danger');
	$('#ajax_subscribe').addClass('alert-warning');
	$('#ajax_subscribe').html(loading + '<b>Enviando Mensaje...</b>');
	$('#ajax_subscribe').removeClass('hide');
    $.ajax({
        type: 'POST',
        url: 'app/ajax/subscribe',
        data: $('#subscribe_form').serialize(),
        success: function(respuesta){
            console.log(respuesta);
            var obj = $.parseJSON(respuesta);
            if (obj.success == true) {
                $('#ajax_subscribe').removeClass('alert-warning');
                $('#ajax_subscribe').removeClass('alert-danger'); 
                $('#ajax_subscribe').addClass('alert-success');
                $('#ajax_subscribe').html(success + ' ' + obj.msg);
                setTimeout(function(){
                    location.reload();
                }, 100); 
            }else{
                $('#ajax_subscribe').removeClass('alert-warning');
                $('#ajax_subscribe').addClass('alert-danger'); 
                $('#ajax_subscribe').html(error + ' ' + obj.msg);
            }
        },
        error: function(){
            alert('#ERROR#');
        }
    });
}

if (document.getElementById('subscribe_submit')) {
    document.getElementById('subscribe_submit').addEventListener('click', function(){
        subscribe();
    });
}
if (document.getElementById('subscribe_form')) {
    document.getElementById('subscribe_form').addEventListener('submit', function(e){ e.preventDefault(); return false; });
    document.getElementById('subscribe_form').addEventListener('keypress', function(e){
        if(!e) e = window.event;
        var k = e.keyCode || e.which;
        if (k == 13) {
            subscribe();
        }
    });
}
