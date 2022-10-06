<?php
//base
include("../../function.php");
$content = get_id_data('10062');
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

// 欠品フラグ
$itemShortage = 0;
?>

<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/smile/", "住まいレージ");
    include($inc_path . "/lib/inc/pan.php");
    ?>
    <?php
    $smile_flug = "exchange"; // exchange or lottery or service or no_flp
    $smile_num = "22,000"; //必要スマイル数
    $smile_id_test = "242"; //テストFLP用リンクナンバー
    $smile_id_production = "242"; //本番FLP用リンクナンバー
    include($inc_path . "/lib/inc/page/_smile/smile-header.php");
    ?>



    <section class="main__wrapper">
      <div class="flex flex_around">
      </div>
      <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img src="<?php echo ($img_url) ?>/smile/article/exchange-airweave-pillow_img1.jpg" alt="エアウィーヴ ブランドアンバサダー 浅田真央さん｜<?php echo $$pageTtl ?> image" style="max-width:350px;" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item">
            <img src="<?php echo ($img_url) ?>/smile/article/exchange-airweave-pillow_img2.jpg" alt="中央部より両サイドが硬くなっております。簡単に中のシートコアを取り出して高さを調整できます。｜<?php echo $$pageTtl ?> image" style="max-width:350px;" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item">
            <img src="<?php echo ($img_url) ?>/smile/article/exchange-airweave-pillow_img3.jpg" alt="簡単に中のシートコアを取り出して高さを調整できます。｜<?php echo $$pageTtl ?> image" style="max-width:350px;" class="u-img__max" loading="lazy">
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl u-font__palt">あおむけ寝でも横向き寝でも理想的な高さをキープ</h4>
          <p class=" u-font__palt mb3 mb2_sp">理想的な高さにキープするため、ピローの両サイドを中央に比べてかたくしました。<br>枕の表面に凹凸をつけるのではなく、かたさ・やわらかさをエアファイバー®の中で連続的に変化させているので、滑らかに寝返りを打つことができます。</p>
          <h4 class="lottery-point__ttl">お好みの高さに調節可能！</h4>
          <p class="u-font__palt mb3 mb2_sp">中に入っている複数枚のシートコアを抜き出すことで、ピロー全体の高さを5mm単位で自由に調整してお使いいただけます。<br>お使いの寝具のかたさや、体形、体格、お好みの高さに寝心地を試しながら対応できる構造になっています。</p>
          <h4 class="lottery-point__ttl u-font__palt">通気性抜群なので、いつでも清潔</h4>
          <p class=" u-font__palt">睡眠時に頭部は最も熱を持ち、枕の素材によっては蒸れてしまいます。エアウィーヴ ピローの中材は90%が空気でできているため軽量かつ通気性に優れ、内部に湿気がこもりません。<br>また、カバーは洗濯機で、中材はシャワーで簡単に水洗いができるため、いつでも清潔に保てます。</p>
        </div>
      </div>

      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p>エアウィーヴ ピロー S-LINEは枕に凹凸をつけず、中の素材のかたさだけを変化させているので滑らかに寝返りを打つことができ、熟睡をサポートします。ご自宅のベッドで、簡単に自分の頭に合う高さに調節ができるのも嬉しいポイントです。ぜひエアウィーヴ ピロー S-LINEの寝心地をご体感ください！</p>
        </div>
      </div>

      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table">
            <dl>
              <dt>サイズ</dt>
              <dd>幅約66cm×長さ約40cm×高さ約7〜11cm</dd>
            </dl>
            <dl>
              <dt>重量</dt>
              <dd>約1.5kg</dd>
            </dl>
            <dl>
              <dt>素材</dt>
              <dd>
                <ul class="u-list__ul_maru">
                  <li>アウターカバー</li>
                  <ul class="u-list__ul_dot mb2">
                    <li>表地＝ポリエステル100%</li>
                    <li>内パッド＝ポリエステル65%：綿35%
                    </li>
                    <li>中わた＝ポリエステル100%
                    </li>
                  </ul>
                  <li>メッシュカバー</li>
                  <ul class="u-list__ul_dot mb2">
                    <li>ポリエステル100%
                    </li>
                  </ul>
                  <li>中材（エアファイバー®）</li>
                  <ul class="u-list__ul_dot">
                    <li>ポリエチレン100%</li>
                  </ul>

                </ul>
              </dd>
            </dl>
            <dl>
              <dt>保証期間</dt>
              <dd>1年保証 ※保証は中材のエアファイバー®のみ、カバーは初期不良に限ります。</dd>
            </dl>
            <dl>
              <dt>製品型番</dt>
              <dd>2-04091-1</dd>
            </dl>
          </div>
        </div>
        <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>
        <div class="flex flex_around mt2 mb2">
        </div>
      </div>

      <?php include($inc_path . "/lib/inc/page/_smile/smile-footer.php"); ?>

    </section>

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
