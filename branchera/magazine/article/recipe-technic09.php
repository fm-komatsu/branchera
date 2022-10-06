<?php
//base
include( "../../function.php" );
$content = get_id_data( '15009' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「揚げ物の温度の目安、調整方法」を動画で解説。油の温度の測り方、揚げ上がりのタイミングなどをご紹介します。コロッケや天ぷらなど、人気メニュー別の温度の目安や、美味しく揚げるコツも合わせてお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '108';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'kdrj8qF4g8c';

//導入文
$introTxt = '第9回は、「揚げ物の基本」です。油の温度の測り方や揚げ上がりのタイミングをマスターしてカラッと美味しい揚げ物を作りましょう。';

//キャプチャALTタグ
$altCap01 = '揚げ物の温度を測るときは、<strong>菜箸を油に入れて、気泡の状態を見て温度を判断</strong>します。軽く菜箸を濡らして、ふきんでしっかりと拭き取ってから使いましょう。';
$altCap02 = '[ 低温：150～160℃ ]<br>菜箸からゆらゆらと泡が上がる状態';
$altCap03 = '[ 中温：170℃ ]<br>細かい泡がスーっと上がる状態';
$altCap04 = '[ 高温：180～190℃ ]<br>細かい泡がたくさん、勢いよく上がる状態';
$altCap05 = '形が崩れたり、衣がはがれたりするため、食材を入れてすぐは、触ったり動かしたりしないようにします。また、揚がった後は、網やペーパーを敷いたバットに重ならないように並べ、<strong>しっかりと油を切る</strong>ことも美味しく揚げるコツです。';
$altCap06 = '揚げ上がりの目安を見るには、<strong>食材の色や泡などの見た目や、音</strong>で判断します。';
$altCap07 = '次のような状態になったら、揚げ上がりの目安です。<br>泡：気泡が小さくなる<br>食材：こんがりと色付き、浮き上がってくる<br>音：音が小さく、高くなる';
$altCap08 = '';
$altCap09 = '';
$altCap10 = '';
$altCap11 = '';
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
        $recipeIcon ='masaki_03';
        $speech ='センセ～、どうしましょう<br>困っちゃいましたー';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_02';
        $speech ='マサキさんとコウちゃん！<br>どうしたんですか？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='kou_02';
        $speech ='きょうね～、ままいないの';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='masaki_02';
        $speech ='そうなんです…それで手軽に食べられそうな<br class="u-only__pc">冷凍のコロッケを買ったんですけど<br class="u-only__pc">揚げなきゃいけないタイプって知らなくて…<br>僕、揚げ物を作ったことがなくて、揚げ方が分からないんです～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='なるほど！そういうことですね<br>せっかくですし、この機会に揚げ物の基本をマスターしておきましょう<br>揚げ物が作れると料理のレパートリーが広がりますよ！';
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
            <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <h3 class="recipe__ttl_l mb2">温度計はいらない！油の温度の測り方</h3>
        <p>油の温度の測り方や、人気メニューを美味しく揚げる温度の目安、揚げ上がりを判断するときのポイントなど、揚げ物の基本についてご紹介します。</p>
        <h4 class="recipe__ttl">揚げ物の温度の測り方の基本</h4>
        <div class="recipe-design__howto mb3">
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/09/tech09-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/09/tech09-01@2x.jpg"
                 alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'.strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap01); ?>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/09/tech09-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/09/tech09-02@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl.'」'.strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap02); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/09/tech09-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/09/tech09-03@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/09/tech09-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/09/tech09-04@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap04); ?>
            </dd>
          </dl>
          <div class="recipe-design__plus1 plus1 mb3">
            <div class="plus1__row">
              <h3 class="plus1__ttl">人気の揚げ物を美味しく揚げる温度目安</h3>
              <p>揚げ物のメニューによって、調理に適した温度が違うことをご存知ですか？<br>高温でカラッと揚げる、少し低めの温度にする…など、衣の種類や食材に合わせて、温度や時間を調整すると美味しく仕上がりますよ。</p>
              <section>
                <h4 class="recipe__ttl_s">コロッケ</h4>
                <p class="mb2">170～180℃ / 2～3分</p>
                <h4 class="recipe__ttl_s"><a href="<?php echo($base_url) ?>/magazine/article/recipe-technic82.php" class="recipe-design__link">天ぷら</a></h4>
                <p class="mb2"><a href="<?php echo($base_url) ?>/magazine/article/recipe-technic49.php" class="recipe-design__link">えび</a>…170～180℃ / 2～3分<br><a href="<?php echo($base_url) ?>/magazine/article/recipe-collect03.php" class="recipe-design__link">野菜</a>…150～160℃ / 素材によって時間は異なる</p>
                <h4 class="recipe__ttl_s"><a href="<?php echo($base_url) ?>/magazine/article/recipe04.php" class="recipe-design__link">から揚げ</a></h4>
                <p class="mb2">170～180℃ / 5～6分</p>
                <h4 class="recipe__ttl_s">とんかつ</h4>
                <p class="mb2">170℃ / ５～６分</p>
              </section>
              <p>上記の目安を参考に、温度と時間を調整してみてくださいね。</p>
            </div>
          </div>
          <h3 class="recipe__ttl_l mb2">調理中、油の温度を一定に保つには？</h3>
          <p class="mb2">揚げ物を作るときに大切なのが、「油の温度を一定に保つ」ということ。揚げている間に油の温度が変わってしまうと、濃い色に揚がってしまったり、型崩れしたりと、仕上がりに影響します。適温を維持するには、以下のポイントに気を付けましょう。</p>
          <h4 class="recipe__ttl">一度に食材を入れ過ぎない</h4>
          <p class="mb2">一度に食材を入れ過ぎてしまうと、油の温度が下がってしまいます。食材を入れるのは、揚げ鍋の面積の1/3～1/2程度にしましょう。</p>
          <h4 class="recipe__ttl">冷凍食材を入れた直後は火力を調整</h4>
          <p class="mb2">冷凍食材を入れると、油の温度が急激に下がるので、様子を見て<a href="<?php echo($base_url)?>/magazine/article/recipe-technic02.php" class="recipe-design__link">火力</a>を調整する必要があります。<br>とはいえ、温度を上げ過ぎると、中まで火が通る前に表面の色だけが濃くなってしまいます。基本的には食材の色合いを確認しながら、少しずつ火力と揚げ時間を調整するようにしましょう。</p>
          <h3 class="recipe__ttl_l mb0">美味しい揚げ物を作るコツ</h3>
          <p class="mb2">ここでは、揚げ物を作るときのコツや、裏ワザを紹介します。</p>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/09/tech09-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/09/tech09-05@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap05); ?>
            </dd>
          </dl>
          <div class="recipe-design__plus1 plus1 mb3">
            <div class="plus1__row">
              <h3 class="plus1__ttl">
                美味しく揚げる裏ワザ「二度揚げ」
              </h3>
              <p class="mb2">揚げ物をより美味しくする裏ワザと言えば「二度揚げ」。少しの手間をプラスするだけで、カラッと美味しい揚げ物に仕上げることができます。</p>
              <p class="mb2">二度揚げに適した料理は、トンカツ、鶏のから揚げ、骨ごと食べる<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic40.php" class="recipe-design__link">魚</a>（豆あじ、いわし、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic106.php" class="recipe-design__link">さんま</a>など）です。中まで火が通りにくい食材や、頭や骨をカリッと仕上げたい魚の調理に向いています。また、生の<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic120.php" class="recipe-design__link">じゃがいも</a>も二度揚げがおすすめです。中まできちんと火が通り、揚げ色も美味しそうなキツネ色に仕上がります。</p>
              <p>二度揚げのプロセスは簡単。揚げ始めは低めの温度でじっくりと揚げ、一旦取り出します。余熱で火を通した後、油の温度を上げて、再度揚げます。表面を色付けてカラッと仕上げるためなので、二度目は短い揚げ時間でOKです。</p>
            </div>
          </div>
          <h4 class="recipe__ttl">揚げ上がりの目安</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/09/tech09-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/09/tech09-06@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/09/tech09-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/09/tech09-07@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap07); ?>
            </dd>
          </dl>
        </div>
      </div>
      <?php
        $recipeIcon ='kou_03';
        $speech ='ぱぱ、おいしいね～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='masaki_01';
        $speech ='サクサクしてて、中にもしっかり火が通ってる！<br>油の温度や揚げ上がりって、泡や音で分かるものなんですね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='ちなみに、揚げるタイプの冷凍のコロッケの場合、<br class="u-only__pc">凍ったまま油に入れて、一度に揚げるのは2～3個までにすると<br class="u-only__pc">破裂せずにキレイに揚がりますよ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='masaki_01';
        $speech ='揚げ物ができるようになったら<br class="u-only__pc">カツ<a href="'.$base_url.'/magazine/article/recipe18.php" class="recipe-design__link">カレー</a>もかつ丼も作れるってことか！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='kou_03';
        $speech ='かつかれー！かつどぉーん！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_02';
        $speech ='トンカツだけが、揚げ物ではないですよぉ～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>

			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15082'),
				array ('recommend-recipe-id','15115'),
				array ('recommend-recipe-id','14004'),
				array ('recommend-recipe-end')

				);
			?>
			<?php
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
			?>
      <div class="mb0">
        <?php
                include($inc_path."/lib/inc/page/_magazine/__recipe-technic-footer.php");
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
    include($inc_path . "/lib/inc/toindex__magazin.php");
    ?>
<?php  include($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include($inc_path."/lib/inc/footer.php"); ?>
<?php  include($inc_path."/lib/inc/foot.php");
