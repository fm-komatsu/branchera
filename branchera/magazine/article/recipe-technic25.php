<?php
//base
include( "../../function.php" );
$content = get_id_data( '15025' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = 'きれいに盛ることができる、刺身の盛り付け方を動画で解説。同じ色が隣に来ないようにする、手前を低くして高低差を出すといったポイントや、見た目を華やかにする「あしらい」について紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = '2f1G_UjnrTI';

//導入文
$introTxt = '第25回は食卓を美しく彩ることができる「刺身の盛り付け方」について動画でご紹介します。';

//キャプチャALTタグ
$altCap01 = '<a href="'.$base_url.'/magazine/article/recipe02.php" class="recipe-design__link">大根</a>のツマを丸めて、ボリュームを出します。';
$altCap02 = '<a href="'.$base_url.'/magazine/article/recipe-technic137.php" class="recipe-design__link">大葉</a>をツマの上にのせて、刺身を取りやすくします。';
$altCap03 = '1種の刺身を、奇数枚数で盛り付けます。<br>※和食では、奇数が縁起のよい数字といわれています。';
$altCap04 = '<a href="'.$base_url.'/magazine/article/recipe-technic24.php" class="recipe-design__link">そぎ切り</a>した刺身は、高さを出すために丸めます。';
$altCap05 = '丸めた刺身を重ねて山のようにして、バランスよく盛り付けます。';
$altCap06 = '右手前にわさびを添え、最後に穂じそをのせて彩りを加えます。';
$altCap07 = '刺身1種ずつに大根のツマと、大葉を用意します。';
$altCap08 = '奇数枚数で、色が重ならないように並べて盛り付けます。';
$altCap09 = '隙間を埋めるように<a href="'.$base_url.'/magazine/article/recipe-technic60.php" class="recipe-design__link">レモンの輪切り</a>、穂じそ、食用菊などをのせて、右手前にわさびを添えます。';
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
        $speech ='マユ先生、聞いてください！<br>教えてもらった<a href="'.$base_url.'/magazine/article/recipe-technic24.php" class="recipe-design__link">お刺身の切り方</a>で、<br class="u-only__pc">昨日、夕食に刺身を出してみたんです';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='さっそく試していただけたんですね！<br>バッチリ切れましたか？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_02';
        $speech ='はい♪お刺身の柵はきれいに切ることができたんですけど<br class="u-only__pc">意外と盛り付け方が難しくて…切り方と一緒に盛り付け方も<br class="u-only__pc">教えてもらえばよかったな～って思ったんです';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_02';
        $speech ='お刺身は少しの工夫で、きれいに盛り付けることができますよ<br>ご自宅で作る刺身も、お店で出てくるような<br class="u-only__pc">美しい盛り付け方で出したいですよね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='パパとコウちゃんに美味しそうっていってもらえる<br class="u-only__pc">お刺身の盛り付け方をぜひ教えてください！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
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
        <h3 class="recipe__ttl_l mb2">刺身の盛り付け方の基本</h3>
        <p>刺身の盛り付け方には、同じ色が隣に来ないようにする、手前を低くして高低差を出す…などいくつかのポイントがあります。このポイントを覚えれば、お店で出される盛り合わせのように、見栄えよく仕上げることができますよ。<br>最初に、1人前用の角皿を使った2種盛り、次に多人数用の5種盛りをご紹介しましょう。</p>
        <h4 class="recipe__ttl">刺身の2種盛り</h4>
        <div class="recipe-design__howto mb3">
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-01@2x.jpg"
                 alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'.strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap01); ?>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-02@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-03@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb03">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-04@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-05@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-06@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap06); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">刺身の5種盛り</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-07@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap07); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-08@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-09@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap09); ?>
            </dd>
          </dl>
          <div class="recipe-design__plus1 plus1 mb3">
            <div class="plus1__row">
              <h3 class="plus1__ttl">刺身を正しい順序で食べよう</h3>
              <p>和食は美味しさを最大限に味わえるように、食べる順番も考えられています。もちろん、刺身も例外ではありません。</p>
              <p>基本的には、最初に真鯛、ひらめなどの白身魚、次にほたてなどの貝類、最後に<a href="<?php echo $base_url ?>/magazine/article/recipe-technic100.php" class="recipe-design__link">まぐろ</a>、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic136.php" class="recipe-design__link">かつお</a>などの血合いが多い赤身魚という順で食べましょう。味が淡白な魚を先に食べることで、それぞれの魚の味わいを最大限楽しむことができます。</p>
              <p>また、お店で刺身が出される際は、食べる順に沿って、左側に淡白な魚、右側に貝類、奥（真ん中）に赤身魚という位置で盛り付けられているのが一般的です。ご家庭で盛り付けるときも、この並べ方を意識してみるとよいかもしれませんね。</p>
            </div>
          </div>
          <h3 class="recipe__ttl_l mb2">盛り付けに必要な「あしらい」とは？</h3>
          <div class="u-clearfix mb2">
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-10@2x.jpg"
              alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' ); ?>盛り付けに必要な「あしらい」とは？" style="max-width:300px" class="u-img__max">
            </figure>
            <div class="w50">
              <p>世界の文化遺産である和食。中でも刺身の盛り合わせは、華やかで目を引く一品です。</p>
              <p>そんな刺身の盛り付けに欠かせないものは、付け合わせの「あしらい」。あしらいは日本料理に添える飾りのことです。刺身に添えるあしらいには、主に「ツマ」、「ケン」、「辛味」があります。ここではそれぞれの意味と、作り方をご紹介します。</p>
            </div>
          </div>
          <h4 class="recipe__ttl">刺身の下や脇に添えるもの</h4>
          <p>「ツマ」とは、刺身の下や脇に添えるものの総称。中でも細切りにしたもの（大根やにんじんなど）のことは「ケン」といいます。</p>
          <p class="mb2">刺身に彩を添えるツマとケンには、大根、大葉、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic135.php">わかめ</a>、みょうが、にんじん、菊の花、きゅうり、レモン、しその花、紫芽（むらめ＝小さなしその双葉）などがあります。</p>
          <h4 class="recipe__ttl">大根のケンの作り方</h4>
          <div class="u-clearfix mb2">
            <p>
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-11@2x.jpg"
              alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' ); ?>大根のケン" style="max-width:300px" class="u-img__max">
            </figure>
            純白で刺身の色合いを引き立てる、大根のケン。大根のケンの作り方を覚えておけば、いつでも刺身を美しく盛り付けることができますよ。</p>
            <p>まず、大根を7〜8㎝の長さに切ります。その後、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic03.php" class="recipe-design__link">皮をむいて</a>から桂むきします。できるだけ薄く、一定の厚みでむくことがポイントです。桂むきした大根を約10cm幅に切り、数枚重ねていきます。重ね終わったら、端から細めに<a href="<?php echo($base_url)?>/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>にしてください。<br>千切りにした大根は、しばらく水に浸けておきましょう。シャキシャキした食感になりますよ。</p>
          </div>
          <h3 class="recipe__ttl_l mb2">刺身の盛り付け方の応用</h3>
          <p class="mb2">最近は、刺身を<a href="<?php echo $base_url ?>/magazine/article/recipe-technic145.php#french-dressing">カルパッチョ</a>にして食べる人も増えていますね。イタリア料理のカルパッチョは、もともと生の牛ヒレ肉の薄切りにチーズなどをかけたもの。生魚を食べる文化が浸透している日本では、牛の代わりに刺身を使用するのが主流となっています。<br>刺身の盛り付け方の応用として、カルパッチョの盛り付けにもトライしてみましょう。</p>
          <h4 class="recipe__ttl">カルパッチョのおしゃれな盛り付け方</h4>
          <div class="u-clearfix mb2">
            <p>皿に薄く切った刺身を並べ、中央にベビーリーフなどの葉物野菜、玉ねぎのスライスなどを置き、立体感を出します。</p>
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/25/tech25-12@2x.jpg"
              alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' ); ?>カルパッチョのおしゃれな盛り付け例" style="max-width:300px" class="u-img__max">
            </figure>
            <p>また、皿に工夫を加えることで、より見栄えよくすることができます。<br>まず白い丸皿と、同じくらいの大きさのガラスの丸皿を１枚ずつ、さらに花びら（バラやパンジーなど、お好きなもの）を何枚か用意します。<br>花びらを白い皿の縁周りに均等に広げ、その上にガラスの皿を置いてください。ガラスの皿の上に具材をのせればできあがりです。<br>ガラスに透けて見える花びらが涼やかで、おしゃれな盛り付けになります。ぜひお試しください！<br></p>
          </div>
          <h4 class="recipe__ttl">氷で楽しむカルパッチョ</h4>
          <p>清涼さを演出したいときは、ガラスの器に細かく砕いた氷を入れて、その上によく冷やしたほたてなどの刺身を盛り付けましょう。その際、塩を入れて氷を作ると、適度な塩気によって、素材のうまみがより引き立ちます。</p>
        </div>
      </div>
      <?php
        $recipeIcon ='mie_01';
        $speech ='わぁ～、お店で出されるようなお刺身の盛り付けが<br class="u-only__pc">あっという間にできあがりました！<br>スーパーでお刺身パックを買って、<br class="u-only__pc">こうしてお皿に盛り付けるだけでも豪華になりますね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='刺身は鮮度が命なので、あまり手で触り過ぎずに<br class="u-only__pc">サッと素早く盛り付けるようにしてくださいね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<div class="recipe__assist mb3">
				<div class="recipe-assist">
					<div class="recipe-assist__row">
						<h3 class="recipe-assist__ttl">用語解説</h3>
						<dl class="recipe-assist__term">
							<dt>桂むきとは</dt>
							<dd>飾り切りの一種。大根など円柱型の野菜を、一定の厚さで、切れないように長くむいていく方法。基本的な包丁の動かし方は<a href="<?php echo($base_url)?>/magazine/article/recipe-technic03.php" class="recipe-design__link">通常の皮むき</a>と同じだが、より薄くむいていく必要がある。</dd>
						</dl>
					</div>
				</div>
			</div>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15040'),
				array ('recommend-recipe-id','15072'),
				array ('recommend-recipe-id','15024'),
				array ('recommend-recipe-end')

				);
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
<?php
    $toindex_url = "/magazine/index_comic02.php";
    include($inc_path . "/lib/inc/toindex__magazin.php");
    ?>
<?php  include($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include($inc_path."/lib/inc/footer.php"); ?>
<?php  include($inc_path."/lib/inc/foot.php");
