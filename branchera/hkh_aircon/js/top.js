
$(function(){


	$('.tel-btn a').on('click', function(e){
		if(getNowDevice() == 'pc') {
			e.preventDefault();
			return;
		}
		ga('send', 'event', 'sp', 'click', 'tel');
		return true;
	});


});