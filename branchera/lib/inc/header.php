<header class="header">
  <div class="header__row">
    <div class="header__bg"></div>
    <h1 class="header__logo h-logo">
      <a href="<?php echo $base_url ?>/" class="h-logo__item"><?php echo $metaTtl ?></a>
    </h1>
    <p class="header__desc">暮らしを　もっと楽しく　より快適に<br>長谷工グループの公式クラブサイト</p>
    <nav class="header__hnav hnav">
      <div class="hnav__row">
        <div class="hnav__inner">
          <div class="hnav__links">
            <a href="<?php echo $base_url; ?>/" class="hnav__item home"><span>ホーム</span></a>
            <a href="https://branchera-faq.dga.jp/" target="_blank" class="hnav__item faq"><span>よくあるご質問</span></a>
            <a href="<?php echo $base_url; ?>/sitemap/" class="hnav__item sitemap"><span>サイトマップ</span></a>
            <?php  if ($ssoFlag == 1){ ?>
              <a href="#sns" class="hnav__item official-sns" data-scroll><span>公式SNS</span></a>
            <?php } else { ?>
              <a href="#sns" class="hnav__item official-sns" data-scroll>公式SNS</a>
            <?php } ?>
            <?php  if ($ssoFlag == 1){ ?>
              <a href="<?php echo $base_url; ?>/about/" class="hnav__item about u-only__pc_tab"><span>ブランシエラクラブとは？</span></a>
              <a href="<?php echo $logout_url; ?>" class="hnav__item logout">ログアウト</a>
            <?php }; ?>
          </div>
          <div class="hnav__exs">
            <?php  if ($ssoFlag == 1){ ?>
              <a href="<?php echo $base_url; ?>/about/" class="hnav__item about u-only__tab_pc">ブランシエラクラブとは？</a>
              <?php if (empty($IDinfo["last_name"])) { ?>
                <a href="<?php echo $mytop_url; ?>"  target="_blank"  class="hnav__item name">あなたの保有スマイル：<b><?php echo $IDinfo["pnt_value"]; ?></b>スマイル</a>
              <?php } else { ?>
                <a href="<?php echo $mytop_url; ?>"  target="_blank"  class="hnav__item name"><?php echo $IDinfo["last_name"]." ".$IDinfo["first_name"]; ?> さま / 住まいレージ：<b><?php echo $IDinfo["pnt_value"]; ?></b>スマイル</a>
              <?php } ?>
            <?php }else{ ?>
              <a href="<?php echo $base_url; ?>/about/" class="hnav__item about">ブランシエラクラブとは？</a>
            <?php }; ?>
          </div>
        </div>
        <div class="hnav__btns">
          <?php  if ($ssoFlag == 1){ ?>
            <a href="<?php echo $mytop_url; ?>" target="_blank" class="hnav__item mypage">マイ<br>ページ</a>
          <?php }else{ ?>
            <a href="<?php echo $login_url; ?>" class="hnav__item login">ログイン</a>
            <a href="<?php echo $myentry_url; ?>" class="hnav__item inq">新規登録</a>
          <?php }; ?>
        </div>
      </div>
    </nav>
    <nav class="header__gnav gnav">
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
                <?php echo $IDinfo["last_name"]." ".$IDinfo["first_name"]; ?> さま
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
