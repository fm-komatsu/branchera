<?php
//base
include ("../../function.php");
$content = get_id_data('10054');
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
    $smile_num = "3,500";//必要スマイル数
    $smile_id_test = "221";//テストFLP用リンクナンバー
    $smile_id_production = "221";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>

    <section class="main__wrapper">
    <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img
              src="<?php echo($img_url)?>/smile/article/exchange-oyasai-crayon-img1@2x.png"
              alt="<?php echo $pageTtl ?> image"
              style="max-width:350px;"
              class="u-img__max"
              loading ="lazy"
            >
          </figure>
          <figure class="lottery-figs__item">
            <img
              src="<?php echo($img_url)?>/smile/article/exchange-oyasai-crayon-img2@2x.png"
              alt="おやさいクレヨンーimage"
              style="max-width:350px;"
              class="u-img__max"
              loading ="lazy"
            >
          </figure>
          <figure class="lottery-figs__item">
            <img
              src="<?php echo($img_url)?>/smile/article/exchange-oyasai-crayon-img3@2x.png"
              alt="おやさいクレヨン image"
              style="max-width:350px;"
              class="u-img__max"
              loading ="lazy"
            >
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">お米と野菜を原料に作られた、安心安全なクレヨン</h4>
          <p class="mb3 mb2_sp">おやさいクレヨン Standardは、米ぬかから採れた米油とライスワックス（米ぬかろう）でベースを作り、本物の野菜パウダーと顔料で着色したクレヨンです。安全な素材だけで作られているので、誤って口に入ってしまっても安心。小さなお子さまにも、のびのびとお絵かきを楽しませてあげられます。</p>
          <h4 class="lottery-point__ttl">野菜の名前がついた10色入り。国内製造の確かな品質です。</h4>
          <p>おやさいクレヨンのラインナップは「ゆきにんじん」「カシス」「きゃべつ」「りんご」など、配合された野菜やフルーツの名前がついた全10色。愛知県名古屋市のクレヨン工場で、職人さんたちが心を込めて一つひとつ作り上げている、確かな品質が自慢です。</p>
        </div>
      </div>

      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p>安心で安全な素材、自然な色にこだわった野菜のクレヨンです。規格外などの理由で廃棄される野菜をリユースできないかと考え、着色用の野菜パウダーに使用しました。素材そのものの色を表現した、やわらかな発色なので、濃く色を出したいときは重ね塗りするのがポイントですよ。</p>
        </div>
      </div>

   			<div class="lottery-terms u-terms">
          <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
            <div class="u-terms__inner u-list__dl_table_long">
              <dl>
                <dt>色</dt>
                <dd>全10色（きゃべつ、ねぎ、ながいも、ごぼう、とうもろこし、ゆきにんじん、りんご、カシス、むらさきいも、たけすみ）</dd>
              </dl>
              <dl>
                <dt>サイズ(cm)</dt>
                <dd>幅10×高さ19.2×奥行2</p>
              </dl>
              <dl>
                <dt>質量</dt>
                <dd>110g</dd>
              </dl>
              <dl>
                <dt>成分</dt>
                <dd>米油、ライスワックス、野菜粉末、顔料</dd>
              </dl>
              <dl>
                <dt>ご使用上の注意</dt>
                <dd>食べ物ではございませんので、飲み込まないようご注意ください。小さなお子さまがお使いになる際は、保護者のもとでご使用ください。</dd>
              </dl>
              <dl>
                <dt>取り扱い方法</dt>
                <dd>高温多湿を避けて保管してください。</dd>
              </dl>
            </div>
          </div>
        </div>
        <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>
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
