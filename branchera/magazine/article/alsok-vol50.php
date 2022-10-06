<?php
//base
include( "../../function.php" );
$content = get_id_data( '21003' );
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
$release_year = "2019";
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
      <section class="main__item">
        <h3 class="u-ttl__l">知っていれば役立つ！護身術講座Part2</h3>
        <p class="mb3">身を守るため「警戒心をもつ」ことと、とっさに「身体が動く」よう備えておく大原則は、Part1でお伝えしたとおり。今回は危険な状況ごとにその対処法を学びます。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">夜道を歩いて帰る</span></h4>

          <p>ひとりで歩く場合はなるべく明るい所を選び、非常時に駆け込めるコンビニなどの場所をあらかじめ確認しておきましょう。<br>もし、後ろから近づく気配がしたら、立ち止まり、先に行かせて顔を見るふりをします。<br>防犯ブザーは、すぐ使えるよう手に持って歩くのがベター。また、気が動転しているときは、助けを呼ぶ大声が出にくいもの。普段からカラオケボックスなどで、大声を出す練習をしておくといいですね。</p>
        </section>
        <section class="mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">電車の中での痴漢対策</span></h4>
          <section class="mb3">
            <h5 class="alsok__ttl-s alsok__ttl-s_pink">まずは寄せつけない工夫を</h5>
            <p>近づいても大丈夫そうな人を痴漢は物色しています。<br>「視線の死角となるドア付近の隅には立たない」「英字新聞などを小道具に持つ」など、スキのない近寄りがたい雰囲気を演出しましょう。</p>
          </section>
          <section>
            <h5 class="alsok__ttl-s alsok__ttl-s_pink">小道具を使ったプチ技</h5>
            <p>大技は無理でも、身近な小物で攻撃するのも護身術のひとつ。<br>満員電車で後ろから体の一部をさわられた場合、そのままの体勢で、痴漢の手をボールペンなどのペン先で思い切り突く。またはピンやクリップの先で手の甲を攻撃。痴漢が痛みでひるんだスキに体を離します。</p>
            <p>ペンやピンは取り出しやすいところに準備しておくといいでしょう。また携帯電話も、角の部分を手の甲にグリグリ押しつけて、相手を攻撃する小道具として活用できます。</p>
          </section>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">背後からの抱きつきから逃れる技</span></h4>
          <p class="mb3">体を持ち上げられないように重心を下げ、相手の下半身にダメージを与えて素早くその場を離れることがとても大切になります。</p>
          <div class="stepbox mb3">
            <div class="stepbox__row">
              <div class="stepbox__item boxitem w50">
                <div class="boxitem__row">
                  <div class="boxitem__cnt">
                    <div class="boxitem__inner">
                      <div class="boxitem__ex">
                        <p>①いきなり抱きつかれても冷静に。<br>相手の組んだ手を両手でしっかり押さえホールド。（押さえると技がかけやすくなる。）</p>
                      </div>
                      <div class="boxitem__img">
                        <figure class="center">
                          <img data-src="<?php echo $img_url; ?>/magazine/alsok/50/alsok50__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/50/alsok50__img01@2x.png"
                            alt="①いきなり抱きつかれても冷静に。相手の組んだ手を両手でしっかり押さえホールド。（押さえると技がかけやすくなる。）｜<?php echo $pageTtl?>" style="max-width:150px" class="u-img__max u-only__pc center">
                          <img data-src="<?php echo $img_url; ?>/magazine/alsok/50/alsok50__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/50/alsok50__img01-sp@2x.png"
                            alt="①いきなり抱きつかれても冷静に。相手の組んだ手を両手でしっかり押さえホールド。（押さえると技がかけやすくなる。）｜<?php echo $pageTtl?>" style="max-width:136px" class="u-img__max u-only__sp center">
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="stepbox__item boxitem w50">
                <div class="boxitem__row">
                  <div class="boxitem__cnt">
                    <div class="boxitem__inner">
                      <div class="boxitem__ex">
                        <p>②手をつかんだまま、相手の足の甲をかかとで思い切り踏みつける。</p>
                      </div>
                      <div class="boxitem__img">
                        <figure class="center">
                          <img data-src="<?php echo $img_url; ?>/magazine/alsok/50/alsok50__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/50/alsok50__img02@2x.png"
                            alt="②手をつかんだまま、相手の足の甲をかかとで思い切り踏みつける。｜<?php echo $pageTtl?>" style="max-width:148px" class="u-img__max u-only__pc center">
                          <img data-src="<?php echo $img_url; ?>/magazine/alsok/50/alsok50__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/50/alsok50__img02-sp@2x.png"
                            alt="②手をつかんだまま、相手の足の甲をかかとで思い切り踏みつける。｜<?php echo $pageTtl?>" style="max-width:146px" class="u-img__max u-only__sp center center">
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="stepbox__row">
              <div class="stepbox__item boxitem w50">
                <div class="boxitem__row">
                  <div class="boxitem__cnt">
                    <div class="boxitem__inner">
                      <div class="boxitem__ex">
                        <p>③（相手は腰を引くので）腰を時計回りに捻るとともに相手の股間を手のひらで攻撃。</p>
                      </div>
                      <div class="boxitem__img">
                        <figure class="center">
                          <img data-src="<?php echo $img_url; ?>/magazine/alsok/50/alsok50__img03.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/50/alsok50__img03@2x.png"
                            alt="③（相手は腰を引くので）腰を時計回りに捻るとともに相手の股間を手のひらで攻撃。｜<?php echo $pageTtl?>" style="max-width:225px" class="u-img__max u-only__pc center">
                          <img data-src="<?php echo $img_url; ?>/magazine/alsok/50/alsok50__img03-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/50/alsok50__img03-sp@2x.png"
                            alt="③（相手は腰を引くので）腰を時計回りに捻るとともに相手の股間を手のひらで攻撃。｜<?php echo $pageTtl?>" style="max-width:229px" class="u-img__max u-only__sp center">
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="stepbox__item boxitem w50">
                <div class="boxitem__row">
                  <div class="boxitem__cnt">
                    <div class="boxitem__inner">
                      <div class="boxitem__ex">
                        <p>④相手がひるんだスキに、腕を振りほどき素早く逃げる。</p>
                      </div>
                      <div class="boxitem__img">
                        <figure class="center">
                          <img data-src="<?php echo $img_url; ?>/magazine/alsok/50/alsok50__img04.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/50/alsok50__img04@2x.png"
                            alt="④相手がひるんだスキに、腕を振りほどき素早く逃げる。｜<?php echo $pageTtl?>" style="max-width:226px" class="u-img__max u-only__pc center">
                          <img data-src="<?php echo $img_url; ?>/magazine/alsok/50/alsok50__img04-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/50/alsok50__img04-sp@2x.png"
                            alt="④相手がひるんだスキに、腕を振りほどき素早く逃げる。｜<?php echo $pageTtl?>" style="max-width:201px" class="u-img__max u-only__sp center center">
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb8">
            <p>心構えをしておくことと、技を覚えておくことで、万が一の時に冷静に対処できます。</p>
          </div>
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
