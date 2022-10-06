<?php
//base
include( "../../function.php" );
$content = get_id_data( '15050' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「缶切りの使い方」を動画で解説。業務用の缶詰や、長期保存用の缶詰を開けるときに必要な缶切り。一般的によく用いられる缶切りは、てこ式と回転式（ねじ式）の2種類です。それぞれの缶切りの使い方と、そのほかの便利な缶切りツールをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = '缶のフチ部分に缶切りを引っかけます。';
$altCap02 = '缶切りを前傾させて、刃先を蓋に差し込み、穴を開けます。';
$altCap03 = '缶切りの上体を起こし、穴を開けたところから少し後ろにずらして、再び刃先を蓋に差し込みます。';
$altCap04 = '缶を回しながら、同じ動作を繰り返してください。';
$altCap05 = '蓋は完全に切り離さず、1～2cm残した状態で止めます。';
$altCap06 = '浮いた蓋を缶切りの刃先で持ち上げて、開封します。手を切る恐れがあるので、缶切りを使って持ち上げると安全です。';
$altCap07 = '歯車と三角に尖った部分を使って蓋を開けていきます。';
$altCap08 = '缶のフチ部分を、歯車と三角に尖った部分で挟み込みます。';
$altCap09 = '左手にレバーを持ち替え、右手でハンドルを時計回りに回しましょう。ハンドルを回すと、蓋が切れていきます。';
$altCap10 = '蓋は完全に切り離さず、1～2cm残した状態で止めて、缶切りの突起を使って蓋を持ち上げ、開封します。';
$altCap11 = 'ワインオープナーや栓抜きが一体になっている多機能な缶切り。１台で２、３役を果たしてくれるので便利です。できるだけ荷物を少なくしたい、アウトドアでの使用にもぴったり。';
?>
<main class="main">
  <article class="main__row">
    <?php
      $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
      $panAry[] = array( "/magazine/index_comic02.php", "今さら聞けない料理のアレコレ" );
      include( $inc_path . "/lib/inc/pan.php" );
      // SP時サムネにタイトルを表示するかフラグ
      $thumTtlFlg = 'off';
      include($inc_path . "/lib/inc/page/_magazine/__comic02tech-new-header.php");
      include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-new-main-v.php");
    ?>
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header technic__new">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num">　</span>
          <span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第50回は「缶切りの使い方」です。缶切りのタイプごとに、具体的な使い方をご紹介します。</p>
      </div>
      <hr class="recipe__line">

      <div class="recipe-icn papa_02">
        <div class="inner">
          <p>だめだ！マユ先生から教わった<a href="<?php echo($base_url)?>/magazine/article/recipe17.php" class="recipe-design__link">さば缶料理</a>を作ろうと思ったのに<br class="u-only__pc">缶切りがうまく使えなくて、さば缶が開けられない…</p>
        </div>
      </div>
      <div class="recipe-icn fl_02">
        <div class="inner">
          <p>おいおい！出だしからつまずいているじゃないか！</p>
        </div>
      </div>
      <div class="recipe-icn papa_03">
        <div class="inner">
          <p>え～っ⁉フライパンが喋った！</p>
        </div>
      </div>
      <div class="recipe-icn mama_02">
        <div class="inner">
          <p>そうなのよフラッキー！<br>怪我するんじゃないかと、見ていてヒヤヒヤしちゃって<br class="u-only__pc">今まで手で開けられるプルトップ式の缶詰ばかり食べていたから…<br>改めてパパに缶切りの使い方を教えてくれる？</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>合点承知だぜ！<br>缶切りにもいくつかタイプがあるから<br class="-only__pc">それぞれの使い方を解説するぜ！<br>よーしさっそくやるぞ、マサキ！</p>
        </div>
      </div>
      <div class="recipe-icn papa_02">
        <div class="inner">
          <p>ちょっと、一体どういうことなの～！</p>
        </div>
      </div>
      <div class="recipe__movie recipe-movie-new technic">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl@2x.png"
           alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/xhefUhnKSOA?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">缶切りの使い方</h3>
          <p class="mb2">最近では、手で開けられるプルトップ式の缶詰が増えていますが、業務用の缶詰や長期保存用の缶詰などはプルトップ式ではないことが多く、缶切りが必要な場合もあります。<br>一般的に使われている缶切りは、主に「てこ式」と「回転式」の二種類。今回は、この2種類の缶切りの使い方をご紹介します。</p>
          <h4 class="recipe__ttl_tech">てこ式缶切り</h4>

          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-01@2x.jpg"
                 alt="フラッキーのHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'.$altCap02); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php /* echo ($altCap02); */ ?>
              缶切りを<strong>前傾</strong>させて、刃先を蓋に差し込み、穴を開けます。
            </dd>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap03); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap04); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap05); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-06@2x.jpg"
                alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap06); ?>" style="max-width:300px"
                class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php /* echo ($altCap06); */ ?>
              浮いた蓋を缶切りの刃先で持ち上げて、開封します。手を切る恐れがあるので、<strong>缶切りを使って持ち上げると安全</strong>です。
            </dd>
          </dl>
          <div class="mb3">
            <h4 class="recipe__ttl_tech">回転式缶切り</h4>
            <p>アメリカやイギリスなど、海外で多く使われているタイプの缶切りが回転式です。刃を固定するレバー部分と、刃を回転させるハンドル部分があり、その形や様子から「ねじ式」、「歯車式」、「ロータリー」と呼ばれることもあります。</p>
          </div>

          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-07@2x.jpg"
                 alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap07); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php /* echo ($altCap07); */ ?>
              <strong>歯車と三角に尖った部分</strong>を使って蓋を開けていきます。
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-08@2x.jpg"
                 alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap08); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
              <br>レバーを握り、刃を缶に突き刺してセット・固定します。
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-09@2x.jpg"
                 alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap09); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php /* echo ($altCap09); */ ?>
              左手にレバーを持ち替え、右手でハンドルを<strong>時計回り</strong>に回しましょう。ハンドルを回すと、蓋が切れていきます。
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-10@2x.jpg"
                 alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap10); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap10); ?>
            </dd>
          </dl>

          <div class="recipe-plus1 mb3">
            <div class="recipe-plus1__row">
              <h4 class="recipe-plus1__ttl">ほかにもある！便利な缶切りツール</h4>
              <p class="mb2">ご紹介した、てこ式と回転式のほかにも、さまざまな種類の缶切りがあります。</p>
              <h5>●ワインオープナーや栓抜きが一体になっているもの</h5>
              <dl class="recipe-design__step mb3">
              <dt class="recipe-design__step_img">
                <figure>
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/50/tech50-11@2x.jpg"
                  alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap11); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
              </dt>
              <dd class="recipe-design__step_txt">
                <?php echo ($altCap11); ?>
                <br>流水で洗い流してもOKです。
              </dd>
              </dl>
              <section>
                <div class="mb2">
                  <h5>●電動式</h5>
                  <p>電動式の缶切りは、缶にセットしてボタンを押すだけで、蓋を開けることができます。握力の弱い方やお子さまでも簡単に使えて、怪我の危険が少ないのもこのタイプの特徴。ほかの種類の缶切りに比べると高額で、電池が必要になりますが、力やコツいらずで開けられるのが魅力です。</p>
                </div>
              </section>
              <section>
                <h5>●左利き用</h5>
                <p>市販されている多くの缶切りは右利き用に作られていますが、中には左利き専用に作られたものもあります。例えば、てこ式の缶切りは基本的に左側に刃が付いていますが、左利き用の場合は、反対の右側に刃が付いています。左利きの方は、無理に右利き用の缶切りを使うのではなく、左利き用の缶切りを使うと安全に蓋を開けることができますよ。</p>
              </section>
            </div>
          </div>
        </div>
      </div>
      <div class="recipe-icn papa_03">
        <div class="inner">
          <p>わあ、きれいに蓋が切れた！<br>思ったよりも簡単なんだな…<br>まさか、フライパンに缶切りの使い方を教えてもらうなんて…</p>
        </div>
      </div>
      <div class="recipe-icn fl_02">
        <div class="inner">
          <p>“フライパン”じゃないよ、フラッキーだ！</p>
        </div>
      </div>
      <div class="recipe-icn papa_01">
        <div class="inner">
          <p>ご、ごめん、フラッキー！</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>缶切りが使えるようになったから、<br class="u-only__pc">缶詰めを使った簡単料理もたくさん叩き込めるな！</p>
        </div>
      </div>
      <div class="recipe-icn papa_02">
        <div class="inner">
          <p>お、お手柔らかにお願いします～！</p>
        </div>
      </div>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','14017'),
				array ('recommend-recipe-id','14016'),
				array ('recommend-recipe-id','14020'),
				array ('recommend-recipe-end')

				);
			?>
			<?php
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
			?>
      <div class="mb0">
      <?php
        include ($inc_path."/lib/inc/page/_magazine/__recipe-technic-new-footer.php");
      ?>
      </div>
    </section>
  </article>
</main>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<?php
  $toindex_url = "/magazine/index_comic02.php";
  include( $inc_path . "/lib/inc/toindex__magazin.php" );
  ?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
