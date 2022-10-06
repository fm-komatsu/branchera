<?php
//base
include( "../../function.php" );
$content = get_id_data( '19003' );
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
$release_year = "2021";
$release_month ="1";
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
        <h3 class="u-ttl__l">防火グッズの備えと出火時の心構え</h3>
        <p class="mb3">失火による火災の多くが、火の取り扱いの不注意などから発生しています。木造の住宅が密集している地域などで出火すると重大な被害を及ぼします。<br>特に空気が乾燥する今の季節は危険度が増しますので、日頃の備えや訓練が大切となります。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">１に迅速な通報、2に初期消火、3に避難</span></h4>

          <p class="mb3">年間約3万7千件を数える出火件数のうち約30％が建物火災と言われています（令和元年　総務省統計より）。住宅火災による犠牲者の多くは逃げ遅れによるもの。そのため、日頃より避難経路や消火器の位置を確認し、効果的な消火方法を考えておくことが重要です。<br>マンションの場合は、各部屋に熱探知機の設置が義務付けられていますので、火災発生時は異常を感知すると出火階と直上階の住戸に火災を知らせてくれます。</p>
          <div class="flex between">
            <div class="w50">
              <p class="mb2">万が一、火災を出した場合は、まず大声で周囲の人に火災であることを知らせ、速やかに119番へ通報してください。次に、初期消火となります。一般的に、<strong>炎が自分の背丈以下までは初期消火が可能</strong>と言われています。炎がそれ以上になったら速やかに逃げてください。逃げる時は、<strong>大声で周囲の人に火災であることを知らせる</strong>ことも大切です。<br>初期消火には消火器を備えておくことはもちろんですが、防災訓練に積極的に参加して、消火器の特徴や、正しい使い方の指導を受けておくと、いざという時に落ち着いて行動することができます。</p>
              <div class="w50 u-only__sp">
                <img src="<?php echo $img_url; ?>/magazine/alsok/38/alsok38__img01-sp@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max u-only__sp mb2 center" style="max-width:544px"  loading="lazy">
                <img src="<?php echo $img_url; ?>/magazine/alsok/38/alsok38__img02-sp@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max u-only__sp center" style="max-width:522px"  loading="lazy">
              </div>
              <p>また、ベランダにある避難階段や共用の非常階段などを使って避難する時に、停電などによる暗さと恐怖でパニックになり、階段の上下の判断もつかなくなることがあります。<br>消火用具の場所、玄関までの順路などに、<strong>暗いところでも発光する蓄光テープを貼ったり、乾電池式の人感センサー付きライトを配置</strong>しておくと安心です。</p>
            </div>
            <div class="w50 u-only__pc">
              <img src="<?php echo $img_url; ?>/magazine/alsok/38/alsok38__img01@2x.png" alt="<?php echo $pageTtl?>" style="max-width:333px" class="u-img__max u-only__pc mb3" loading="lazy">
              <img src="<?php echo $img_url; ?>/magazine/alsok/38/alsok38__img02@2x.png" alt="<?php echo $pageTtl?>" style="max-width:333px" class="u-img__max u-only__pc" loading="lazy">
            </div>
          </div>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">マンションの消火用具は管理組合でまとめ買いを</span></h4>

          <div class="flex between mb4">
            <div class="w50">
              <p class="mb2">共用部の消火ボックスの中に、消火作業用防災マスクや軍手などを入れておくと、より実践的な備えになります。また、消火用具の購入は一戸単位より、管理組合や自治会単位でまとめ買いをするほうが、単価が安くなるだけでなく、<strong>使用法の説明会やアフターフォローの面などでメリットが多くなります</strong>。</p>
              <p class="mb3 mb2_sp">また、こうした防火グッズの説明会や防災訓練に参加することで、住民同士が情報交換することも備えの一つになります。<br>普段からご近所同士声をかけあって交流を深め、<strong>いざという時は協力し合える関係づくり</strong>をすることが、全ての防災・防犯に共通して重要な要素といえるでしょう。</p>
            </div>
            <div class="w50 center mb5">
              <img src="<?php echo $img_url; ?>/magazine/alsok/38/alsok38__img03@2x.png" alt="消防庁の「住宅防火いのちを守る7つのポイント」｜<?php echo $pageTtl?>" style="max-width:242px" class="u-img__max u-only__pc center" loading="lazy">
              <img src="<?php echo $img_url; ?>/magazine/alsok/38/alsok38__img03-sp@2x.png" alt="消防庁の「住宅防火いのちを守る7つのポイント」｜<?php echo $pageTtl?>" style="max-width:411px" class="u-img__max u-only__sp center" loading="lazy">
            </div>
          </div>
          <div class="mb8 mb3_sp">
            <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
          </div>
					<section>
						<h5 class="mt3">■関連記事</h5>
						<div class="u-photolist__row">
							<?php echo show_category_photoListalsok("alsok-bousai",$exceptcnt_id); ?>
						</div>
					</section>
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
