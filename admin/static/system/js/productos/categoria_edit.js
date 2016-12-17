function categorias_create(){
    $('html,body').animate({scrollTop: 0}, 100);
    var success = '<span class="fa fa-check-circle"></span>',
        loading = '<span class="fa fa-spinner fa-pulse fa-fw"></span>',
        error = '<span class="fa fa-times-circle"></span>';

    $('#ajax_categorias').removeClass('alert-danger');
    $('#ajax_categorias').addClass('alert-warning');
    $('#ajax_categorias').html(loading + ' <b>Procesando...</b>');
    $('#ajax_categorias').removeClass('hide');

    $.ajax({
        type: 'POST',
        url: 'app/ajax/categorias_edit',
        data: $('#categorias_form').serialize(),
        success: function(response){
            console.log(response);
            var resp = $.parseJSON(response);
            if (resp.success == true) {
                $('#ajax_categorias').removeClass('alert-warning');
                $('#ajax_categorias').addClass('alert-success');
                $('#ajax_categorias').html(success + ' '+ resp.msg);
                setTimeout(function(){
                    location.reload();
                }, 1000);
            }else{
                $('#ajax_categorias').removeClass('alert-warning');
                $('#ajax_categorias').addClass('alert-danger');
                $('#ajax_categorias').html(error + ' '+ resp.msg);
            }
        },
        error: function(){
            alert('##ERROR##');
        }
    });
}
if (document.getElementById('categorias_submit')) {
     document.getElementById('categorias_submit').addEventListener('click', function(){
        categorias_create();
     });
}

if (document.getElementById('categorias_form')) {
    document.getElementById('categorias_form').addEventListener('keypress', function(e){
        if (!e) e = window.event;
        var k = e.keyCode || e.which;
        if (k == '13') {
            categorias_create();
        }
    });
}