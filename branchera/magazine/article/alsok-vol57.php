<?php
//base
include( "../../function.php" );
$content = get_id_data( '18001' );
$pageTtl = $content[ 'title' ];
$exceptcnt_id = $content['contents_id'];

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
$release_year = "2019";
$release_month ="6";
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
      <section class="main__item">
        <h3 class="u-ttl__l">家族や地域のつながりが大切。高齢者の防犯対策</h3>
        <p class="mb3">振り込め詐欺をはじめ、高齢者を狙った悪質な犯罪が後を絶ちません。どうしたら家族や地域の高齢者を、犯罪被害から守れるでしょうか。<br>今回は高齢者を対象に、ユニークな防犯アドバイスを行なう「ALSOKほっとライフ講座」を展開する、ALSOK本社広報部とセキュリティサービス部に話を伺いました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_green mb3"><span class="alsok__ttl_ex">情報を知ることが対策の第一歩</span></h4>
          <figure class="u-float__right">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/57/alsok57__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/57/alsok57__img01@2x.png"
              alt="振り込め詐欺の被害にあう高齢者（イメージ）｜<?php echo $pageTtl?>" style="max-width:286px" class="u-img__max u-only__pc">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/57/alsok57__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/57/alsok57__img01-sp@2x.png"
              alt="振り込め詐欺の被害にあう高齢者（イメージ）｜<?php echo $pageTtl?>" style="max-width:223px" class="u-img__max u-only__sp center">
          </figure>

          <p class="mb3">高齢者の犯罪被害でも特に深刻なのが振り込め詐欺です。昨今、監視の目がある金融機関を避け、現金を直接受け取る「手交型」が増えるなど、手口も年々巧妙化しています。</p>
          <p class="mb3">自分は大丈夫と思っている方が多いのですが、まさにそこが大きな落とし穴なのです。</p>
          <p>詐欺の概略は知っていても実際の手口を知らずに、巧みな心理操作にだまされてしまうのです。詐欺に限らず<strong>「防犯は情報を正しく知る」</strong>ことが大切です。</p>
          <p class="mb3">「ALSOKほっとライフ講座」は、警視庁や地域包括支援センターなどにヒアリングを行ない、高齢者の特性や心情に配慮したプログラムを作成しています。その地域の犯罪統計データなども参考にしながら、高齢者を狙った犯罪の傾向と対策を学んでいただいています。</p>
          <figure class="u-clearfix mb3">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/57/alsok57__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/57/alsok57__img02@2x.png"
              alt="ALSOKほっとライフ口座（イメージ）｜<?php echo $pageTtl?>" style="max-width:537px" class="u-img__max u-only__pc center">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/57/alsok57__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/57/alsok57__img02-sp@2x.png"
              alt="ALSOKほっとライフ口座（イメージ）｜<?php echo $pageTtl?>" style="max-width:265px" class="u-img__max u-only__sp center">
          </figure>

        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_green mb3"><span class="alsok__ttl_ex">楽しみながら積極的に参加できる工夫を</span></h4>
          <p class="mb3">「防犯クイズ」と「防犯かるた」の2種類のプログラムは、いずれも参加者がチームに分かれて競い、レクリエーション感覚で参加していただけるのが特徴です。</p>
          <p class="mb3">楽しみながら防犯知識を身につけられるのはもちろん、かるたやクイズは脳の活性化にも役立ちますし、チームで競い合うことでコミュニケーションが生じ、連帯感や責任感が養われます。地域で顔見知りの方をつくっていただくことも大きな目的のひとつで、毎回想像以上に盛り上がりをみせます。</p>
          <p class="mb3">また、講座の最後には、被害防止の「※合い言葉」や「警察相談ダイヤル」などをまとめた印刷物を配布し、日常的な防犯意識を高めるアドバイスをします。※福島県警作成の振り込め詐欺被害防止の合言葉<strong>「それうそかも？」</strong></p>
          <figure class="center mb5">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/57/alsok57__img03.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/57/alsok57__img03@2x.png"
              alt="福島県警作成の振り込め詐欺被害防止の合言葉「それうそかも？」｜<?php echo $pageTtl?>" style="max-width:563px" class="u-img__max u-only__pc center">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/57/alsok57__img03-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/57/alsok57__img03-sp@2x.png"
              alt="福島県警作成の振り込め詐欺被害防止の合言葉「それうそかも？」｜<?php echo $pageTtl?>" style="max-width:278px" class="u-img__max u-only__sp center">
          </figure>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_green mb3"><span class="alsok__ttl_ex">コミュニティの「絆」が犯罪を防ぐ</span></h4>
          <p class="mb3">一方、講座に参加される方は意識も高く犯罪に遭いにくい方。問題は参加できずに情報が行き届かない方たちです。</p>
          <p>そこで講座に参加されている方には、「地域の防犯アドバイザー」になって、習ったことを家族や周りの方たちに伝えていただくことをお願いしています。詐欺などの犯罪について、「知らなかった」ために被害に遭う方を減らしたい、というのがALSOKの願い。そのためにも参加者のみなさまには、<strong>人から人へ情報をつなぐ役割</strong>を担ってほしいと思います。その絆が地域の防犯力を高めます。</p>
        </section>
        <div class="mt6 mt2_sp mb8 mb3_sp">
          <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
        </div>
        <section>
        <h5>■関連記事</h5>
        <div class="u-photolist__row">
          <?php echo show_category_photoListalsok("alsok-senior",$exceptcnt_id); ?>
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
