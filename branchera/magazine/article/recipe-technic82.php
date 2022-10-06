<?php
//base
include( "../../function.php" );
$content = get_id_data( '15082' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = 'サクサクに仕上がる「天ぷら衣の作り方」を動画とテキストで解説。基本の作り方のほか、マヨネーズや炭酸水、片栗粉を使った裏ワザをご紹介します。また、天ぷらを上手に揚げるコツも解説します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '108';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '82';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'sDxjraCUEdg';

//導入文
$introTxt = '第82回は、「基本の天ぷら衣の作り方」です。サクっと美味しい天ぷら衣の作り方をご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
  //ママ　困り顔
  array('mama','02','天ぷらを作ってみたけど、衣がフニャフニャになっちゃった…<br>出来合いのやつを買ってくればよかったな～'),

  //フラッキー　通常
  array('fl','01','う～ん、ほんのちょっと作り方を見直すだけで<br class="u-only__pc">サックサクの衣になるはずなんだけどな'),

  //ママ　驚く
  array('mama','03','えっ！フラッキー、それ本当？'),

  //フラッキー　通常
  array('fl','01','ポイントは、衣の混ぜ具合にアリ！<br>まさか、ダマなくしっかり混ぜたりしてないよな？'),

  //ママ　通常
  array('mama','01','ええっ！？サラサラになるまで混ぜちゃったけど、ダメなの？<br>早くコツを教えて～！'),

  //フラッキー　通常
  array('fl','01','仕方ないなあ～。衣だけに、素早く“サクサク”進めていくぜ～！'),

);

//キャプチャALTタグ
$altCap01 = 'ボウルに<a href="'.$base_url.'/magazine/article/recipe-technic08.php" class="recipe-design__link">卵</a>を割り入れます。<br>次に冷水を加えて、全体をよく混ぜ合わせます。';
$altCap02 = '薄力粉を加えて、箸でつつくように混ぜ合わせましょう。';
$altCap03 = '薄力粉のダマが少し残るくらいに混ぜ合わせたら、完成です。';
$altCap04 = '基本の衣の材料に工夫を加えることで、より衣をサクッとさせることができますよ。どれも手軽にできる方法なので、ぜひお試しください。';
$altCap05 = '揚げ鍋の7分目ぐらいまで油を注ぎ、170度になるまで<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で熱します。';
$altCap06 = '天ぷら衣に食材をくぐらせます。';
$altCap07 = '鍋に天ぷらを入れて、中火で揚げましょう。<br>揚げ時間は食材によって異なります。目安は<a href="'.$base_url.'/magazine/article/recipe-technic49.php" class="recipe-design__link">えび</a>、<a href="'.$base_url.'/magazine/article/recipe08.php" class="recipe-design__link">なす</a>が2～3分、<a href="'.$base_url.'/magazine/article/recipe-technic137.php" class="recipe-design__link">大葉</a>が30秒程度です。<br>衣が薄いキツネ色になっているくらいが、ちょうどよい揚げ加減です。';
$altCap08 = '食材に火が通ったら、鍋から取り出します。<br>キッチンペーパーなどにのせて、油を切りましょう。';
$altCap09 = '皿に盛ったら完成です。';
$altCap10 = '';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';
$altCap14 = '';
$altCap15 = '';
$altCap16 = '';


