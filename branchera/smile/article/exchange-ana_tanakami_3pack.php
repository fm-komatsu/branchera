<?php
//base
include ("../../function.php");
$content = get_id_data('10022');
$pageTtl = $content['title'];
//meta
$metaTtl = 'スマイルで交換できる「'.$pageTtl.'」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];
//bodyClass
$body_class ="page-article";
//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");

// 欠品フラグ
$itemShortage = 0;
?>

<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/smile/" ,"住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?>
    <?php
    $smile_flug = "exchange";// exchange or lottery or service or no_flp
    $smile_num = "8,000";//必要スマイル数
    $smile_id_test = "196";//テストFLP用リンクナンバー
    $smile_id_production = "196";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>



    <section class="main__wrapper">
    <div class="flex flex_around">
    </div>
    <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img
              data-src="<?php echo($img_url)?>/smile/article/exchange-ana_tanakami_3pack-img1.jpg"
              data-retina="<?php echo($img_url)?>/smile/article/exchange-ana_tanakami_3pack-img1@2x.jpg"
              alt="<?php echo $$pageTtl ?> image"
              style="max-width:350px;"
              class="u-img__max"
            >
          </figure>
          <figure class="lottery-figs__item">
            <img
              data-src="<?php echo($img_url)?>/smile/article/exchange-ana_tanakami_3pack-img2.jpg"
              data-retina="<?php echo($img_url)?>/smile/article/exchange-ana_tanakami_3pack-img2@2x.jpg"
              alt="ANA FINDELISH ロゴ"
              style="max-width:350px;"
              class="u-img__max"
            >
          </figure>
          <figure class="lottery-figs__item">
            <img
              data-src="<?php echo($img_url)?>/smile/article/exchange-ana_tanakami_3pack-img3.jpg"
              data-retina="<?php echo($img_url)?>/smile/article/exchange-ana_tanakami_3pack-img3@2x.jpg"
              alt="<?php echo $$pageTtl ?> ビーフカレー盛り付けイメージ"
              style="max-width:350px;"
              class="u-img__max"
            >
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl u-font__palt">ANA専属シェフ監修！オリジナルカレー3種とたなかみ米上白精米がセットに！</h4>
          <p class=" u-font__palt mb3 mb2_sp">ANA国際線ファーストクラスの機内食を手がけている、清水 誠(しみずまこと）氏が監修したオリジナルカレー3種と、長谷工あんしんデリの特別栽培米「たなかみ米」のスペシャルセットが登場！こだわりのカレーとこだわりのお米を一緒に味わうことができます♪</p>
          <h4 class="lottery-point__ttl">ビーフ・チキン・ポーク…3種類のテイストが楽しめる！</h4>
          <p class="u-font__palt">フルーツのさわやかな酸味とスパイスの辛さのバランスが絶妙なビーフ、トマトとあめ色のソテーオニオンの甘味が溶け込んだチキン、昆布エキスや醤油、ウスターソースで和の要素を加えたポークと、それぞれ異なるテイストが味わえます。ふっくら美味しいたなかみ米との組み合わせをお楽しみください♪</p>
        </div>
      </div>

      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p>「幻のお米」と呼ばれるたなかみ米と、ANA FINDELISHの味が3種類も楽しめるスペシャルセット！カレーは湯せん、または電子レンジで加熱すれば食べられるので、時短にも役立ちます♪おうちご飯にも、おもてなしにもぴったりなセットです。<br>ここでしか食べられない組み合わせをぜひご賞味ください！</p>
        </div>
      </div>

      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table">
            <dl>
              <dt>セット内容</dt>
              <dd>
                <ul class="u-list__ul_dot">
                  <li>ビーフカレー×2</li>
                  <li>チキンカレー×2</li>
                  <li>ポークカレー×2</li>
                  <li>たなかみ米 ×4</li>
                </ul>
              </dd>
            </dl>
            <dl>
              <dt>原材料</dt>
              <dd>
              <ul class="u-list__ul">
                <li class="mb2">ビーフカレー　180g<br>牛肉（オーストラリア産）、ソテーオニオン、生クリーム、濃縮ビーフブイヨン、砂糖、牛脂、りんごピューレ、バター、小麦粉、カレー粉、バナナピューレ、にんじんピューレ、植物油脂、食塩、香辛料、チャツネ、レモンジュース、しょうがペースト ／ カラメル色素、乳化剤、酸味料（一部に小麦・乳成分・牛肉・バナナ・りんごを含む）</li>
                <li class="mb2">チキンカレー　180g<br>鶏肉（タイ産）、ソテーオニオン、バター、しょうがペースト、チキンエキス、トマト・ピューレーづけ、にんにくペースト、植物油脂、カレー粉、トマトケチャップ、砂糖、はちみつ、チャツネ、小麦粉、食塩、ばれいしょでん粉、中国しょうゆ、香辛料、酵母エキス ／ 酸味料（一部に小麦・乳成分・大豆・鶏肉・豚肉を含む）</li>
                <li class="mb2">ポークカレー　180g<br>豚肉（チリ産）、ソテーオニオン、小麦粉、牛脂、しょうゆ、生クリーム、カレー粉、しょうがペースト、トマトペースト、植物油脂、砂糖、濃縮ビーフブイヨン、ウスターソース、ゼラチン、ポークエキス、チキンエキス、こんぶエキス、香辛料、酵母エキス、マッシュルームエキス調味料、濃縮パインアップル果汁、食塩 ／ カラメル色素（一部に小麦・乳成分・牛肉・大豆・鶏肉・豚肉・ゼラチンを含む）</li>
                <li>たなかみ米上白精米　450g（約3合）<br>滋賀県産コシヒカリ/たなかみ米（滋賀県認証環境こだわり米・特別栽培米）</li>
              </ul>
              </dd>
            </dl>
          </div>
        </div>
        <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>
        <div class="flex flex_around mt2 mb2">
        </div>
      </div>

        <?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>

    </section>

    <aside class="main__item">
      <h3 class="u-ttl__l">よくあるご質問</h3>
      <?php include ($inc_path."/lib/inc/page/_smile/smile-promotion.php") ?>
    </aside>

    <nav class="main__snav snav">
      <?php include ($inc_path."/lib/inc/page/_smile/u-smile-snav.php") ?>
    </nav>

  </article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
