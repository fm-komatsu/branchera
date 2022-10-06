(function ($) {

	$(function () {
		var $elem = $('.imgswitch');
		var sp = '_sp.';
		var pc = '_pc.';
		var replaceWidth = 736;

		function imageSwitch() {
			var windowWidth = parseInt($(window).width());
			$elem.each(function () {
				var $this = $(this);
				if (windowWidth >= replaceWidth) {
					$this.attr('src', $this.attr('src').replace(sp, pc));
				} else {
					$this.attr('src', $this.attr('src').replace(pc, sp));
				}
			});
		}
		imageSwitch();

		var delayStart;
		var delayTime = 100;
		$(window).on('resize', function () {
			clearTimeout(delayStart);
			delayStart = setTimeout(function () {
				imageSwitch();
			}, delayTime);
		});
	});

	/*
	$(function () {
		$(function(){
			setTimeout(function(){
				$('.keyvisual_dec').addClass("is-action");
				$('.keyvisual_dec2').addClass("is-action2");
			},500);
		});
	});
	*/

})(jQuery);

$(window).on('load scroll', function () {
	add_class_in_scrolling($('.js-dec01'));
});

// スクロールで要素が表示された時にclassを付与する
function add_class_in_scrolling(target) {
	var winScroll = $(window).scrollTop();
	var winHeight = $(window).height();
	var scrollPos = winScroll + winHeight;

	if (target.offset().top < scrollPos) {
		$(".present_dec01").addClass('is-show01');
		$(".present_dec02").addClass('is-show02');
	}
}