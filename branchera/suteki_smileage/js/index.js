$(window).scroll(function() {
    //ページトップへ戻るボタン
    scrollHeight = $(document).height();
    scrollPosition = $(window).height() + $(window).scrollTop(); 
    footHeight = $(".brcSutekiSeikatsu_footer").outerHeight(); 
    if ((scrollHeight - scrollPosition) <= footHeight) { 
        $(".brcSutekiSeikatsu_pagetop").addClass('is-fixed');
    } else { 
        $(".brcSutekiSeikatsu_pagetop").removeClass('is-fixed');
    }
});

$(function(){
    //スムーズスクロール
    $('a[href^="#"]').click(function(){
        let href= $(this).attr("href");
        let target = $(href == "#" || href == "" ? 'html' : href);
        let position = target.offset().top;
        $("html, body").animate({scrollTop:position}, 'fast', 'linear');
        return false;
    });
    //新規登録の仕方モーダル
    $('.brcSutekiSeikatsu_btn-openModal, .brcSutekiSeikatsu_modal_overlay, .brcSutekiSeikatsu_modal_close').on('click', function() {
        $('.brcSutekiSeikatsu_body').toggleClass('is-modal-open');
        $('.brcSutekiSeikatsu_modal').toggleClass('is-open');
    });
});
