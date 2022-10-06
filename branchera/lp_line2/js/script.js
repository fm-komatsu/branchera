//==================================================
// - common.js
//==================================================

/*========================================================
 マウスオーバー
========================================================*/
/*function smartRollover() {
    if(document.getElementsByTagName) {
        var images = document.getElementsByTagName("img");
 
        for(var i=0; i < images.length; i++) {
            if(images[i].getAttribute("src").match("_off."))
            {
                images[i].onmouseover = function() {
                    this.setAttribute("src", this.getAttribute("src").replace("_off.", "_on."));
                }
                images[i].onmouseout = function() {
                    this.setAttribute("src", this.getAttribute("src").replace("_on.", "_off."));
                }
            }
        }
    }
}
 
if(window.addEventListener) {
    window.addEventListener("load", smartRollover, false);
}
else if(window.attachEvent) {
    window.attachEvent("onload", smartRollover);
}*/

/*========================================================
 ページ内スクロール
========================================================*/
$(function(){
   // #で始まるアンカーをクリックした場合に処理
   $('a[href^=#]').click(function() {
      // スクロールの速度
      var speed = 400; // ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top;
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});

/*========================================================
 ウィンドウサイズによって読み込む画像を切り替える
========================================================*/
$(function () {
	var $setElem = $('.switchImg'),
		pcName = '_pc',
		spName = '_sp',
		replaceWidth = 769;

	$setElem.each(function () {
		var $this = $(this);

		function imgSize() {
			var windowWidth = parseInt($(window).width());
			if (windowWidth >= replaceWidth) {
				$this.attr('src', $this.attr('src').replace(spName, pcName)).css({
					visibility: 'visible'
				});
			} else if (windowWidth < replaceWidth) {
				$this.attr('src', $this.attr('src').replace(pcName, spName)).css({
					visibility: 'visible'
				});
			}
		}
		$(window).resize(function () {
			imgSize();
		});
		imgSize();
	});
});

/*========================================================
 アコーディオン
========================================================*/
/* アコーディオン */
$(function(){
	$('nav#navSP ul li.accordion').on('click', function() {
			$('ul',this).slideToggle();
			$(this).toggleClass("active");
	});
});

$(function(){
$('.accordionBox dt').hide();
$('.accordionBox dd').click(function(){
    $(this).toggleClass("active");
    $(this).prev("dt").slideToggle("200");
});
});

/*========================================================
 ページトップへ戻るボタン
========================================================*/
$(function(){
var topBtn=$('#pageTop');
topBtn.hide();
 
//◇ボタンの表示設定
$(window).scroll(function(){
  if($(this).scrollTop()>80){
    //---- 画面を80pxスクロールしたら、ボタンを表示する
    topBtn.fadeIn();
  }else{
    //---- 画面が80pxより上なら、ボタンを表示しない
    topBtn.fadeOut();
  } 
});

// ◇ボタンをクリックしたら、スクロールして上に戻る
topBtn.click(function(){
  $('body,html').animate({
  scrollTop: 0},500);
  return false;
});

});