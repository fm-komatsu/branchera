<?php
//base
include( "../../function.php" );
$content = get_id_data( '15080' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「豆腐の水切り方法」を動画とテキストで解説。豆腐は約90％が水分でできているため、使う料理によって水切りする必要があります。今回は3種類の水切り方法と、それぞれどんな料理を作るときに適しているのかをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '80';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'OM_IdO-lbak';

//導入文
$introTxt = '第80回は、「豆腐の水切り」です。豆腐の食感や風味を調節する、水切りのテクニックをご紹介します。';

//キャプチャALTタグ
$altCap01 = '豆腐　イメージ';
$altCap02 = '豆腐1丁を、キッチンペーパーで包んでバットや皿に入れます。';
$altCap03 = 'その上から、さらにバットや皿などの平らな重しをのせてください。<br>
そのままの状態で、30～60分放置します。
';
$altCap04 = '重しを外したら、濡れたキッチンペーパーを剥がします。<br>
最後に新しいキッチンペーパーで水気を拭き取ったら、完了です。
';
$altCap05 = '豆腐1丁を、2枚重ねにしたキッチンペーパーで包み、耐熱容器に入れます。<br>
電子レンジで加熱すると一気に水分が出ますが、キッチンペーパーを2枚重ねにすることで、しっかり水分を吸い取ることができます。
';
$altCap06 = '500Wに設定した電子レンジで、約3分加熱します。
';
$altCap07 = '電子レンジから取り出した豆腐を、そのまましばらく置いて冷ましましょう。
';
$altCap08 = '濡れたキッチンペーパーを取り、新しいキッチンペーパーで水気を拭き取ったら完了です。';
$altCap09 = '豆腐1丁が浸かる量のお湯を、鍋に沸かします。<br>
沸騰したら、豆腐を入れてください。
';
$altCap10 = '沸騰した状態を保ちながら、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で約5分ゆでます。';
$altCap11 = 'ざるに豆腐を上げて、キッチンペーパーで包みます。15～20分ほど放置したら完了です。';
$altCap12 = '';
$altCap13 = '';
$altCap14 = '';
$altCap15 = '';
$altCap16 = '';

/*
// plus1 template
<section>
<?php // plus1
  $plus1_ttl ='';
  $plus1_cnt ='';
  include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
?>
</section>

// check template
<section>
<?php // check
  $check_cnt ='';
  include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
?>
</section>

*/

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
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br><?php echo $introTxt ?></p>
      </div>
      <hr class="recipe__line">
      <?php
        $recipeIcon ='mama_01';
        $speech ='豆腐屋さんで美味しい豆腐を買えた～♪<br>
        というわけで、今日のおかずの1品は<a href="'.$base_url.'/magazine/article/recipe-technic158.php" class="recipe-design__link">白和え</a>！え～と、豆腐をちぎってと…

        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_02';
        $speech ='おいおい、ミエ！豆腐を水切りせずに、そのまま使っちゃうのか？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_02';
        $speech ='だって、どうせ崩して和えちゃうんだから<br class="u-only__pc">
        水切りしなくてもいいかなって。ダメなの？
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='甘いな～、水切りするかしないかで、白和えの仕上がりは大きく変わるぞ！<br>
        水切りをしないと、べちゃっとした食感になりやすいんだ
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_03';
        $speech ='ええ～！べちゃっとした白和えは嫌だな…<br>
        フラッキー、水切りのやり方を教えて！
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='オッケー、そうこなくっちゃ！<br>忙しいときの時短テクニックも教えちゃうぜ～♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie-new technic">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl@2x.png"
           alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">「豆腐の水切り」が必要な理由</h3>
          <div class="u-clearfix mb3">
            <p class="w50 u-float__left">豆腐の水切り、面倒だなと思っていませんか？料理の前にひと手間加えるのは、億劫になりがちですよね。でも、豆腐を使う前に水気を切っておく工程には、実は大切な理由があるのです。豆腐の水切りをすることで、どんな効果があるのかをお伝えしましょう！</p>
            <figure>
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-01@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
          </div>
          <h4 class="recipe__ttl_tech">豆腐の水分を抑える</h4>
          <p class="mb2">豆腐の約90％は、水分といわれています。ですので、そのまま料理に使うと、仕上がりが水っぽくなったり、味が薄まったりすることがあります。事前に水切りを行なうことで、豆腐のうまみを生かすことができますよ。</p>
          <h4 class="recipe__ttl_tech">豆腐が崩れるのを防ぐ</h4>
          <p class="mb2">水切りによって水分が減ることで、豆腐の形が崩れにくくなります。四角い形を生かした豆腐<a href="<?php echo $base_url?>/magazine/article/recipe-technic55.php" class="recipe-design__link">ステーキ</a>や、煮物もきれいな仕上がりに。また、ほかの食材と混ざってしまうことを防ぎます。</p>
          <p class="mb3">さらに、料理に合わせて水切りの方法や時間を変えると、豆腐の食感や風味もコントロールできます。生で食べる場合と、加熱して食べる場合、それぞれに合った方法をマスターしましょう！</p>
          <h3 class="recipe__ttl_l mb0">豆腐の水切りの方法</h3>
          <p class="mb2">主な豆腐の水切りの方法は、重し（重石）を使った方法、電子レンジを使った方法、ゆでて水切りする方法の3つです。今回は、それぞれの方法の手順と、どのような料理に適しているのかをご紹介します。</p>
          <h4 class="recipe__ttl_tech">重しで水切りする方法</h4>
          <p class="mb2">重しを使った水切りは、生の豆腐を使う白和えや、<a href="<?php echo $base_url?>/magazine/article/recipe-technic145.php" class="recipe-design__link">サラダ</a>などにおすすめです。加熱せずに水切りするので、豆腐本来の舌触りや風味が保たれます。</p>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <section>
          <?php // check
            $check_cnt ='
            <h4>好みの食感に仕上げるには？</h4>
            <p>重しの重量と、放置する時間を調節すれば、水切りの具合を加減できるぞ。<br>
            みずみずしくふわっとした食感に仕上げるなら、重しを軽くして、時間も控えめに。しっかり水気を抜いてかための食感に仕上げるなら、重しを増やして、長めに置いておくとよいだろう。形が崩れないように、重しは一度にのせるのではなく、徐々に増やすのがポイントだぞ！
            </p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl_tech">電子レンジで水切りする方法</h4>
          <p class="mb2">時短したいとき、加熱する料理に使うときは、手早く簡単な電子レンジがおすすめ！加熱することによって、豆腐の中の水分が流れ出てきます。ただし、電子レンジを使うと豆腐の内部に穴が開きやすいので、崩して調理する豆腐<a href="<?php echo $base_url?>/magazine/article/recipe-technic112.php" class="recipe-design__link">ハンバーグ</a>や、<a href="<?php echo $base_url?>/magazine/article/recipe-technic90.php" class="recipe-design__link">そぼろ</a>などに向いている方法です。</p>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-05@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-06@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-07@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-08@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl_tech">ゆでて水切りする方法</h4>
          <p class="mb2">ゆでて加熱することでも、豆腐の中の水分を抜くことができます。加熱することで風味が飛びやすいので、<a href="<?php echo $base_url?>/magazine/article/recipe-technic97.php" class="recipe-design__link">チャンプルー</a>などの炒め物、味をしっかり染み込ませたい麻婆豆腐などに向いている方法です。</p>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-09@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-10@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap10); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-11@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap11); ?>
            </dd>
          </dl>
        </div>
      </div>
      <?php
        $recipeIcon ='mama_01';
        $speech ='ジャーン、ちゃんと水切りした豆腐で作った白和えです！<br>
        いつもと比べてどうかな？
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='美味しい！和え衣がフワッとして、軽い食感だね♪
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='おとうふ、ふわふわ～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='豆腐に<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>をまぶして、重しをして一晩しっかり水切りすると<br class="u-only__pc">
        もっちりしたモッツァレラチーズみたいな食感も楽しめるぞ<br>
        おつまみにも試してみてくれよな！
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='それ、美味しそうね！今度作ってみようっと♪
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15063'),
				array ('recommend-recipe-id','15075'),
				array ('recommend-recipe-id','15039'),
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
