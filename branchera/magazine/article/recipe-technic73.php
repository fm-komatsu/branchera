<?php
//base
include( "../../function.php" );
$content = get_id_data( '15073' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '蒸し器いらず！「赤飯の炊き方」を動画とテキストで解説。少し難しそうな赤飯も、炊飯器を利用すれば簡単に作ることができます。ささげの煮汁と水を足して注ぎ、スイッチを押すだけでOK。気になるささげと小豆の違いもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '102';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'dMSh5_sH1X0';

//導入文
$introTxt = '第73回は、「赤飯の作り方」です。少し難しそうな赤飯ですが、炊飯器を利用すれば簡単です。基本の作り方を動画でご紹介します。';

//キャプチャALTタグ
$altCap01 = 'もち米とうるち米を合わせて洗い、ざるに上げて30分ほどおきます。';
$altCap02 = 'ささげは軽く水洗いし、水気を切って鍋に入れます。ささげに被るくらいのたっぷりの水（分量外）を入れて、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけましょう。ひと煮立ちしたら、ざるに上げて水を捨てます。';
$altCap03 = 'ささげを鍋に戻して、3カップの水を入れて中火にかけます。沸騰してきたら、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>にしてください。';
$altCap04 = '20〜30分程度煮て、指でつぶせるくらいのかたさになったら、火を止めます。';
$altCap05 = 'ささげと煮汁を分けて、それぞれの粗熱を取っておきます。';
$altCap06 = '炊飯器に洗っておいた米と煮汁を入れたら、炊飯器の「おこわ3合」の目盛りまで水を足します。';
$altCap07 = '米の上にささげをのせ、軽くならしたら、炊飯器の「おこわモード」で炊きます。';
$altCap08 = '炊きあがったら10分ほど蒸らします。';
$altCap09 = 'しゃもじで空気を入れるようにほぐしたら、お皿に盛りましょう。<br>お好みで塩と黒ごまをかけて完成です！';
$altCap10 = 'ささげ';
$altCap11 = '小豆';
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
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br><?php echo $introTxt ?></p>
      </div>
      <hr class="recipe__line">
      <?php
        $recipeIcon ='mama_01';
        $speech ='ねえパパ。もうすぐお義父さん、還暦だよね？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='あっ！そういえばそうだ！いや～早いなあ～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_02';
        $speech ='今度、還暦祝いにお赤飯を持っていこうと思っていたんだけど<br class="u-only__pc">私上手に炊ける自信なくて…どうしよう～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='おやおや、お困りかな？赤飯は、確かに手順も多くて大変そうに見えるような～<br>だけど、炊飯器を使えば結構簡単に作れんだぜ？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_03';
        $speech ='えっ！赤飯って、<a href="'.$base_url.'/magazine/article/recipe-technic30.php" class="recipe-design__link">蒸し器</a>じゃなくて炊飯器でも炊けるの！？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='もちろんさ！<br>よーし、オレが炊飯器で美味しい赤飯を作るコツを教えてやるぜ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php include ($inc_path."/lib/inc/page/_magazine/__comic02_pr.php"); //PR記事 ?>
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
          <h3 class="recipe__ttl_l mb0">赤飯の作り方</h3>
          <p class="mb2">出産や七五三、成人式など、お祝いの席で食べられることが多い赤飯。もち米に、「ささげ」または「小豆」を混ぜて蒸したご飯です。<br>せいろなどの蒸し器を使う昔ながらの作り方もありますが、炊飯器を使えばもっと手軽に作れます。コツを押さえて、美味しい赤飯を作ってみましょう！</p>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>もち米</dt>
              <dd>2.5合</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>うるち米</dt>
              <dd>0.5合</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>ささげ</dt>
              <dd>50g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>水</dt>
              <dd>3カップ（600ml）</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>黒ごま</dt>
              <dd>少々</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt><a href="<?php echo $base_url ?>/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a></dt>
              <dd>少々</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-01@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-02@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-03@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>

          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-06@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-07@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <section>
          <?php // check
            $check_cnt ='<h3>炊飯器に「おこわモード」がない場合は？</h3>
            <p>使用している炊飯器におこわモードの機能がない場合は、水の量を加減して炊飯すればOK！炊飯器の煮汁と水を加えて500mlにして、通常の炊飯ボタンを押して炊飯しよう。</p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-08@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/73/tech73-09@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?>
            </dd>
          </dl>
          <section>
          <?php // plus1
            $plus1_ttl ='ささげと小豆は、どんな違いがあるの？';
            $plus1_cnt ='<p class="mb2">赤飯に入れる<a href="'.$base_url.'/magazine/article/recipe-technic117.php" class="recipe-design__link">豆</a>といえば、ささげと小豆。よく似た豆ですが、どんな違いがあるのでしょうか？簡単にご紹介しましょう。</p>
            <h4 class="recipe__ttl_s">'.$altCap10.'</h4>
            <div class="u-clearfix mb2">
            <figure class="u-float__right w50">
              <img data-src="'.$img_url.'/magazine/comic02/technic/73/tech73-10.jpg" data-retina="'.$img_url.'/magazine/comic02/technic/73/tech73-10@2x.jpg"
                alt="フラッキーのHow To 「'.$pageTtl.'」'. strip_tags($altCap09).' " style="max-width:300px" class="u-img__max">
            </figure>
            <p>マメ科ササゲ属の一年草。紫がかった赤褐色の豆で、ヘソと呼ばれる部分が白く、その周辺が黒く縁取られています。また、形がよく角ばっているのが特徴です。いくつか種類はありますが、赤飯に使われるのは「金時ささげ」という品種が多いです。</p>
          </div>

            <h4 class="recipe__ttl_s">'.$altCap11.'</h4>
            <div class="u-clearfix mb2">
            <figure class="u-float__left w50">
              <img data-src="'.$img_url.'/magazine/comic02/technic/73/tech73-11.jpg" data-retina="'.$img_url.'/magazine/comic02/technic/73/tech73-11@2x.jpg"
                alt="フラッキーのHow To 「'.$pageTtl.'」'. strip_tags($altCap09).' " style="max-width:300px" class="u-img__max">
            </figure>
            <p>マメ科ササゲ属アズキ亜属に属する一年草。ささげと似ていて紫がかった赤褐色ですが、やや赤みが強いです。ヘソの部分は白いですが、黒い縁取りはありません。ささげが角ばっているのに対して、小豆は楕円形をしています。煮るとつぶれやすいので、つぶして使用するあんこなどによく利用されます。</p>
          </div>
          <p class="mb2">見た目がよく似ている2つの豆ですが、煮ると分かりやすい違いが出てきます。ささげは、豆の形が残ったきれいな状態で煮上がり、食感はかためです。小豆はやわらかいので、煮ている途中で皮が破けたり、豆がつぶれたりすることがありますが、もち米になじんで食べやすい食感です。</p>
          <p class="mb2">一説では、皮が裂けやすく、いわゆる「腹切れ」を起こしやすい小豆は、武士の多い江戸では縁起が悪いとされ、お祝い事には使われなかったそうです。今でも関東地方では、小豆ではなくささげを使う地域が多いようなのですが、縁起をかつぐ風習が残っているからかもしれませんね。</p>
          <p>縁起の話はさておき、赤飯に入れる豆は、ささげと小豆のどちらを使っても問題はありません。煮てもつぶれにくく、色鮮やかに仕上げるささげは見栄えを重視したい人に。ほくほくとした食感で、もち米との相性がよい小豆は、食べやすさを重視したい人におすすめです。ぜひ、好みに合わせて使い分けてみてくださいね。
          </p>';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>
        </div>
      </div>
      <?php
        $recipeIcon ='mama_01';
        $speech ='わあ！本格的な赤飯が炊飯器だけで作れちゃった～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='ほんとだ、おいしい～～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='豆の食感がいいアクセントになってるよ！<br>これなら、お父さんも喜ぶこと間違いなしだね♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='しっかり水加減を守れば、もち米もかたくならずに炊けるんだぜ！<br>ささげも色鮮やかで、見た目もきれいだな！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='ありがとう、フラッキー！<br>これで自信を持ってお祝いできるね♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15020'),
				array ('recommend-recipe-id','14014'),
				array ('recommend-recipe-id','15021'),
				array ('recommend-recipe-end')

				);
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
