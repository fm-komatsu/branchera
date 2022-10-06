<?php
//base
include ("../../function.php");
$content = get_id_data('10021');
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
    $smile_num = "9,500";//必要スマイル数
    $smile_id_test = "197";//テストFLP用リンクナンバー
    $smile_id_production = "197";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>



    <section class="main__wrapper">
    <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img
              src="<?php echo($img_url)?>/smile/article/exchange-ana_tanakami_awaodori-img1@2x.jpg"
              alt="<?php echo $pageTtl ?> image"
              style="max-width:350px;"
              class="u-img__max"
              loading ="lazy"
            >
          </figure>
          <figure class="lottery-figs__item">
            <img
              src="<?php echo($img_url)?>/smile/article/exchange-ana_tanakami_awaodori-img2@2x.jpg"
              alt="ANAファインデリッシュ ロゴ image"
              style="max-width:350px;"
              class="u-img__max"
              loading ="lazy"
            >
          </figure>
          <figure class="lottery-figs__item">
            <img
              src="<?php echo($img_url)?>/smile/article/exchange-ana_tanakami_awaodori-img3@2x.jpg"
              alt="【ANA FINDELISH】阿波尾鶏とマッシュルームのカレー×たなかみ米上白精米セット image"
              style="max-width:350px;"
              class="u-img__max"
              loading ="lazy"
            >
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">ANAファーストクラスでご提供実績のある絶品カレーとたなかみ米上白精米がセットに！</h4>
          <p class="mb3 mb2_sp">ANAファーストクラスで提供している「阿波尾鶏とマッシュルームのカレー」と、長谷工あんしんデリの特別栽培米「たなかみ米」のスペシャルセットが登場！こだわりのカレーとこだわりのお米を一緒に味わうことができます♪</p>

          <h4 class="lottery-point__ttl">ブランド鶏「阿波尾鶏」使用！ANA専属シェフオリジナルレシピ</h4>
          <p>「阿波尾鶏とマッシュルームのカレー」は、コクのあるうまみが特徴の徳島県産ブランド鶏「阿波尾鶏」とマッシュルームをたっぷり使用した、ANA専属シェフオリジナルレシピです。バターを溶かして仕上げた濃厚なルーと、香り高くふっくらとしたたなかみ米がベストマッチ！もちろん、この組み合わせは住まいレージ限定です。この機会にぜひご応募ください！</p>
        </div>
      </div>

      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p>ご家庭でファーストクラスの味が楽しめる、超豪華カレーセット。カレーは湯せん、または電子レンジで加熱すれば食べられるので、手間や時間をかけることなく上質なカレーライスが完成♪おうちにいながら空の旅気分を味わえます。<br>ここでしか食べられない組み合わせを、ぜひご賞味ください！</p>
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
                <li>阿波尾鶏とマッシュルームのカレー×6</li>
                <li>たなかみ米上白精米 ×4</li>
              </ul>
            </dl>
            <dl>
              <dt>原材料</dt>
              <dd>
                <ul class="u-list__ul">
                  <li class="mb2">阿波尾鶏とマッシュルームのカレー　180g<br>
                  野菜（たまねぎ（国産）、マッシュルーム（中国産））、鶏肉（徳島県産）、バター、にんにくペースト、しょうがペースト、 トマト・ジュースづけ、大豆油、トマトケチャップ、カレー粉、チキンエキス、はちみつ、ばれいしょでん粉、ビーフコンソメパウダー、 食塩、小麦粉、香辛料／調味料（アミノ酸等）（一部に小麦・乳成分・牛肉・大豆・鶏肉を含む）
                  </li>
                  <li>たなかみ米上白精米　450g（約3合）<br>
                    滋賀県産コシヒカリ/たなかみ米（滋賀県認証環境こだわり米・特別栽培米）
                  </li>
                </ul>
              </dd>
            </dl>
          </div>
        </div>
        <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>
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
