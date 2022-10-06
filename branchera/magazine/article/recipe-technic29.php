<?php
//base
include( "../../function.php" );
$content = get_id_data( '15029' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「土鍋ご飯の炊き方」を動画で解説。土鍋を使うと、ご飯をふっくら美味しく炊くことができます。米の測り方や研ぎ方、おこげの作り方を詳しくご紹介します。また、炊飯器で炊いたご飯との違いも分かりやすく解説。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '102';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = '4hga-VdpXYQ';

//導入文
$introTxt = '第29回は、「土鍋でご飯を炊く方法」です。米本来の甘さやおこげが楽しめる土鍋を使ったご飯の炊き方をご紹介します。';


//キャプチャALTタグ
$altCap01 = '1合（180㏄）の<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">計量カップ</a>で、山盛りに米を入れます。';
$altCap02 = '指や箸などで平らにします。';
$altCap03 = 'たっぷりの水を加えて、軽く2回～3回かき混ぜます。<br>かき混ぜたらすぐに水を捨てます。';
$altCap04 = '力を入れ過ぎず、弧を描くように20回ほどかき混ぜます。<br>新しい水を加えて、軽く混ぜて捨てます。<br>同様に水を加えて、軽く混ぜる作業を2回ほど繰り返します。';
$altCap05 = '<strong>夏場は30分・冬場は1時間～1時間30分</strong>浸水させます。<br>※米の色が透明から真っ白に変われば、浸水完了です。';
$altCap06 = 'ざるにあげて、しっかりと水を切ります。';
$altCap07 = '土鍋に米を移し、炊く分量の水を加えます。<br>水の目安は2合が400ml～450mlで、3合が600ml～650mlです。';
$altCap08 = '中火にかけて沸騰させて、沸騰したら弱火にして15分炊きます。';
$altCap09 = '15分後、蓋を取って水の残り具合を確認します。<br>ご飯の上から泡が出ていた場合は、水気が残っているため、蓋をして弱火で1分～2分ほど追加で炊きます。';
$altCap10 = '水気が残っていなければOKです。蓋をしたまま、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で約10秒加熱して、おこげを作ります。火からおろして10分ほど蒸らします。';
$altCap11 = '蓋を取って底から空気を入れるようにほぐします。<br>ふっくらとよそったら完成です。';

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
    <!-- 220805追加 -->
    <div class="mt3 mt2_sp mb5 mb3_sp">
      <div>
        <?php $CmGtmId = "1"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php");?>
      </div>
    </div>
    <!-- /220805追加 -->
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
        $recipeIcon ='mie_01';
        $speech ='マユ先生、昨日友達の家で夕飯をごちそうになったんですけど、<br class="u-only__pc">そのときに出してもらった土鍋で炊いたご飯がすごく美味しかったんですよ！ ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='土鍋で炊いたご飯って、ふっくらと甘みが増して<br class="u-only__pc">おこげも香ばしくて美味しいですよね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='kou_01';
        $speech ='コウちゃん、またカリカリおこげたべた～い！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='家で土鍋でご飯を炊こうと思うんですけど、<br class="u-only__pc">美味しく炊く自信がなくて… ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='土鍋でご飯を炊くのって難しいイメージがあるかもしれませんが、<br class="u-only__pc">火加減に注意するだけで、美味しく炊くことができますよ<br>正しい土鍋ご飯の炊き方をレッスンしていきましょう♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php include ($inc_path."/lib/inc/page/_magazine/__comic02_pr.php"); //PR記事 ?>
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
          <h3 class="recipe__ttl_l mb0">米を炊く前の準備</h3>
          <p class="mb3">土鍋でご飯を炊くには、いくつかの前準備が必要です。基本を押さえて、美味しいご飯を炊く準備をしていきましょう。</p>
          <h4 class="recipe__ttl">土鍋の使い初めには「目止め」</h4>
          <p>土鍋を購入したら、初めて使用するときのみ「目止め」という下準備をして、ひび割れや匂い移りの予防をします。土鍋に<strong>8分目</strong>くらいまで水を入れたら、片栗粉<a href="<?php echo $base_url ?>/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>2を入れて、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>にかけて沸騰させます。沸騰させたら火を止めて、土鍋が完全に冷めるまで待ちます。冷めたら、中身を捨てて土鍋を水洗いします。2度目の使用以降はやらなくて大丈夫ですが、土鍋で美味しく米を炊くために、初回はこの「目止め」をしっかり行ないましょう。</p>
          <h4 class="recipe__ttl">米の測り方</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-01@2x.jpg"
                 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-02@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-03@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-04@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-05@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-06@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">無洗米はとがずに炊飯を</h3>
              <p class="mb2">普通の精米は、玄米から胚芽とぬかを取り除いた状態で、表面にはまだ粘着性のある「肌ぬか」が残っています。そのため、炊飯前に米をとぎ、肌ぬかを取り除く必要があるのです。無洗米はすでに肌ぬかが取り除かれているため、米をとぐ必要がなく、そのまま炊飯することができます。</p>
              <p>無洗米に水を入れると、多少水が白く濁りますが、これは米のでんぷん質と気泡によるもの。気になる場合は軽くすすぐとよいでしょう。<br>また、無洗米を炊くときは、精米よりも少し水を多めにしてください。これは、無洗米は肌ぬかがない分、同じカップ一杯分でも普通の精米より米の量が増えるからです。米1合に対して、大さじ1～2杯程度の水を加えましょう。</p>
            </section>
          </div>
          <h3 class="recipe__ttl_l mb0">米の炊き方</h3>
          <p class="mb3">準備が終わったら、いよいよ炊飯です。水量や火加減に注意して、ふっくらと米を炊き上げていきましょう。</p>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-07@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-08@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-09@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?></dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-10@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap10); ?></dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/29/tech29-11@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap11); ?></dd>
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
                <h3>おこげを上手に作る方法</h3>
                <p>土鍋ご飯の楽しみの一つは、「おこげ」。土鍋ならではの香ばしいおこげをきれいに作るにはコツがあります。蒸らす前に蓋をしたまま、中火〜<a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>で10秒ほど加熱すると、きれいなおこげを作ることができます。蓋を開けてみて、まだおこげが十分にできていなければ、さらに中火で10〜20秒ほど加熱します。<br>火加減は土鍋の大きさや米の量によっても変わるので、様子を見ながら調整してくださいね。</p>
              </div>
            </div>
          </section>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">よくあるミス！こびり付きに注意</h3>
              <p class="mb2">土鍋のご飯は美味しいけれど、米が鍋にこびり付いてしまったという経験をお持ちの方もいるのではないでしょうか。<br>米が土鍋に貼り付くのは、沸騰までの時間、米が動かないようにするために起こる現象といわれています。</p>
              <p class="mb2">米のこびり付きを防ぐには、最初に土鍋に水だけを入れて沸騰させましょう。沸騰したら鍋に米を入れて、鍋底からかき回してください。米が土鍋に貼り付かないことを確認したら、米を平らにならし、強火のまま蓋をして炊きます。沸騰したら中火で5分。その後､弱火で4分炊き､10分ほど蒸らせば、こびり付きが少ない状態で炊き上がりますよ。</p>
              <p>また、土鍋にこびり付いた米を洗う際は、まず土鍋に水かお湯を入れて火にかけます。沸騰し始めたら火からおろして、10分ほど置きましょう。その後通常通り洗えば、こびり付いた米を簡単に落とせます。</p>
            </section>
          </div>
          <h3 class="recipe__ttl_l mb0">ズバリ！土鍋の魅力とは？</h3>
          <p>土鍋で炊いたご飯を食べた方の中には、「炊飯器で炊いたご飯と違う！」と感じた方もいると思います。土鍋で炊いたご飯は、ふっくらもっちりして、香りもよいですよね。土鍋で炊いたご飯はどうして美味しいのでしょうか？</p>
          <h4 class="recipe__ttl">[ 1 ] 遠赤外線効果と高い保温力</h4>
          <p class="mb2">土鍋は火にかけると温度がゆっくりと上昇し、遠赤外線効果で米を格段に美味しくしてくれます。土鍋は沸騰までに時間がかかりますが、その分、一度温まったら保温力が高いため、じわじわと包み込むように食材に熱を与えながら、米のうまみ、甘味を引き出します。</p>
          <h4 class="recipe__ttl">[ 2 ] 時短につながる！</h4>
          <p class="mb2">土鍋の方が、炊飯器で炊くよりも時短につながるということをご存じでしたか？あらかじめ水に浸しておいた米を中火にかけ、蓋の穴から勢いよく蒸気が出て沸騰したことを確認したら、弱火にして15分。後は10分ほど蒸らせば炊きあがり。<br>このように炊飯器よりも確実に短時間で炊きあがるのも、土鍋の魅力です。また、土鍋はテーブルにそのまま出せるところも便利ですね。</p>
          <h4 class="recipe__ttl">[ 3 ] ガスはもちろんIHでも使用できる</h4>
          <p class="mb2">今はガス用だけでなく、IH用の土鍋も出ています。IH用の土鍋でもガスと同じように美味しく炊きあげることができます。</p>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">電子レンジ対応の土鍋で時短</h3>
              <p>最近は、ガスコンロだけでなく電子レンジでも使える土鍋が販売されています。<br>火にかけずに、レンジに入れてチンするだけで炊くことができるので、「時短しながら美味しいご飯が炊けるアイテム」として注目を集めています。<br>「土鍋ご飯は作ってみたいけど、どうしても時間がない」「火を使わず手軽に炊きたい」という方は、ぜひチェックしてみてください。</p>
            </section>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='mie_01';
        $speech ='ご飯がつやつやで、ほんのりおこげもついてる！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='kou_01';
        $speech ='わぁ～！おいしそう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='土鍋の種類によって、蓋と本体部分の密閉度が低いものがあります<br>その場合は、濡らしたふきんを土鍋の縁に巻き付けると、<br class="u-only__pc">密閉度がアップして美味しいご飯が炊くことができますよ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <figure class="center mb2">
				<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/29/technic29_point.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/29/technic29_point@2x.jpg"
				 alt="	土鍋の種類によって、フタと本体部分の密閉度が低い場合は、濡らした布巾を土鍋の縁に巻きつけると、密閉度がアップして美味しいご飯が炊くことができる" style="max-width:362px" class="u-img__max">
			</figure>
      <?php
        $recipeIcon ='mie_01';
        $speech ='よし、帰ったらさっそく<br class="u-only__pc">土鍋でご飯を炊くぞ～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15021'),
				array ('recommend-recipe-id','14016'),
				array ('recommend-recipe-id','15043'),
				array ('recommend-recipe-end')

				);
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
			?>
      <div class="mb0">
        <?php
        include ($inc_path."/lib/inc/page/_magazine/__recipe-technic-footer.php");
      ?>
      </div>
    </section>
  </article>
</main>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<!-- 220805追加 -->
<div class="main__row pt0_sp mb2_sp">
	<div>
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php"); ?>
	</div>
</div>
<!-- /220805追加 -->
<?php
  $toindex_url = "/magazine/index_comic02.php";
  include( $inc_path . "/lib/inc/toindex__magazin.php" );
  ?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
