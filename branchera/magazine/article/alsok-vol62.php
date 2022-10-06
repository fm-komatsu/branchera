<?php
//base
include( "../../function.php" );
$content = get_id_data( '21006' );
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
$release_month ="5";
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
        <h3 class="u-ttl__l">ストーカー被害に遭わないために</h3>
        <p class="mb3">被害を未然に防ぐために、ストーカー対策に関するセキュリティサービスを提供している、見守りのプロALSOKに話を伺いました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">最近はネットを介したストーカーも顕在化</span></h4>

          <p class="mb2">ストーカー被害の中でも、特に女性を対象とした犯罪は年々増加しています。元交際相手などにしつこくつきまとわれたり、無言電話や脅迫メールなどの迷惑行為を受けたり、それらがエスカレートすると暴力などの身体的危害を加えられる恐れもあります。<strong>犯罪にエスカレートする前に、早期に対策をすることが重要です。</strong></p>
          <p class="mb2">また、近年スマホの普及にともない、幅広い世代でSNSなどのソーシャルメディアを利用して情報収集する生活が一般的になりました。ソーシャルメディアは、簡単に人と繋がることができる楽しいコミュニケーションツールである反面、負の側面があることも忘れてはなりません。<br>日常生活の何気ない行動の中に犯罪の影が潜んでいるといっても過言ではないでしょう。</p>
          <p>最近ではSNSを悪用した執拗なつきまとい行為など、<strong>ネット社会ならではのストーカーが顕在化しています。</strong>元交際相手だけでなく、見知らぬ相手にネット上で、個人情報などを拡散されてしまう場合もあり、注意が必要です。</p>
          <figure>
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/62/alsok62__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/62/alsok62__img01@2x.png" alt="最近はネットを介したストーカーも顕在化｜<?php echo $pageTtl?>" style="max-width:540px" class="u-img__max u-only__pc center">

            <img data-src="<?php echo $img_url; ?>/magazine/alsok/62/alsok62__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/62/alsok62__img01-sp@2x.png" alt="最近はネットを介したストーカーも顕在化｜<?php echo $pageTtl?>" class="u-img__max u-only__sp center">
          </figure>
        </section>
        <section class="mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">個人情報が漏れないよう管理は厳重に</span></h4>
          <div class="flex between">
            <div class="w50">
              <p class="mb2_sp">こうしたストーカー被害を未然に防ぐには、ストーカーが疑われる相手に、現在の住所をはじめ、<strong>個人情報が分からないようにすること。</strong>ゴミ出しの際にも、カード会社の明細などから個人情報が漏れることがあるため、必ずシュレッダーにかけて出しましょう。またネット上での個人情報の公開はできるだけ控えること。</p>
            </div>
            <figure class="w50">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/62/alsok62__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/62/alsok62__img02@2x.png" alt="個人情報が漏れないよう管理は厳重に｜<?php echo $pageTtl?>" style="max-width:353px" class="u-img__max u-only__pc">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/62/alsok62__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/62/alsok62__img02-sp@2x.png" alt="個人情報が漏れないよう管理は厳重に｜<?php echo $pageTtl?>" style="max-width:275px" class="u-img__max u-only__sp center">
            </figure>
          </div>
        </section>
        <section class="u-clearfix mb8">
          <h4 class="alsok__ttl alsok__ttl_violet"><span class="alsok__ttl_ex">基本的な防犯対策に加えプロのサポートも検討</span></h4>

          <p class="mb4 mb2_sp">ネット上での悪質なつきまといだけでなく、実際に個人情報を調べ上げ、自宅を特定し、後をつけまわすといったストーカー行為におよぶケースも珍しくありません。<br>ネット上は匿名性が高く、犯人を個人で特定して解決することは非常に困難です。<strong>自分ひとりで解決しようとせず、早期に警察に相談することが重要です。</strong><br><strong>加えて、ストーカー対策専用のプロのサポートなどに依頼することも視野に入れ、被害を最小限に食い止めましょう。</strong></p>
          <figure>
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/62/alsok62__img03.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/62/alsok62__img03@2x.png" alt="基本的な防犯対策に加えプロのサポートも検討<?php echo $pageTtl?>" class="u-img__max u-only__pc center">

            <img data-src="<?php echo $img_url; ?>/magazine/alsok/62/alsok62__img03-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/62/alsok62__img03-sp@2x.png" alt="基本的な防犯対策に加えプロのサポートも検討<?php echo $pageTtl?>" class="u-img__max u-only__sp center">
          </figure>
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
