<?php
//base
include( "../../function.php" );
$content = get_id_data( '15056' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「おかゆの作り方」を動画で解説。米から作る「炊きかゆ」と、炊いた米から作る「入れかゆ」、2種類の作り方を解説します。また、冷凍ご飯を使ったおかゆの作り方や、美味しいアレンジおかゆレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = '米から作るときは、まず米1/2カップをよく水洗いして、ざるに上げ、水気を切っておきます。';
$altCap02 = '鍋に<a href="'.$base_url.'/magazine/article/recipe-technic12.php#keiryocup" class="recipe-design__link">水</a>と米を入れて、蓋をして<a href="'.$base_url.'/magazine/article/recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>にかけます。';
$altCap03 = '沸騰したら蓋を開けて、全体をヘラ、またはおたまなどでかき混ぜます。';
$altCap04 = '全体をかき混ぜたら、蓋を開けたまま<a href="recipe-technic02.php#yowabi" class="recipe-design__link">とろ火～弱火</a>で<strong>約30分</strong>火にかけます。好みのやわらかさになるまで煮込んでください。';
$altCap05 = '最後に<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>をふたつまみ入れ、味を調整してかき混ぜます。';
$altCap06 = '<a href="recipe-technic20.php" class="recipe-design__link">炊いたご飯</a>から作るときは、まず鍋に水とご飯を入れて、蓋をして強火にかけます。';
$altCap07 = '沸騰したら蓋を開けて、全体をヘラ、またはおたまでかき混ぜます。';
$altCap08 = '蓋を開けたまま、とろ火～弱火で<strong>約20分</strong>火にかけます。好みのやわらかさになるまで煮込んでください。';
$altCap09 = '最後に塩をふたつまみ入れ、味を調整してかき混ぜます。';
$altCap10 = '炊いたご飯と水を入れた鍋を火にかけて、鶏ガラスープの素を入れます。弱火から中火でご飯がやわらかくなるまで煮込んだら、塩を入れて味を調えてください。<br>最後に溶いた卵を鍋に入れて、おかゆと混ぜ合わせます。仕上げにごま油を回しかけたら、中華風卵かゆの完成です。';
$altCap11 = '<a href="'.$base_url.'/magazine/article/recipe21.php" class="recipe-design__link">鮭</a>の切り身を焼いて、事前にほぐしておきます。鍋に炊いたご飯と水を入れて弱火で煮込んだら、ほぐした鮭を入れて混ぜ合わせます。最後に<a href="'.$base_url.'/magazine/article/recipe-technic36.php" class="recipe-design__link">長ねぎ</a>、麺つゆを少々入れたらできあがりです。';
$altCap12 = 'おかゆは離乳食初期（生後5〜6ヵ月頃）から与えても問題ないとされています。赤ちゃんの成長段階によって水の量を変え、おかゆのやわらかさを調整しましょう。段階ごとの米と水の比率は以下の通りです。';
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
          <span class="recipe-header__num"> </span>
          <span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第56回は「おかゆの作り方」です。“米”＆“炊いたご飯”から作るおかゆの作り方をご紹介します。</p>
      </div>
      <hr class="recipe__line">

      <?php
        $recipeIcon ='mama_02';
        $speech ='う～ん、どうしよう…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='おいおい、なんだか心配顔だな～<br>何かあったのか？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_02';
        $speech ='パパが風邪を引いちゃって、食欲がないみたいなの<br>早く治すためにも、本当は栄養のあるものを食べてほしいんだけど…<br>何を作れば食べてもらえるかなあ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='ふむふむ。それなら、おかゆはどうだい？<br>食べやすいし、アレンジ次第で<a href="'.$base_url.'/magazine/article/recipe-collect05.php" class="recipe-design__link">栄養価を上げる</a>こともできる…<br>風邪のときにはぴったりだぜ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='おかゆ！実はちゃんとした作り方は習ったことがないのよね<br>せっかくだから美味しく作りたいんだけど<br class="u-only__pc">フラッキー、教えてくれる⁉';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='OK！<br>体調が悪くても無理なく食べられる、<br class="u-only__pc">美味しいおかゆの作り方を教えてやるぜ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie-new technic">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl@2x.png"
           alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/4Rth2TIr3EI?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">簡単！おかゆの作り方</h3>
          <p class="mb2">おかゆの作り方には2つの種類があります。“炊く前の米”から作る「炊きかゆ」と、“炊いたご飯”から作る「入れかゆ」です。どちらもコツを覚えれば、簡単に作れます。美味しいおかゆの作り方をお伝えしましょう。</p>
          <h4 class="recipe__ttl_l">炊きかゆの場合</h4>
          <h5 class="recipe__ttl_tech">材料（2人分）</h5>
          <div class="recipe-design__material">
						<dl class="recipe-design__materials">
							<dt>米</dt>
							<dd>1/2カップ（約80g）</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>水</dt>
							<dd>2.5～3カップ（500～600ml）</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>塩</dt>
							<dd>ふたつまみ</dd>
						</dl>
          </div>
          <h5 class="recipe__ttl_tech">手順</h5>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-01@2x.jpg"
                 alt="フラッキーのHow To <?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl_l">入れかゆの場合</h4>
          <h5 class="recipe__ttl_tech">材料（2人分）</h5>
          <div class="recipe-design__material">
						<dl class="recipe-design__materials">
							<dt>炊いたご飯</dt>
							<dd>100g</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>水</dt>
							<dd>1カップ（200ml）</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>塩</dt>
							<dd>ふたつまみ</dd>
						</dl>
          </div>
          <h5 class="recipe__ttl_tech">手順</h5>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-06@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-07@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-08@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-09@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-plus1 mb3">
              <div class="recipe-plus1__row">
                <h4 class="recipe-plus1__ttl">冷凍ご飯を使ったおかゆの作り方</h4>
                <p class="mb0">忙しいときは、冷凍ご飯をそのまま使っておかゆを作る方法もあります。<br>まず茶碗1膳分の冷凍ご飯と、ご飯が半分浸かるくらいの水を鍋に入れて、強火にかけます。火にかけながらほぐして解凍したら、塩を入れて、中火～強火で温めます。粘りが出て、お好みのやわらかさになったら完成です。米の状態を確認しながら、必要に応じて水の量や温める時間を調節しましょう。</p>
              </div>
            </div>
          </section><h4 class="recipe__ttl_l mb0">おかゆの美味しいアレンジレシピ</h4>
          <p class="mb2">あっさりとした塩味のおかゆもいいですが、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic08.php" class="recipe-design__link">卵</a>を入れたり、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic22.php#miso" class="recipe-design__link">味噌</a>を入れたりして、いろいろな風味のおかゆを楽しむことができます。体調が悪いときだけでなく、日頃の食事にもぴったりなおかゆのアレンジレシピをご紹介しましょう。<br>※入れかゆのアレンジレシピになります。</p>
          <h5 class="recipe__ttl_tech">中華風卵かゆ</h5>
          <div class="mb3 u-clearfix">
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-10@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <div>
              <p>
                <?php echo ($altCap10); ?>
              <p>
           </div>
          </div>
          <h5 class="recipe__ttl_tech">鮭かゆ</h5>
          <div class="mb3 u-clearfix">
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-11@2x.jpg"
              alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」ぶっかけうどん'. strip_tags($altCap11)); ?>" style="max-width:300px"
              class="u-img__max">
            </figure>
            <div>
              <p>
              <?php  echo ($altCap11); ?>
              </p>
            </div>
          </div>
          <h5 class="recipe__ttl_tech">味噌かゆ</h5>
          <p class="mb2">炊いたご飯と水を鍋に入れて、とろみが出るまで弱火で煮ます。十分にとろみが出たら火を止めて味噌を入れ、全体を混ぜ合わせてください。最後にかつお節をのせれば、美味しい味噌かゆの完成です。</p>
        </div>
        <h5 class="recipe__ttl_tech">離乳食のおかゆ</h5>
        <div class="mb3 u-clearfix">
          <figure class="u-float__left">
            <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/56/tech56-12@2x.jpg"
              alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap12)); ?>" style="max-width:300px" class="u-img__max">
          </figure>
          <div>
            <p>
              <?php echo ($altCap12); ?>
            <p>
          </div>
        </div>
        <h6>●10倍かゆ（離乳食初期：生後5～6ヵ月）</h6>
        <p>炊きかゆ…米1：水10<br>入れかゆ…炊いたご飯1：水5</p>
        <p>米の粒が残っていると飲み込みづらいので、とろとろのポタージュ状になるまで煮込みます。できあがったおかゆは、裏ごししてから与えましょう。</p>
        <h6>●7倍かゆ（離乳食中期：生後7～8ヵ月）</h6>
        <p>炊きかゆ…米1：水7<br>入れかゆ…炊いたご飯1：水3</p>
        <p>水分が多く、米を指で潰すと簡単に崩れる状態にします。慣れないうちは、軽くすりこぎで粒を潰してから与えましょう。</p>
        <h6>●5倍かゆ（離乳食後期：生後9～11ヵ月）</h6>
        <p>炊きかゆ…米1：水5<br>入れかゆ…炊いたご飯1：水2</p>
        <p>大人が食べるおかゆに近い、粒の形が残っている状態です。潰さずに、そのまま与えましょう。</p>
      </div>
      <?php
        $recipeIcon ='papa_01';
        $speech ='んっ！このおかゆ、あっさりしていて美味しいなあ<br>ほのかな塩味も丁度いい！これなら食べられるぞ～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='よかった！<br>元気が出てきたら、<a href="recipe-technic54.php" class="recipe-design__link">温泉卵</a>をトッピングしてもいいかもね<br>少し<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">お醤油</a>をかけたら美味しそう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='ちょっと待って！それ、今食べたいんだけど…ダメ⁉';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_01';
        $speech ='ぱぱずるい！ぼくもたべたーい！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='あらあら。コウちゃんは元気でしょー！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='おかゆのおかげで完全復活だな！<br>それにしても、いきなりがっつくのはよくないぜ～！<br>ちゃんとゆっくり食べろよな！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='はぁい…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='もう、パパったら～<br>でも元気になってよかった！<br>次は具材を多めに入れて作ってみよう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','13005'),
				array ('recommend-recipe-id','13007'),
				array ('recommend-recipe-id','15151'),
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
