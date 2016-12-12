$(document).ready(function(){
	showTopNav();
	video_card_effects();
	video_cards();
});

function showTopNav(){
	var bandera = false;

	$(window).scroll(function(){

		if ($(window).scrollTop() > 1) {
			if (!bandera) {
				$('.navbar-default').fadeIn(1,function(){
					$(this).animate({
						'opacity': '1'
					});
				});

				bandera = true;
			}
			
		}else{
			if (bandera) {
				$('.navbar-default').fadeOut(1000,function(){
					$(this).animate({
						'opacity': '0'
					});
				});

				bandera = false;
			}
			
		}
	});
}


function video_card_effects(){
	$('.vid_cap').hover(function(){
		var hdesc = $(this).find('.desc').height() + 28;
		$(this).find('.title').animate({'bottom': hdesc});
		$(this).find('.desc').fadeIn();
		$(this).find('.title').css({'padding-bottom': '0'});

	}, function(){
		$(this).find('.title').animate({'bottom': '0'});
		$(this).find('.desc').fadeOut();
		$(this).find('.title').css({'padding-bottom': '16px'});
	});
}

function video_cards(){
	$('.material-card > .mc-btn-action').click(function(){

		var padre = $(this).parent('.material-card'),
			icon = $(this).children('i');

		icon.addClass('fa-spin-fast');

		if (padre.hasClass('mc-active')) {
			padre.removeClass('mc-active');

			setTimeout(function(){
				icon
					.removeClass('fa-arrow-left')
					.removeClass('fa-spin-fast')
					.addClass('fa-bars');
			},800);
		}else{
			padre.addClass('mc-active');

			setTimeout(function(){
				icon
					.removeClass('fa-bars')
					.removeClass('fa-spin-fast')
					.addClass('fa-arrow-left');
			},800);
		}
	});
}