//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//パパ　通常
array('papa','01','わっ！この天ぷら、衣サクサク～！<br>
もしかして高級なお店で買ってきたの！？'),

//ママ　通常
array('mama','01','ふっふっふ…私がイチから作ったのよ～！'),

//パパ　驚き
array('papa','03','ええ～！本当に！？すごく美味しいよ！'),

//コウちゃん　笑顔
array('ko','01','さくさく♪さくさく～♪'),

//フラッキー　通常
array('fl','01','衣の作り方によって、<br class="u-only__pc">
こんなに仕上がりが変わるんだぜ！'),

//ママ　通常
array('mama','01','ありがとうフラッキー！<br>
次はえびを使って天ぷらを作ってみようっと♪'),

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
        for($i = 0, $size = count($sp01); $i < $size; ++$i) {
          $recipeIcon = $sp01[$i][0].'_'.$sp01[$i][1];
          $speech = $sp01[$i][2];
          include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
        }
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
          <h3 class="recipe__ttl_l mb0">天ぷら衣の作り方</h3>
          <p class="mb3">旬の食材をカラッと揚げた天ぷらは美味しいですよね。しかし、家で揚げると、衣がベタッとなってしまったことはありませんか？サクサクに仕上げるには、衣の作り方が重要です。今回は、美味しい天ぷら衣の作り方をご紹介します。</p>
          <h4 class="recipe__ttl_tech">材料（2人分）</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>卵</dt>
              <dd>1個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>冷水</dt>
              <dd>200ml</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>薄力粉</dt>
              <dd>140g</dd>
            </dl>
            <p>※材料は全て、冷蔵庫で冷やしておいてください</p>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb3">
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
          <section>
          <?php // check
            $check_cnt ='
            <h4>卵を混ぜたときに出る泡は、すくい取ろう！</h4>
            <p>卵と水はよく混ぜる必要があるけど、このときに泡が表面に浮いてくる。この泡は、天ぷら衣に粘り気が出る原因になったり、焦げ付きの原因になったりするんだ。衣の仕上がりが悪くなるから、しっかり取り除いておくようにしよう！</p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>
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
            <h4>薄力粉は「混ぜ過ぎない」のがポイント！</h4>
            <p class="mb2">卵と薄力粉を混ぜるとき、大体ダマができるよな。このダマが気になって、ついしっかり混ぜてしまう…という人もいるだろう。でも実は、薄力粉の混ぜ過ぎは、天ぷらがベタっと仕上がる原因のひとつなんだ！<br>サクサクの衣にするには、少しダマや粉っぽさが残るくらいで留める必要があるぜ。その理由は、薄力粉に含まれる「グルテン」の性質にあるぞ。</p>
            <p class="mb2">タンパク質の一種のグルテンは、水と混ざったときに粘り気を出してしまう。天ぷらがサクサクに仕上がらずベタッとするのは、このグルテンの粘り気が原因だ。できるだけ粘り気を出さないようにするには、水と混ぜ過ぎないようにする必要があるってわけ！</p>
            <p>グルテンは、温度が高いときに働きが活発になる傾向があるから、衣の材料は事前に冷蔵庫で冷やしておけよ！</p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>
          <section>
          <?php // plus1
            $plus1_ttl ='よりサクっとさせるコツは？';
            $plus1_cnt ='
            <div class="u-clearfix mb2">
              <figure class="u-float__right w50 mb_sp">
                <img data-src="'.$img_url.'/magazine/comic02/technic/'.$currentNumber.'/tech'.$currentNumber.'-04.jpg" data-retina="'.$img_url.'/magazine/comic02/technic/'.$currentNumber.'/tech'.$currentNumber.'-04@2x.jpg"
                alt="フラッキーのHow To「'.$pageTtl.'」'. strip_tags($altCap04).'" style="max-width:300px" class="u-img__max">
              </figure>
              <div>
                <p>'.$altCap04.'</p>
              </div>
            </div>
            <h5 class="recipe__ttl_s">卵の代わりにマヨネーズを使う</h5>
            <p class="mb2">天ぷら衣に水分が残っていると、ベタッとした油っぽい仕上がりになりやすいです。それを防ぐために、卵の代わりにマヨネーズを使用しましょう。マヨネーズに含まれる油分が加熱されることで、衣の温度が上昇。水分の蒸発が促進されるので、サクっと仕上がります。<br>
            さらに、マヨネーズに含まれる油分と食酢は、粘り気の原因になるグルテンの形成を抑えるといわれています。
            </p>
            <h5 class="recipe__ttl_s">水の代わりに炭酸水を使う</h5>
            <p class="mb2">炭酸水を使うと、衣の中に炭酸ガスが発生！その状態で揚げると炭酸ガスが加熱され、衣の内側からも火を入れることができます。すると、衣の水分がしっかり抜けるので、サクサクした仕上がりになるのです。
            </p>
            <h5 class="recipe__ttl_s">薄力粉に片栗粉を混ぜる</h5>
            <p class="mb3"><a href="'.$base_url.'/magazine/article/recipe-technic85.php" class="recipe-design__link">片栗粉</a>には、粘り気の原因になるグルテンが含まれていません。そのため、小麦粉と混ぜると衣から出る粘り気を抑えることができます。薄力粉と片栗粉を混ぜるときの比率は、1：1が目安です。
            </p>
            <p>どれも手軽にできる方法なので、ぜひお試しくださいね。</p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>
          <h3 class="recipe__ttl_l mb0">基本の天ぷらの揚げ方</h3>
          <p class="mb2">基本の天ぷら衣が作れたら、いよいよ油で揚げる工程です。正しい手順と温度で揚げて、美味しい天ぷらを完成させましょう！</p>
          <h4 class="recipe__ttl_tech">手順</h4>
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
            <h4>天ぷらの油、170度の目安は？</h4>
            <p class="mb2">油の温度を確かめたいときは、油に衣を少量落としてみよう！衣が途中まで沈んで、ゆっくり浮き上がってくる状態が、170度の目安だぜ。<br>
            衣が鍋底まで沈み、ゆっくり浮き上がってくるようなら、温度がまだ低い（150度程度）。衣が少しだけ沈み、すぐに表面のあたりでパッと散ってしまうようなら、温度が高すぎるサインだ（200度程度）。知っておくと便利だぞ！
            </p>
            <p>※詳しくは、「<a href="'.$base_url.'/magazine/article/recipe-technic09.php" class="recipe-design__link">揚げ物の温度の目安、調整方法とは？</a>」をご覧ください。</p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>
          <dl class="recipe-design__step mb0">
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
          <dl class="recipe-design__step mb3">
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
          <section>
          <?php // check
            $check_cnt ='
            <h4>食材に火が通ったかどうかは「音と泡」でわかる！？</h4>
            <p class="mb2">外から見たらちょうどいい揚げ色でも、引き上げたらまだ火が通っていなかった…なんて経験が、誰でも1度はあるんじゃないか？天ぷらの揚げ上がりを判断するポイントは、ずばり「音」と「泡」！</p>
            <p>最初に具材を油に入れたときは、「ジュワ～」と大きな音を立てて、勢いよく泡が出る。次第に音が小さくなって、「チリチリ」「ピチピチ」という高い音に変わり、泡はどんどん小さくなっていくぞ。これが、揚げ上がりの合図なんだ！<br>ただし、音と泡で判断するのは熟練の技でもある。見極めが難しい場合は、天ぷらに竹串を刺して確認すると確実だぜ！</p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>
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

        </div>
      </div>
      <?php
        for($i = 0, $size = count($sp02); $i < $size; ++$i) {
          $recipeIcon = $sp02[$i][0].'_'.$sp02[$i][1];
          $speech = $sp02[$i][2];
          include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
        }
      ?>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15049'),
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
