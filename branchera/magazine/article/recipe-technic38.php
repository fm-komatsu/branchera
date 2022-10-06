<?php
//base
include( "../../function.php" );
$content = get_id_data( '15038' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「お餅の焼き方」を動画で解説。くっつかないように焼くコツは、予熱すること！トースター、フライパン、コンロ、魚焼きグリルを使った美味しいお餅の焼き方をご紹介します。冷凍＆解凍方法もお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'ZTOckFAmMeg';

//導入文
$introTxt = '第38回は「お餅の焼き方」です。トースター/フライパン/網（コンロ）を使ったお餅の焼き方をご紹介します。';



//キャプチャALTタグ
$altCap01 = '事前に1～2分予熱をして、お餅をのせて4分ほど焼きます。';
$altCap02 = '表面に焼き色が付いたら、そのまま1～2分置きます。';
$altCap03 = '熱する前のフライパンにお餅をのせ、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で5分ほど焼きます。';
$altCap04 = '裏返してさらに3分ほど焼きます。';
$altCap05 = 'コンロに網をのせて、事前に1～2分温めます。お餅を網にのせ、お餅に直接火が当たらないように火加減を調整します。';
$altCap06 = '表裏を返しながら7～8分焼きます。';
$altCap07 = 'ファスナー付きの保存袋に入れて冷凍します。保存期間の目安は、約1ヵ月です。';
$altCap08 = '<a href="'.$base_url.'/magazine/article/recipe-technic113.php" class="recipe-design__link">お雑煮</a>';
$altCap09 = 'からみ餅';
$altCap10 = 'きな粉餅';
$altCap11 = 'おかき';
$altCap12 = '';
$altCap13 = '';

?>
<main class="main">
  <article class="main__row">
  <?php
    $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
    $panAry[] = array( "/magazine/index_comic02.php", "今さら聞けない料理のアレコレ" );
    include( $inc_path . "/lib/inc/pan.php" );
    include($inc_path . "/lib/inc/page/_magazine/__comic02tech-header.php");
    include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-main-v.php");
    ?>
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header technic">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num">　</span>
          <span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br><?php echo $introTxt ?></p>
      </div>
      <hr class="recipe__line">
      <?php
        $recipeIcon ='masaki_01';
        $speech ='マユ先生、お餅って美味しいですよね<br>僕、お餅が大好きで、お正月の間はずっと食べちゃうんですよ<br>コウちゃんもすっかりハマってしまいました';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='kou_01';
        $speech ='“もちもち”おもち～♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='お餅、美味しいですよね！<br>焼き方はいろいろありますが、<br class="u-only__pc">フライパンで焼くのがおすすめですよ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>

      <?php
        $recipeIcon ='masaki_03';
        $speech ='え、フライパンでも焼けるんですか！いつも、トースターで焼いていました<br>フライパンならたくさん焼けそうですね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='そうなんですよ<br>他の焼き方もあるので、<br class="u-only__pc">いろいろな方法で美味しいお餅を焼いていきましょう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie technic">
        <h3 class="recipe-movie__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
           alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
        </h3>
        <div class="recipe-movie__video">
          <div class="recipe-movie__video_base">
            <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">お餅の焼き方</h3>
          <p class="mb2">トースター、フライパン、網（コンロ）、魚焼きグリルを使った美味しいお餅の焼き方をご紹介します。</p>
          <h4 class="recipe__ttl">トースターを使った焼き方</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-01@2x.jpg"
                 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-02@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
            </dd>
          </dl>
          <section>
            <div class="recipe-design__check check mb3">
              <div class="check__row">
                <div class="check__ttl">
                  <h4 class="check__ex center">
                    <img
                    data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png"
                    data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png"
                    alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
                  </h4>
                </div>
                <h3>お餅がくっつかないようにするコツ</h3>
                <p class="mb2">お餅を焼くたび、トースターの網にお餅がこびりつく…。そんな失敗をなくす方法は2つ。まず、先に予熱でトースターを温めておきましょう。アルミホイルを敷くのであれば、アルミホイルも先に温めておきます。また、油を染み込ませたキッチンペーパーで網を軽く拭き、コーティングしておくのもおすすめの方法です。それだけで、お餅がくっつきにくくなります。</p>
              </div>
            </div>
          </section>
          <h4 class="recipe__ttl">フライパンを使った焼き方</h4>
          <p>テフロン加工されたフライパンをお使いください。テフロン加工以外のフライパンの場合は、お餅がくっつきやすいので油を引くかオーブンシートを敷いてから焼きましょう。</p>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-03@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-04@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">網（コンロ）を使った焼き方</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-05@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-06@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">魚焼きグリルを使った焼き方</h4>
          <p><a href="<?php echo($base_url) ?>/magazine/article/recipe-technic106.php" class="recipe-design__link">魚焼きグリル（片面グリル）</a>の網にアルミホイルをのせて、先に2～3分予熱しておきます。<br>十分に温まったらお餅をのせて、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で2分焼きましょう。裏面も1分30秒ほど焼いて、好みの焼き色が付いたら取り出してください。</p>
          <p>焦げないように焼くコツは、お餅が途中で膨らんだら、菜箸などで押さえて平らにすること。膨らんで火に近付くとそこだけ黒く焦げてしまうので、注意しましょう。</p>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">つきたてのようなやわらかいお餅にするには？</h3>
              <p>つきたてのとろりとやわらかいお餅が食べたい！というときは、電子レンジを使ってお餅を加熱しましょう。お餅が重ならずに入る大きさの耐熱容器に、お餅を2個入れます。そこに、お餅がギリギリ浸るくらいの水を加えてください。その状態で、600wに設定した電子レンジで2分ほど加熱しましょう。まだお餅がかたい場合は、10秒ずつ加熱していきます。お餅全体が膨らんだら取り出すようにしましょう。加熱し過ぎるとお餅が溶けてしまいますから、ご注意を。</p>
            </section>
          </div>
          <h3 class="recipe__ttl_l mb0">お餅の保存方法</h3>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-07@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">冷凍したお餅を上手に焼くには？</h3>
              <p>冷凍したお餅も、そのままトースターで焼くことができます。冷凍していないお餅の場合と同様に、予熱したトースターで焼きましょう。途中で焦げ付きそうな場合は、アルミホイルをかぶせてください。</p>
              <p>焼き時間は、通常よりも少し長くします。正確な時間はお餅の大きさやワット数によるので、様子を見ながら調整しましょう。</p>
            </section>
          </div>
          <h3 class="recipe__ttl_l mb0">お餅を使ったおすすめレシピ</h3>
          <p>年末年始、餅つき大会のおすそ分けなどで余りがちなお餅。醤油を付けるシンプルな食べ方も美味しいですが、何日も続くと飽きてしまいますよね。少し手を加えるだけでより美味しく食べられる、お餅のアレンジレシピをご紹介します！</p>
          <h4 class="recipe__ttl"><?php echo $altCap08; ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-08@2x.jpg"
              alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p class="mb2">鍋の水を沸騰させてかつお節を入れ、弱火にして3分ほどで火を止めます。かつお節が底に沈んだら、ザルでこしてください。<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic06.php" class="recipe-design__link">だし汁</a>を鍋に戻し、沸騰したら鶏もも肉を入れて煮ます。肉に火が通ったら、酒、醤油、塩で味付けましょう。器に焼いたお餅とかまぼこを入れて、汁を注ぎます。三つ葉、ゆずをのせて完成です。</p>
          </div>
          <h4 class="recipe__ttl"><?php echo $altCap09; ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-09@2x.jpg"
              alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p class="mb2"><a href="<?php echo($base_url)?>/magazine/article/recipe-technic58.php" class="recipe-design__link">大根をすり下ろして</a>軽く汁気を切り、醤油とかつお節を混ぜます。お餅は熱湯でゆでるか、電子レンジで加熱してやわらかくしておきます。お餅に大根おろしを絡めて、器に盛ります。仕上げに青ねぎや七味唐辛子を振っても美味しいですよ。</p>
          </div>
          <h4 class="recipe__ttl">お餅<a href="<?php echo($base_url) ?>/magazine/article/recipe21.php" class="recipe-design__link">ピザ</a></h4>
          <p class="mb2">フライパンに油を引いて、お餅を並べます。水を少量入れて、蓋をして弱火でじっくり焼いてください。お餅がぷっくりと膨らんできたら、チーズ、トマトやベーコン、ピーマンなどお好みの具材をのせましょう。蓋をして、弱火で3～5分程度焼いたらできあがりです。</p>
          <h4 class="recipe__ttl"><?php echo $altCap10; ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-10@2x.jpg"
              alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p class="mb2">お餅は熱湯でゆでるか、電子レンジで加熱してやわらかくしておきます。仕上げにお餅にきな粉と砂糖をまぶしたらできあがりです。</p>
          </div>
          <h4 class="recipe__ttl"><?php echo $altCap11; ?></h4>
          <div class="u-clearfix">
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/38/tech38-11@2x.jpg"
              alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p class="mb2">お餅を小さくカットします。天日干しするか、レンジで加熱してよく乾燥させます。ひび割れができるぐらい乾燥させると、カリッと仕上がりますよ。<a href="<?php echo($base_url)?>/magazine/article/recipe-technic09.php" class="recipe-design__link">170～180℃ほどの油</a>で、きつね色になるまで火を通しましょう。</p>
            <p>揚げたてのうちに味付けをします。塩を振れば塩おかきに。醤油と砂糖を混ぜ合わせて絡めれば、甘辛醤油おかきの完成です。</p>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='kou_01';
        $speech ='パパみて～！おもちのびた～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='masaki_01';
        $speech ='もちもちお餅美味しいね！<br>トースター以外でも、美味しくお餅を焼くことができました';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='お好みの焼き方でお餅料理を楽しんでくださいね～！<br>お餅はカビが生えやすいので、早めに保存しましょう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<section class="mb3">
				<h5>■関連記事</h5>
					<ul>
						<li class="recipe-photolist__item recipe-photolist__reciperecommend">
              <a href="<?php echo $base_url; ?>/magazine/article/recipe-technic113.php" class="recipe-photolist__row">
                <img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech113.jpg" alt="お雑煮のレシピをマスターしよう！関東風&関西風をご紹介" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
                <p class="reciperecommend-ttl">●お雑煮のレシピをマスターしよう！関東風&関西風をご紹介</p>
              </a>
            </li>
					  <li class="recipe-photolist__item recipe-photolist__reciperecommend">
              <a href="<?php echo $base_url; ?>/magazine/article/recipe14.php" class="recipe-photolist__row">
                <img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_recipe14.jpg" alt="第14話 手作りのおせち料理レシピ" class="f-photolist__reciperecommendimg js-show" style="max-width:85px">
                <p class="reciperecommend-ttl">●第14話 手作りのおせち料理レシピ</p>
              </a>
            </li>
					  <li class="recipe-photolist__item recipe-photolist__reciperecommend">
              <a href="<?php echo $base_url; ?>/magazine/article/recipe-technic73.php" class="recipe-photolist__row">
                <img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech73.jpg" alt="炊飯器で炊く！赤飯の作り方" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
                <p class="reciperecommend-ttl">●炊飯器で炊く！赤飯の作り方</p>
              </a>
            </li>
          </ul>
      </section>
      <div class="mb0">
        <?php
        include ($inc_path."/lib/inc/page/_magazine/__recipe-technic-footer.php");
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
