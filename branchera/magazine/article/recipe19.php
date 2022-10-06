<?php
//base
include( "../../function.php" );
$content = get_id_data( '14019' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「夏野菜とチキンのトマト煮込み」を動画で解説。煮込み料理なのに15分で完成する、夏野菜たっぷり簡単トマト煮込みをご紹介します。また、トマト煮込みを使ったトマトクリームパスタなどのアレンジレシピも解説します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = '鶏もも肉は一口大に切り、塩、粗びき黒こしょうを振ります。';
$altCap02 = 'なす、ズッキーニはそれぞれヘタを落として、1cm幅に切ります。';
$altCap03 = 'パプリカはヘタと種を除いて、一口大の<a href="recipe-technic61.php" class="recipe-design__link">乱切り</a>にします。';
$altCap04 = 'フライパンにオリーブオイルを入れて中火で熱し、鶏もも肉を加えて両面に焼き色を付けます。';
$altCap05 = 'なす、ズッキーニ、パプリカを加えてかき混ぜます。油が回ったらホールトマト、すりおろしにんにく、鶏がらスープの素、砂糖、塩を加えてください。';
$altCap06 = 'トマトを潰しながら混ぜたら、蓋をして中火で約10分煮ます。';
$altCap07 = '塩と粗びき黒こしょうで味を調えたら器に盛り、好みで粉チーズを振って完成です。';
$altCap08 = '夏野菜とチキンのトマト煮込みを使って簡単にできる、夏野菜とチキンのトマトクリームパスタのレシピです。';
$altCap09 = '夏野菜とチキンのトマト煮込みを温めたら、流水で軽く洗ったご飯を加えます。一度洗っておくことで、ネバっとした仕上がりになるのを防ぐことができます。スープと馴染ませて、汁気がなくなるまで煮立たせてください。煮立ってきたら、ミックスチーズを加えて混ぜ合わせます。最後に塩、こしょうで味を調えて完成です。また、きのこが美味しい秋に作る場合は、しめじやまいたけなどを入れると、さらにうまみが増して美味しく仕上がりますよ。';
$altCap10 = 'オーブン使用可能の耐熱皿にご飯を盛ります。その上に夏野菜とチキンのトマト煮込みをかけて、ピザ用チーズをのせます。表面のチーズがきつね色になるまで、オーブンで焼いたらできあがり！';
$altCap11 = 'ドリアのレシピを、米なしで！おかずやおつまみにもなる一品です。
夏野菜とチキンのトマト煮込みをオーブン使用可能の耐熱皿に入れて、ピザ用チーズをのせます。チーズの層を厚くしたい場合は、スライスチーズの代わりにミックスチーズをのせて、その上から粉チーズを振りかけましょう。表面のチーズがきつね色になるまでオーブンで焼いたら完成です。
';
$altCap12 = '夏野菜とチキンのトマト煮込みに、市販のカレールウ、レンジで加熱したかぼちゃを入れて、ひと煮立ちさせたらできあがり。トマトの酸味にかぼちゃの甘味が加わって、美味しい夏野菜カレーになりますよ。';

?>
<main class="main">
  <article class="main__row">
    <?php
      $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
      $panAry[] = array( "/magazine/index_comic02.php", "うちのご飯は世界イチ" );
      include( $inc_path . "/lib/inc/pan.php" );
      // SP時サムネにタイトルを表示するかフラグ
      $thumTtlFlg = 'off';
      include($inc_path . "/lib/inc/page/_magazine/__comic02tech-new-header.php");
      include($inc_path . "/lib/inc/page/_magazine/__recipe-new-main-v.php");
    ?>
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header recipe__new">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num">　</span>
          <span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
        </h2>
      </div>
      <div class="recipe-story mb3">
				<div class="recope-story__row recipe-story__recipe">
					<p>ママの仕事が忙しい今日この頃。「パパの腕の見せ所だ！」と旬の夏野菜を買い込んだはいいけど、何を作るのかが決まらない！夏野菜をたっぷり食べられて、ササっと作れるレシピが知りたいなあ…</p>
				</div>
			</div>

      <?php
        $recipeIcon ='papa_01';
        $speech ='コウちゃん、見て！<br>夏野菜をたくさん買ってきたぞ！<br>今日はパパがご飯を作るからね～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='わー、おやさいいっぱい！<br>おいしいごはん、たべたーい！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_02';
        $speech ='でも、何を作ったらいいかな～<br>せっかくだから、夏野菜の味が引き立つ料理にしたいけど…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_01';
        $speech ='ふらっきーにきいてみよ～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='おっ、俺を呼んだな！夏野菜だって～？<br>それなら、夏野菜とチキンのトマト煮込みをおすすめするぜ！<br>素材を切ってフライパンで煮込むだけ、<br class="u-only__pc">たった15分で完成するお手軽メニューだ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_03';
        $speech ='えぇ～？煮込み料理なのに15分でできちゃうの⁉<br>フラッキー！お願い、作り方を教えて～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='よしっ！<br>フライパンの底力を見せてやろうじゃないか<br>超簡単に本格的なレストランの味を作ってやるぜ～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie-new recipe">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/common/movie_ttl@2x.png"
           alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/bWobD1Nyed0?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">夏野菜とチキンのトマト煮込みの作り方</h3>
          <p class="mb2">夏野菜とチキンのトマト煮込みは、フライパン1つでできてしまう簡単レシピ。彩り豊かな夏野菜とトマトの酸味、鶏肉のうまみが絡み合う、夏におすすめの一品です。</p>
          <h4 class="recipe__ttl_recipe">材料（2～3人分）</h4>
          <div class="recipe-design__material">
						<dl class="recipe-design__materials">
							<dt>鶏もも肉</dt>
							<dd>大1枚（350g）</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>なす</dt>
							<dd>1本</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>ズッキーニ</dt>
							<dd>1/2本</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>パプリカ（黄）</dt>
							<dd>1/2個</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>ホールトマト（缶詰）</dt>
							<dd>1缶</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>すりおろしにんにく</dt>
							<dd>小さじ1</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>鶏がらスープの素</dt>
							<dd>小さじ2</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>砂糖</dt>
							<dd>小さじ2</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>塩</dt>
							<dd>小さじ1/2</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>粗びき黒こしょう</dt>
							<dd>適量</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>粉チーズ</dt>
							<dd>好みで適量</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>オリーブオイル</dt>
							<dd>大さじ2</dd>
						</dl>
          </div>
          <h4 class="recipe__ttl_recipe">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-01@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-06@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-07@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-plus1-recipe mb3">
              <div class="recipe-plus1-recipe__row">
                <h3 class="recipe-plus1-recipe__ttl">プラスアルファで美味しく！おすすめ具材</h3>
                <p>チキンのトマト煮込みに合う野菜は、なす、ズッキーニやパプリカ以外にもたくさんあります。たとえば、甘味を強くしたいときは玉ねぎやキャベツを、肉のうまみを引き立たせたいときはセロリやパセリなどの香味野菜を加えましょう。また、より食べ応えが欲しいときは、大豆やひよこ豆を入れるのがおすすめ。入れる野菜の品数を増やすことで、濃厚な味わいのトマト煮込みになりますよ。いろいろな組み合わせを試してみましょう！</p>
              </div>
            </div>
          </section>
          <section>
            <h3 class="recipe__ttl_l">夏野菜とチキンのトマト煮込みを使った簡単アレンジレシピ</h3>
            <p class="mb3">夏野菜とチキンのトマト煮込みは、ひと手間加えるだけでいろいろなアレンジが可能！<br>まずイチオシのトマトクリームパスタアレンジを解説し、そのほかのお手軽アレンジ方法もご紹介します。多めに作って、お好きなアレンジレシピを楽しんでくださいね。</p>
            <div class="mb3">
              <h4>●トマトクリームパスタ</h4>
              <div class="u-clearfix">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-08@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」トマトクリームパスタ|'. strip_tags($altCap08)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap08); ?>
                </p>
              </div>
              <h5 class="recipe__ttl_recipe">材料（2人分）</h5>
              <div class="recipe-design__material">
                <dl class="recipe-design__materials">
                  <dt>夏野菜とチキンのトマト煮込み</dt>
                  <dd>300g</dd>
                </dl>
                <dl class="recipe-design__materials">
                  <dt>パスタ</dt>
                  <dd>160g</dd>
                </dl>
                <dl class="recipe-design__materials">
                  <dt>お湯</dt>
                  <dd>2L</dd>
                </dl>
                <dl class="recipe-design__materials">
                  <dt>塩</dt>
                  <dd>20g</dd>
                </dl>
                <dl class="recipe-design__materials">
                  <dt>生クリーム</dt>
                  <dd>100ml</dd>
                </dl>
                <dl class="recipe-design__materials">
                  <dt>塩</dt>
                  <dd>適量</dd>
                </dl>
                <dl class="recipe-design__materials">
                  <dt>粗びき黒こしょう</dt>
                  <dd>適量</dd>
                </dl>
              </div>
              <div>
                <ol class="u-list__ol_circle-num">
                  <li>鍋にたっぷりのお湯を入れて沸騰させ、塩を加えてパスタをゆでます。ゆでる時間は、パッケージに記載されている表示に従いましょう。</li>
                  <li>フライパンに夏野菜とチキンのトマト煮込みを入れて、中火にかけて温め、生クリームを加えて混ぜ合わせます。</li>
                  <li>ゆで上がったパスタをざるに移して湯を切り、フライパンの中へ入れて、②と絡めます。塩で味を調えて器に盛ったら、仕上げに粗びき黒こしょうを振ってできあがり！</li>
                </ol>
              </div>
            </div>
            <div class="mb3">
              <h4>●リゾット</h4>
              <div class="u-clearfix">
                <figure class="u-float__right">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-09@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」リゾット|'. strip_tags($altCap09)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap09); ?>
                </p>
              </div>
            </div>
            <div class="mb3">
              <h4>●ドリア</h4>
              <div class="u-clearfix">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-10@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap10)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap10); ?>
                </p>
              </div>
            </div>
            <div class="mb3">
              <h4>●チーズ焼き</h4>
              <div class="u-clearfix">
                <figure class="u-float__right">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-11@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」チーズ焼き|'. strip_tags($altCap11)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap11); ?>
                </p>
              </div>
            </div>
            <div class="mb0">
              <h4>●カレーライス</h4>
              <div class="u-clearfix">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/19/recipe19-12@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」カレーライス|'. strip_tags($altCap12)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap12); ?>
                </p>
              </div>
            </div>
          </section>
        </div>
      </div>
      <?php
        $recipeIcon ='mama_01';
        $speech ='わ～美味しい～！<br>こんなに簡単に、本格的な煮込み料理ができちゃうなんて！<br>彩りもきれいだからテーブルも華やか♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='これ、おいしーい！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='夏の野菜がたっぷりだね～<br>我ながら上出来！レストランで食べてるみたいだなー<br>白ワインを飲みたくなってきちゃったよ♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
       <?php
        $recipeIcon ='fl_03';
        $speech ='どうだい？フライパンで作る煮込み料理の味は！サイコーだろ－？<br>この料理はアレンジが利くから<br class="u-only__pc">献立に困ったら、この煮込み料理を思い出してくれ！<br>夏野菜の代表格、オクラを入れても美味しいんだぜ♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='オクラ入りも食べてみたい～！パパ、また作ってね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='よーし、次はもっと野菜の種類を増やしてみようっと♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="mb0">
      <?php
        include ($inc_path."/lib/inc/page/_magazine/__recipe-new-footer.php");
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
