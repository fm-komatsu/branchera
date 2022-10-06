<?php
//base
include( "../../function.php" );
$content = get_id_data( '21002' );
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
$release_month ="8";
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
        <h3 class="u-ttl__l">知っていれば役立つ！護身術講座Part1</h3>
        <p class="mb3">昨今、ターゲットを決めない無差別の犯罪も多く、日頃より防犯意識を持つことが大切です。今回は、万が一のとき危険から身を守る、より実践的な護身術をご紹介いたします。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">警戒心をもつ人に犯罪者は近づかない</span></h4>

          <p>まずは心構えとして「警戒心を持つことが重要」。被害に遭うのは、普段「襲われるかもしれない」という意識がまったくない人が多いのです。</p>
          <div class="u-assist">
            <h5>
              <strong>
                point
              </strong>
            </h5>
            <p>まず自分以外の人がどういう行動をとるか分からないと疑うことです。<br>道を歩いているときに、時折左右を見たり振り返ったりするだけでも警戒心が周囲に伝わり、犯罪者を遠ざけます。</p>
          </div>
          <p>周りに気づかれずに、犯行におよびたいという犯人の心理を読み、常に周囲を見渡せる状況をつくることも大切です。<br>たとえば、エレベーターに乗るときは、ボタンと向き合って人に背中を向けて立つのではなく、ボタンの横向きに立つ。そうすれば、エレベーター内全体に目が届き、ふいに背後から襲われるという危険を回避することができます。</p>
        </section>
        <section class="mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">護身術の原則と2大極意</span></h4>
          <p class="mb2">ALSOKの護身術は、襲われたときに、どう安全に逃げるかに重点を置いています。</p>
          <p>基本は</p>
          <div class="u-assist">
            <ol class="u-list__ol_circle-num mt0 mb0">
              <li>相手のひじ側に身体をさばく</li>
              <li>相手の逆をとる</li>
              <li>素早く逃げる</li>
            </ol>
          </div>
          <p class="mb3">の3つで、この原理に沿ってひとつでも技を覚えておけば、万が一のときも応用が利きます。そして自信がつき、非常事態に際して平常心を保つことにつながります。</p>
          <section class="u-clearfix mb3_sp">
            <h5 class="alsok__ttl-s alsok__ttl-s_pink">「パー」でつくる「折れない腕」</h5>
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img01@2x.png"
                alt="「パー」でつくる「折れない腕」<?php echo $pageTtl?>" style="max-width:318px" class="u-img__max u-only__pc">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img01-sp@2x.png"
                alt="「パー」でつくる「折れない腕」<?php echo $pageTtl?>" style="max-width:265px" class="u-img__max u-only__sp center">
            </figure>
            <p>腕に力を入れようとしたとき、多くの人は拳を握りしめますが、この拳を「パー」にして腕を伸ばし、腕を消防ホースと考えて、手の先からどんどん放水することをイメージしてください。</p>
            <p>これが気を活かした「折れない腕」の構え。他人が腕を曲げようとしても、ビクともしない強靭な腕を実現することができます。技をかけるときは、必ず「パー」を使います。</p>
          </section>
          <section class="u-clearfix">
            <h5 class="alsok__ttl-s alsok__ttl-s_pink">「丹田」に「気」をため身体を安定させる</h5>
            <p>人は通常ものを考えるとき、気が頭の上にいきがち。それを意識して丹田（へそ下10cm）のあたりに集中することで、身体の重心が安定します。気が頭上なら簡単に持ち上がる身体が、丹田に気があるとズシリと重くて持ち上げることができず、非常事態に遭遇しても自分の身体を自在に動かすことができます。</p>
          </section>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">ひじ付近をつかまれたとき、相手の腕を逆にとる技</span></h4>
          <p class="mb3">一旦腕の逆をとり、相手にダメージを与え、素早くその場を離れることがとても大切になります。</p>
          <div class="stepbox mb3">
            <div class="stepbox__row">
              <div class="stepbox__item boxitem w50">
                <div class="boxitem__row">
                  <div class="boxitem__cnt">
                    <div class="boxitem__inner">
                      <div class="boxitem__ex">
                        <p>①ひじ付近をつかまれたときは、慌てずに手のひらをパーにして、やや押し込むように親指側の橈（とう）骨※を相手の前腕部に密着させる。※ 前腕親指側にある骨</p>
                      </div>
                      <div class="boxitem__img">
                        <figure class="center">
                          <img data-src="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img02@2x.png"
                            alt="①ひじ付近をつかまれたときは、慌てずに手のひらをパーにして、やや押し込むように親指側の橈（とう）骨※を相手の前腕部に密着させる。※ 前腕親指側にある骨｜<?php echo $pageTtl?>" style="max-width:256px" class="u-img__max u-only__pc center">
                          <img data-src="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img02-sp@2x.png"
                            alt="①ひじ付近をつかまれたときは、慌てずに手のひらをパーにして、やや押し込むように親指側の橈（とう）骨※を相手の前腕部に密着させる。※ 前腕親指側にある骨｜<?php echo $pageTtl?>" style="max-width:230px" class="u-img__max u-only__sp center">
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
                        <p>②下から内側に回転させるようにして、相手の腕を捻りあげる。</p>
                      </div>
                      <div class="boxitem__img">
                        <figure class="center">
                          <img data-src="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img03.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img03@2x.png"
                            alt="②下から内側に回転させるようにして、相手の腕を捻りあげる。｜<?php echo $pageTtl?>" style="max-width:264px" class="u-img__max u-only__pc center">
                          <img data-src="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img03-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img03-sp@2x.png"
                            alt="②下から内側に回転させるようにして、相手の腕を捻りあげる。｜<?php echo $pageTtl?>" style="max-width:241px" class="u-img__max u-only__sp center center">
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
                        <p>③相手の腕の上まで回転させたら、手のひらを自分の胸の方向に返し、そのまま自分の胸まで引き寄せ、胸にホールドする。</p>
                      </div>
                      <div class="boxitem__img">
                        <figure class="center">
                          <img data-src="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img04.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img04@2x.png"
                            alt="③相手の腕の上まで回転させたら、手のひらを自分の胸の方向に返し、そのまま自分の胸まで引き寄せ、胸にホールドする。｜<?php echo $pageTtl?>" style="max-width:243px" class="u-img__max u-only__pc center">
                          <img data-src="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img04-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img04-sp@2x.png"
                            alt="③相手の腕の上まで回転させたら、手のひらを自分の胸の方向に返し、そのまま自分の胸まで引き寄せ、胸にホールドする。｜<?php echo $pageTtl?>" style="max-width:217px" class="u-img__max u-only__sp center">
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
                        <p>④胸にホールドしたまま、左手で相手のひじ関節部を真下に極める。（相手は痛みでかがみこむ、バランスを崩したところで、すぐ逃げる）</p>
                      </div>
                      <div class="boxitem__img">
                        <figure class="center">
                          <img data-src="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img05.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img05@2x.png"
                            alt="④胸にホールドしたまま、左手で相手のひじ関節部を真下に極める。（相手は痛みでかがみこむ、バランスを崩したところで、すぐ逃げる）｜<?php echo $pageTtl?>" style="max-width:264px" class="u-img__max u-only__pc center">
                          <img data-src="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img05-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/49/alsok49__img05-sp@2x.png"
                            alt="④胸にホールドしたまま、左手で相手のひじ関節部を真下に極める。（相手は痛みでかがみこむ、バランスを崩したところで、すぐ逃げる）｜<?php echo $pageTtl?>" style="max-width:241px" class="u-img__max u-only__sp center center">
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb8">
            <p>ここでご紹介する護身術は、数回の練習で覚えられるもの。家族や身近な人と一緒に練習してみましょう。</p>
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
