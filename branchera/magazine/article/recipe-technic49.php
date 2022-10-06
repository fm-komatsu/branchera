<?php
//base
include( "../../function.php" );
$content = get_id_data( '15049' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「えびの下ごしらえ」を動画で解説。えびを美味しく調理するには、事前に背わたや臭みを取る下ごしらえが必要です。殻付きえびとむきえび、それぞれの処理方法を解説します。また、「なぜえびの下ごしらえには片栗粉を使うのか？」という疑問にもお答えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '104';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = 'まずは、えびの背わたを取っていきます。';
$altCap02 = '竹串を手前に引くと黒い背わたが出てくるので、優しく引き上げるようにして抜き取ります。';
$altCap03 = 'えびをボウルに移し、<a href="'.$base_url.'/magazine/article/recipe-technic85.php" class="recipe-design__link">片栗粉</a>と<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>を振りかけてよく揉み込みます。';
$altCap04 = 'ざるに移し、水の入ったボウルに浸けながら、よく洗います。';
$altCap05 = '汚れが浮いてきたらざるから上げて、キッチンペーパーで水気を拭き取りましょう。';
$altCap06 = '殻をむく場合は、背わたを取った後に頭から尾にかけて殻をむきましょう。その後は殻付きのときの手順と同様に、片栗粉と塩を揉み込んで汚れを落とします。';
$altCap07 = '有頭えびの場合も、無頭えびの下ごしらえと手順は同じです。';
$altCap08 = 'まず、えびの背わたを取ります。';
$altCap09 = 'えびの切れ目を開き、包丁の刃先で背わたをかき出します。';
$altCap10 = 'えびをボウルに移し、片栗粉と塩を振りかけてよく揉み込みます。';
$altCap11 = 'ざるに移し、水の入ったボウルに浸けながら、よく洗います。';
$altCap12 = '汚れが浮いてきたらざるから上げて、キッチンペーパーで水気を拭き取ります。';
$altCap13 = '水気を取ったえびをラップに包み、ファスナー付き保存袋に入れて保存します。';
$altCap14 = '家庭で<a href="'.$base_url.'/magazine/article/recipe-technic82.php" class="recipe-design__link">天ぷら</a>にするには、ブラックタイガー、価格が抑えめなバナメイえびなど、手に入りやすいものが向いています。';
$altCap15 = '一般的に、えびフライに使用されるのはブラックタイガーです。特別なお祝いの場合には、「えびの王様」と呼ばれる“車えび”を使ってみるのもよいでしょう。';
$altCap16 = 'えびを使ったサラダは、ボリュームがあり見栄えが良いのが特徴です。';
$altCap17 = '甘辛く、<a href="'.$base_url.'/magazine/article/recipe-technic20.php" class="recipe-design__link">ごはん</a>が進むえびチリ。衣は片栗粉と卵白を混ぜ、少し多めの油で炒めるのがコツです。<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>にした白ねぎ、にんにく、生姜、豆板醤と一緒に炒めて、酒、ケチャップ、鶏ガラスープ、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>を加えて煮ましょう。';
$altCap18 = '寄せ鍋にえびを入れる場合、豪華に見える殻付きがおすすめ。よい出汁が出るので一石二鳥です。';
$altCap19 = 'ゆでたえびと<a href="'.$base_url.'/magazine/article/recipe-technic37.php" class="recipe-design__link">錦糸卵</a>、いくらなどを使った簡単でゴージャスなちらし寿司は、お祝い事にぴったり。';

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
    <!-- 220805追加 -->
		<div class="mt3 mt2_sp mb5 mb3_sp">
			<div>
				<?php $CmGtmId = "1"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php");?>
			</div>
		</div>
		<!-- /220805追加 -->
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header technic__new">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num">　</span>
          <span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第49回は、「えびの下ごしらえ」です。うまみがたっぷりでプリプリになる、えびの下ごしらえの方法をご紹介します。</p>
      </div>
      <hr class="recipe__line">

      <div class="recipe-icn ko_01">
        <div class="inner">
          <p>コウちゃん、えびフライがたべたくなっちゃった～！<br>えびフライ、だーいすき！</p>
        </div>
      </div>
      <div class="recipe-icn mama_01">
        <div class="inner">
          <p>えびフライ、いいね～！<br>せっかくだから、冷凍食品とかじゃなくて<br class="u-only__pc">新鮮なえびを使ったえびフライを作りたいな！<br>でも、えびの下ごしらえってどうすればよかったっけ…？</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>もしかして、俺をお呼びかな？</p>
        </div>
      </div>
      <div class="recipe-icn mama_03">
        <div class="inner">
          <p>出た～！フラッキー‼<br>やっぱり夢じゃなかった！</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>えびはしっかり下ごしらえをしないと臭みが残ってしまうんだ！<br>俺がイチから教えるから、<br class="u-only__pc">最高に美味しいえびフライを作ろうぜ！</p>
        </div>
      </div>
      <div class="recipe-icn mama_01">
        <div class="inner">
          <p>よーし！やるぞ～！</p>
        </div>
      </div>
      <?php include ($inc_path."/lib/inc/page/_magazine/__comic02_pr.php"); //PR記事 ?>
      <div class="recipe__movie recipe-movie-new technic">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl@2x.png"
           alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/jof_r8tDMm0?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">えびの下ごしらえ方法</h3>
          <p class="mb2">えびはうまみがたっぷりで、高タンパク低脂肪。家庭でもお馴染みの食材の一つですが、下ごしらえがきちんとできていないと、料理が生臭くなったり、舌触りがパサパサになってしまうことがあります。<br>今回は、プリプリで美味しいえびになる、正しいえびの下ごしらえ方法をお教えします。</p>
          <h4 class="recipe__ttl_tech">各手順に共通の材料</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>えび（殻付きorむきえび）</dt>
              <dd>200g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>片栗粉</dt>
              <dd>大さじ1</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>塩</dt>
              <dd>小さじ1/2</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">殻付き（無頭）の場合</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-01@2x.jpg"
                 alt="フラッキーのHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
              えびの側面を手前にするようにして持ちます。背を丸めた状態で、<strong>頭側から2～3番目の節</strong>に竹串を刺してください。<br>竹串は、3mm程度の深さに刺しましょう。

            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'.$altCap02); ?>" style="max-width:300px" class="u-img__max">
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-03@2x.jpg"
                 alt="フラッキーのHow To" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap04); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
              <br>流水で洗い流してもOKです。
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap05); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
              <br>料理に使う前に、足をもぎ取ります。
            </dd>
          </dl>
          <div class="recipe-check mb3">
            <div class="recipe-check__row">
              <div class="recipe-check__ttl">
                <h4 class="recipe-check__ex center">
                  <img
                  data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png"
                  data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png"
                  alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
                </h4>
                <h4>片栗粉を使う理由</h4>
                <p class="mb2">えびの下ごしらえに片栗粉を使うのは、表面の汚れと臭いを取り除くため。塩によって浮き上がった汚れが片栗粉に付着するので、それを洗い流すことで取り除くという仕組みなんだ。手で取るのが難しい身の隙間の汚れも、粒子の細かい片栗粉であれば、隅々まで取り除くことができるんだぜ！</p>
                <hr>
                <h4>片栗粉がないときの代用法</h4>
                <p>「下ごしらえをしようとしたら、片栗粉が切れていた！」というときは、お酒で代用することができるぞ。お酒のアルコール成分が臭みを消し、殺菌作用で細菌を落としてくれるんだ。<br>ちなみに、塩・片栗粉・酒を併用することも可能！併用する場合は、片栗粉と塩を入れるタイミングで酒<a href="<?php echo($base_url)?>/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>１を入れよう。臭みと汚れを徹底的に落としたいときにおすすめだぜ！</p>
              </div>
            </div>
          </div>
          <div class="recipe-plus1 mb3">
            <div class="recipe-plus1__row">
              <h4 class="recipe-plus1__ttl">殻をむいて食べる場合</h4>
              <dl class="recipe-design__step mb3">
                <dt class="recipe-design__step_img">
                  <figure>
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-06@2x.jpg"
                    alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap06); ?>" style="max-width:300px"
                    class="u-img__max">
                  </figure>
                </dt>
                <dd class="recipe-design__step_txt">
                  <?php echo ($altCap06); ?>
                </dd>
              </dl>
            </div>
          </div>

          <h4 class="recipe__ttl_tech">殻付き（有頭）の場合</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-07@2x.jpg"
                 alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap07); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl_tech">むきえびの場合</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-08@2x.jpg"
                 alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap08); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
              <br><a href="<?php echo($base_url)?>/magazine/article/recipe-technic17.php" class="recipe-design__link">包丁</a>を横に寝かせて、えびの背中から尾にかけて、<strong>浅い切り込み</strong>を入れます。
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-09@2x.jpg"
                 alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap09); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-10@2x.jpg"
                 alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap10); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php /* echo ($altCap10); */ ?>
              えびをボウルに移し、<strong>片栗粉と塩</strong>を振りかけてよく揉み込みます。
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-11@2x.jpg"
                 alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap11); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap11); ?>
              <br>流水で洗い流してもOKです。
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-12@2x.jpg"
                 alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap12); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap12); ?>
            </dd>
          </dl>
          <section class="mb4">
          <div class="mb4">
            <h3 class="recipe__ttl_l">下ごしらえ済のえびの保存方法</h3>
            <p>下ごしらえが済んでいるえびは、いろいろな料理にそのまま使えてとっても便利！時短になります。えびの冷凍保存方法をお伝えします。</p>
          </div>
            <div class="mb2">
              <h4 class="recipe__ttl_tech">冷凍保存方法</h4>
              <dl class="recipe-design__step mb3">
                <dt class="recipe-design__step_img">
                  <figure>
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-13.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-13@2x.jpg"
                    alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap13); ?>" style="max-width:300px"
                    class="u-img__max">
                  </figure>
                </dt>
                <dd class="recipe-design__step_txt">
                  <?php echo ($altCap13); ?>
                  <br>保存期間の目安は、<strong>約2週間</strong>です。
                </dd>
              </dl>
            </div>
            <div class="mb2">
              <div>
                <h4 class="recipe__ttl_tech">冷凍えびの解凍方法</h4>
                <p class="mb2 mb0_sp">市販の冷凍えびや、自分で冷凍したえびを解凍する方法をご紹介します。</p>
                <h5>塩水解凍</h5>
                <p>一般的に用いられている方法です。海と同じ3.5％の塩分濃度の塩水に浸けることで、水分やうまみを閉じ込めて、プリプリした状態で解凍することができます。<br>塩水ではなく真水で解凍すると、浸透圧の関係で水分やうまみが流出してしまうので注意しましょう。</p>
                <div>
                  <ul class="u-list__ul_num">
                    <li>100mlあたり塩3.5ｇの比率でボウルに塩水を入れます。（一回の解凍に使う分量の目安は、水600ml、塩21gです。）</li>
                    <li>えびを塩水に浸します。</li>
                    <li>20分程度放置すると半解凍状態になるので、ざるに上げて料理に使いましょう。</li>
                  </ul>
                </div>
                <h5>氷水解凍</h5>
                <p>低い温度を保ったまま解凍する方法です。ドリップが出る量を減らし、うまみの流出を防ぐことができます。</p>
                <div>
                  <ul class="u-list__ul_num">
                    <li>パックで包装された状態のまま、えびをファスナー付き保存袋に入れます。</li>
                    <li>しっかりと空気を抜いた状態で封を閉じましょう。氷水を入れたボウルに保存袋のまま入れて、40～60分ほど放置します。</li>
                    <li>解凍状態になったら、ボウルから取り出して料理に使いましょう。</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="recipe-plus1 mb3">
              <div class="recipe-plus1__row">
                <h4 class="recipe-plus1__ttl">よりプリプリになる！重曹を使った解凍方法</h4>
                <p class="mb3 mb0_sp">「安い冷凍えびをできるだけ美味しく解凍したい！」というときにおすすめなのが、重曹を使った解凍方法。アルカリ性の重曹は、タンパク質を固める効果があります。えびの身はほとんどがタンパク質でできているため、重曹の入った水に入れると身が引き締まり、プリプリとした食感になるのです。</p>
                <p>塩水解凍のときと同じように塩水600mlをボウルに用意し、重曹大さじ2を加えます。そこにパックから出したえびを浸して、20分程度放置しましょう。</p>
              </div>
            </div>
            <div class="mb2">
              <h3 class="recipe__ttl_l">えびを使った人気レシピとおすすめ下ごしらえ方法</h3>
              <p>洋食、中華に問わず美味しい、身近な食材の1つ。<br>そんなえびの人気レシピと、おすすめの下ごしらえの方法をご紹介します。</p>
            </div>
            <section>
              <div class="mb3">
                <h4 class="recipe__ttl_tech">天ぷら</h4>
                <div class="u-clearfix">
                  <div class="u-float__left">
                    <figure>
                      <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-14.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-14@2x.jpg"
                      alt="フラッキーのHow To" alt="フラッキーのHow To" style="max-width:300px"
                      class="u-img__max">
                    </figure>
                  </div>
                  <div class="recipe-design__step_txt">
                    <p><?php echo ($altCap14); ?>
                    <br>揚げるときは油はねを防ぐため、事前に尾の先端の広がった部分と、「剣先（けんさき）」と呼ばれる尖った部分を斜めに３～５mm程度切り落としておきます。<br>その後、尾の付け根から端に向かって包丁でしごいて、尾の中に溜まった水分を出しておきましょう。</p>
                  </div>
                </div>
              </div>
              <div class="mb3">
                <h4 class="recipe__ttl_tech">えびフライ</h4>
                <div class="u-clearfix">
                  <div class="u-float__right">
                    <figure>
                      <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-15.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-15@2x.jpg"
                      alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap15); ?>" style="max-width:300px"
                      class="u-img__max">
                    </figure>
                  </div>
                  <div class="recipe-design__step_txt">
                    <p><?php echo ($altCap15); ?>
                    <br>えびは加熱すると背中を丸めた形になるため、下ごしらえのときに腹側に数か所切り込みを入れ、背を軽く押さえることで反りを防ぎます。</p>
                  </div>
                </div>
              </div>
              <div class="mb3">
                <h4 class="recipe__ttl_tech">サラダ</h4>
                <div class="u-clearfix">
                  <div class="u-float__left">
                    <figure>
                      <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-16.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-16@2x.jpg"
                      alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap16); ?>" style="max-width:300px"
                      class="u-img__max">
                    </figure>
                  </div>
                  <div class="recipe-design__step_txt">
                    <p><?php echo ($altCap16); ?>
                    <br>なかでも、マヨネーズベースの<a href="<?php echo($base_url)?>/magazine/article/recipe-technic145.php" class="recipe-design__link">ドレッシング</a>を使うシーザーサラダとの相性は抜群。<a href="<?php echo($base_url)?>/magazine/article/recipe-technic68.php" class="recipe-design__link">アボカド</a>と和えても美味しいですよ。<br>サラダにえびを使う場合は、下ゆでしてしっかり火を通しましょう。</p>
                  </div>
                </div>
              </div>
              <div class="mb3">
                <h4 class="recipe__ttl_tech">えびチリ（中華）</h4>
                <div class="u-clearfix">
                  <div class="u-float__right">
                    <figure>
                      <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-17.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-17@2x.jpg"
                      alt="フラッキーのHow To" alt="フラッキーのHow To" style="max-width:300px"
                      class="u-img__max">
                    </figure>
                  </div>
                  <div class="recipe-design__step_txt">
                    <p><?php echo ($altCap17); ?>
                    <br>えびチリに使うのは、無頭のむきえびが食べやすく、たれに絡むのでおすすめです。</p>
                  </div>
                </div>
              </div>
              <div class="mb3">
                <h4 class="recipe__ttl_tech">寄せ鍋</h4>
                <div class="u-clearfix">
                  <div class="u-float__left">
                    <figure>
                      <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-18.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-18@2x.jpg"
                      alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap18); ?>" style="max-width:300px"
                      class="u-img__max">
                    </figure>
                  </div>
                  <div class="recipe-design__step_txt">
                    <p><?php echo ($altCap18); ?>
                    <br>ただ、食べるときに手が汚れてしまうので、気になる場合は胴体だけ殻をむいて入れるとよいでしょう。</p>
                  </div>
                </div>
              </div>
              <div>
                <h4 class="recipe__ttl_tech">ちらし寿司</h4>
                <div class="u-clearfix">
                  <div class="u-float__right">
                    <figure>
                      <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-19.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/49/tech49-19@2x.jpg"
                      alt="フラッキーのHow To" alt="フラッキーのHow To" style="max-width:300px"
                      class="u-img__max">
                    </figure>
                  </div>
                  <div class="recipe-design__step_txt">
                    <p><?php echo ($altCap19); ?>
                    <br>簡単かわいい！<a href="<?php echo($base_url)?>/magazine/article/recipe16.php" class="recipe-design__link">ひなまつりのケーキ寿司</a> のトッピングにするのもおすすめです。</p>
                  </div>
                </div>
              </div>
            </section>
          </section>
        </div>
      </div>
      <div class="recipe-icn ko_03">
        <div class="inner">
          <p>うわぁ、えびフライおいしーい！サクサクでプリプリー♪</p>
        </div>
      </div>
      <div class="recipe-icn fl_03">
        <div class="inner">
          <p>だろ？しっかり下ごしらえしているから、<br class="u-only__pc">えびのうまみが堪能できるんだ！</p>
        </div>
      </div>
      <div class="recipe-icn mama_01">
        <div class="inner">
          <p>一度覚えてしまえば、意外と下ごしらえも簡単だね！<br>えびフライもうまく作れてよかった～<br>これからえびを使ったレシピをどんどん作っていこう！</p>
        </div>
      </div>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15082'),
				array ('recommend-recipe-id','15025'),
				array ('recommend-recipe-id','14010'),
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
