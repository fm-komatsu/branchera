<nav class="footerNav">

  <ul class="footerNav-item">
    <li class="footerNav-btn"><a href="<?php echo $base_url?>/"><span>ホーム</span></a></li>
    <li class="footerNav-btn"><a href="<?php echo $base_url?>/news/"><span>ニュース一覧</span></a></li>
    <?php if($ssoFlag == 1){ ?>
    <li class="footerNav-btn mypage"><a href="<?php echo $mytop_url ?>" target="_blank"><span>マイページ</span></a></li>
    <li class="footerNav-btn logout"><a href="<?php echo $logout_url ?>" ><span>ログアウト</span></a></li>
    <?php }else { ?>
    <li class="footerNav-btn signup"><a href="<?php echo $myentry_url?>" target="_blank"><span>新規登録（無料）</span></a></li>
    <li class="footerNav-btn  login"><a href="<?php echo $login_url ?>" ><span>ログイン</span></a></li>
    <?php }; ?>
    
  </ul>

  <ul class="footerNav-item">
    <li class="footerNav-btn">
      <a href="<?php echo $base_url?>/magazine/"><span>ブランシエラマガジン</span></a>
    </li>
    <li class="footerNav-sub tags">
      <h5 class="tags-ttl">人気ワード</h5>
      <?php echo show_search_words("magazine",$search_link); ?>
    </li>
  </ul>

  <ul class="footerNav-item">
    <li class="footerNav-btn"><a href="<?php echo $base_url ?>/gift/"><span>会員さま特典</span></a></li>
    <div class="footerNav-sub tags">
      <h5 class="tags-ttl">人気ワード</h5>
      <?php echo show_search_words("gift",$search_link); ?>
    </div>
  </ul>

  <ul class="footerNav-item">
    <li class="footerNav-btn"><a href="<?php echo $base_url ?>/smile/"><span>住まいレージをつかう</span></a></li>
    <li class="footerNav-btn"><a href="<?php echo $base_url ?>/smile/about.php"><span>住まいレージとは？</span></a></li>
    <div class="footerNav-sub tags">
      <h5 class="tags-ttl">人気ワード</h5>
      <?php echo show_search_words("exchange-hcg",$search_link); ?>
    </div>
  </ul>

  <ul class="footerNav-item">
    <li class="footerNav-btn down"><a href="<?php echo $base_url?>/event"><span>アンケート・イベント</span></a></li>
    <div class="footerNav-sub tags">
      <h5 class="tags-ttl">人気ワード</h5>
      <?php echo show_search_words("event",$search_link); ?>
    </div>
  </ul>

  <ul class="footerNav-item">
    <li class="footerNav-btn"><a href="<?php echo $base_url?>/mansion/"><span>販売中の物件情報</span></a></li>
  </ul>

  <ul class="footerNav-item">
    <li class="footerNav-btn"><a href="<?php echo $base_url?>/about/"><span>ブランシエラクラブとは？</span></a></li>
    <li class="footerNav-btn"><a href="<?php echo $base_url?>/about/brand.php"><span>ブランシエラブランド</span></a></li>
    <li class="footerNav-btn"><a href="<?php echo $base_url?>/about/history.php"><span>ブランシエラの歴史</span></a></li>
    <li class="footerNav-btn"><a href="<?php echo $base_url?>/about/post.php"><span>ブランシエラクラブポスト</span></a></li>
    <li class="footerNav-btn"><a href="<?php echo $base_url?>/about/faq.php"><span>よくあるご質問</span></a></li>
  </ul>

  <ul class="footerNav-item">
    <li class="footerNav-btn "><a href="<?php echo $base_url?>/sitemap/"><span>サイトマップ</span></a></li>
    <li class="footerNav-btn "><a href="<?php echo $base_url?>/rules/"><span>当サービスのご利用について</span></a></li>
    <li class="footerNav-btn "><a href="<?php echo $base_url?>/rules/id.php"><span>長谷工ID利用規約</span></a></li>
    <li class="footerNav-btn contact"><a href="<?php echo $base_url ?>/form/form-contact/" target="_blank" class="a-blank"><span>お問い合わせ</span></a></li>
  </ul>

</nav>