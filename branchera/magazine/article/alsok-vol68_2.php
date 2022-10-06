<?php
//base
include( "../../function.php" );
$content = get_id_data( '20003' );
$pageTtl = $content[ 'title' ];
$exceptcnt_id = $content['contents_id'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '-' . siteName();
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
$release_month ="10";
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
        <h3 class="u-ttl__l">マンションライフの安全・安心を守る</h3>
        <p class="mb4">日々の生活には、大小様々なトラブルに遭遇するリスクが潜んでいます。より安心で快適な毎日を過ごすために、私たちはどのようなセキュリティ意識を持てばいいのでしょうか。</p>
        <section class="mb5">
          <h4 class="alsok__ttl alsok__ttl_blue mb3"><span class="alsok__ttl_ex">老朽化した機器の誤作動に注意</span></h4>
          <p class="mb3">ALSOKはマンションの監視システムと連携し、マンションの共用部・専有部に関する異常通報を受け、現場での駆けつけ初期対応を行なっています。※マンションによって監視システム・対応は異なります。</p>
          <p class="mb3">通報で最も多いのが誤報です。中でも住宅用警報器が老朽化して誤作動し、異常がないのに緊急通報されるケースが増えています。老朽化した機器は管理組合で検討し、早めに交換などの対応をしましょう。</p>
          <p class="mb4">また調理でフランベをしていたり、警報器の近くで殺虫剤を噴霧した場合に、異常を感知して通報されてしまう例もあります。<strong>誤作動ではありませんが、気を付けていただきたいのが、夜中のたばこによるボヤ。寝たばこなどにはくれぐれも注意が必要です。</strong></p>
          <figure>
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/68/alsok68__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/68/alsok68__img01@2x.png"
              alt="（イメージ画像）左：機器の老朽化｜中：調理でフランベをしていた｜右：殺虫剤を噴霧｜<?php echo $pageTtl?>" style="max-width:746px" class="u-img__max u-only__pc center">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/68/alsok68__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/68/alsok68__img01-sp@2x.png"
              alt="（イメージ画像）左：機器の老朽化｜中：調理でフランベをしていた｜右：殺虫剤を噴霧｜<?php echo $pageTtl?>" style="max-width:466px" class="u-img__max u-only__sp center">
          </figure>

        </section>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_blue mb3"><span class="alsok__ttl_ex">最新の防犯カメラでセキュリティの向上</span></h4>
          <div class="flex between">
            <div class="w50">
              <p>設備機器の老朽化には共用部でも対策が必要です。たとえば防犯カメラ。玄関やエントランスホールに設置された防犯カメラは、<strong>犯罪抑止効果が非常に高いツール</strong>ですが、過去に設置されたものは性能が低く、効果も限定的な場合があります。<strong>画質が飛躍的に向上した新しいカメラへの交換がおすすめです。</strong></p>
              <p>また、エレベーターの前にモニターを設置することで、エレベーター内にいる人を事前に確認でき、防犯上からも不用意な乗り合わせを避けることができます。</p>
              <p>設備機器の更新が、セキュリティのレベルアップにもつながります。</p>
            </div>
            <div class="w50">
              <figure class="mb3">
                <img data-src="<?php echo $img_url; ?>/magazine/alsok/68/alsok68__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/68/alsok68__img02@2x.png"
                  alt="エレベーター前に設置したモニターでエレベーター内にいる人を事前に確認する女性（イメージ）｜<?php echo $pageTtl?>" style="max-width:314px" class="u-img__max u-only__pc center">
                <img data-src="<?php echo $img_url; ?>/magazine/alsok/68/alsok68__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/68/alsok68__img02-sp@2x.png"
                  alt="エレベーター前に設置したモニターでエレベーター内にいる人を事前に確認する女性（イメージ）｜<?php echo $pageTtl?>" style="max-width:471px" class="u-img__max u-only__sp center">
              </figure>
            </div>
          </div>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_blue mb3"><span class="alsok__ttl_ex">人とのつながりが抑止力に</span></h4>
          <p>一方、専有部でも不正侵入や盗難などは常に心配です。最近では、最上階にお住まいの方が、家を空けたほんの15分の間に、防犯カメラを避けるようにして住居に侵入され、盗難被害に遭ったという事例があります。</p>
          <p class="mb3"><strong>急速に巧妙化する犯罪に対しては、機械監視に加えて「人の目」というバリアも大切です。</strong>犯罪者が近寄り難いと感じるように、お互いに声をかけ合うようなご近所のつながりを、今一度見直しましょう。</p>
          <p class="mb4">機器はどんどん進化していますが、やはり最後は「人の力」が大切です。ALSOKではマンション監視システムや管理組合、居住者のみなさまと一緒に犯罪抑止の意識を高め合いながら、より効果的なマンションセキュリティを実現したいと、日々努力を重ねています。</p>
          <div>
           <figure class="center mb3">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/68/alsok68__img03.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/68/alsok68__img03@2x.png"
                alt="挨拶をしあうマンション入居者たち（イメージ）｜<?php echo $pageTtl?>" style="max-width:466px" class="u-img__max u-only__pc center">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/68/alsok68__img03-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/68/alsok68__img03-sp@2x.png"
                alt="挨拶をしあうマンション入居者たち（イメージ）｜<?php echo $pageTtl?>" style="max-width:595px" class="u-img__max u-only__sp center">
            </figure>
          </div>
        </section>
        <div class="mt8 mt2_sp mb8 mb3_sp">
          <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
        </div>	
        <section>
          <h5>■関連記事</h5>
          <div class="u-photolist__row">
            <?php echo show_category_photoListalsok("alsok-mansion",$exceptcnt_id); ?>
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
