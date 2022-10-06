
$(function(){


	$('.anchor-link').on('click', function(e){
		e.preventDefault();
		var target = $(this).attr('href');
		var pos = $(target).offset().top;
		$('html, body').animate({scrollTop: pos + 'px'}, {duration: 500});
	});


	var topBtn = $('.to-top');
	topBtn.hide();
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	//スクロールしてトップ
	topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});


});