<?php
//base
include("../../function.php");
$content = get_id_data('10046');
$pageTtl = $content['title'];
//meta
$metaTtl = 'スマイルで交換できる「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];
//bodyClass
$body_class = "page-article";
//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/smile/", "住まいレージ");
    include($inc_path . "/lib/inc/pan.php");
    ?>
    <?php
    $smile_flug = "exchange_multiple_original_coffee"; // exchange or lottery or service or no_flp
    $multi_cnt = "originalcoffee";
    include($inc_path . "/lib/inc/page/_smile/smile-header_originalcoffee.php");
    ?>
    <div class="u-column emergency__nav mb2 mt2_sp">
      <div class="u-column__2">
        <div class="u-column__item mb2_sp">
          <a href="#coffee_beans" data-scroll data-ga-click="imakura_coffee_1">
            <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee/btn__coffee_beans@2x.jpg" class="u-only__pc u-img__max u-btn__shadow" alt="オリジナルブレンドコーヒー　豆">
            <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee/btn__coffee_beans_sp@2x.jpg" class="u-only__sp u-img__max u-btn__shadow" alt="オリジナルブレンドコーヒー　豆">
          </a>
        </div>
        <div class="u-column__item">
          <a href="#drip_bag" data-scroll data-ga-click="imakura_coffee_2">
            <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee/btn__drip_bag@2x.jpg" class="u-only__pc u-img__max u-btn__shadow" alt="オリジナルブレンドコーヒー　ドリップパックセット">
            <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee/btn__drip_bag_sp@2x.jpg" class="u-only__sp u-img__max u-btn__shadow" alt="オリジナルブレンドコーヒー　ドリップパックセット">
          </a>
        </div>
      </div>
    </div>
    <div class="mb4 center">
      <a href="https://www.and-racine.com/c-item-detail?ic=000000000106" data-ga-click="imakura_coffee-hanbai1" target="_blank" class="center">
        <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee/imakura_coffee_online@2x.jpg" class="u-only__pc u-img__max center" style="max-width:791px;" alt="オリジナルブレンドコーヒー　オンライン販売">
        <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee/imakura_coffee_online-sp@2x.jpg" class="u-only__sp u-img__max" alt="オリジナルブレンドコーヒー　オンライン販売">
      </a>
    </div>
    <section class="main__wrapper">
      <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item_center">
            <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee_img1@2x.png" alt="<?php echo $pageTtl ?>｜image" style="max-width:350px;" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item_center">
            <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee_img2@2x.png" alt="<?php echo $pageTtl ?>｜image" style="max-width:350px;" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item_center">
            <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee_img3@2x.png" alt="<?php echo $pageTtl ?>｜image" style="max-width:350px;" class="u-img__max" loading="lazy">
          </figure>
        </div>
      </div>
      <div class="lottery-point" id="point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">【放香堂加琲】とは…</h4>
          <p>
            約150年前の慶応三年（1868年）、神戸では新たに神戸港が開港され、​諸外国との貿易の幕が開けました。​京都の茶の里である南山城和束村にて宇治茶の製造・卸を営み、松平家のお抱え​商人であった「放香堂」は、明治七年（1874年）に神戸・元町にて宇治茶の​輸出・小売りを行う店を開店。また、並行してコーヒー豆の輸入も手掛け、​明治十一年（1878年）日本で初めて「店頭でのコーヒー飲用自由」を謳った​新聞広告（讀賣新聞）を掲載するに至り、「日本最古のコーヒー店」といわれる​所以となっています。
          </p>
          <h4 class="lottery-point__ttl">【夏にぴったり！】ドリップバッグを使ったアイスコーヒーもおすすめ</h4>
          <div class="u-clearfix mb3">
            <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee_img4@2x.jpg" alt="<?php echo $pageTtl ?>｜image" style="max-width:196px;" class="u-float__right u-img__max u-only__pc" loading="lazy">
            <p class="mb2 mb2_sp">
              暑くなる季節には、いま暮らCafé× 放香堂加琲オリジナルブレンドコーヒーをぜひアイスで楽しんでいただきたいです！ドリップバッグで普通に抽出した量(120～180cc) を氷を多めにしたグラスに注ぐと美味しくお飲みいただけます。コツはすぐに冷やすこと！また、麦茶のように作り置きして冷蔵庫で冷やしておくのもおすすめです！
            </p>
            <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee_img4-sp@2x.jpg" alt="<?php echo $pageTtl ?>｜image" style="max-width:85%;" class="u-img__max center u-only__sp mb2_sp" loading="lazy">
            <small class="u-small">※写真はイメージです。<br>※看板のロゴ「放香堂加琲」の中の「加」は現代とは使い方が違いますが、​この木版画の中で使用されている当時の使い方に倣っています。</small>
            <br>​【放香堂加琲HP】<a href="http://www.hokodocoffee.com/" target="_blank" rel="nofollow" class="u-icon">http://www.hokodocoffee.com/</a>
          </div>
        </div>

        <div class="smile-comment u-assist">
          <div class="smile-comment__row">
            <p>
              「なぜ神戸の珈琲店と長谷工が？」と思われる方もいらっしゃるかもしれません。​実は長谷工の創業の地も兵庫なんです。<br>おうち時間が多くなっている昨今、​おうちで本格的な珈琲を楽しまれる方が増えているとお聞きし、“いま”と“昔”のコラボレーションを企画しました！ぜひ、歴史を感じながらご賞味ください。​
            </p>
          </div>
        </div>
      </div>
    </section>
    <nav class="main__snav snav emergency__nav">
      <?php include($inc_path . "/lib/inc/page/_smile/__snav_ex-originalcoffee.php"); ?>
    </nav>
    <section class="main__wrapper mb2">
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl_nonum mb4" id="coffee_beans">【いま暮ら珈琲】オリジナルブレンドコーヒー（豆）</h4>
          <?php // 欠品フラグ
          $multiShortage = 0;
          ?>
          <div class="flex between lottery-terms">
            <figure class="w35 center_sp mb3_sp">
              <img data-src="<?php echo $img_url . '/smile/article/exchange-coffee_bean.jpg' ?>" data-retina="<?php echo $img_url; ?>/smile/article/exchange-coffee_bean@2x.jpg" alt="【いま暮ら珈琲】オリジナルブレンドコーヒー（豆）" style="max-width:240px" class="u-img__max" loading="lazy">
            </figure>
            <div class="w65 u-terms u-terms__row">
              <div class="<?php if (isset($multiShortage) && $multiShortage) { ?>mb6_sp<?php } else { ?>mb2_sp<?php } ?>">
                <div class="mb1">
                  <h5 class="u-terms__ttl">詳細スペック</h5>
                  <div class="u-terms__inner u-list__dl_table_multi">
                    <dl>
                      <dt>内容量</dt>
                      <dd>100g×2袋</dd>
                    </dl>
                    <dl>
                      <dt>産地</dt>
                      <dd>イエメン・ペルー・コロンビア​</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="smile-footer mb3">
        <?php
        $smile_itemname = "【いま暮ら珈琲】オリジナルブレンドコーヒー（豆）"; //商品名
        $smile_num = "4,000"; //必要スマイル数
        $smile_id_test = "213"; //テストFLP用リンクナンバー
        $smile_id_production = "213"; //本番FLP用リンクナンバー
        if (isset($multiShortage) && $multiShortage) {
          include($inc_path . "/lib/inc/page/_smile/smile-footer-shortage.php");
        } else {
          include($inc_path . "/lib/inc/page/_smile/smile-footer.php");
        }
        ?>
      </div>
      <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。<br>※賞味期限は製造から1年間です。</small>
    </section>
    <div class="flex mb5">
      <a href="#point" data-scroll class="u-ilblock center" data-ga-click="imakura_coffee_3">
        <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee/btn__point@2x.jpg" class="u-only__pc u-img__max center u-btn__hard-light" style="max-width:400px;" alt="いま暮ら珈琲のポイントはこちら" loading="lazy">
        <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee/btn__point_sp@2x.jpg" class="u-only__sp u-img__max center u-btn__hard-light" style="max-width:85%;" alt="いま暮ら珈琲のポイントはこちら" loading="lazy">
      </a>
    </div>

    <section class="main__wrapper mb2">
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl_nonum mb4" id="drip_bag">【いま暮ら珈琲】オリジナルブレンドコーヒー（ドリップバッグセット）</h4>
          <?php // 欠品フラグ
          $multiShortage = 0;
          ?>
          <div class="flex between lottery-terms">
            <figure class="w35 center_sp mb3_sp">
              <img data-src="<?php echo $img_url . '/smile/article/exchange-coffee_drip.jpg' ?>" data-retina="<?php echo $img_url; ?>/smile/article/exchange-coffee_drip@2x.jpg" alt="【いま暮ら珈琲】オリジナルブレンドコーヒー（ドリップバッグセット）" style="max-width:240px" class="u-img__max" loading="lazy">
            </figure>
            <div class="w65 u-terms u-terms__row">
              <div class="<?php if (isset($multiShortage) && $multiShortage) { ?>mb6_sp<?php } else { ?>mb2_sp<?php } ?>">
                <div class="mb1">
                  <h5 class="u-terms__ttl">詳細スペック</h5>
                  <div class="u-terms__inner u-list__dl_table_multi">
                    <dl>
                      <dt>内容量</dt>
                      <dd>10g×8個</dd>
                    </dl>
                    <dl>
                      <dt>産地</dt>
                      <dd>イエメン・ペルー・コロンビア​</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="smile-footer mb3">
        <?php
        $smile_itemname = "【いま暮ら珈琲】オリジナルブレンドコーヒー（ドリップバッグセット）"; //商品名
        $smile_num = "2,700"; //必要スマイル数
        $smile_id_test = "211"; //テストFLP用リンクナンバー
        $smile_id_production = "211"; //本番FLP用リンクナンバー
        if (isset($multiShortage) && $multiShortage) {
          include($inc_path . "/lib/inc/page/_smile/smile-footer.php");
        } else {
          include($inc_path . "/lib/inc/page/_smile/smile-footer.php");
        }
        ?>
      </div>
      <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。<br>※賞味期限は製造から1年間です。</small>
    </section>
    <div class="flex mb5">
      <a href="#point" data-scroll class="u-ilblock center" data-ga-click="imakura_coffee_4">
        <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee/btn__point@2x.jpg" class="u-only__pc u-img__max center u-btn__hard-light" style="max-width:400px;" alt="いま暮ら珈琲のポイントはこちら" loading="lazy">
        <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee/btn__point_sp@2x.jpg" class="u-only__sp u-img__max center u-btn__hard-light" style="max-width:85%;" alt="いま暮ら珈琲のポイントはこちら" loading="lazy">
      </a>
    </div>
    <div class="mb5 center">
      <a href="https://www.and-racine.com/c-item-detail?ic=000000000106" data-ga-click="imakura_coffee-hanbai2" target="_blank" class="center">
        <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee/imakura_coffee_online@2x.jpg" class="u-only__pc u-img__max center" style="max-width:791px;" alt="オリジナルブレンドコーヒー　オンライン販売">
        <img src="<?php echo $img_url ?>/smile/article/exchange-original-coffee/imakura_coffee_online-sp@2x.jpg" class="u-only__sp u-img__max" alt="オリジナルブレンドコーヒー　オンライン販売">
      </a>
    </div>

    <aside class="main__item">
      <h3 class="u-ttl__l">よくあるご質問</h3>
      <?php include($inc_path . "/lib/inc/page/_smile/smile-promotion.php") ?>
    </aside>

    <nav class="main__snav snav">
      <?php include($inc_path . "/lib/inc/page/_smile/u-smile-snav.php") ?>
    </nav>

  </article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
