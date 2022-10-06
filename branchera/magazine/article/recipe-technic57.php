<?php
//base
include( "../../function.php" );
$content = get_id_data( '15057' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「ポーチドエッグの作り方」を動画で解説。忙しい朝でも短時間でできるポーチドエッグの作り方を解説します。また、添えるだけでおしゃれ・豪華に仕上がるアレンジレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = '鍋に水を入れ、沸騰させます。卵は事前に小さな容器に割り入れておきます。';
$altCap02 = '水が沸騰したら、<a href="recipe-technic22.php#osu" class="recipe-design__link">酢</a>を入れて<a href="recipe-technic02.php" class="recipe-design__link">弱火</a>にします。網じゃくしなどを使って湯を勢いよくかき混ぜて、渦を作ります。';
$altCap03 = '渦の中心に、卵を静かに落とします。やさしく入れるのがポイントです。白身は自然に固まりますが、うまくまとまらない場合は、箸を使って、黄身に被せるようにしてまとめましょう。';
$altCap04 = '2～3分ほどゆでたら、網じゃくしで卵をそっとすくい上げます。';
$altCap05 = '水を入れたボウルに卵を入れて、酢を取ったら、キッチンペーパーなどにのせて水気を切ります。';
$altCap06 = '<a href="recipe-technic76.php" class="recipe-design__link">アスパラガス</a>は根元を<a href="recipe-technic23.php" class="recipe-design__link">ピーラー</a>でむき、ラップに包んで電子レンジで加熱しておきます。<br>アスパラガスの上にポーチドエッグを乗せて、粉チーズを振りかけます。仕上げにオリーブオイルを回しかけ、塩こしょうをまぶしましょう。生ハムを添えるのもおすすめ！';
$altCap07 = 'まずマフィンを2つに割ってトースターで焼きます。<br>その間に、オランデーズソースを作ります。卵黄にレモンを混ぜ、溶かしたバターを加えて、塩こしょうで味付けします。<br>焼いたマフィンに生ハム（もしくは焼いたベーコン）、<a href="recipe-technic68.php" class="recipe-design__link">アボカド</a>、ポーチドエッグを乗せ、オランデーズソースをかけて完成です。';
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
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第57回は「ポーチドエッグの作り方」です。忙しい朝でも短時間でできるポーチドエッグの作り方をご紹介します。</p>
      </div>
      <hr class="recipe__line">
      <?php
        $recipeIcon ='ko_01';
        $speech ='まま～！あさごはんは～？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_02';
        $speech ='はーい、ちょっと待ってね！<br>…簡単に用意できるからラクなんだけど、<br class="u-only__pc">そろそろ<a href="'.$base_url.'/magazine/article/recipe-technic93.php" class="recipe-design__link">目玉焼き</a>と食パンの組み合わせにも飽きちゃったなあ…<br>とはいえ、今日も同じメニューなんだけどね～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='何いってるんだミエ！<br>簡単・おしゃれ・朝ごはんにぴったり！<br>の3拍子揃った料理があるのを知らないのか⁉';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_03';
        $speech ='ええー⁉そんな料理があるの？<br>フラッキー、詳しく教えて！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='プルプルトロトロの<a href="'.$base_url.'/magazine/article/recipe-collect02.php" class="recipe-design__link">卵</a>が食べられる、ポーチドエッグだ！<br>そのままでも美味しいし、<br class="u-only__pc">パンにのせてカフェのモーニング風にもできちゃう優れものだぜ！<br>それじゃあさっそく作り方を叩き込んでいくぞ～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie-new technic">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl@2x.png"
           alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/6-YJFLK9Rls?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">ポーチドエッグとは？温泉卵との違い</h3>
          <p class="mb2">ポーチドエッグは、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic08.php" class="recipe-design__link">卵白</a>が半凝固、卵黄が半熟になるように調理した卵料理で、アメリカでよく食べられています。日本の<a href="recipe-technic54.php" class="recipe-design__link">温泉卵</a>に似ていますが、温泉卵はポーチドエッグとは逆で、卵白が半熟、卵黄が半凝固の状態です。</p>
          <h4 class="recipe__ttl_l">ポーチドエッグの作り方</h4>
          <p class="m2">ポーチドエッグは卵の中身をお湯の中に割り入れて火を通すので、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic10.php" class="recipe-design__link">ゆで卵</a>などに比べて調理時間が短く、忙しい朝にぴったり！簡単にポーチドエッグを作れる調理方法をご紹介します。</p>
          <h5 class="recipe__ttl_tech">材料</h5>
          <div class="recipe-design__material">
						<dl class="recipe-design__materials">
							<dt>卵</dt>
							<dd>1個</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>水</dt>
							<dd>600ml</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>酢</dt>
							<dd>大さじ2</dd>
						</dl>
          </div>
          <h5 class="recipe__ttl_tech">手順</h5>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/57/tech57-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/57/tech57-01@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/57/tech57-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/57/tech57-02@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/57/tech57-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/57/tech57-03@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/57/tech57-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/57/tech57-04@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/57/tech57-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/57/tech57-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <div class="recipe-check mb3">
						<div class="recipe-check__row">
							<div class="recipe-check__ttl">
                <h4>
								<div class="recipe-check__ex center">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png"
									data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png"
									alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
                </div>
                <span>酢を入れるのはなぜ？</span></h4>
                <p class="mb2">酢にはタンパク質を固める性質があるんだ。卵の成分はタンパク質だから、酢が入ったお湯に卵を入れると、表面が固まって、崩れにくくなる。だからきれいにまとまったポーチドエッグを作るには、お湯に酢を入れるのが効果的ってわけ！<br>ちなみに、ただのお湯に卵を入れると、表面が固まる前に白身が流れてしまうから、形が崩れちゃうぜ。酢の入れ忘れに注意！</p>
							</div>
						</div>
          </div>
          <h4 class="recipe__ttl_l">ポーチドエッグの人気レシピ</h4>
          <p class="mb2">野菜に添えたり、パンにのせたりするだけで、おしゃれ＆豪華に仕上がるポーチドエッグ。簡単にできるアレンジレシピをご紹介します！</p>
          <h5 class="recipe__ttl_tech">ほうれん草サラダ</h5>
          <p class="mb2"><a href="<?php echo($base_url)?>/magazine/article/recipe-technic157.php" class="recipe-design__link">ほうれん草</a>は洗って水気を切ります。ほうれん草の上にカリカリに炒めたベーコン、チーズを散らし、ポーチドエッグをのせたら、粒マスタード、ワインビネガー、塩こしょう、オリーブオイルを混ぜた<a href="<?php echo($base_url)?>/magazine/article/recipe-technic145.php" class="recipe-design__link">ドレッシング</a>と和えてできあがりです。</p>
          <h5 class="recipe__ttl_tech">アスパラ添え</h5>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__left">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/57/tech57-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/57/tech57-06@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap06); ?>
              </span>
            </p>
          </div>
          <h5 class="recipe__ttl_tech">エッグベネディクト</h5>
          <div class="u-clearfix">
            <p>
              <figure class="u-float__right">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/57/tech57-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/57/tech57-07@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap07); ?>
              </span>
            </p>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='mama_01';
        $speech ='じゃーん！<br>ポーチドエッグを使って、エッグベネディクトを作ってみたよ～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='わぁ～！たまご、とろとろ～～♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='ママどうしたの！？朝からすごいねえ<br>なんだかおしゃれなカフェに来たみたい！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='なかなか美味しそうにできたな！<br>ポーチドエッグは朝ごはんだけじゃなくて、<br class="u-only__pc">ビーフシチューや<a href="recipe18.php" class="recipe-design__link">カレー</a>に添えるのもおすすめだぜ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='よーし、試してみよう！<br>これ一品でお料理のレパートリーが広がりそう♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','13002'),
				array ('recommend-recipe-id','15048'),
				array ('recommend-recipe-id','15062'),
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
