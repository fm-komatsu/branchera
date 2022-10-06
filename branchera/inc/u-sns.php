<?php $thisPageUrl = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>
 <div class="u-sns">
  <a href="https://twitter.com/share?url=<?php echo $thisPageUrl ?>&text=<?php echo $meta_title ?>" onClick="window.open(encodeURI(decodeURI(this.href)), 'tweetwindow', 'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1'); return false;" rel="nofollow" class="tweet">ツイート</a>
  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $thisPageUrl ?>" onClick="window.open(encodeURI(decodeURI(this.href)),'sharewindow','width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=!'); return false;" class="facebook">facebook</a>
</div>