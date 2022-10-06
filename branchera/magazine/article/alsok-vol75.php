<?php
//base
include( "../../function.php" );
$content = get_id_data( '21008' );
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
$release_month ="9";
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
        <h3 class="u-ttl__l">凶悪犯罪から身を守る！リスク回避のポイントとは</h3>
        <p class="mb3">犯罪に遭うリスクを軽減するために、日常生活のなかで注意したり気を付けたりできる点があります。<br>住宅街や駐車場、小学校の敷地内や新幹線の車内など、日常的な場所で凶悪犯罪が起きています。身の安全を守るために、ふだんの行動で気をつけるべき点や、万が一の場合の対処法などを、警備のプロの目線からアドバイスをいただきました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">日常の行動経路をチェック</span></h4>

          <p class="mb2">突如襲いかかる犯罪は、日々の行動と注意の積み重ねで遭遇リスクを極力減らしたいもの。まず、行動範囲の中の危険性を察知し、安全性の高い行動をとることです。</p>
          <div class="flex between mb2_sp">
            <div class="w55">
              <p class="mb2">例えば、最寄駅から自宅までの間、<strong>つねに防犯カメラの有無やAEDの設置場所をチェックしておくことも大事です</strong>。また、<strong>交番や非常時に逃げ込めるコンビニの場所</strong>なども覚えておきます。</p>
              <figure>
                <img src="<?php echo $img_url; ?>/magazine/alsok/75/alsok75__img01-sp@2x.png" alt="日常の行動経路をチェック｜<?php echo $pageTtl?>" style="max-width:263px" class="u-img__max u-only__sp center" loading="lazy">
              </figure>
              <p>エレベーターに乗る際は、<strong>壁を背にして死角を作らないようにする、非常ボタンの近くに立つ</strong>など、日常的な行動の中でも防犯を意識しましょう。お子さまがいる方は、<strong>一緒に通学路を歩いて、注意する所を確認する、登下校時などは1人だけで行動しないよう教える</strong>ことをおすすめします。</p>
            </div>
            <figure class="w45">
              <img src="<?php echo $img_url; ?>/magazine/alsok/75/alsok75__img01@2x.png" alt="日常の行動経路をチェック｜<?php echo $pageTtl?>" style="max-width:353px" class="u-img__max u-only__pc center" loading="lazy">
            </figure>
          </div>

        </section>
        <section class="mb4">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">とっさに身を守るには身のまわりのものを使う</span></h4>
          <div class="mb3">
            <p class="mb2"><strong>万が一、危険に陥ったときは、身近なもので防御します</strong>。刃物などで襲われたときは、カバンを盾にする、ジャケットを腕に巻きつけて凶器から身を守る、など身につけているものが役立つことがあります。</p>
            <p class="mb2_sp">さらに防犯ブザーは必携。スプレー型の日焼け止めや、制汗剤などは、相手の顔に吹きかけると逃げるための時間稼ぎになります。外出時はご自身の持ち物を点検して、とっさのときに役立つものがあるか確認することをおすすめします。</p>
          </div>
          <figure class="mb3">
            <img src="<?php echo $img_url; ?>/magazine/alsok/75/alsok75__img02@2x.png" alt="とっさに身を守るには身のまわりのものを使う｜<?php echo $pageTtl?>" style="max-width:520px" class="u-img__max u-only__pc center" loading="lazy">
            <img src="<?php echo $img_url; ?>/magazine/alsok/75/alsok75__img02-sp@2x.png" alt="とっさに身を守るには身のまわりのものを使う｜<?php echo $pageTtl?>" style="max-width:275px" class="u-img__max u-only__sp center" loading="lazy">
          </figure>
          <figure>
            <img src="<?php echo $img_url; ?>/magazine/alsok/75/alsok75__img03@2x.png" alt="犯罪から身を守るためのPoint！｜<?php echo $pageTtl?>" style="max-width:738px" class="u-img__max u-only__pc center" loading="lazy">
            <img src="<?php echo $img_url; ?>/magazine/alsok/75/alsok75__img03-sp@2x.png" alt="犯罪から身を守るためのPoint！｜<?php echo $pageTtl?>" style="max-width:266px" class="u-img__max u-only__sp center" loading="lazy">
          </figure>
        </section>
        <section class="u-clearfix mb8">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">防犯意識を高めることがリスク回避の近道</span></h4>

          <p>そして最も大切なことは、<strong>自身の防犯意識を高める</strong>ことです。暗くなった帰り道は大通りを通る、防犯カメラのあるお店を選ぶなど、小さなことでも意識していると、自然に犯罪を遠ざけます。自分の身は自分で守るという意識を持つこと。その上で犯罪に遭わないためにはどう行動すればよいか、もしものときのために何を身につけていたらいいかなど、自身でよく考え備えておくことが大切です。</p>
        </section>
        <div class="mb8 mb3_sp">
          <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
        </div>
        <section class="mb8">
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
