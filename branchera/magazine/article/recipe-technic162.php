<?php
//base
include( "../../function.php" );
$content = get_id_data( '15162' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '粉末の正しい量り方をご紹介！小麦粉（薄力粉）を例に、計量器具を用いた計量方法を解説します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '162';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'a-WBekivjyQ';

//導入文
$introTxt = '第162回は、「小麦粉を大さじで計量する方法」です。計量スプーンや計量カップ、はかりで計量する方法を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','<a href="'.$base_url.'/magazine/article/recipe-technic94.php" class="recipe-design__link">ホットケーキ</a>を作ろうと思うんだけど、<br>レシピに小麦粉や砂糖の分量がグラムで書いてある…<br>大さじにすると、どのくらいになるのかな～？<br>分からないから、適当にやってみよう！'),

//フラッキー　通常
array ('fl','01','おいおい、ミエ、分量が間違っているとレシピ通りの美味しいホットケーキはできないぞ！<br>小麦粉や<a href="'.$base_url.'/magazine/article/recipe-technic12.php#kona" class="recipe-design__link">上白糖</a>なら大さじ1は、9gだぜ'),

//ミエ　困る
array ('mama','02','うーん、計算が難しくて分からない…'),

//フラッキー　通常
array ('fl','01','分かりやすくて、正しい小麦粉の計量の仕方とコツを教えてしんぜよう！'),

//ミエ　通常
array ('mama','01','フラッキー、お願い！教えて～！'),

);

//キャプチャALTタグ
$altCap01 = '小麦粉を計量スプーンでふんわりすくったら、ヘラまたは、串やスプーンの柄などを使って、スプーンからはみ出た<strong>小麦粉をすり切り、平らにします。</strong>';
$altCap02 = 'すり切るときに、小麦粉を押し込んだりしないように気をつけましょう。なお、<strong>小麦粉は、大さじ1で9g</strong>です。つまり、大さじ11杯で、小麦粉99ｇになります。';
$altCap03 = '小麦粉を計量カップにざっくりと入れます。';
$altCap04 = '計量カップを軽くトントンと上から落として、表面をならします。';
$altCap05 = '計量したい目盛りまで来るように、残りはスプーンで少しずつ入れていきます。<br><strong>小麦粉は、計量カップ（200ml）で110g</strong>です。';
$altCap06 = '電源を入れ、表示が0になっていることを確認します。';
$altCap07 = '容器をはかりに乗せます。';
$altCap08 = '「風袋」や「TARE（テア）」、あるいは「ゼロ」のボタンを押します。容器の重さが差し引かれて、表示がゼロに戻ります。';
$altCap09 = '表示がゼロになった後、容器に小麦粉を入れて、小麦粉の重さを計量します。';
$altCap10 = 'はかりを平らな場所に置き、目盛りがゼロになっていることを確認します。容器を乗せて、容器の重さを確認したら、容器に小麦粉を入れ、目盛りで重さを計量します。全体から、容器の重さを差し引くと、小麦粉の重さになります。';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';
$altCap14 = '';
$altCap15 = '';
$altCap16 = '';

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','きっちりと正しく計量したら、美味しいホットケーキができた～！'),

//コウちゃん　喜ぶ
array ('ko','03','ほっとけーき、おいしいね～♪
'),

//マサキ　通常
array ('papa','01','これからは、<a href="'.$base_url.'/magazine/article/recipe-technic143.php" class="recipe-design__link">お好み焼き</a>も、<a href="'.$base_url.'/magazine/article/recipe-technic82.php" class="recipe-design__link">天ぷら</a>も、<a href="'.$base_url.'/magazine/article/recipe-technic81.php" class="recipe-design__link">ホワイトソース</a>だって、上手にできそうだね♪'),

//フラッキー　通常
array ('fl','01','レシピ通りに料理するときは、計量が大事だぜ！<br>計量の仕方を忘れずに、美味しい料理を作ってくれよな！'),

);

// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

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
        for($i = 0, $size = count($sp01); $i < $size; ++$i) {
          $recipeIcon = $sp01[$i][0].'_'.$sp01[$i][1];
          $speech = $sp01[$i][2];
          include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
        }
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
          <h3 class="recipe__ttl_l mb0">小麦粉を正しく計量する方法とは？</h3>
          <p class="mb2">料理する際に使用する計量グッズには、<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic12.php" class="recipe-design__link">計量スプーン</a>、計量カップ、はかりの3種類があります。<br>計量スプーンには、大さじ・小さじがあります。計量カップには目盛りがあり、容量は200ml、500ml、1,000mlとさまざまです。一般的にレシピで<strong>1カップと記載している場合は、200mlを意味します。</strong></p>
          <p class="mb3">では、小麦粉100gを量る場合を例に、小麦粉の正しい計量方法をご紹介しましょう。</p>
          <h4 class="recipe__ttl_tech">計量スプーンを使う場合<br>手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-01@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
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
          <h4 class="recipe__ttl_tech">計量カップを使う場合<br>手順</h4>
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
          <dl class="recipe-design__step mb0">
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
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <section>
          <?php // check
            $check_cnt ='
            <h4>「粉落とし」が大切！</h4>
            <p>計量カップに小麦粉を入れて、上からトントンと軽く落としてならすことを「粉落とし」というんだ。粉落としをすることで、正しい計量が可能になる。計量カップや計量スプーンを使って計量をするとき、上から粉類を強く押し込むと、密度が変わり重くなってしまうんだ。正確に計量できないから、くれぐれも注意してくれよな！</p>';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>
          <section>
          <?php // plus1
            $plus1_ttl ='粉末を重さ変換すると？';
            $plus1_cnt ='
            <p class="mb2">小麦粉、砂糖、片栗粉などの粉末の調味料を小さじや大さじ、またはカップで計量すると、何グラムになるのでしょうか？粉末の調味料をグラムで知りたい場合は、次の変換表を参考にしてください。</p>
            <p class="mb2">粉末の変換表(※1)
            </p>
            <table class="tech_table mb2">
            <tr><th class="center">食材</th><th>小さじ</th><th>大さじ</th><th>カップ(200ml）</th></tr>
            <tr><td class="center">小麦粉</td><td>3g</td><td>9g</td><td>110g</td></tr>
            <tr><td class="center">片栗粉</td><td>3g</td><td>9g</td><td>130g</td></tr>
            <tr><td class="center">上白糖</td><td>3g</td><td>9g</td><td>130g</td></tr>
            <tr><td class="center">グラニュー糖</td><td>4g</td><td>12g</td><td>180g</td></tr>
            <tr><td class="center">食塩</td><td>6g</td><td>18g</td><td>240g</td></tr>
            </table>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>

          <h3 class="recipe__ttl_l mb0">はかりを使って計量する方法は？</h3>
          <p class="mb2">小麦粉をグラム数で計量する際は、はかりを使用すると正確に計量できます。はかりを利用する際の手順をお伝えしましょう。</p>
          <h4 class="recipe__ttl_tech">デジタルはかりを使う場合<br>手順</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
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
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-07@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-08@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-09@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl_tech">アナログはかりを使う場合</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-10@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap10); ?>
            </dd>
          </dl>
        </div>
      </div>
      <?php
        for($i = 0, $size = count($sp02); $i < $size; ++$i) {
          $recipeIcon = $sp02[$i][0].'_'.$sp02[$i][1];
          $speech = $sp02[$i][2];
          include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
        }
      ?>
      <div class="mb0">
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15071'),
				array ('recommend-recipe-id','14020'),
				array ('recommend-recipe-id','15085'),
				array ('recommend-recipe-end')

				);
			?>
			<?php
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
			?>
      <small class="u-small u-font__palt">※1 出典：独立法人国立健康・栄養研究所 『栄養摂取状況調査のための標準的図版ツール』 に基づく重量目安表（2009年版）<br><a href="https://www.nibiohn.go.jp/eiken/chosa/pdf/jyuryomeyasuhyo2009_2013ver.pdf" class="recipe-design__link recipe-shutten" target="_blank">https://www.nibiohn.go.jp/eiken/chosa/pdf/jyuryomeyasuhyo2009_2013ver.pdf</a><br>（最終確認：2022年8月2日）</small>
      <?php
        include ($inc_path."/lib/inc/page/_magazine/__recipe-technic-new-footer.php");
      ?>
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
