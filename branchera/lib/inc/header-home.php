<header class="header-home">
  <div class="header-home__row">
    <div class="hnav-home__exs">
      <?php  if ($ssoFlag == 1){ ?>
          <?php if(empty($IDinfo["last_name"])) { ?>
          <a href="<?php echo $mytop_url; ?>"  target="_blank"  class="hnav-home__item name_none">
            <span class="name__row">あなたの保有スマイル<br><b><?php echo $IDinfo["pnt_value"]; ?></b>スマイル</span>
          </a>
          <?php } else { ?>
          <a href="<?php echo $mytop_url; ?>"  target="_blank"  class="hnav-home__item name">
            <span class="name__row"><?php echo $IDinfo["last_name"]." ".$IDinfo["first_name"]; ?> さま<br><b><?php echo $IDinfo["pnt_value"]; ?></b>スマイル</span>
          </a>
          <?php } ?>

      <?php }else{ ?>
      <?php }; ?>
    </div>
    <div class="header-home__bg"></div>
    <div class="header-home__bg_blue u-only__pc"></div>
    <h1 class="header-home__logo h-logo__home logo__<?php echo $month; ?> center">
      <a href="<?php echo $base_url ?>/" class="h-logo__home__item"><?php echo $metaTtl ?></a>
    </h1>
    <figure class="header-home__desc center">
      <img
        src="<?php echo($img_url) ?>/common/header/catch-copy.png"
        srcset="<?php echo($img_url) ?>/common/header/catch-copy.png 1x,
          <?php echo($img_url) ?>/common/header/catch-copy@2x.png 2x"
        class="u-img__max"
        style="max-width : 258px;"
        alt="暮らしを　もっと楽しく　より快適に　長谷工グループの公式クラブサイト"
      >

    </figure>

    <nav class="header__hnav hnav-home">
      <div class="hnav-home__row">
        <div class="hnav-home__inner">
          <div class="hnav-home__links">
            <a href="<?php echo $base_url; ?>/" class="hnav-home__item home"><span>ホーム</span></a>
            <a href="https://branchera-faq.dga.jp/" target="_blank" class="hnav-home__item faq"><span>よくあるご質問</span></a>
            <a href="<?php echo $base_url; ?>/sitemap/" class="hnav-home__item sitemap"><span>サイトマップ</span></a>
            <a href="<?php echo $base_url; ?>/about/" class="hnav-home__item about"><span>ブランシエラクラブとは？</span></a>
            <a href="#sns" class="hnav-home__item official-sns" data-scroll><span>公式SNS</span></a>
          </div>
        </div>
        <div class="hnav-home__btns">
          <?php  if ($ssoFlag == 1){ ?>
            <a href="<?php echo $logout_url; ?>" class="hnav-home__item logout">ログアウト</a>
          <?php }; ?>
          <?php  if ($ssoFlag == 1){ ?>
            <a href="<?php echo $mytop_url; ?>" target="_blank" class="hnav-home__item mypage">マイ<br>ページ</a>
          <?php }else{ ?>
            <a href="<?php echo $login_url; ?>" class="hnav-home__item login">ログイン</a>
            <a href="<?php echo $myentry_url; ?>" class="hnav-home__item inq">新規登録</a>
          <?php }; ?>
        </div>
      </div>
    </nav>
    <nav class="header-home__gnav gnav">
      <ul class="gnav__row">
        <a href="<?php echo $base_url; ?>/magazine/" class="gnav__item magazine">ブランシエラマガジン</a>
        <a href="<?php echo $base_url; ?>/gift" class="gnav__item gift">優待サービス</a>
        <a href="<?php echo $base_url; ?>/smile" class="gnav__item smile icn-smile">住まいレージ</a>
        <a href="<?php echo $base_url; ?>/event" class="gnav__item event">イベント・キャンペーン</a>
        <a href="<?php echo $base_url; ?>/enquete" class="gnav__item enquete">アンケート</a>
        <a href="<?php echo $base_url; ?>/hcg" class="gnav__item hcg new">長谷工インフォメーション</a>
        <a href="<?php echo $base_url; ?>/about" class="gnav__item about">ブランシエラクラブについて</a>
        <label class="gnav__official-sns u-only__sp">
          <div>公式SNS</div>
          <div class="gnav__sns"><a href="https://www.facebook.com/%E9%95%B7%E8%B0%B7%E5%B7%A5%E3%82%B0%E3%83%AB%E3%83%BC%E3%83%97-%E3%83%96%E3%83%A9%E3%83%B3%E3%82%B7%E3%82%A8%E3%83%A9%E3%82%AF%E3%83%A9%E3%83%96-110727557085783/" target="_blank" rel="nofollow" class="u-officialsns__item_s facebook"><span>facebook</span></a>
          <a href="https://www.instagram.com/haseko_brancheraclub/?igshid=vx5xh8py1t9u" target="_blank" rel="nofollow" class="u-officialsns__item_s insta"><span>Instagram</span></a></div>
        </label>
        <?php if($ssoFlag == 1){ ?>
          <a href="<?php echo $mytop_url; ?>" target="_blank" class="gnav__item name gnav-name">
            <div class="gnav-name__row">
              <div class="gnav-name__item">
                <?php if(empty($IDinfo["last_name"])) { ?>
                  あなたの保有スマイル
                <?php } else { ?>
                  <?php echo $IDinfo["last_name"]." ".$IDinfo["first_name"]; ?> さま
                <?php } ?>
              </div>
              <div class="gnav-name__item">
                住まいレージ：<b><?php echo $IDinfo["pnt_value"]; ?></b>スマイル
              </div>
            </div>
          </a>
        <?php }; ?>
      </ul>
    </nav>
    <label class="header__menubar menubar">
      <div class="menubar__row">
        <span class="menubar__item"></span>
        <span class="menubar__item"></span>
        <span class="menubar__item"></span>
      </div>
      <p class="menu__ex"></p>
    </label>
  </div>
</header>
