<?php $thisPageUrl = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . HTTP_HOST . $_SERVER["REQUEST_URI"]; ?>

<div class="u-sns__row">
	<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $thisPageUrl ?>" onClick="window.open(encodeURI(decodeURI(this.href)),'sharewindow','width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=!'); return false;" class="u-sns__item facebook"><span class="u-font__palt">シェア</span></a>
	<a href="https://twitter.com/share?url=<?php echo $thisPageUrl ?><?php if (empty($hashTag)) { } else { echo '&hashtags='.$hashTag; } ?>&text=<?php echo $metaTtl;?>" onClick="window.open(encodeURI(decodeURI(this.href)), 'tweetwindow', 'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1'); return false;" rel="nofollow" class="u-sns__item tweet"><span class="u-font__palt">ツイート</span></a>
	<a href="https://social-plugins.line.me/lineit/share?url=<?php echo $thisPageUrl ?>" onClick="window.open(encodeURI(decodeURI(this.href)),'sharewindow','width=550, height=650, personalbar=0, toolbar=0, scrollbars=1, resizable=!'); return false;" class="u-sns__item line"><span class="u-font__palt">LINEで送る</span></a>
</div>
