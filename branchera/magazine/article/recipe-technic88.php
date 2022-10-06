<?php
//base
include( "../../function.php" );
$content = get_id_data( '15088' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「餃子の焼き方」を動画とテキストで解説。餃子を美味しく仕上げるには、何よりも焼き方が一番大事！基本の焼き方を始め、パリパリの羽根付き餃子の焼き方もご紹介します。差し水や油を入れるタイミングもお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '88';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'WGKObaiPk1E';

//導入文
$introTxt = '第88回は、「餃子の焼き方」です。失敗しない基本の餃子の焼き方と、パリパリの食感が楽しい羽根付き餃子の焼き方をご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
  //ミエ　通常
  array('mama','01','<a href="'.$base_url.'/magazine/article/recipe-technic87.php" class="recipe-design__link">餃子の包み方</a>を覚えたから、次はいよいよ焼き方ね！<br>やっぱりパリっと焼くには一気に<a href="'.$base_url.'/magazine/article/recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>で…'),

  //フラッキー　通常
  array('fl','01','待て待て！！ただ強火で焼くだけじゃ、<br class="u-only__pc">皮がフライパンに焦げ付いてボロボロになっちまうぞ！'),

  //ミエ　困る
  array('mama','02','そ、そうか…'),

  //フラッキー　通常
  array('fl','01','まず、基本の焼き方を教えるぞ！<br>次に、店で食べるような羽根付き餃子の焼き方を伝授するから、<br class="u-only__pc">気を抜かずについて来いよ～！'),

  //ミエ　通常
  array('mama','01','ありがとう！よーし、餃子を焼いて焼いて焼きまくるぞー！'),

);

//キャプチャALTタグ
$altCap01 = '熱したフライパンに、薄くサラダ油を引きましょう。<br>フッ素加工のフライパンの場合は、油を引かずにそのまま使います。';
$altCap02 = '30秒ほど置いて油が十分に温まったら、餃子をフライパンに並べます。';
$altCap03 = '<strong>30秒～1分程度</strong>焼いたら、熱湯を上から流し入れます。';
$altCap04 = 'フライパンに蓋をして、強火で熱湯が蒸発するまで蒸し焼きにします。<br>焼き時間の目安は、<strong>5分程度</strong>です。';
$altCap05 = '熱湯が蒸発したら<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にして、ごま油を垂らします。焼き目が付くまで焼いたら完成です。';
$altCap06 = '薄力粉と水を混ぜて、差し水を作ります。';
$altCap07 = 'フライパンに適量のサラダ油を入れて、中火で熱します。<br>十分に温まったら餃子を円形に並べて、<strong>2分程度</strong>焼きましょう。';
$altCap08 = '差し水を入れて蓋をし、中火で<strong>5分程度</strong>焼きます。水気が無くなり周りがパリッとしてきたら、蓋を外します。';
$altCap09 = 'ごま油を鍋肌から回しかけます。羽根がこんがりと色付き、パリッとするまで焼きましょう。';
$altCap10 = '焼きあがったら火を止めます。フライパンに蓋をするように大皿を被せて、ひっくり返したら完成です。';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';
$altCap14 = '';
$altCap15 = '';
$altCap16 = '';

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array('mama','01','すご～い、こんがりきれいに焼けた！'),

//フラッキー　褒める
array('fl','03','見た目もきれいだし、中の具材のうまみがしっかり閉じ込められてるな！'),

//コウちゃん　喜ぶ
array('ko','03','ぎょうざおいし～！'),

//マサキ　通常
array('papa','01','羽根付き餃子もパリパリで、ビールとの相性バツグンだよ！'),

//ミエ　通常
array('mama','01','やった！これで今度の餃子<a href="'.$base_url.'/magazine/article/recipe-collect06.php" class="recipe-design__link">パーティー</a>は成功間違いなしね♪<br>いっぱい作って、食べまくるぞ～！'),

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
          <h3 class="recipe__ttl_l mb0">基本の餃子の焼き方</h3>
          <p class="mb2">餃子を焼く際に、皮がフライパンに付いたり、焼きムラができたりした経験はありませんか？餃子を焼く手順自体は簡単ですが、上手に焼くにはちょっとしたコツが必要です。餃子をパリッと美味しく焼く方法をご紹介します。</p>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>包み終わった餃子</dt>
              <dd>8～10個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>熱湯</dt>
              <dd>100ml程度</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>サラダ油</dt>
              <dd>適量</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>ごま油</dt>
              <dd>適量</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
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
          <section>
          <?php // check
            $check_cnt ='
            <h4>餃子を並べるのは、フライパンを十分に熱してから！</h4>
            <p>上手に餃子を焼くには、フライパンに餃子を並べるタイミングが重要だ！<br>餃子の皮は、フライパンをよく熱してから手早く並べよう。こうすることで、フライパンに皮が焦げ付くのを防ぐことができるぜ！</p>';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>
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
            <h4>蒸し焼きにするときは熱湯で！</h4>
            <p>水分を加えて蒸し焼きにすることで、中までふっくら焼きあがるぞ。このときに大事なのが、水ではなくて熱湯を使うこと！水を注ぐとフライパンの温度が急激に下がって、ベチャっとした仕上がりになりやすくなる。<br>熱湯ならフライパンの温度が下がりづらく、すぐに水分が蒸発するので、きれいに仕上がるぞ！</p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>
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
          <h3 class="recipe__ttl_l mb0">羽根付き餃子の作り方</h3>
          <p class="mb2">基本の餃子の焼き方に慣れたら、よりパリッとした食感が楽しめる「羽根付き餃子」の焼き方に挑戦してみませんか？<br>ポイントは、薄力粉を混ぜた差し水を加えること！意外と簡単なので、ぜひお試しください。</p>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>包み終わった餃子</dt>
              <dd>12個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>薄力粉</dt>
              <dd><a href="<?php echo($base_url)?>/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>水</dt>
              <dd>100ml</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>サラダ油</dt>
              <dd>適量</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>ごま油</dt>
              <dd>適量</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
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
          <section>
          <?php // check
            $check_cnt ='
            <h4>薄力粉と水を混ぜるときは順番に注意！</h4>
            <p>差し水に入れた薄力粉が、羽根付き餃子の羽根部分になるぞ。差し水を作るときは、薄力粉に少しずつ水を加えるようにするのがおすすめだぜ！水に薄力粉を加えると、ダマになりやすいんだ。<br>ちなみに、薄力粉の代わりに、<a href="'.$base_url.'/magazine/article/recipe-technic85.php" class="recipe-design__link">片栗粉</a>を加えて差し水を作る場合もあるぜ。薄力粉だとパリッとした軽い羽根に、片栗粉だとザクっとしたかための食感になるぞ！好みに合わせて、使い分けてみてくれ！</p>';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>
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
          <dl class="recipe-design__step mb0">
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
      <div class="recipe__assist mb3">
				<div class="recipe-assist-technic">
					<div class="recipe-assist-technic__row">
						<h3 class="recipe-assist-technic__ttl">用語解説</h3>
						<dl class="recipe-assist-technic__term">
							<dt>鍋肌とは</dt>
							<dd>鍋の内側の側面のこと。「鍋肌から回しかける」というのは、内側の側面をつたわせて流し入れるということを指す。</dd>
						</dl>
					</div>
				</div>
			</div>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15086'),
				array ('recommend-recipe-id','14009'),
				array ('recommend-recipe-id','13008'),
				array ('recommend-recipe-end')

				);
			?>
			<?php
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
			?>
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
