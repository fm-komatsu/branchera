<?php
//base
include( "../../function.php" );
$content = get_id_data( '21005' );
$pageTtl = $content[ 'title' ];
//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];
//bodyClass
$body_class = "page-article alsok";
//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
//release date
$release_year = "2020";
$release_month ="2";
$release_day ="";
?>
<main class="main magazine">
  <article class="main__row">
    <?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_alsok.php", "プロに聞く。暮らしの危機管理。" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
    <?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
    <div class="main__wrapper">
      <section class="main__item mb3">
        <h3 class="u-ttl__l">急増するサイバー犯罪から身を守る。<br class="u-only__pc">オンラインバンキングの不正送金</h3>
        <p class="mb3">オンラインバンキングの不正送金やネット詐欺など、インターネットを介して行なわれる犯罪は年々巧妙さを増しています。利便性と隣り合わせの危険性をもつサイバー犯罪から身を守る方法について、真剣に考えてみましょう。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">偽のサイトに誘導して気づかないうちに送金</span></h4>

          <p class="mb2"><strong>サイバー犯罪の中でもネットバンキングの被害は急増しており、警察庁では警戒するよう呼び掛けています。</strong>2019年前半の被害件数は月50件程度でしたが、10月は397件で被害額は約5億1900万円、11月には573件で被害額は約7億7,600万円と急増しています。（※1）</p>
          <p>ネットバンキング犯罪の主な手口には大きく分けて2通りあります。</p>
          <div class="flex between mb2 mb4_sp">
            <div class="w55">
              <h4 class="u-color__brand">フィッシングメール</h4>
              <p>正規の銀行に見せかけたメールから偽の銀行サイトに誘導し、ユーザーのIDやパスワードを入力させ盗み取り、不正送金をする。</p>
            </div>
            <figure>
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/59/alsok59__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/59/alsok59__img01@2x.png" alt="フィッシングメール｜<?php echo $pageTtl?>" style="max-width:269px" class="u-img__max u-only__pc">

              <img data-src="<?php echo $img_url; ?>/magazine/alsok/59/alsok59__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/59/alsok59__img01-sp@2x.png" alt="フィッシングメール｜<?php echo $pageTtl?>" style="max-width:264px" class="u-img__max u-only__sp center">
            </figure>
          </div>
          <div class="flex between mb3">
            <div class="w55">
              <h4 class="u-color__brand">コンピュータウイルス</h4>
              <p class="mb2">正規の銀行サイトにアクセスした際に、パソコンに感染したウイルスが作動。偽の画面を提示してIDやパスワードなどを入力させ盗み取り、不正送金をする。または送金する際に、不正ウイルスが裏で勝手に送金先や送金額を変える。</p>
            </div>
            <figure class="mb2">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/59/alsok59__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/59/alsok59__img02@2x.png" alt="フィッシングメール｜<?php echo $pageTtl?>" style="max-width:282px" class="u-img__max u-only__pc">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/59/alsok59__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/59/alsok59__img02-sp@2x.png" alt="コンピュータウイルス｜<?php echo $pageTtl?>" style="max-width:263px" class="u-img__max u-only__sp center">
            </figure>
          </div>
          <p class="mb2">ではどうすれば被害を防げるのでしょうか。</p>
          <figure>
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/59/alsok59__img03.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/59/alsok59__img03@2x.png" alt="基本的な対策｜<?php echo $pageTtl?>" style="max-width:742px" class="u-img__max u-only__pc center">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/59/alsok59__img03-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/59/alsok59__img03-sp@2x.png" alt="基本的な対策｜<?php echo $pageTtl?>" style="max-width:266px" class="u-img__max u-only__sp center">
          </figure>
          <p>（※1）「フィッシングによるものとみられるインターネットバンキングに係る不正送金被害の急増について」（警察庁HP）より</p>
        </section>
        <section class="mb8">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">危険なものと認識した上できちんと対策をして使う</span></h4>
          <div class="flex between">
            <div class="w55">
              <p class="mb2">ネットに向き合う心構えも大切です。サイバー犯罪は対策をしても完全とまではいきません。犯罪者の手口は非常に巧妙化していて『いたちごっこ』が続いています。<strong>まずネットを介した商品取引などは基本的には『危険なもの』と考えるべきです。その上できちんと対策を行い、できるだけリスクを減らすことが大切です。</strong><br>最新の犯罪事例や手口を知り、安易に犯罪に巻き込まれない防犯力を養いましょう。</p>
            </div>
            <figure>
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/59/alsok59__img04.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/59/alsok59__img04@2x.png" alt="危険なものと認識した上できちんと対策をして使う｜<?php echo $pageTtl?>" style="max-width:288px" class="u-img__max u-only__pc">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/59/alsok59__img04-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/59/alsok59__img04-sp@2x.png" alt="危険なものと認識した上できちんと対策をして使う｜<?php echo $pageTtl?>" style="max-width:260px" class="u-img__max u-only__sp center">
            </figure>
          </div>
        </section>
        <div class="mb8 mb3_sp">
          <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
        </div>
        <section>
          <h5 class="mt3">■関連記事</h5>
          <div class="u-photolist__row mt2">
            <?php
              $exceptcnt_id = $content['contents_id'];
              echo show_category_photoListalsok("alsok-other",$exceptcnt_id);
            ?>
          </div>
        </section>
      </section>
    </div>
  </article>
</main>
<?php
$toindex_url = "/magazine/index_alsok.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
